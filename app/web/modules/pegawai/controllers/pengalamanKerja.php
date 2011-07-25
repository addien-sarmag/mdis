<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class pengalamanKerja extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'pengalamankerja_model' );
        isController('pegawai','pengalamanKerja');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/pengalamanKerja/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','pengalamanKerja','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->pengalamankerja_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete pengalamanKerja' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete pengalamanKerja' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'pengalamanKerja', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->pengalamankerja_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/pengalamanKerja/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->pengalamankerja_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/pengalamanKerjaView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_pengalamanKerja'] = $name; 
            if ( isset($tipepengalamanKerja)) $data ['tipe_pengalamanKerja'] = $tipepengalamanKerja; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipepengalamanKerja) || empty ( $name ))  
                $errors [] = 'Input Tipe pengalamanKerja';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pengalamankerja_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah pengalamanKerja  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah pengalamanKerja  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'pengalamanKerja', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        
        $this->_view ( 'pegawai/pengalamanKerjaAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_pengalamanKerja'] = $name; 
            if ( isset($tipepengalamanKerja)) $data ['tipe_pengalamanKerja'] = $tipepengalamanKerja; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipepengalamanKerja) || empty ( $name ))  
                $errors [] = 'Input Tipe pengalamanKerja'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pengalamankerja_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit pengalamanKerja  ' ;
                unset($_POST);
                $pengalamanKerja = $this->pengalamankerja_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $pengalamanKerja;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit pengalamanKerja  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'pengalamanKerja', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $pengalamanKerja = $this->pengalamankerja_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $pengalamanKerja; 
 
    	  
        
        if (! $pengalamanKerja)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/pengalamanKerjaEdit' );
    }
}