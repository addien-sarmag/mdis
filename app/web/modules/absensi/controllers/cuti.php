<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class cuti extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'cuti_model' );
        isController('absensi','cuti');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'absensi/cuti/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('absensi','cuti','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->cuti_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete cuti' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete cuti' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'absensi', 'cuti', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->cuti_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('absensi_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('absensi/cuti/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->cuti_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'absensi/cutiView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_cuti'] = $name; 
            if ( isset($tipecuti)) $data ['tipe_cuti'] = $tipecuti; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipecuti) || empty ( $name ))  
                $errors [] = 'Input Tipe cuti';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->cuti_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah cuti  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah cuti  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'absensi', 'cuti', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        
        $this->_view ( 'absensi/cutiAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_cuti'] = $name; 
            if ( isset($tipecuti)) $data ['tipe_cuti'] = $tipecuti; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipecuti) || empty ( $name ))  
                $errors [] = 'Input Tipe cuti'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->cuti_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit cuti  ' ;
                unset($_POST);
                $cuti = $this->cuti_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $cuti;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit cuti  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'absensi', 'cuti', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $cuti = $this->cuti_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $cuti; 
 
    	  
        
        if (! $cuti)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'absensi/cutiEdit' );
    }
}