<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class keluarga extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'keluarga_model' );
        isController('pegawai','keluarga');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/keluarga/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','keluarga','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->keluarga_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete Keluarga' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete Keluarga' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'keluarga', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip' ) );
        $this->_executeView ();
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] );

        $this->load->library('pagination');
        $total = $this->keluarga_model->getCount(  $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/keluarga/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->keluarga_model->getList($limit,$array['page'], $where );
        
        
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/keluargaView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
          
 
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	 
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['nama_keluarga'] = $nama; 
            $data ['gender_keluarga'] = $gender; 
            $data ['tempatLahir_keluarga'] = $placeBorn;  
            $data ['tanggalLahir_keluarga'] = $dateBorn; 
            $data ['pendidikan_keluarga'] = $pendidikan; 
            $data ['pekerjaan_keluarga'] = $pekerjaan;   
            $data ['keterangan_keluarga'] = $desc; 
            $data ['tipe_keluarga'] = $tipeKeluarga;  
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
              	if (empty ( $nama ))  
                $errors [] = 'Input Nama';
                if ( ! isset ( $gender ))  
                $errors [] = 'Input Jenis Kelamin';
                if ( empty( $placeBorn ))  
                $errors [] = 'Input Tempat Lahir';
                if ( empty( $dateBorn ))  
                $errors [] = 'Input Tanggal Lahir';
                if ( empty ( $pendidikan ))  
                $errors [] = 'Input Pendidikan';
                if ( empty ( $pekerjaan ))  
                $errors [] = 'Input Pekerjaan';
//                if ( empty ( $desc ))  
//                $errors [] = 'Input Keterangan';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->keluarga_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Keluarga ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Keluarga ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'keluarga', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action','nip' ) );
        $this->_executeAdd ();

        $radio = "";
        foreach( $this->config->item("gender") as $key => $val ){
        	$select = get_data($_POST,"gender") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='gender' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadioSex'] = $radio;
    	
    	$htmlPendidikan = "<select name='pendidikan'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) $htmlPendidikan.= "<option value='$val'>".$val."</option>";
        $htmlPendidikan .= "</select>"; 
        $this->_data['htmlPendidikan'] =  $htmlPendidikan ;
        
        $htmlPendidikan = "<select name='tipeKeluarga'>";
        foreach ( $this->config->item("tipe_keluarga") as $key => $val ) $htmlPendidikan.= "<option value='$val'>".$val."</option>";
        $htmlPendidikan .= "</select>"; 
        $this->_data['htmlTipeKeluarga'] =  $htmlPendidikan ;
    	
    	  
        $this->_data['uri_to_assoc'] = $array;
        
        $this->_view ( 'pegawai/keluargaAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
             $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['nama_keluarga'] = $nama; 
            $data ['gender_keluarga'] = $gender; 
            $data ['tempatLahir_keluarga'] = $placeBorn;  
            $data ['tanggalLahir_keluarga'] = $dateBorn; 
            $data ['pendidikan_keluarga'] = $pendidikan; 
            $data ['pekerjaan_keluarga'] = $pekerjaan;   
            $data ['keterangan_keluarga'] = $desc; 
            $data ['tipe_keluarga'] = $tipeKeluarga;  
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
              	if (empty ( $nama ))  
                $errors [] = 'Input Nama';
                if ( ! isset ( $gender ))  
                $errors [] = 'Input Jenis Kelamin';
                if ( empty( $placeBorn ))  
                $errors [] = 'Input Tempat Lahir';
                if ( empty( $dateBorn ))  
                $errors [] = 'Input Tanggal Lahir';
                if ( empty ( $pendidikan ))  
                $errors [] = 'Input Pendidikan';
                if ( empty ( $pekerjaan ))  
                $errors [] = 'Input Pekerjaan';
//                if ( empty ( $desc ))  
//                $errors [] = 'Input Keterangan';
                
                
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->keluarga_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Keluarga ' ;
                unset($_POST);
                $keluarga = $this->keluarga_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $keluarga;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Keluarga ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'keluarga', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ( 'id','nip') );
        if (! $array ['id'])
            show_404 ();
              
        $keluarga = $this->keluarga_model->get ( $array['id'] );
        $this->_data['dataEdit'] = $keluarga; 
  		
        $radio = "";
        foreach( $this->config->item("gender") as $key => $val ){
        	$select = get_data($keluarga,"gender_keluarga") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='gender' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadioSex'] = $radio;
    	
    	$htmlPendidikan = "<select name='pendidikan'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) $htmlPendidikan.= "<option value='$val'>".$val."</option>";
        $htmlPendidikan .= "</select>"; 
        $this->_data['htmlPendidikan'] =  $htmlPendidikan ;
        
        $htmlPendidikan = "<select name='tipeKeluarga'>";
        foreach ( $this->config->item("tipe_keluarga") as $key => $val ) {
        	$select = get_data($keluarga,"tipe_keluarga") == $key ? "selected" : "" ;
        	$htmlPendidikan.= "<option value='$key' $select>".$val."</option>";
        }
        $htmlPendidikan .= "</select>"; 
        $this->_data['htmlTipeKeluarga'] =  $htmlPendidikan ;
    	 
        $this->_data['uri_to_assoc'] = $array;
        if (! $keluarga)
            show_404 ();
            
        $this->_executeEdit();
        $this->_view ( 'pegawai/keluargaEdit' );
    }
}