<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class pengalamanKerja extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'pengalamankerja_model' );
        isController('pegawai','pengalamanKerja');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/pengalamanKerja/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','pengalamanKerja','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->pengalamankerja_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete pengalamanKerja' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete pengalamanKerja' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'pengalamanKerja', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip' ) );
        $this->_executeView ();
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] );

        $this->load->library('pagination');
        $total = $this->pengalamankerja_model->getCount(  $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/pengalamanKerja/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->pengalamankerja_model->getList($limit,$array['page'], $where );
        
        
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/pengalamanKerjaView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
         
        	 
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['namaPerusahaan_pengalaman'] = $company; 
            $data ['jabatan_pengalaman'] = $jabatan; 
            $data ['tanggalMasuk_pengalaman'] = $tanggalMasuk;  
            $data ['tanggalKeluar_pengalaman'] = $tanggalKeluar; 
            $data ['gaji_pengalaman'] = $gaji; 
            $data ['alasanResend_pengalaman'] = $alasan;   
            
            $errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
              	if (empty ( $company ))  
                $errors [] = 'Input Nama Perusahaan';
                if (empty ( $jabatan ))  
                $errors [] = 'Input Jabatan';
                if (empty ( $tanggalMasuk ))  
                $errors [] = 'Input Tanggal Masuk';
                if (empty ( $tanggalKeluar ))  
                $errors [] = 'Input Tanggal Keluar';
                if (empty ( $gaji ))  
                $errors [] = 'Input Gaji Terakhir';
                if (empty ( $alasan ))  
                $errors [] = 'Input Alasan Resend'; 
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pengalamankerja_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Pengalaman Kerja  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Pengalaman Kerja  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'pengalamanKerja', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action','nip' ) );
        $this->_executeAdd ();
           
          
        $this->_data['uri_to_assoc'] = $array;
        
        $this->_view ( 'pegawai/pengalamanKerjaAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['namaPerusahaan_pengalaman'] = $company; 
            $data ['jabatan_pengalaman'] = $jabatan; 
            $data ['tanggalMasuk_pengalaman'] = $tanggalMasuk;  
            $data ['tanggalKeluar_pengalaman'] = $tanggalKeluar; 
            $data ['gaji_pengalaman'] = $gaji; 
            $data ['alasanResend_pengalaman'] = $alasan;   
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
              	if (empty ( $company ))  
                $errors [] = 'Input Nama Perusahaan';
                if (empty ( $jabatan ))  
                $errors [] = 'Input Jabatan';
                if (empty ( $tanggalMasuk ))  
                $errors [] = 'Input Tanggal Masuk';
                if (empty ( $tanggalKeluar ))  
                $errors [] = 'Input Tanggal Keluar';
                if (empty ( $gaji ))  
                $errors [] = 'Input Gaji Terakhir';
                if (empty ( $alasan ))  
                $errors [] = 'Input Alasan Resend'; 
                
                
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->pengalamankerja_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Pengalaman Kerja  ' ;
                unset($_POST);
                $pengalamanKerja = $this->pengalamankerja_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $pengalamanKerja;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Pengalaman Kerja  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'pengalamanKerja', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ( 'id','nip') );
        if (! $array ['id'])
            show_404 ();
              
        $pengalamanKerja = $this->pengalamankerja_model->get ( $array['id'] );
        $this->_data['dataEdit'] = $pengalamanKerja; 
  		
        $this->_data['uri_to_assoc'] = $array;
        if (! $pengalamanKerja)
            show_404 ();
            
        $this->_executeEdit();
        $this->_view ( 'pegawai/pengalamanKerjaEdit' );
    }
}