<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class pegawai extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'pegawai_model' );
        isController('pegawai','pegawai');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/pegawai/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','pegawai','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->pegawai_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete pegawai' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete pegawai' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'pegawai', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->pegawai_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/pegawai/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->pegawai_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/pegawaiView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_pegawai'] = $name; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pegawai_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah pegawai  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah pegawai  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'pegawai', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) ); 
        $this->_executeAdd ();
        
    	$radio = "";
        foreach( $this->config->item("gender") as $key => $val ){
        	$select = get_data($_POST,"gender") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='gender' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	
    	$this->_data['htmlRadioSex'] = $radio;
    	
    	$htmlAgama = "<select name='tipe'>";
        foreach ( $this->config->item("spirit") as $key => $val ) $htmlAgama.= "<option value='$key'>".$val."</option>";
        $htmlAgama .= "</select>";
        
        $htmlPendidikan = "<select name='tipe'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) $htmlPendidikan.= "<option value='$key'>".$val."</option>";
        $htmlPendidikan .= "</select>";
        
        $this->_data['htmlPendidikan'] =  $htmlPendidikan ;
        $this->_data['htmlAgama'] =  $htmlAgama ;
        
        
        
        $this->_view ( 'pegawai/pegawaiAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_pegawai'] = $name; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';  
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pegawai_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit pegawai  ' ;
                unset($_POST);
                $pegawai = $this->pegawai_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $pegawai;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit pegawai  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'pegawai', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $pegawai = $this->pegawai_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $pegawai;    
        if (! $pegawai)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/pegawaiEdit' );
    }
}