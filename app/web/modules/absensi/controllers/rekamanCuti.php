<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class RekamanCuti extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'rekamancuti_model' );
        isController('absensi','rekamanCuti');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'absensi/rekamanCuti/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('absensi','rekamanCuti','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->rekamancuti_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil delete rekaman cuti' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal delete rekaman cuti' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'absensi', 'rekamanCuti', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->rekamancuti_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('master_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('absensi/rekamanCuti/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->rekamancuti_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;
			 
        $this->_view ( 'absensi/rekamanCutiView' );
    }
    
 protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        
        
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $nip = trim ( $this->input->post ( 'nip' ) );
            $jml_cuti = trim ( $this->input->post ( 'jml_cuti' ) );
			$tanggal_cuti = trim ( $this->input->post ( 'tanggal_cuti' ) );
	    
        
			$data = array ();
            $data ['nip'] = $nip;
            $data ['jml_cuti'] = $jml_cuti;
			$data ['tanggal_cuti'] = $tanggal_cuti;
	    
            
	    $errors = array ();
            if (empty ( $nip )) {
                $errors [] = 'Input NIP';
            } /*else  {
            	$this->load->model ('cek_model');
            	$cekKode = $this->cek_model->cekNip ('absensi' , $nip);
            	if($cekKode > 0)
            		$errors [] = 'NIP Sudah Terdaftar. Silahkan Diganti';
            }*/
            
            if (empty ( $tanggal_cuti ))
                $errors [] = 'Input Tanggal Cuti';
		
            if ($errors) {
            	// '<b>Error</b>: <br />'.implode('<br />', $errors);
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->rekamancuti_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Data Cuti' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Data Cuti' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'absensi', 'rekamanCuti', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
        $this->_view ( 'absensi/rekamanCutiAdd' );
    }
    
    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
	    $nip = trim ( $this->input->post ( 'nip' ) );
            $jml_cuti = trim ( $this->input->post ( 'jml_cuti' ) );
	    $tanggal_cuti = trim ( $this->input->post ( 'tanggal_cuti' ) );
	    
        
	    $data = array ();
            $data ['nip'] = $nip;
            $data ['jml_cuti'] = $jml_cuti;
	    $data ['tanggal_cuti'] = $tanggal_cuti;
	   
            $errors = array ();
            if (empty ( $nip ))  
                $errors [] = 'Input NIP';
		
            if (empty ( $jml_cuti ))  
                $errors [] = 'Input Jumlah Cuti';
		
	    if (empty ( $tanggal_cuti ))  
                $errors [] = 'Input Tanggal Cuti';
	    
	    if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->rekamancuti_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Rekaman Cuti' ;
                unset($_POST);
                $rekamanCuti = $this->rekamancuti_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $rekamanCuti;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Rekaman Cuti' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'absensi', 'rekamanCuti', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $rekamanCuti = $this->rekamancuti_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $rekamanCuti; 
        
        if (! $rekamanCuti)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'absensi/rekamanCutiEdit' );
    }
    
}