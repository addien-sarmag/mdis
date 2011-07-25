<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class jabatan extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'jabatan_model' );
        isController('pegawai','jabatan');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/jabatan/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','jabatan','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->jabatan_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete jabatan' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete jabatan' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'jabatan', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->jabatan_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/jabatan/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->jabatan_model->getList($limit,$array['page']);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/jabatanView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_jabatan'] = $name; 
            if ( isset($tipeJabatan)) $data ['tipe_jabatan'] = $tipeJabatan; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipeJabatan) || empty ( $name ))  
                $errors [] = 'Input Tipe Jabatan';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->jabatan_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah jabatan  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah jabatan  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'jabatan', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
        
        $radio = "";
        foreach( $this->config->item("tipe_jabatan") as $key => $val ){
        	$select = get_data($_POST,"tipe_jabatan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='tipeJabatan' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadiotipeJabatan'] = $radio;
        
        $this->_view ( 'pegawai/jabatanAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_jabatan'] = $name; 
            if ( isset($tipeJabatan)) $data ['tipe_jabatan'] = $tipeJabatan; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if ( ! isset($tipeJabatan) || empty ( $name ))  
                $errors [] = 'Input Tipe Jabatan'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->jabatan_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit jabatan  ' ;
                unset($_POST);
                $jabatan = $this->jabatan_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $jabatan;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit jabatan  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'jabatan', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $jabatan = $this->jabatan_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $jabatan; 

        $radio = "";
        foreach( $this->config->item("tipe_jabatan") as $key => $val ){
        	$select = get_data($jabatan,"tipe_jabatan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='tipeJabatan' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadiotipeJabatan'] = $radio;
        
        if (! $jabatan)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/jabatanEdit' );
    }
}