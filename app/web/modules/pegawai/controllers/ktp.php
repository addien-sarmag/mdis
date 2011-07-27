<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class ktp extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'ktp_model' );
        isController('pegawai','ktp');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/ktp/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','ktp','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->ktp_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete ktp' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete ktp' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'ktp', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip' ) );
        $this->_executeView ();
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] );

        $this->load->library('pagination');
        $total = $this->ktp_model->getCount(  $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/ktp/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->ktp_model->getList($limit,$array['page'], $where );
         
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/ktpView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
         	 
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	 
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['no_ktp'] = $noKTP; 
            $data ['alamat_ktp'] = $alamat; 
            $data ['kelurahan_ktp'] = $kelurahan;  
            $data ['kecamatan_ktp'] = $kecamatan; 
            $data ['kota_ktp'] = $kota; 
            $data ['provinsi_ktp'] = $provinsi; 
            $data ['tglAwal_ktp'] = $tanggalAwal; 
            $data ['tglAkhir_ktp'] = $tanggalAkhir;   
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
                if (empty ( $noKTP )) {
                $errors [] = 'Input Nomor Ktp';
                }elseif ( checkKode( "tbl_ktp" , array('no_ktp'=>$noKTP) ) ){
                 $errors [] = 'Input Nomor Ktp Sudah Terpakai';
                }
                if (empty ( $alamat ))  
                $errors [] = 'Input Alamat';
                if (empty ( $kelurahan ))  
                $errors [] = 'Input Kelurahan';
                if (empty ( $kecamatan ))  
                $errors [] = 'Input Kecamatan';
                if (empty ( $kota ))  
                $errors [] = 'Input Kota';
                if (empty ( $provinsi ))  
                $errors [] = 'Input Provinsi';
                if (empty ( $tanggalAwal ))  
                $errors [] = 'Input Tanggal Jadi';
                if (empty ( $tanggalAkhir ))  
                $errors [] = 'Input Tanggal Berlaku';  
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->ktp_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah KTP  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah KTP  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'ktp', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action','nip' ) );
        $this->_executeAdd ();
           
          
        $this->_data['uri_to_assoc'] = $array;
        
        $this->_view ( 'pegawai/ktpAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['no_ktp'] = $noKTP; 
            $data ['alamat_ktp'] = $alamat; 
            $data ['kelurahan_ktp'] = $kelurahan;  
            $data ['kecamatan_ktp'] = $kecamatan; 
            $data ['kota_ktp'] = $kota; 
            $data ['provinsi_ktp'] = $provinsi; 
            $data ['tglAwal_ktp'] = $tanggalAwal; 
            $data ['tglAkhir_ktp'] = $tanggalAkhir;   
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
                if (empty ( $noKTP )) {
                $errors [] = 'Input Nomor Ktp';
                }elseif ( $noKTPOld != $noKTP && checkKode( "tbl_ktp" , array('no_ktp'=>$noKTP) ) ){
                 $errors [] = 'Input Nomor Ktp Sudah Terpakai';
                }
                if (empty ( $alamat ))  
                $errors [] = 'Input Alamat';
                if (empty ( $kelurahan ))  
                $errors [] = 'Input Kelurahan';
                if (empty ( $kecamatan ))  
                $errors [] = 'Input Kecamatan';
                if (empty ( $kota ))  
                $errors [] = 'Input Kota';
                if (empty ( $provinsi ))  
                $errors [] = 'Input Provinsi';
                if (empty ( $tanggalAwal ))  
                $errors [] = 'Input Tanggal Jadi';
                if (empty ( $tanggalAkhir ))  
                $errors [] = 'Input Tanggal Berlaku';    
             
                 
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->ktp_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit KTP  ' ;
                unset($_POST);
                $ktp = $this->ktp_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $ktp;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit KTP  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'ktp', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ( 'id','nip') );
        if (! $array ['id'])
            show_404 ();
              
        $ktp = $this->ktp_model->get ( $array['id'] );
        $this->_data['dataEdit'] = $ktp; 
  		
        $this->_data['uri_to_assoc'] = $array;
        if (! $ktp)
            show_404 ();
            
        $this->_executeEdit();
        $this->_view ( 'pegawai/ktpEdit' );
    }
}