<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class kontrakPegawai extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'kontrakpegawai_model' );
        isController('pegawai','kontrakPegawai');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/kontrakPegawai/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','kontrakPegawai','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->kontrakpegawai_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete kontrakPegawai' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete kontrakPegawai' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'kontrakPegawai', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->kontrakpegawai_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/kontrakPegawai/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->kontrakpegawai_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/kontrakPegawaiView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_kontrakPegawai'] = $name; 
            if ( isset($tipekontrakPegawai)) $data ['tipe_kontrakPegawai'] = $tipekontrakPegawai; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipekontrakPegawai) || empty ( $name ))  
                $errors [] = 'Input Tipe kontrakPegawai';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->kontrakpegawai_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah kontrakPegawai  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah kontrakPegawai  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'kontrakPegawai', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        
        $this->_view ( 'pegawai/kontrakPegawaiAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_kontrakPegawai'] = $name; 
            if ( isset($tipekontrakPegawai)) $data ['tipe_kontrakPegawai'] = $tipekontrakPegawai; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipekontrakPegawai) || empty ( $name ))  
                $errors [] = 'Input Tipe kontrakPegawai'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->kontrakpegawai_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit kontrakPegawai  ' ;
                unset($_POST);
                $kontrakPegawai = $this->kontrakpegawai_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $kontrakPegawai;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit kontrakPegawai  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'kontrakPegawai', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $kontrakPegawai = $this->kontrakpegawai_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $kontrakPegawai; 
 
    	  
        
        if (! $kontrakPegawai)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/kontrakPegawaiEdit' );
    }
}