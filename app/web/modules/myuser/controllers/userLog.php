<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class userLog extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'userlog_model' );
        isController('myuser','userLog');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'myuser/userLog/view' );
    }
    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        // delete action
        if (isAccess('myuser','userLog','delete') && $array ['action'] == 'delete' && $array ['kode']) {
            if ($this->userlog_model->delete($array['kode'])) {
                $this->_data['errorMessage'] =  'Berhasil Delete userLog' ;
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Delete userLog' ;
            }
        }
    }
    public function view() {
    	if (! isAccess ( 'myuser', 'userLog', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action', 'page','ip','date','browser','user') );
        
        $srcIp = ( trim ( $this->input->post('srcIp') ) ) ?  trim ( $this->input->post('srcIp') ) : $array['ip'] ;
        $date  = ( trim ( $this->input->post('srcTgl') ) ) ? trim ( $this->input->post('srcTgl') ) : $array['date'] ;
        $user  = ( trim ( $this->input->post('srcUser') ) ) ? trim ( $this->input->post('srcUser') ) : $array['user'] ;
        
        // filter like model
        $srcIp = ( $srcIp == 'Alamat IP' ) ? '' : $srcIp ;
        $date  = ( $date == 'Tanggal' ) ? '' : $date ;
        $user  = ( $user == 'Pengguna' ) ? '' : $user ;
        
        $link 	 = '';
        $uriSegment  = 4;
        if ( $srcIp != '' ) { 
        	$link =  'ip/'.$srcIp.'/' ;
        	$uriSegment  = 6;
        }else{ 
        	$link =  '' ;
        	$uriSegment  = $uriSegment;
        }
        
    	if ( $date != '' ) { 
        	$link =  $link.'date/'.$date.'/' ;
        	$uriSegment  = $uriSegment + 2;
        }else{ 
        	$link =  $link ;
        	$uriSegment  = $uriSegment ;
        }
        
    	if ( $user != '' ) { 
        	$link =  $link.'user/'.$user.'/' ;
        	$uriSegment  = $uriSegment + 2;
        }else{ 
        	$link =  $link ;
        	$uriSegment  = $uriSegment ;
        }
        
    	
        
        $this->_executeView ();
        $array['page'] = (int) $array['page'];

        $this->load->library('pagination');
        $total = $this->userlog_model->getCount( $srcIp , $date , $user);
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('myuser_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('myuser/userLog/view/'.$link.'page/');
        $config['uri_segment'] = $uriSegment;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
       
        $this->_data['dataSrcIp'] = ( ! empty ( $array['ip'] ) ) ? $array['ip'] : '' ;
        $this->_data['dataSrcDate'] = ( ! empty ( $array['date'] ) ) ? $array['date'] : '' ;
        $this->_data['dataUserName'] = ( ! empty ( $array['user'] ) ) ? $array['user'] : '' ;
        
        $dataView = $this->userlog_model->getList($limit,$array['page'], $srcIp , $date , $user);
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] 	= $array;
        $this->_data['start'] 			= $array['page'] ;
        $listIp 						= $this->userlog_model->getListData( 'counterIp' );
        $listUserName 					= $this->userlog_model->getListData( 'userName' );

        
        $dataListIp = ' [ '  ;
        $var = '';
        foreach ( $listIp as $listIps ){
        	$var = $var . '  "' .$listIps['counterIp'] .'" ,';
        }
        $dataListIp = $dataListIp.  $var . ' ] '  ;
        $this->_data['dataListIp'] 			= $dataListIp ;
        
        $dataUserName = ' [ '  ;
        $var = '';
        foreach ( $listUserName as $listUserNames ){
        	$var = $var . '  "' .$listUserNames['userName'] .'" ,';
        }
        $dataUserName = $dataUserName.  $var . ' ] '  ;
        $this->_data['dataListUserName'] 			= $dataUserName ;

//		echo $dataUserName;
        $this->_view ( 'myuser/userLogView' );
    }
    
    public function jsonCounter (){
    	
    	$field = '';
    	
    	$ip		= '';
    	$date 	= '';
    	$user   =  'a';//trim(  $this->input->post( 'srcUser' ) );
    	
    	if ( ! empty ( $user ) ) { $field   =  'userName'; }
    	
    	$listIp =  $this->userlog_model-> getJsonList( $ip , $date , $user , $field );
    	
    	
    	echo  json_encode( $listIp );
    }
    
    
    protected function _executeAdd() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $kode = trim ( $this->input->post ( 'kode' ) );
            $desc = trim ( $this->input->post ( 'desc' ) );
            $data = array ();
            $data ['userLogKode'] = $kode;
            $data ['userLogDesc'] = $desc;
            $errors = array ();
        	if (empty ( $kode )) {
                $errors [] = 'Input Kode';
        	} else  {
            	$this->load->model ('cek_model');
            	$cekKode = $this->cek_model->cekKode ('userLog' , $kode);
            	if($cekKode > 0)
            		$errors [] = 'Kode Sudah Terdaftar. Silahkan Diganti';
            }
            
            if (empty ( $desc ))
                $errors [] = 'Input Uraian';
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->userlog_model->add ( $data )) {
                $this->_data['errorMessage'] =  'Berhasil Tambah userLog' ;
                $_POST = array();
                $this->_data['isSuccess'] =  true ;
            } else {
                $this->_data['errorMessage'] =  'Gagal Tambah userLog' ;
            }
        
        }
    }

    public function add() {
    	if (! isAccess ( 'myuser', 'userLog', 'add'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        $this->_executeAdd ();
        $this->_view ( 'myuser/userLogAdd' );
    }

    protected function _executeEdit() {
        $array = $this->uri->uri_to_assoc ( 3, array ('kode', 'action' ) );
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $kode = trim ( $this->input->post ( 'kode' ) );
            $desc = trim ( $this->input->post ( 'desc' ) );
            $data = array ();
            $data ['userLogKode'] = $kode;
            $data ['userLogDesc'] = $desc;
            $errors = array ();
        	if (empty ( $kode )) {
                $errors [] = 'Input Kode';
        	} else  {
        		$kodeOld = trim ( $this->input->post ( 'kodeOld' ) );
            	if($kode != $kodeOld) {
	        		$this->load->model ('cek_model');
	            	$cekKode = $this->cek_model->cekKode ('userLog' , $kode);
	            	if($cekKode > 0)
	            		$errors [] = 'Kode Sudah Terdaftar. Silahkan Diganti';
            	}
            }
            
            if (empty ( $desc ))
                $errors [] = 'Input Uraian';
            if ($errors) {
                $this->_data['errorMessage'] =  implode ( '<br />', $errors ) ;
            } elseif ($this->userlog_model->update ( $array['kode'], $data )) {
                $this->_data['errorMessage'] =  'Berhasil Edit userLog' ;
                unset($_POST);
                $userLog = $this->userlog_model->get ( $kode );
                $this->_data['isSuccess'] =  true ;
                $this->_data['dataEdit'] = $userLog;    
            } else {
                $this->_data['errorMessage'] =  'Gagal Edit userLog' ;
            }
        }    
    }

    public function edit() {
    	if (! isAccess ( 'myuser', 'userLog', 'edit'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('kode' ) );
        if (! $array ['kode'])
            show_404 ();
        $userLog = $this->userlog_model->get ( $array ['kode'] );
        $this->_data['dataEdit'] = $userLog;    
        if (! $userLog)
            show_404 ();
        $this->_executeEdit();
        $this->_view ( 'myuser/userLogEdit' );
    }
}
