<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class pelamar extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'pelamar_model' );
        isController('pegawai','pelamar');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/pelamar/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','pelamar','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->pelamar_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete pelamar' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete pelamar' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'pelamar', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->pelamar_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/pelamar/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->pelamar_model->getList($limit,$array['page']);
        
        $this->_data['gender'] = $this->config->item("gender");
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/pelamarView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	 
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array (); 
            $data ['id_jabatan'] = $jabatan; 
            $data ['nama_pelamar'] = $name; 
            $data ['tempatLahir_pelamar'] = $placeBorn; 
            $data ['tanggalLahir_pelamar'] = $dateBorn; 
            if ( isset($agama) ) $data ['agama_pelamar'] = $agama; 
            if ( isset($gender) ) $data ['gender_pelamar'] = $gender; 
            $data ['tanggal_pelamar'] = $tglReg; 
            $data ['skill_pelamar'] = $skill; 
            $data ['pendidikan_pelamar'] = $pendidikan; 
            $data ['alamat_pelamar'] = $alamat; 
            $data ['noTelepon_pelamar'] = $telepon; 
            $data ['noHP_pelamar'] = $handphone; 
            $data ['gajiTerakhir_pelamar'] = $lastPayment; 
            $data ['gajiTawaran_pelamar'] = $lastTarget; 
            if ( isset($statusPribadi) ) $data ['statusPribadi_pelamar'] = $statusPribadi; 
            $data ['status_pelamar'] = 'pending'; 
            $data ['kelurahan_pelamar'] = $kelurahan; 
            $data ['kecamatan_pelamar'] = $kecamatan; 
            $data ['kota_pelamar'] = $kota; 
             
            
            $errors = array ();
            if (empty ( $jabatan ))  
                $errors [] = 'Input Jabatan';
        	if (empty ( $name ))  
                $errors [] = 'Input Nama';
            if ( ! isset($agama) || empty ( $agama ) )  
                $errors [] = 'Input Agama';
            if (empty ( $placeBorn ))  
                $errors [] = 'Input Tempat Lahir';
            if (empty ( $dateBorn ))  
                $errors [] = 'Input Tanggal Lahir';
            if (empty ( $gender ) || ! isset($gender) )  
                $errors [] = 'Input Jenis Kelamin';
            if (empty ( $tglReg ))  
                $errors [] = 'Input Tanggal Melamar';
            if (empty ( $skill ))  
                $errors [] = 'Input Skill';
            if (empty ( $pendidikan ))  
                $errors [] = 'Input Pendidikan';
            if (empty ( $alamat ))  
                $errors [] = 'Input Alamat';
            if (empty ( $telepon ))  
                $errors [] = 'Input Telepon';
            if (empty ( $handphone ))  
                $errors [] = 'Input Handphone';
            /*if (empty ( $lastPayment ))  
                $errors [] = 'Input Gaji Terakhir';
            if (empty ( $lastTarget ))  
                $errors [] = 'Input Gaji Penawaran';*/
            if (empty ( $statusPribadi ) || ! isset($statusPribadi)  )  
                $errors [] = 'Input Status Pribadi';
            if (empty ( $kelurahan ))  
                $errors [] = 'Input Kelurahan';
            if (empty ( $kecamatan ))  
                $errors [] = 'Input Kecamatan';
            if (empty ( $kota ))  
                $errors [] = 'Input Kota'; 
            
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pelamar_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah pelamar  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah pelamar  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'pelamar', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
        
   		$radio = "";
        foreach( $this->config->item("gender") as $key => $val ){
        	$select = get_data($_POST,"gender") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='gender' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadioSex'] = $radio;
    	
    	$radio = "";
        foreach( $this->config->item("status_pribadi") as $key => $val ){
        	$select = get_data($_POST,"statusPribadi") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusPribadi' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadioStatusPribadi'] = $radio;
    	
    	$radio = "";
        foreach( $this->config->item("status_pelamar") as $key => $val ){
        	$select = get_data($_POST,"statusPelamar") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusPelamar' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadioStatusPelamar'] = $radio;
    	
    	
    	$this->load->model('jabatan_model');
    	
    	$jabatan = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) );  
    	
    	$htmlPosisi = "<select name='jabatan'>";
        foreach ( $jabatan as $res ) $htmlPosisi.= "<option value='".$res['id_jabatan']."'>".$res['nama_jabatan']."</option>";
        $htmlPosisi .= "</select>";
        
        $this->_data['htmlSelectJabatan'] = $htmlPosisi;
        
        
        $htmlPendidikan = "<select name='pendidikan'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) $htmlPendidikan.= "<option value='$val'>".$val."</option>";
        $htmlPendidikan .= "</select>";
        
        $this->_data['htmlPendidikan'] =  $htmlPendidikan ;
        
        $htmlAgama = "<select name='agama'>";
        foreach ( $this->config->item("spirit") as $key => $val ) $htmlAgama.= "<option value='$key'>".$val."</option>";
        $htmlAgama .= "</select>";
        
        $this->_data['htmlAgama'] =  $htmlAgama ;
        
        $this->_view ( 'pegawai/pelamarAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if ( ! isset($$key) && empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array (); 
            $data ['nama_pelamar'] = $name; 
            $data ['noKtp_pelamar'] = $noKtp; 
            $data ['id_jabatan'] = $jabatan;
            $data ['tempatLahir_pelamar'] = $placeBorn; 
            $data ['tanggalLahir_pelamar'] = $dateBorn; 
            if ( isset($agama) ) $data ['agama_pelamar'] = $agama; 
            if ( isset($gender) ) $data ['gender_pelamar'] = $gender; 
            $data ['tanggal_pelamar'] = $tglReg; 
            $data ['skill_pelamar'] = $skill; 
            $data ['pendidikan_pelamar'] = $pendidikan; 
            $data ['alamat_pelamar'] = $alamat; 
            $data ['noTelepon_pelamar'] = $telepon; 
            $data ['noHP_pelamar'] = $handphone; 
            $data ['gajiTerakhir_pelamar'] = $lastPayment; 
            $data ['gajiTawaran_pelamar'] = $lastTarget; 
            if ( isset($statusPribadi) ) $data ['statusPribadi_pelamar'] = $statusPribadi; 
            $data ['status_pelamar'] = 'pending'; 
            $data ['kelurahan_pelamar'] = $kelurahan; 
            $data ['kecamatan_pelamar'] = $kecamatan; 
            $data ['kota_pelamar'] = $kota; 
             
            
            $errors = array ();
            if (empty ( $noKtp ))  
                $errors [] = 'Input Nomor KTP';
            if (empty ( $jabatan ))  
                $errors [] = 'Input Jabatan';
        	if (empty ( $name ))  
                $errors [] = 'Input Nama';
            if ( ! isset($agama) || empty ( $agama ) )  
                $errors [] = 'Input Agama';
            if (empty ( $placeBorn ))  
                $errors [] = 'Input Tempat Lahir';
            if (empty ( $dateBorn ))  
                $errors [] = 'Input Tanggal Lahir';
            if (empty ( $gender ) || ! isset($gender) )  
                $errors [] = 'Input Jenis Kelamin';
            if (empty ( $tglReg ))  
                $errors [] = 'Input Tanggal Melamar';
            if (empty ( $skill ))  
                $errors [] = 'Input Skill';
            if (empty ( $pendidikan ))  
                $errors [] = 'Input Pendidikan';
            if (empty ( $alamat ))  
                $errors [] = 'Input Alamat';
            if (empty ( $telepon ))  
                $errors [] = 'Input Telepon';
            if (empty ( $handphone ))  
                $errors [] = 'Input Handphone';
            /*if (empty ( $lastPayment ))  
                $errors [] = 'Input Gaji Terakhir';
            if (empty ( $lastTarget ))  
                $errors [] = 'Input Gaji Penawaran';*/
            if (empty ( $statusPribadi ) || ! isset($statusPribadi)  )  
                $errors [] = 'Input Status Pribadi';
            if (empty ( $kelurahan ))  
                $errors [] = 'Input Kelurahan';
            if (empty ( $kecamatan ))  
                $errors [] = 'Input Kecamatan';
            if (empty ( $kota ))  
                $errors [] = 'Input Kota'; 
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pelamar_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit pelamar  ' ;
                unset($_POST);
                $pelamar = $this->pelamar_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $pelamar;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit pelamar  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'pelamar', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $dataEdit = $this->pelamar_model->get ( $array ['id'] );
         
        $this->_data['dataEdit'] = $dataEdit;    
        
        $radio = "";
        foreach( $this->config->item("gender") as $key => $val ){
        	$select = get_data($dataEdit,"gender_pelamar") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='gender' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadioSex'] = $radio;
    	
    	$radio = "";
        foreach( $this->config->item("status_pribadi") as $key => $val ){
        	$select = get_data($dataEdit,"statusPribadi_pelamar") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusPribadi' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadioStatusPribadi'] = $radio;
    	
    	$radio = "";
        foreach( $this->config->item("status_pelamar") as $key => $val ){
        	$select = get_data($dataEdit,"status_pelamar") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusPelamar' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	}
    	 
    	$this->_data['htmlRadioStatusPelamar'] = $radio;
    	
    	
    	$this->load->model('jabatan_model');
    	
    	$jabatan = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) ); 
    	 
    	
    	$htmlPosisi = "<select name='jabatan'>";
        foreach ( $jabatan as $res ) {
        	$select = get_data($dataEdit,"id_jabatan") == $res['id_jabatan'] ? "selected" : "" ;
        	$htmlPosisi.= "<option value='".$res['id_jabatan']."' $select>".$res['nama_jabatan']."</option>";
        }
        $htmlPosisi .= "</select>";
        
        $this->_data['htmlSelectJabatan'] = $htmlPosisi;
        
        
        $htmlPendidikan = "<select name='pendidikan'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) {
        	$select = get_data($dataEdit,"pendidikan_pelamar") == $val ? "selected" : "" ;
        	$htmlPendidikan.= "<option value='$val' $select> ".$val."</option>";
        }
        $htmlPendidikan .= "</select>";
        
        $this->_data['htmlPendidikan'] =  $htmlPendidikan ;
        
        $htmlAgama = "<select name='agama'>";
        foreach ( $this->config->item("spirit") as $key => $val ) {
        	
        	$select = get_data($dataEdit,"agama_pelamar") == $key ? "selected" : "" ;
        	$htmlAgama.= "<option value='$key' $select>".$val."</option>";
        }
        $htmlAgama .= "</select>";
        
        $this->_data['htmlAgama'] =  $htmlAgama ;
        
        if (! $dataEdit )
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/pelamarEdit' );
    }
}