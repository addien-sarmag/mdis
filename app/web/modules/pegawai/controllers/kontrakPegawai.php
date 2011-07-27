<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class kontrakPegawai extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'kontrakPegawai_model' );
        isController('pegawai','kontrakPegawai');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/kontrakPegawai/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','kontrakPegawai','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->kontrakPegawai_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete kontrakPegawai' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete kontrakPegawai' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'kontrakPegawai', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip' ) );
        $this->_executeView ();
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] );

        $this->load->library('pagination');
        $total = $this->kontrakPegawai_model->getCount(  $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/kontrakPegawai/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->kontrakPegawai_model->getList($limit,$array['page'], $where );
         
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/kontrakPegawaiView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
         	 
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	   
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['nomor_kontrakPegawai'] = $nomor; 
            $data ['desc_kontrakPegawai'] = $desc; 
            $data ['tanggalAwal_kontrakPegawai'] = $tanggalAwal;  
            $data ['tanggalAkhir_kontrakPegawai'] = $tanggalAkhir;    
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
                if (empty ( $nomor )) {
                $errors [] = 'Input Nomor kontrakPegawai';
                }elseif ( checkKode( "tbl_kontrakPegawai" , array('nomor_kontrakPegawai'=>$nomor) ) ){
                 $errors [] = 'Input Nomor Kontrak  Sudah Terpakai';
                } 
                if (empty ( $desc ))  
                $errors [] = 'Input Keterangan';
                if (empty ( $tanggalAwal ))  
                $errors [] = 'Input Tanggal Mulai';
                if (empty ( $tanggalAkhir ))  
                $errors [] = 'Input Tanggal Selesai'; 
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->kontrakPegawai_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Kontrak  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Kontrak  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'kontrakPegawai', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action','nip' ) );
        $this->_executeAdd ();
           
          
        $this->_data['uri_to_assoc'] = $array;
        
        $this->_view ( 'pegawai/kontrakPegawaiAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array ();
            $data ['nip_karyawan'] = $nip; 
            $data ['nomor_kontrakPegawai'] = $nomor; 
            $data ['desc_kontrakPegawai'] = $desc; 
            $data ['tanggalAwal_kontrakPegawai'] = $tanggalAwal;  
            $data ['tanggalAkhir_kontrakPegawai'] = $tanggalAkhir;    
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Nip';
                if (empty ( $nomor )) {
                $errors [] = 'Input Nomor Kontrak';
                }elseif ( $nomorOld != $nomor && checkKode( "tbl_kontrakPegawai" , array('nomor_kontrakPegawai'=>$nomor) ) ){
                 $errors [] = 'Input Nomor Kontrak  Sudah Terpakai';
                } 
                if (empty ( $desc ))  
                $errors [] = 'Input Keterangan';
                if (empty ( $tanggalAwal ))  
                $errors [] = 'Input Tanggal Mulai';
                if (empty ( $tanggalAkhir ))  
                $errors [] = 'Input Tanggal Selesai'; 
             
                 
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->kontrakPegawai_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Kontrak  ' ;
                unset($_POST);
                $kontrakPegawai = $this->kontrakPegawai_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $kontrakPegawai;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Kontrak  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'kontrakPegawai', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ( 'id','nip') );
        if (! $array ['id'])
            show_404 ();
              
        $kontrakPegawai = $this->kontrakPegawai_model->get ( $array['id'] );
        $this->_data['dataEdit'] = $kontrakPegawai; 
  		
        $this->_data['uri_to_assoc'] = $array;
        if (! $kontrakPegawai)
            show_404 ();
            
        $this->_executeEdit();
        $this->_view ( 'pegawai/kontrakPegawaiEdit' );
    }
}