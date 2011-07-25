<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class mitraKerja extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'mitraKerja_model' );
        isController('pegawai','mitraKerja');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/mitraKerja/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','mitraKerja','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->mitraKerja_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete mitra Kerja' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete mitra Kerja' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'mitraKerja', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->mitraKerja_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/mitraKerja/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->mitraKerja_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/mitraKerjaView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_mitra'] = $name;
            $data ['alamat_mitra'] = $address;
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
        	 
            
            if (empty ( $address ))
                $errors [] = 'Input Address';
  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->mitraKerja_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah mitra Kerja' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah mitra Kerja' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'mitraKerja', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
        $this->_view ( 'pegawai/mitraKerjaAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_mitra'] = $name;
            $data ['alamat_mitra'] = $address;
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name'; 
            if (empty ( $address ))
                $errors [] = 'Input Address';
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->mitraKerja_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit mitra Kerja' ;
                unset($_POST);
                $mitraKerja = $this->mitraKerja_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $mitraKerja;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit mitra Kerja' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'mitraKerja', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $mitraKerja = $this->mitraKerja_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $mitraKerja;    
        if (! $mitraKerja)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/mitraKerjaEdit' );
    }
}