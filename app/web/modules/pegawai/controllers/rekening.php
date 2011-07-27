<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class rekening extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'rekening_model' );
        isController('pegawai','rekening');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/rekening/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','rekening','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->rekening_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete rekening' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete rekening' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'rekening', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip' ) );
        $this->_executeView ();
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] );

        $this->load->library('pagination');
        $total = $this->rekening_model->getCount(  $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/rekening/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->rekening_model->getList($limit,$array['page'], $where );
         
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/rekeningView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
         	 
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	  
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['no_rekening'] = $noRekening;
            $data ['namaBank_rekening'] = $nama; 
            $data ['cabangBank_rekening'] = $cabang; 
            if ( isset($active) ) $data ['active_rekening'] = $active;    
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip'; 
                if (empty ( $noRekening ))  
                $errors [] = 'Input Nomor Rekening';
                if (empty ( $nama ))  
                $errors [] = 'Input Nama Bank';
                if (empty ( $cabang ))  
                $errors [] = 'Input Cabang Bank';
                if (! isset ( $active )) {
                $errors [] = 'Input Aktif';
                }elseif( $active == 'aktif' ){
                	$this->rekening_model->updateActive( $nip );
                }
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->rekening_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah rekening  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah rekening  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'rekening', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action','nip' ) );
        $this->_executeAdd ();
           
        $radio = "";
        foreach( $this->config->item("active_2") as $key => $val ){
        	$select = get_data($_POST,"active") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='active' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadiotTipe'] = $radio;  
        
        $this->_data['uri_to_assoc'] = $array;
        
        $this->_view ( 'pegawai/rekeningAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
        $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['no_rekening'] = $noRekening;
            $data ['namaBank_rekening'] = $nama; 
            $data ['cabangBank_rekening'] = $cabang; 
            if ( isset($active) ) $data ['active_rekening'] = $active;    
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip'; 
                if (empty ( $noRekening ))  
                $errors [] = 'Input Nomor Rekening';
                if (empty ( $nama ))  
                $errors [] = 'Input Nama Bank';
                if (empty ( $cabang ))  
                $errors [] = 'Input Cabang Bank';
                if (! isset ( $active )) {
                $errors [] = 'Input Aktif';
                }elseif( $active == 'aktif' ){
                	$this->rekening_model->updateActive( $nip );
                }
             
                 
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->rekening_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit rekening  ' ;
                unset($_POST);
                $rekening = $this->rekening_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $rekening;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit rekening  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'rekening', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ( 'id','nip') );
        if (! $array ['id'])
            show_404 ();
              
        $rekening = $this->rekening_model->get ( $array['id'] );
        $this->_data['dataEdit'] = $rekening; 
  		
        $radio = "";
        foreach( $this->config->item("active_2") as $key => $val ){
        	$select = get_data($rekening,"active_rekening") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='active' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadiotTipe'] = $radio; 
        
        $this->_data['uri_to_assoc'] = $array;
        if (! $rekening)
            show_404 ();
            
        $this->_executeEdit();
        $this->_view ( 'pegawai/rekeningEdit' );
    }
}