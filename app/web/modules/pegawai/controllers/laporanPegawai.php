<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class laporanPegawai extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'laporanpegawai_model' );
        isController('pegawai','laporanPegawai');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/laporanPegawai/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','laporanPegawai','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->laporanpegawai_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete laporanPegawai' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete laporanPegawai' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'laporanPegawai', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->laporanpegawai_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/laporanPegawai/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->laporanpegawai_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/laporanPegawaiView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_laporanPegawai'] = $name; 
            if ( isset($tipelaporanPegawai)) $data ['tipe_laporanPegawai'] = $tipelaporanPegawai; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipelaporanPegawai) || empty ( $name ))  
                $errors [] = 'Input Tipe laporanPegawai';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->laporanpegawai_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah laporanPegawai  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah laporanPegawai  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'laporanPegawai', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        
        $this->_view ( 'pegawai/laporanPegawaiAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_laporanPegawai'] = $name; 
            if ( isset($tipelaporanPegawai)) $data ['tipe_laporanPegawai'] = $tipelaporanPegawai; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipelaporanPegawai) || empty ( $name ))  
                $errors [] = 'Input Tipe laporanPegawai'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->laporanpegawai_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit laporanPegawai  ' ;
                unset($_POST);
                $laporanPegawai = $this->laporanpegawai_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $laporanPegawai;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit laporanPegawai  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'laporanPegawai', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $laporanPegawai = $this->laporanpegawai_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $laporanPegawai; 
 
    	  
        
        if (! $laporanPegawai)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/laporanPegawaiEdit' );
    }
}