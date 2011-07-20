<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class vacancy extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'vacancy_model' );
        isController('pegawai','vacancy');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/vacancy/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','vacancy','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->vacancy_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete Lowongan' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete Lowongan' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'vacancy', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->vacancy_model->getCount();
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/vacancy/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->vacancy_model->getList($limit,$array['page']);
        
        $this->load->model('jabatan_model');
        $this->_data['jabatan'] = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) );  
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/vacancyView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	
            $data = array (); 
            $data ['desc_lowongan'] = $desc;
            $data ['id_jabatan'] = $jabatan;
            $data ['tglAwal_lowongan'] = $tglAwal;
            $data ['tglAkhir_lowongan'] = $tglAkhir; 
            
            $errors = array ();
        	/*if (empty ( $desc ))  
                $errors [] = 'Input Keterangan';*/
            if ( empty($jabatan) )  
                $errors [] = 'Input Tipe Lowongan';
            if ( empty($tglAwal) )  
                $errors [] = 'Input Tanggal Awal';
            if ( empty($tglAkhir) )  
                $errors [] = 'Input Tanggal Akhir';
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->vacancy_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Lowongan  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Lowongan  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'vacancy', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
        
        $this->load->model('jabatan_model');
    	
    	$jabatan = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) );  
        
        $htmlPosisi = "<select name='jabatan'>";
        foreach ( $jabatan as $res ) $htmlPosisi.= "<option value='".$res['id_jabatan']."'>".$res['nama_jabatan']."</option>";
        $htmlPosisi .= "</select>";
        
        $this->_data['htmlSelectJabatan'] = $htmlPosisi;
        
        $this->_view ( 'pegawai/vacancyAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array (); 
            $data ['desc_lowongan'] = $desc;
            $data ['id_jabatan'] = $jabatan;
            $data ['tglAwal_lowongan'] = $tglAwal;
            $data ['tglAkhir_lowongan'] = $tglAkhir; 
            
            $errors = array ();
        	/*if (empty ( $desc ))  
                $errors [] = 'Input Keterangan';*/
            if ( empty($jabatan) )  
                $errors [] = 'Input Tipe Lowongan';
            if ( empty($tglAwal) )  
                $errors [] = 'Input Tanggal Awal';
            if ( empty($tglAkhir) )  
                $errors [] = 'Input Tanggal Akhir';
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->vacancy_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Lowongan  ' ;
                unset($_POST);
                $vacancy = $this->vacancy_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $vacancy;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Lowongan  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'vacancy', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        if (! $array ['id'])
            show_404 ();
        $vacancy = $this->vacancy_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $vacancy; 

        $this->load->model('jabatan_model');
    	
    	$jabatan = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) );  
        
        $htmlPosisi = "<select name='jabatan'>";
        foreach ( $jabatan as $res ) {
        	$select = get_data($vacancy,"id_jabatan") == $res['id_jabatan'] ? "selected" : "" ;
        	$htmlPosisi.= "<option value='".$res['id_jabatan']."' $select>".$res['nama_jabatan']."</option>";
        }
        $htmlPosisi .= "</select>";
        
        $this->_data['htmlSelectJabatan'] = $htmlPosisi;
        
        if (! $vacancy)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/vacancyEdit' );
    }
    
protected function _executeDetail() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array (); 
            $data ['desc_lowongan'] = $desc;
            $data ['id_jabatan'] = $jabatan;
            $data ['tglAwal_lowongan'] = $tglAwal;
            $data ['tglAkhir_lowongan'] = $tglAkhir; 
            
            $errors = array ();
        	/*if (empty ( $desc ))  
                $errors [] = 'Input Keterangan';*/
            if ( empty($jabatan) )  
                $errors [] = 'Input Tipe Lowongan';
            if ( empty($tglAwal) )  
                $errors [] = 'Input Tanggal Awal';
            if ( empty($tglAkhir) )  
                $errors [] = 'Input Tanggal Akhir';
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->vacancy_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit Lowongan  ' ;
                unset($_POST);
                $vacancy = $this->vacancy_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $vacancy;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit Lowongan  ' ;
            }
        }    
    }

    public function detail() {
    	if (! isAccess ( 'pegawai', 'vacancy', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id' , 'action', 'page' ) );
        if (! $array ['id'])
            show_404 ();
        $vacancy = $this->vacancy_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $vacancy; 

        $this->load->model('jabatan_model');
    	
    	$jabatan = $this->jabatan_model->getList ( null , null ,  array( "tipe_jabatan"=>"public" ) );  
        
        $htmlPosisi = "<select name='jabatan'>";
        foreach ( $jabatan as $res ) $htmlPosisi.= "<option value='".$res['id_jabatan']."'>".$res['nama_jabatan']."</option>";
        $htmlPosisi .= "</select>";
        
     	$this->load->model('kandidat_model');
        
        $dataView = $this->kandidat_model->getList();
         
        
        $this->_data['dataView'] = $dataView;
        $this->_data['htmlSelectJabatan'] = $htmlPosisi;
        
        if (! $vacancy)
            show_404 ();
        $this->_executeDetail();
         $this->_data['uri_to_assoc'] = $array;
        $this->_view ( 'pegawai/vacancyDetail' );
    }
}