<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class hutang extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'hutang_model' );
        isController('pegawai','hutang');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/hutang/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        // delete action
        if (isAccess('pegawai','hutang','delete') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->hutang_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete hutang' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete hutang' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'pegawai', 'hutang', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,'nip') );
        $this->_executeView ();
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] );

        $this->load->library('pagination');
        $total = $this->hutang_model->getCount($where);
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/hutang/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->hutang_model->getList($limit,$array['page'],$where);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/hutangView' );
    }
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	 
            $data = array (); 
            $data ['nip_karyawan'] = $nip;
            $data ['nilai_hutang'] = $nilai;
            $data ['tanggal_hutang'] = $tanggal;  
            $data ['desc_hutang'] = $desc;  
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Name';
                if (empty ( $nilai ))   
                $errors [] = 'Input Nilai Nominal'; 
                if (empty ( $tanggal ))  
                $errors [] = 'Input Tanggal';
                if (empty ( $desc ))  
                $errors [] = 'Input Keperluan'; 
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->hutang_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah hutang  ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah hutang  ' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'pegawai', 'hutang', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('action' ) );
        $this->_executeAdd ();
          
        $this->_data['uri_to_assoc'] = $array;
        $this->_view ( 'pegawai/hutangAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	if ( $array ) foreach ( $array as $key => $val ) if (  empty($$key) ) $$key = $val ;
            
        	if ( ! $id ) show_error( $this->lang->line('gagal_update'));
        	
            $data = array (); 
            $data ['nip_karyawan'] = $nip;
            $data ['nilai_hutang'] = $nilai;
            $data ['tanggal_hutang'] = $tanggal;  
            $data ['desc_hutang'] = $desc;  
            
            	$errors = array ();
        		if (empty ( $nip ))  
                $errors [] = 'Input Name';
                if (empty ( $nilai ))  
                $errors [] = 'Input Nilai Nominal';
                if (empty ( $tanggal ))  
                $errors [] = 'Input Tanggal';
                if (empty ( $desc ))  
                $errors [] = 'Input Keperluan'; 
        	  
             
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->hutang_model->update ( $array['id'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit hutang  ' ;
                unset($_POST);
                $hutang = $this->hutang_model->get ( $array['id'] );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $hutang;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit hutang  ' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'pegawai', 'hutang', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id','nip' ) );
        if (! $array ['id'])
            show_404 ();
        $hutang = $this->hutang_model->get ( $array ['id'] );
        $this->_data['dataEdit'] = $hutang; 
 
    	  
        $this->_data['uri_to_assoc'] = $array;
        if (! $hutang)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'pegawai/hutangEdit' );
    }
    
    
protected function _executePay() {
 $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
        	
        	if ( $_POST ) foreach ( $_POST as $key => $val ) $$key = $val ;
        	 
            $data = array (); 
            $data ['pid_hutang'] = $pid; 
            $data ['nilai_hutang'] = $nilai;
            $data ['tanggal_hutang'] = $tanggal;   
            
            	$errors = array (); 
                if (empty ( $nilai ))   
                $errors [] = 'Input Nilai Nominal'; 
                if (empty ( $tanggal ))  
                $errors [] = 'Input Tanggal'; 
        	  
            if ($errors) { 
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->hutang_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah Bayar Hutang   ' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah Bayar Hutang   ' ;
            } 
        }
        
		if (isAccess('pegawai','hutang','deletepay') && $array ['action'] == 'delete' && $array ['id']) {
            if ($this->hutang_model->delete($array['id'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete hutang' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete hutang' ;
            }
        }
        
        
    }

	public function pay() {
    	if (! isAccess ( 'pegawai', 'hutang', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('pid', 'action', 'page' ,'nip') );
        $this->_executePay (); 
        
        if( isset($_POST['nip']) && ! empty ($_POST['nip'])) $array['nip'] = $_POST['nip'];
        
        $array['page'] = (int) $array['page'];
        
        $where = array();
        $where = array( 'nip' => $array['nip'] ,'pid' => $array['pid'] );
        $limit = $this->config->item('pegawai_limit');
        
        $hutang = $this->hutang_model->get ( $array ['pid'] );
        $this->_data['dataHutang'] = $hutang; 
  
        $dataView = $this->hutang_model->getListPay($limit,$array['page'],$where);
        
        $pay = 0;
        if ($dataView ) foreach( $dataView as $res ) $pay +=  $res['nilai_hutang']; 
        $this->_data['payAll']  = $dataView ? $pay : 0 ;
        $this->_data['payLeave']  =  $hutang['nilai_hutang'] - $this->_data['payAll'] ;
        
         
        	
        	$data = array();
        	$data['status_hutang'] = $this->_data['payLeave'] <= 0  ? 'lunas' : "";
        	$this->hutang_model->update ( $array['pid'], $data );
         
        
        
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;

        $this->_view ( 'pegawai/hutangPay' );
    }
}