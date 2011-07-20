<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class ring extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'ring_model' );
        isController('pegawai','ring');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/ring/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','ring','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->ring_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete ring' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete ring' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'ring', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->ring_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/ring/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->ring_model->getList($limit,$array['page']);
        
        $this->_data['tipeRing'] = $this->config->item("tipeRing");
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/ringView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nama_ring'] = $name; 
            $data ['tipe_ring'] = $tipe; 
            $data ['fee_ring'] = $fee; 
             
            if ( isset($fee))  $fee = (int) $fee;
              
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';
            if (empty ( $tipe ))  
                $errors [] = 'Input Tipe';
            if ( empty ( $fee ))  {
                $errors [] = 'Input Fee';
            }
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->ring_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah ring  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah ring  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'ring', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
        
        $htmlTipe = "<select name='tipe'>";
        foreach ( $this->config->item("tipeRing") as $key => $val ) $htmlTipe.= "<option value='$key'>".$val."</option>";
        $htmlTipe .= "</select>";
        
        $this->_data['htmlTipe'] =  $htmlTipe ;
        
        $this->_view ( 'pegawai/ringAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nama_ring'] = $name; 
            
            $errors = array ();
        	if (empty ( $name ))  
                $errors [] = 'Input Name';  
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->ring_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit ring  ' ;
                unset($_POST);
                $ring = $this->ring_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $ring;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit ring  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'ring', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $ring = $this->ring_model->get ( $array ['id'] );
        
        $htmlTipe = "<select name='tipe'>";
        foreach ( $this->config->item("tipeRing") as $key => $val ) {
			$check =  $ring['tipe_ring'] ==  $key ? "selected" : ""  ;
        	$htmlTipe.= "<option value='$key' $check>".$val."</option>";
        }
        $htmlTipe .= "</select>";
        
        $this->_data['htmlTipe'] =  $htmlTipe ;
        
        $this->_data['dataEdit'] = $ring;    
        if (! $ring)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/ringEdit' );
    }
}