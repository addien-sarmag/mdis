<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class jenisCuti extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'jeniscuti_model' );
        isController('absensi','jenisCuti');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'absensi/jenisCuti/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('absensi','jenisCuti','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->jeniscuti_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete jenisCuti' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete jenisCuti' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'absensi', 'jenisCuti', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->jeniscuti_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('absensi_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('absensi/jenisCuti/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->jeniscuti_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'absensi/jenisCutiView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
	    $namajnscuti = trim($this->input->post('nama'));
	    $jangka_waktu = trim($this->input->post('jangkawaktu'));
	    	
            $data = array ();
            $data ['nama_cuti'] = $namajnscuti;
	    $data ['jangka_waktu'] = $jangka_waktu;
	    
            $errors = array ();
            if (empty ( $namajnscuti ))  
                $errors [] = 'Input Nama Jenis Cuti';
		
            if (empty ( $jangka_waktu ))  
                $errors [] = 'Input Jangka Waktu';
           
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->jeniscuti_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Jenis Cuti  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Jenis Cuti' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'absensi', 'jenisCuti', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        
        $this->_view ( 'absensi/jenisCutiAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
	    $namajnscuti = trim($this->input->post('nama'));
	    $jangka_waktu = trim($this->input->post('jangkawaktu'));
	    	
            $data = array ();
            $data ['nama_cuti'] = $namajnscuti;
	    $data ['jangka_waktu'] = $jangka_waktu;
	    
            $errors = array ();
            if (empty ( $namajnscuti ))  
                $errors [] = 'Input Nama Jenis Cuti';
		
            if (empty ( $jangka_waktu ))  
                $errors [] = 'Input Jangka Waktu';
	    
	    if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->jeniscuti_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Jenis Cuti' ;
                unset($_POST);
                $jenisCuti = $this->jeniscuti_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $jenisCuti;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Jenis Cuti' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'absensi', 'jenisCuti', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $jenisCuti = $this->jeniscuti_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $jenisCuti; 
 
    	  
        
        if (! $jenisCuti)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'absensi/jenisCutiEdit' );
    }
}