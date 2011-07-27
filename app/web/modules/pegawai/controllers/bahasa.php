<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class bahasa extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'bahasa_model' );
        isController('pegawai','bahasa');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/bahasa/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','bahasa','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->bahasa_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete bahasa' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete bahasa' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'bahasa', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip') );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];
		
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        $where = array();
        $where = array( 'nip' => $array['nip'] );
        
        $this->load->library('pagination');
        $total = $this->bahasa_model->getCount( $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/bahasa/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->bahasa_model->getList($limit,$array['page'],$where);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/bahasaView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
 			 
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['tipe_bahasa'] = $tipe; 
            $data ['nama_bahasa'] = $nama; 
            $data ['status_bahasa'] = $status; 
             
            	$errors = array ();
	        	if (empty ( $nip ))  
	                $errors [] = 'Input Nip'; 
                if (! isset ( $tipe ))  
                	$errors [] = 'Input Tipe Bahasa'; 
                if (empty ( $nama ))  
                	$errors [] = 'Input Nama'; 
                if (! isset ( $status ))  
                	$errors [] = 'Input Status'; 
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->bahasa_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah bahasa  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah bahasa  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'bahasa', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
         
        $radio = "";
        foreach( $this->config->item("active_2") as $key => $val ){
        	$select = get_data($_POST,"status") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='status' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadiotTipe'] = $radio;
    	
    	$radio = "";
        foreach( $this->config->item("tipe_bahasa") as $key => $val ){
        	$select = get_data($_POST,"tipe") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='tipe' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadioStatus'] = $radio;
    	 
    	$this->_data['uri_to_assoc'] = $array; 
        
        $this->_view ( 'pegawai/bahasaAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['tipe_bahasa'] = $tipe; 
            $data ['nama_bahasa'] = $nama; 
            $data ['status_bahasa'] = $status; 
             
            	$errors = array ();
	        	if (empty ( $nip ))  
	                $errors [] = 'Input Nip'; 
                if (! isset ( $tipe ))  
                	$errors [] = 'Input Tipe Bahasa'; 
                if (empty ( $nama ))  
                	$errors [] = 'Input Nama'; 
                if (! isset ( $status ))  
                	$errors [] = 'Input Status'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->bahasa_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit bahasa  ' ;
                unset($_POST);
                $bahasa = $this->bahasa_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $bahasa;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit bahasa  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'bahasa', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $bahasa = $this->bahasa_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $bahasa; 

        $radio = "";
        foreach( $this->config->item("active_2") as $key => $val ){
        	$select = get_data($bahasa,"status_bahasa") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='status' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadiotTipe'] = $radio;
    	
    	$radio = "";
        foreach( $this->config->item("tipe_bahasa") as $key => $val ){
        	$select = get_data($bahasa,"tipe_bahasa") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='tipe' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadioStatus'] = $radio;
    	
        
        if (! $bahasa)
            show_404 ();
            
        $this->_data['uri_to_assoc'] = $array; 
        $this->_executeEdit();
        $this->_view ( 'pegawai/bahasaEdit' );
    }
}