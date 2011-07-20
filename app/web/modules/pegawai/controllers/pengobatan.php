<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class pengobatan extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'pengobatan_model' );
        isController('pegawai','pengobatan');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/pengobatan/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','pengobatan','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->pengobatan_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete pengobatan' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete pengobatan' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'pengobatan', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->pengobatan_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/pengobatan/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->pengobatan_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/pengobatanView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_pengobatan'] = $name; 
            if ( isset($tipepengobatan)) $data ['tipe_pengobatan'] = $tipepengobatan; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipepengobatan) || empty ( $name ))  
                $errors [] = 'Input Tipe pengobatan';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pengobatan_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah pengobatan  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah pengobatan  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'pengobatan', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        
        $this->_view ( 'pegawai/pengobatanAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_pengobatan'] = $name; 
            if ( isset($tipepengobatan)) $data ['tipe_pengobatan'] = $tipepengobatan; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipepengobatan) || empty ( $name ))  
                $errors [] = 'Input Tipe pengobatan'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pengobatan_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit pengobatan  ' ;
                unset($_POST);
                $pengobatan = $this->pengobatan_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $pengobatan;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit pengobatan  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'pengobatan', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $pengobatan = $this->pengobatan_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $pengobatan; 
 
    	  
        
        if (! $pengobatan)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/pengobatanEdit' );
    }
}