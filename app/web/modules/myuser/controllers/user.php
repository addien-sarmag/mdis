<?php
if (! defined ( 'BASEPATH' ))
    show_404 ( 'No direct script access allowed' );

class User extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->lang->load ( 'myuser' );
        $this->lang->load ( 'user' );
        $this->load->module_config ( 'myuser', 'user' );
        $this->_data ['menuon'] = 'user';
        isController('login');
        
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    
    function index() {
        redirect('myuser/user/view');
    }
    
    function view() {
        if (! isAccess ( 'myuser', 'user', 'view'))
            redirect ();
            
        add_title ( $this->lang->line ( 'myuser_user_view_title' ) );
        $this->load->model ( 'user_model' );
        $this->load->model ( 'group_model' );
            
        $array = $this->uri->uri_to_assoc ( 3, array ('groupId' , 'letter' , 'userStatus' , 'sort', 'order', 'page' ) );
        $array['page'] = (int) $array['page'];

        //Filter List
        $listLetter = array('0'=>'All');
	    for ($c=65; $c <= 90; $c++){    
	        $listLetter[$c] = chr($c);
	    }
        $this->_data['listLetter'] = $listLetter;
        
		$group_list = $this->group_model->getList ();
        $group_list_myOptions = array ('0' => 'All' );
        foreach ( $group_list as $key => $value ) {
            $group_list_myOptions [$value['groupId']] = $value['groupName'];
        }
        $this->_data ['group_list_myOptions'] = $group_list_myOptions;
        
        $this->_data['listStatus'] = $this->config->item('status');
        //End
        
        //Where Parameter Filter	
        $where = array();
        if (!empty($array['groupId']) || $array['groupId'] != 0)
            $where['groupId'] = $array['groupId'];
        if (!empty($array['letter']) || $array['letter'] != 0)
            $where['letter'] = chr($array['letter']);
		if (!empty($array['userStatus']) || $array['userStatus'] != 0)
            $where['userStatus'] = $array['userStatus'] == '2' ? '0' : '1' ;
        
        //set sort dan order
        $list_sort = array ('userLogin', 'userId', 'userName', 'userStatus' );
        $list_order = array ('asc', 'desc' );
        if (in_array ( $array ['sort'], $list_sort ))
            $this->config->set_item ( 'user_sort', $array ['sort'] );
        else
            $array ['sort'] = $this->config->item ( 'user_sort' );
        if (in_array ( $array ['order'], $list_order ))
            $this->config->set_item ( 'user_order', $array ['order'] );
        else
            $array ['order'] = $this->config->item ( 'user_order' );
        
        //page
        $page = ($array ['page'] === false) ? 0 : $array ['page'];
        $page = ( int ) $page;
        $array ['page'] = $page;
        $this->_data ['page'] = $page;

        $array['groupId'] = $array['groupId'] ? $array['groupId'] : 0;
        $array['letter'] = $array['letter'] ? $array['letter'] : 0;
        $array['userStatus'] = $array['userStatus'] ? $array['userStatus'] : 0;
        //End
        
        $this->load->library('pagination');
        $total = $this->user_model->getCount ($where);
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
            
        $this->_data['limit'] = $array['page'] + 1;     
        $limit = $this->config->item('user_limit');
        $config = $this->config->item('paging');
        
        $groupId = $array['groupId'] ? $array['groupId'] : 0;
        $letter = $array['letter'] ? $array['letter'] : 0;
        $userStatus = $array['userStatus'] ? $array['userStatus'] : 0;
        $config ['base_url'] = site_url ( 'myuser/user/view/' . $this->uri->assoc_to_uri ( $array ) . '/page' );
        $config ['uri_segment'] = 4 + (2 * count ( $array ));
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();

        $dataView = $this->user_model->getList ( $where , $limit , $array['page'] , $array['sort'] , $array['order'] );
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;
		
        if ( empty($dataView) )
        	$this->_data['errorMessage'] = 'Maaf Data Tidak Ditemukan';
        	
        $this->_view ( 'myuser/userView' );
    }
    
    function userJSON(){
	$this->db->select('tbl_karyawan.nama_lengkap, tbl_karyawan.nip');
	$this->db->from('tbl_karyawan');
	$query = $this->db->get();
	$dataView = $query->result_array();
	$result = array();
	$result['count'] = count($dataView);
	$result['data'] = $dataView;
	$json = Zend_Json::encode($result);
	echo Zend_Json::prettyPrint($json, array("indent" => " "));die();
    }
    
    public function add() {
	if (! isAccess ( 'myuser', 'user', 'add' )) {
            redirect ( 'myuser/user/view' );
        }
        $this->load->model ( 'user_model' );
        $groupList = $this->user_model->getAllGroup();

        add_js_plugin ( 'jquery.password.min.js' );
        add_title ( $this->lang->line ( 'myuser_user_add_title' ) );
        $this->_addExecute ();
        //load status
        //$this->load->model('status_model');
        $this->_data ['statusRadios'] = array ('1' => $this->lang->line ( 'global_active' ), '0' => $this->lang->line ( 'global_pending' ) );
        $this->_data ['listGroup'] = $groupList;

        $this->_view ( "myuser/userAdd.php");
    }
    
    protected function _addExecute() {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div class="error">', '</div>' );
            $rules ['username'] = "required|trim|min_length[5]|max_length[20]";
            $rules ['password'] = "required|trim|min_length[6]";
            $rules ['name'] = "required|trim";
            $rules ['status'] = "required";
            
            $data = array (
                'userLogin' => trim ( $this->input->post ( 'username' ) ), 
                'userPassword' => trim ( $this->input->post ( 'password' ) ), 
                'userName' => trim ( $this->input->post ( 'name' ) ), 
                'userStatus' => trim ( $this->input->post ( 'status' ) ),
                'nip' => trim($this->input->post('nip')),
                'userDesc' => 'Administrator',
		'userKantor' => trim($this->input->post('kantor'))
            );
            $this->load->model ( 'user_model' );
            $this->load->model ( 'group_model' );
            
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_add_failed' ), $data ['userLogin'] );
            
            //get members_location
            //$members_location = members_get_cfg ( 'members_location' );
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->user_model->getByLogin ( $data ['userLogin'] )) {
                $result ['status'] = 'Username already exists';
            } elseif ($this->user_model->add ($data)) {
		##for getting the id of new username
		$newUserName = $this->user_model->getIdNewUser(trim($this->input->post('username')));
		$userIdNew = $newUserName[0]['userId'];
		#echo $userIdNew;
		$this->group_model->addUser($userIdNew,trim($this->input->post('group')));
                $result ['is_success'] = true;
                $result ['id'] = $this->db->insert_id ();
                $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_add_success' ), anchor ( 'myuser/user/detail/' . $result ['id'], $data ['userLogin'] ), $data ['userPassword'] );
            }
	    
            //$this->mylogs->log ( 'myuser', 'members', 'add', $result ['is_success'], $result ['status'], array ('members_id' => $result ['id'], 'members_username' => $data ['username'], 'members_data' => $data, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            if (isAjax ()) {
                //$this->load->helper('myjson');
                //myjson_header();
                //echo myjson_encode($result,true);
                echo Zend_Json::encode ( $result );
            } else {
                $this->_data ['errorMessage'] = $result ['status'];
                $this->_data ['isSuccess'] = $result ['is_success'];
            }
        }
    }
    
    function edit() {
        if (! isAccess ( 'myuser', 'user', 'edit' )) {
            redirect ( 'myuser/user/view' );
        }        
        $array = $this->uri->uri_to_assoc(3,array('id','time'));
        $id = $array['id'];
        if (!$id)
            show_404();
        //if (! isAccess ( 'myuser_user_edit', 'Members Edit' ) || ! $id)
        //    show_404 ();
        add_title ( $this->lang->line ( 'myuser_user_update_title' ) );
        $this->load->model ( 'user_model' );
        $userDetail = $this->user_model->get ( $id );
        if (! $userDetail)
            show_404 ();
        $this->_executeEdit ( $userDetail );
        
        //load status
        //$this->load->model('status_model');
        //tpl_assign('status_radios',$this->status_model->get_list());
        

        $this->_data ['dataEdit'] = $userDetail;
        $this->_view ( "myuser/userEdit.php" );
    }
    
    protected function _executeEdit($userDetail) {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div class="error">', '</div>' );
            $rules ['username'] = "required|trim|min_length[5]|max_length[20]";
            $rules ['name'] = "required|trim";
            $rules ['status'] = "required";
            
            $data = array (
                'userLogin' => trim ( $this->input->post ( 'username' ) ), 
                'userName' => trim ( $this->input->post ( 'name' ) ), 
                'userStatus' => trim ( $this->input->post ( 'status' ) ) 
            );
            $this->load->model ( 'user_model' );
            $this->load->model ( 'group_model' );
            
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_update_failed' ), $data ['userLogin'] );
            
            //get members_location
            //$members_location = members_get_cfg ( 'members_location' );
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->user_model->update ($userDetail->userId,$data)) {
                $result ['is_success'] = true;
                $result ['id'] = $userDetail->userId;
                $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_update_success' ), anchor ( 'myuser/user/detail/id/' . $result ['id'] . '/time/' . time(), $data ['userLogin'] ) );
            }
            //$this->mylogs->log ( 'myuser', 'members', 'add', $result ['is_success'], $result ['status'], array ('members_id' => $result ['id'], 'members_username' => $data ['username'], 'members_data' => $data, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            if (isAjax ()) {
                //$this->load->helper('myjson');
                //myjson_header();
                //echo myjson_encode($result,true);
                echo Zend_Json::encode ( $result );
            } else {
                $this->_data ['errorMessage'] = $result ['status'];
                $this->_data ['isSuccess'] = $result ['is_success'];
            }
        }
    }

    public function resetPasswd() {
        if (! isAccess ( 'myuser', 'user', 'resetpasswd' )) {
            redirect ( 'myuser/user/view' );
        }        
        $array = $this->uri->uri_to_assoc(3,array('id','time'));
        $id = $array['id'];
        if (!$id)
            show_404();
        //if (! isAccess ( 'myuser_user_resetpasswd', 'Members Reset Password' ) || ! $id)
        //    show_404 ();
        add_js_plugin ( 'jquery.password.min.js' );
        add_title ( $this->lang->line ( 'myuser_user_resetpasswd_title' ) );
        $this->load->model ( 'user_model' );
        $userDetail = $this->user_model->get ( $id );
        if (! $userDetail)
            show_404 ();
        $this->_executeResetPasswd ( $userDetail );
        $this->_data ['userDetail'] = $userDetail;
        $this->_view ( "myuser/userResetPasswd.php" );
    }
    
    protected function _executeResetPasswd($userDetail) {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div class="error">', '</div>' );
            $rules ['password'] = "required|trim|min_length[6]";
            
            $data = array (
                'userPassword' => trim ( $this->input->post ( 'password' ) )
            );
            $this->load->model ( 'user_model' );
            $this->load->model ( 'group_model' );
            
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_resetpasswd_failed' ), $userDetail->userLogin );            
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->user_model->update ($userDetail->userId,$data)) {
                $result ['is_success'] = true;
                $result ['id'] = $userDetail->userId;
                $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_resetpasswd_success' ), anchor ( 'myuser/user/detail/id/' . $userDetail->userId, $userDetail->userLogin ), $data ['userPassword'] );                
            }
            //$this->mylogs->log ( 'myuser', 'members', 'add', $result ['is_success'], $result ['status'], array ('members_id' => $result ['id'], 'members_username' => $data ['username'], 'members_data' => $data, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            if (isAjax ()) {
                //$this->load->helper('myjson');
                //myjson_header();
                //echo myjson_encode($result,true);
                echo Zend_Json::encode ( $result );
            } else {
                $this->_data ['errorMessage'] = $result ['status'];
                $this->_data ['isSuccess'] = $result ['is_success'];
            }
        }
    }

    
    function detail() {
        if (! isAccess ( 'myuser','user','detail' ))
            redirect ( 'myuser/user/view' );
        add_title ( $this->lang->line ( 'myuser_user_detail_title' ) );
        $array = $this->uri->uri_to_assoc(3,array('id','time'));
        $id = $array['id'];
        if (! $id)
            show_404 ();
        $this->load->model ( 'user_model' );
        $userDetail = $this->user_model->get ( $id );
        if (! $userDetail)
            show_404 ();
        $this->_data ['userDetail'] = $userDetail;
        
        //execute _add_members
        $this->_addAccess ( $id );
        $this->_addGroup ( $id );
        $this->_delGroup ( $id );
        //$this->_updateLocation($id);
        

        //load list members_access
        $list_access = $this->myindo_user->getListAccess ();
        //assign list_access
        $this->_data ['listAccess'] = $list_access;
        
        //load list members_access_to_members
        $list_user_access = $this->user_model->getListAccess ( $id );
        //assign list_user_access
        $this->_data ['listUserAccess'] = $list_user_access;
        
        //load group list
        $this->load->model ( 'group_model' );
        $group_list = $this->group_model->getList ();
        $group_list_myOptions = array ();
        foreach ( $group_list as $key => $value )
            $group_list_myOptions [$value['groupId']] = $value['groupName'];
        $this->_data ['groupListMyOptions'] = $group_list_myOptions;
        
        //load members_group_to_members
        $members_group_list = $this->user_model->getListGroup ( $id, true );
	
        $this->_data ['membersGroupList'] = $members_group_list;        
		
        $this->_view ( "myuser/userDetail" );
    }
    protected function _userLocation($userId) {
        if ($this->input->post ( 'submitLocation' ) && $this->input->post('submitLocation') != '' && $this->input->post ( 'kirim' ) == 'userDetailLocation') {
            $data = array(
                'kotama'=>'',
                'satuan'=>'',
                'unit'=>'',
                'bagian'=>'',
            	'subBagian'=>''
            );
            $data['kotama'] = $this->input->post('kotama');
            if ($this->input->post('kotama') && $this->input->post('satuan')) {
                $data['satuan'] = $this->input->post('satuan');
                if ($this->input->post('kotama') && $this->input->post('satuan') && $this->input->post('unit')) {
                    $data['unit'] = $this->input->post('unit');
                    if ($this->input->post('kotama') && $this->input->post('satuan') && $this->input->post('unit') && $this->input->post('bagian')) {
                        $data['bagian'] = $this->input->post('bagian');
                    	if ($this->input->post('kotama') && $this->input->post('satuan') && $this->input->post('unit') && $this->input->post('bagian') && $this->input->post('subBagian')) {
                        	$data['subBagian'] = $this->input->post('subBagian');
                    	}
                    }
                }
            }
            if ($this->user_model->updateConfig($userId,'userLocation',$data)) {
                $this->_data['errorMessage'] = 'Berhasil Update Lokasi';
                $this->_data['isSuccess'] = true;
            } else {
                $this->_data['errorMessage'] = 'Gagal Update Lokasi';
            }
        }
    }
    protected function _userAccessLocation($userId) {
        if ($this->input->post ( 'submitAccessLocation' ) && $this->input->post('submitAccessLocation') != '' && $this->input->post ( 'kirim' ) == 'userDetailAccessLocation') {
            $data = array(
                'kotama'=>'',
                'satuan'=>'',
                'unit'=>'',
                'bagian'=>'',
            	'subBagian'=>''
            );
            $data['kotama'] = $this->input->post('kotamaAccess');
            if ($this->input->post('kotamaAccess') && $this->input->post('satuanAccess')) {
                $data['satuan'] = $this->input->post('satuanAccess');
                if ($this->input->post('kotamaAccess') && $this->input->post('satuanAccess') && $this->input->post('unitAccess')) {
                    $data['unit'] = $this->input->post('unitAccess');
                    if ($this->input->post('kotamaAccess') && $this->input->post('satuanAccess') && $this->input->post('unitAccess') && $this->input->post('bagianAccess')) {
                        $data['bagian'] = $this->input->post('bagianAccess');
                    	if ($this->input->post('kotamaAccess') && $this->input->post('satuanAccess') && $this->input->post('unitAccess') && $this->input->post('bagianAccess') && $this->input->post('subBagianAccess')) {
                        	$data['subBagian'] = $this->input->post('subBagianAccess');
                    	}
                    }
                }
            }
            if ($this->user_model->updateConfig($userId,'userAccessLocation',$data)) {
                $this->_data['errorMessage'] = 'Berhasil Update Access Lokasi';
                $this->_data['isSuccess'] = true;
            } else {
                $this->_data['errorMessage'] = 'Gagal Update Access Lokasi';
            }
        }
    }    
    function _addAccess($id) {
        if ($this->input->post ( 'kirim' ) == 'userDetailAccess' && isAccess ( 'myuser', 'user','access' )) {
            $userAccess = $this->input->post ( 'access' );
            if ($this->user_model->addAccess ( $id, $userAccess )) {
                $this->_data ['errorMessage'] = 'Berhasil Update Access';
                $this->_data ['isSuccess'] = true;
                //$this->mylogs->log ( 'myuser', 'members', 'addAccess', 1, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            } else {
                $this->_data ['errorMessage'] = 'Gagal Update Access';
                //$this->mylogs->log ( 'myuser', 'members', 'addAccess', 0, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            }
        }
    
    }
    
    protected function _addGroup($id) {
        if ($this->input->post ( 'kirim' ) == 'members_group_add') {
            $this->load->model ( 'group_model' );
            $members_group_id = $this->input->post ( 'members_group_id' );
            if ($this->group_model->addMembers ( $id, $members_group_id )) {
                $this->_data ['errorMessage'] = 'Berhasil Tambah Group';
                $this->mylogs->log ( 'myuser', 'members', 'addGroup', 1, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            } else {
                $this->_data ['errorMessage'] = 'Gagal Tambah Group';
                $this->mylogs->log ( 'myuser', 'members', 'addGroup', 0, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            }
        }
    }
    
    protected function _delGroup($id) {
        if ($this->input->post ( 'kirim' ) == 'members_group_del') {
            $this->load->model ( 'group_model' );
            $members_group_id = $this->input->post ( 'members_group_id' );
            if ($this->group_model->delMembers ( $id, $members_group_id )) {
                $this->_data ['errorMessage'] = 'Berhasil Delete Group';
                $this->mylogs->log ( 'myuser', 'members', 'delGroup', 1, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            } else {
                $this->_data ['errorMessage'] = 'Gagal Delete Group';
                $this->mylogs->log ( 'myuser', 'members', 'delGroup', 0, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            }
        }
    }
    
    
    /*
    protected function _executeChPasswd() {
        if ($this->input->post ( 'kirim' ) == 'chpasswd') {
            $oldPasswd = trim ( $this->input->post ( 'oldPasswd' ) );
            $newPasswd = trim ( $this->input->post ( 'newPasswd' ) );
            $newPasswdConf = trim ( $this->input->post ( 'newPasswdConf' ) );
            $errors = array ();
            if (empty ( $oldPasswd ))
                $errors [] = 'Fill Old Password';
            if (empty ( $newPasswd ))
                $errors [] = 'Fill New Password';
            if (empty ( $newPasswdConf ))
                $errors [] = 'Retype New Password';
            if (! (empty ( $newPasswd ) || empty ( $newPasswdConf ))) {
                if ($newPasswd != $newPasswdConf)
                    $errors [] = 'New Password not match';
                elseif ($newPasswd == $oldPasswd || strpos ( $newPasswd, $oldPasswd ) !== false)
                    $errors [] = 'Password cant same';
            }
            if (! empty ( $newPasswd ) && strlen ( $newPasswd ) < 8)
                $errors [] = 'You must enter a minimum of 8 characters.';
            if ($errors) {
                $this->_data ['errorMessage'] = implode ( '<br />' . PHP_EOL, $errors );
            } elseif ($this->myindo_members->chpasswd ( $oldPasswd, $newPasswd ) === MEMBERS_CHPASSWD_SUCCESS) {
                $this->_data ['errorMessage'] = 'Success Change Password. Please Login Again.';
                $this->_data ['isSuccess'] = true;
                $this->myindo_members->logout ();
                header ( 'Refresh:5;url=' . site_url ( 'myuser/login' ) );
            } else {
                $this->_data ['errorMessage'] = 'Failed Change Password';
            }
            $this->mylogs->log ( 'myuser', 'members', 'chPasswd', $this->_data ['isSuccess'], $this->_data ['errorMessage'], array ('members_id' => $this->myindo_members->getId (), 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
        }
    }

    */

    protected function _executeProfile($userDetail) {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div class="message error">', '</div>' );
            $rules ['name'] = "required|trim";
            $data = array (
                'userLogin' => trim ( $this->input->post ( 'username' ) ), 
            );
            $this->load->model ( 'user_model' );
            $this->load->model ( 'group_model' );
            
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_update_failed' ), $data ['userLogin'] );
            
            //get members_location
            //$members_location = members_get_cfg ( 'members_location' );
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->user_model->update ($userDetail->userId,$data)) {
                $result ['is_success'] = true;
                $result ['id'] = $userDetail->userId;
                $result ['status'] = sprintf ( $this->lang->line ( 'myuser_user_update_success' ), anchor ( 'myuser/user/detail/id/' . $result ['id'] . '/time/' . time(), $data ['userLogin'] ) );
            }
            //$this->mylogs->log ( 'myuser', 'members', 'add', $result ['is_success'], $result ['status'], array ('members_id' => $result ['id'], 'members_username' => $data ['username'], 'members_data' => $data, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            if (isAjax ()) {
                //$this->load->helper('myjson');
                //myjson_header();
                //echo myjson_encode($result,true);
                echo Zend_Json::encode ( $result );
            } else {
                $this->_data ['errorMessage'] = $result ['status'];
                $this->_data ['isSuccess'] = $result ['is_success'];
            }
        }
    }    
    public function profile() {
        $id = getUserId();
        if (!$id)
            show_404();
        //if (! isAccess ( 'myuser_user_edit', 'Members Edit' ) || ! $id)
        //    show_404 ();
        add_title ( $this->lang->line ( 'myuser_user_update_title' ) );
        $this->load->model ( 'user_model' );
        $userDetail = $this->user_model->get ( $id );
        if (! $userDetail)
            show_404 ();
        $this->_executeProfile ( $userDetail );
        
        //load status
        //$this->load->model('status_model');
        //tpl_assign('status_radios',$this->status_model->get_list());
        

        $this->_data ['dataEdit'] = $userDetail;
        $this->_view ( "myuser/userProfile.php" );
    }
    public function online() {

        $array = $this->uri->uri_to_assoc(3,array('page'));
        if (!$array['page'])
            $array['page'] = 0;
        add_title('User Online');
        $this->load->module_model('myuser','user_model');
        $total = $this->user_model->getCountUserOnline();
        $limit = $this->config->item ( 'user_limit' );
        $this->load->library ( 'pagination' );
        $config = $this->config->item('paging');
        $config ['base_url'] = site_url ( 'myuser/user/online/page' );
        $config ['total_rows'] = $total;
        $config ['per_page'] = $limit;
        $config ['uri_segment'] = 4 ;
        $this->pagination->initialize ( $config );
        $pages_html = $this->pagination->create_links ();
        $this->_data ['pages_html'] = $pages_html;
        $listOnline = $this->user_model->getListUserOnline($limit,$array['page']);
        $this->_data['listOnline'] = $listOnline;
                
        $this->_view ( "myuser/userOnline.php" );        
    }    
    /*
    protected function _executeChPasswdOld($randomid=0)
    {
        if (! $randomid) show_404();
        if ($this->input->post('kirim') == 'kirim') {
            //load helper,library and model
            $this->load->helper('myjson');
            $this->load->library('validation');
            $this->load->model('myuser_members');

            //rule
            $rules['oldpasswd'] = 'required|trim';
            $rules['passwd'] = 'required|trim|min_length[6]|max_length[20]|matches[passwdconf]';
            $rules['passwdconf'] = 'required|trim';
            $this->validation->set_rules($rules);
            $this->validation->set_error_delimiters('<div class="error">', '</div>');

            //data status
            $data['status'] = $this->lang->line('myuser_user_chpasswd_failed');
            $data['is_success'] = false;
            $oldpasswd = trim($this->input->post('oldpasswd'));
            $passwd = trim($this->input->post('passwd'));
            $passwdconf = trim($this->input->post('passwdconf'));

            if ($this->validation->run() == FALSE) {
                $data['status'] = $this->validation->error_string;
            } elseif ($passwd <> $passwdconf) {
                $data['status'] = $this->lang->line('myuser_user_chpasswd_retype');
            } else {
                $status = $this->myindo->members->chpasswd($oldpasswd,$passwd);
                switch($status) {
                    case MEMBERS_CHPASSWD_FAILED:
                        break;
                    case MEMBERS_CHPASSWD_SUCCESS:
                        $data['is_success'] = true;
                        $this->myuser_members->update_config($this->myindo->members->get_id(),'myuser_user_forcepasswd',0);
                        $this->myindo->members->logout();
                        $data['status'] = $this->lang->line('myuser_user_chpasswd_success');
                        break;
                    case MEMBERS_CHPASSWD_NOTLOGIN :
                        $data['status'] = $this->lang->line('myuser_user_chpasswd_expire');
                        break;
                    case MEMBERS_CHPASSWD_WRONGPASSWD :
                        $data['status'] = $this->lang->line('myuser_user_chpasswd_wrongpass');
                        break;
                }
            }
            myjson_header();
            echo myjson_encode($data,true);
        }
    }
    */
    public function logs() {
        if (! isAccess ( 'myuser_user_log', 'Members Log' ))
            redirect ( '' );
        $array = $this->uri->uri_to_assoc ( 3, array ('page' ) );
        $array ['page'] = ( int ) $array ['page'];
        
        $where = array ();
        $limit = $this->config->item ( 'myuser_limit' );
        $this->_data ['uri_to_assoc'] = $array;
        $total = $this->mylogs->getCount ( $where );
        $this->_data ['listLogs'] = $this->mylogs->getList ( $where, $limit, $array ['page'] );
        
        unset ( $array ['page'] );
        $this->load->library ( 'pagination' );
        $config ['base_url'] = site_url ( 'myuser/members/logs/' . $this->uri->assoc_to_uri ( $array ) . '/page' );
        $config ['total_rows'] = $total;
        $config ['per_page'] = $limit;
        $config ['uri_segment'] = 4 + (2 * count ( $array ));
        $this->pagination->initialize ( $config );
        $pages_html = $this->pagination->create_links ();
        $this->_data ['pages_html'] = $pages_html;
        
        $this->_view ( 'myuser/membersLogs' );
    }
    
protected function _executePertanyaan() {
		$this->load->model('user_model');
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$listPertanyaan = $this->config->item('pertanyaan');
		if ($this->input->post ( 'tblSubmit' ) == 'Simpan' && $this->input->post ( 'kirim' ) == 'kirim') {
			
			$pertanyaan = array();
			$errors = array ();
			
			foreach ($listPertanyaan as $nama=>$label) {
				$pertanyaan [$nama] = trim ( $this->input->post ( $nama ));
				
				if (empty ( $pertanyaan [$nama] ))
					$errors [] = 'Input '.$label;
			}
			
			$data = array ();
			$data['userId'] = $array['id']; 
			$data['userConfigName'] = 'pertanyaan';
			$data['userConfigValue'] = serialize($pertanyaan);
		
			if ($errors) {
				$this->_data ['errorMessage'] = implode ( '<br />', $errors );
			} elseif ($this->user_model->addPertanyaan ( $array['id'], $data )) {
				$this->_data ['errorMessage'] = 'Berhasil Tambah';
				$this->_data ['isSuccess'] = true;
				$_POST = array ();
				$dataEdit = $this->user_model->getPertanyaan($array['id']);
        		$this->_data['dataEdit'] = (! empty($dataEdit['userConfigValue'])) ? unserialize($dataEdit['userConfigValue']) : array(); 
        
			} else {
				$this->_data ['errorMessage'] = 'Gagal Tambah';
			}
		
		}
	}    
    
public function pertanyaan() {
        if (! isAccess ( 'myuser', 'user', 'pertanyaan' ))
            redirect ( '' );
        $this->load->model('user_model');
		$array = $this->uri->uri_to_assoc ( 3, array ('id') );
        $this->_data['listPertanyaan'] = $this->config->item('pertanyaan');
        
        $dataEdit = $this->user_model->getPertanyaan($array['id']);
        $this->_data['dataEdit'] = (! empty($dataEdit['userConfigValue'])) ? unserialize($dataEdit['userConfigValue']) : array(); 
        
        $this->_executePertanyaan ();
        $this->_data['uri_to_assoc'] = $array;
        $this->_view ( 'myuser/pertanyaanForm' );
    }
}
