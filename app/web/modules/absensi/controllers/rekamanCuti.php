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
            if ($this->rekamanCuti_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil delete data absensi' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal delete data absensi' ;
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
        $total = $this->agama_model->getCount();
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
        
        $dataView = $this->rekamanCuti_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;
			 
        $this->_view ( 'absensi/rekamanCutiView' );
    }
    
 protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        
        
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $nip = trim ( $this->input->post ( 'nip' ) );
            $tgl_cuti = trim ( $this->input->post ( 'tgl_cuti' ) );
			$jml_cuti = trim ( $this->input->post ( 'jml_cuti' ) );
			$keterangan = trim ( $this->input->post ( 'ketreangan' ) );
            $data = array ();
            $data ['nip'] = $nip;
            $data ['tgl_cuti'] = $tgl_cuti;
			$data ['jml_cuti'] = $jml_cuti;
			$data ['keterangan'] = $keterangan;
            $errors = array ();
        	if (empty ( $nip )) {
                $errors [] = 'Input NIP';
        	} else  {
            	$this->load->model ('cek_model');
            	$cekKode = $this->cek_model->cekNip ('absensi' , $nip);
            	if($cekKode > 0)
            		$errors [] = 'NIP Sudah Terdaftar. Silahkan Diganti';
            }
            
            if (empty ( $tgl_cuti ))
                $errors [] = 'Input Tanggal Cuti';
            if ($errors) {
            	// '<b>Error</b>: <br />'.implode('<br />', $errors);
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->rekamanCuti_model->add ( $data )) {
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
    
}