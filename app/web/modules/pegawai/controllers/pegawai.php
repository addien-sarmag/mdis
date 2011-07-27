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
            $data ['nip_karyawan'] = $nip; 
            $data ['namaLengkap_karyawan'] = $completeName; 
            $data ['namaPanggil_karyawan'] = $callName; 
            $data ['tempatLahir_karyawan'] = $placeBrith; 
            $data ['tanggalLahir_karyawan'] = $dateBrith; 
            if ( isset($statusPribadi)) $data ['statusPribadi_karyawan'] = $statusPribadi; 
            $data ['agama_karyawan'] = $agama; 
            $data ['wargaNegara_karyawan'] = $wargaNegara; 
            if ( isset($statusPribadi) ) $data ['status_karyawan'] = $statusKaryawan; 
            $data ['sukuBangsa_karyawan'] = $suku; 
            $data ['pendidikan_karyawan'] = $pendidikan; 
            $data ['berat_karyawan'] = $berat; 
            $data ['tinggi_karyawan'] = $tinggi;  
            $data ['noNpwp_karyawan'] = $npwp; 
            $data ['noTelepon_karyawan'] = $telepon; 
            $data ['noHp_karyawan'] = $handphone; 
            $data ['alamat_karyawan'] = $address; 
            $data ['kelurahan_karyawan'] = $kelurahan; 
            $data ['kecamatan_karyawan'] = $kecamatan; 
            $data ['kota_karyawan'] = $kota; 
            $data ['usia_karyawan'] = $usia; 
            $data ['active_karyawan'] = 'active'; 
            if ( isset($gender) ) $data ['gender_karyawan'] = $gender; 
            $data ['tanggalMasuk_karyawan'] = date("Y-m-d"); 
            
            $errors = array (); 
            if (empty ( $nip )) { 
                $errors [] = 'Input Nip';
             }elseif( checkKode( 'tbl_karyawan' , array( "nip_karyawan"=>$nip ) ) ) { 
				 $errors [] = 'Input Nip Sudah Terpakai';
             }
            	if (empty ( $completeName ))  
                $errors [] = 'Input Nama Lengkap';
               	if (empty ( $callName ))  
                $errors [] = 'Input Nama Panggil';
                if (empty ( $placeBrith ))  
                $errors [] = 'Input Tempat Lahir';
                if (empty ( $dateBrith ))  
                $errors [] = 'Input Tanggal Lahir';
                if (empty ( $usia ))  
                $errors [] = 'Input Usia';
                if ( isset($statusPribadi) &&  empty ( $gender ))  
                $errors [] = 'Input Jenis Kelamin';
//                if (empty ( $npwp ))  
//                $errors [] = 'Input Nomor NPWP';
//                if (empty ( $telepon ))  
//                $errors [] = 'Input Telepon';
//                if (empty ( $handphone ))  
//                $errors [] = 'Input Handphone';
                if (empty ( $agama ))  
                $errors [] = 'Input Agama';
                if (empty ( $wargaNegara ))  
                $errors [] = 'Input Warga Negara';
                if (empty ( $suku ))  
                $errors [] = 'Input Suku Bangsa';
                if ( isset($statusPribadi) && empty ( $statusPribadi ))  
                $errors [] = 'Input Status Pribadi';
//                if (empty ( $active ))  
//                $errors [] = 'Input Active / Resend';
//                if (empty ( $berat ))  
//                $errors [] = 'Input Berat Badan';
//                if (empty ( $tinggi ))  
//                $errors [] = 'Input Tinggi Badan'; 
                if ( isset($statusPribadi) &&  empty ( $statusKaryawan ))  
                $errors [] = 'Input Status Karyawan'; 
                if (empty ( $address ))  
                $errors [] = 'Input Alamat';
                if (empty ( $kelurahan ))  
                $errors [] = 'Input Kelurahan';
                if (empty ( $kecamatan ))  
                $errors [] = 'Input Kecamatan';
                if (empty ( $kota ))  
                $errors [] = 'Input Kota';
        	   
                
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif (  $this->pegawai_model->add ( $data )  ) {
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
    	
    	$htmlAgama = "<select name='agama'>";
        foreach ( $this->config->item("spirit") as $key => $val ){
        	  $select = isset($agama) && $agama == $key  ? "selected" : "" ; 
        	  $htmlAgama.= "<option value='$key' $select>".$val."</option>";
        } 
        $htmlAgama .= "</select>";
        
        $htmlPendidikan = "<select name='pendidikan'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) {
        $select = isset($pendidikan) && $pendidikan == $key  ? "selected" : "" ; 
        $htmlPendidikan.= "<option value='$val' $select>".$val."</option>";
        }
        $htmlPendidikan .= "</select>";
        
        $radio = "";
        foreach( $this->config->item("nikah") as $key => $val ){
        	$select = get_data($_POST,"statusPribadi") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusPribadi' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlstatusPribadi'] =  $radio ;
    	
    	$radio = "";
        foreach( $this->config->item("active") as $key => $val ){
        	$select = get_data($_POST,"active") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='active' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlActive'] =  $radio ;
    	
    	$radio = "";
        foreach( $this->config->item("statusKaryawan") as $key => $val ){
        	$select = get_data($_POST,"statusKaryawan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusKaryawan' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlstatusKaryawan'] =  $radio ;
         
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
            if ( $nipOld != $nip ) $data ['nip_karyawan'] = $nip; 
            $data ['namaLengkap_karyawan'] = $completeName; 
            $data ['namaPanggil_karyawan'] = $callName; 
            $data ['tempatLahir_karyawan'] = $placeBrith; 
            $data ['tanggalLahir_karyawan'] = $dateBrith; 
            if ( isset($statusPribadi)) $data ['statusPribadi_karyawan'] = $statusPribadi; 
            $data ['agama_karyawan'] = $agama; 
            $data ['wargaNegara_karyawan'] = $wargaNegara; 
            if ( isset($statusKaryawan) ) $data ['status_karyawan'] = $statusKaryawan; 
            $data ['sukuBangsa_karyawan'] = $suku; 
            $data ['pendidikan_karyawan'] = $pendidikan; 
            $data ['berat_karyawan'] = $berat; 
            $data ['tinggi_karyawan'] = $tinggi;  
            $data ['noNpwp_karyawan'] = $npwp; 
            $data ['noTelepon_karyawan'] = $telepon; 
            $data ['noHp_karyawan'] = $handphone; 
            $data ['alamat_karyawan'] = $address; 
            $data ['kelurahan_karyawan'] = $kelurahan; 
            $data ['kecamatan_karyawan'] = $kecamatan; 
            $data ['kota_karyawan'] = $kota; 
            $data ['usia_karyawan'] = $usia; 
            $data ['tanggalMasuk_karyawan'] = $dateIn;
            $data ['tanggalKeluar_karyawan'] = $dateOut;
            
            if ( isset($active) )  $data ['active_karyawan'] = $active; 
            if ( isset($gender) ) $data ['gender_karyawan'] = $gender; 
            
            	$errors = array (); 
	            if (  empty ( $nip )) { 
	                $errors [] = 'Input Nip';
	             }elseif( $nipOld != $nip && checkKode( 'tbl_karyawan' , array( "nip_karyawan"=>$nip ) ) ) { 
					 $errors [] = 'Input Nip Sudah Terpakai';
	             }
            	if (empty ( $completeName ))  
                $errors [] = 'Input Nama Lengkap';
               	if (empty ( $callName ))  
                $errors [] = 'Input Nama Panggil';
                if (empty ( $placeBrith ))  
                $errors [] = 'Input Tempat Lahir';
                if (empty ( $dateBrith ))  
                $errors [] = 'Input Tanggal Lahir';
                if (empty ( $usia ))  
                $errors [] = 'Input Usia';
                if ( isset($statusPribadi) &&  empty ( $gender ))  
                $errors [] = 'Input Jenis Kelamin';
//                if (empty ( $npwp ))  
//                $errors [] = 'Input Nomor NPWP';
//                if (empty ( $telepon ))  
//                $errors [] = 'Input Telepon';
//                if (empty ( $handphone ))  
//                $errors [] = 'Input Handphone';
                if (empty ( $agama ))  
                $errors [] = 'Input Agama';
                if (empty ( $wargaNegara ))  
                $errors [] = 'Input Warga Negara';
                if (empty ( $suku ))  
                $errors [] = 'Input Suku Bangsa';
                if ( isset($statusPribadi) && empty ( $statusPribadi ))  
                $errors [] = 'Input Status Pribadi';
                if (empty ( $active ))  
                $errors [] = 'Input Active / Resend';
//                if (empty ( $berat ))  
//                $errors [] = 'Input Berat Badan';
//                if (empty ( $tinggi ))  
//                $errors [] = 'Input Tinggi Badan'; 
                if ( isset($statusPribadi) &&  empty ( $statusKaryawan ))  
                $errors [] = 'Input Status Karyawan'; 
                if (empty ( $address ))  
                $errors [] = 'Input Alamat';
                if (empty ( $kelurahan ))  
                $errors [] = 'Input Kelurahan';
                if (empty ( $kecamatan ))  
                $errors [] = 'Input Kecamatan';
                if (empty ( $kota ))  
                $errors [] = 'Input Kota'; 
             
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
         
//        print_r($pegawai);
        
        $radio = "";
        foreach( $this->config->item("gender") as $key => $val ){
        	$select = get_data($pegawai,"gender_karyawan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='gender' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlRadioSex'] = $radio;
    	
    	$htmlAgama = "<select name='agama'>";
        foreach ( $this->config->item("spirit") as $key => $val ){
        	  $select = isset($pegawai) && $pegawai['agama_karyawan'] == $key  ? "selected" : "" ; 
        	  $htmlAgama.= "<option value='$key' $select>".$val."</option>";
        } 
        $htmlAgama .= "</select>";
        
        $htmlPendidikan = "<select name='pendidikan'>";
        foreach ( $this->config->item("levelPendidikan") as $key => $val ) {
        $select = isset($pegawai) && $pegawai['pendidikan_karyawan']== $key  ? "selected" : "" ; 
        $htmlPendidikan.= "<option value='$val' $select>".$val."</option>";
        }
        $htmlPendidikan .= "</select>";
        
        $radio = "";
        foreach( $this->config->item("nikah") as $key => $val ){
        	$select = get_data($pegawai,"statusPribadi_karyawan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusPribadi' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlstatusPribadi'] =  $radio ;
    	
    	$radio = "";
        foreach( $this->config->item("active") as $key => $val ){
        	$select = get_data($pegawai,"active_karyawan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='active' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlActive'] =  $radio ;
    	
    	$radio = "";
        foreach( $this->config->item("statusKaryawan") as $key => $val ){
        	$select = get_data($pegawai,"status_karyawan") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='statusKaryawan' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlstatusKaryawan'] =  $radio ;
         
        $this->_data['htmlPendidikan'] =  $htmlPendidikan ;
        $this->_data['htmlAgama'] =  $htmlAgama ;
        
        $this->_view ( 'pegawai/pegawaiEdit' );
    }
    
protected function _executeDetail() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	 
            $data = array ();
            
            $data ['id_jabatan'] = $jabatan; 
            $data ['id_mitra'] = $mitra; 
            $data ['id_unit'] = $unit; 
             
             
            $errors = array (); 
	               
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

    public function detail() {
    	if (! isAccess ( 'pegawai', 'pegawai', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $pegawai = $this->pegawai_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $pegawai;    
        if (! $pegawai)
            show_404 ();
        $this->_executeDetail();
           
        $this->load->model('jabatan_model'); 
    	$jabatan = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) );   
    	$htmlPosisi = "<select name='jabatan'>";
        foreach ( $jabatan as $res ) {
        	$select = get_data($pegawai,"id_jabatan") == $res['id_jabatan'] ? "selected" : "" ;
        	$htmlPosisi.= "<option value='".$res['id_jabatan']."' $select>".$res['nama_jabatan']."</option>";
        }
        $htmlPosisi .= "</select>"; 
        $this->_data['htmlSelectJabatan'] = $htmlPosisi;
        
        $this->load->model('mitrakerja_model'); 
    	$jabatan = $this->mitrakerja_model->getList ( );   
    	$htmlMitra = "<select name='mitra'>";
        foreach ( $jabatan as $res ) {
        	$select = get_data($pegawai,"id_mitra") == $res['id_mitra'] ? "selected" : "" ;
        	$htmlMitra.= "<option value='".$res['id_mitra']."' $select>".$res['nama_mitra']."</option>";
        }
        $htmlMitra .= "</select>"; 
        $this->_data['htmlSelectMitra'] = $htmlMitra;
        
        $this->load->model('unit_model'); 
    	$jabatan = $this->unit_model->getList ( );   
    	$htmlUnit = "<select name='unit'>";
        foreach ( $jabatan as $res ) {
        	$select = get_data($pegawai,"id_unit") == $res['id_unit'] ? "selected" : "" ;
        	$htmlUnit.= "<option value='".$res['id_unit']."' $select>".$res['nama_unit']."</option>";
        }
        $htmlUnit .= "</select>"; 
        $this->_data['htmlSelectUnit'] = $htmlUnit;
         
        $this->_view ( 'pegawai/pegawaiDetail' );
    }
    
}