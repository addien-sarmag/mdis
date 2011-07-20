<?php
if (! defined ( 'BASEPATH' ))
    show_404 ( 'No direct script access allowed' );

class Group extends Controller {
    function __construct() {
        parent::__construct ();
        $this->lang->load ( 'myuser' );
        $this->lang->load ( 'group' );
        isController('myuser','group');
        $this->_data ['menuon'] = 'group';
    }
    
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    
    /*
    function access()
    {
        if ($this->input->post('kirim') == 'kirim') {
            $id = $this->input->post('id');
            $this->myindo->members->set_members_group_id($id);
            $group = $this->myindo->members->get_members_group();
            if ($group) {
                $list_access = $this->myindo->members->get_list_members_access();
                $list_group_access = $this->myindo->members->get_list_members_group_access();
                tpl_assign('group',$group);
                tpl_assign('list_access',$list_access);
                tpl_assign('list_group_access',$list_group_access);
                echo tpl_fetch("myuser/group_access.php");
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }
    */
    
    public function view() {
        if (! isAccess ( 'myuser', 'group', 'view'))
            redirect ();
        add_title ( $this->lang->line ( 'myuser_group_view_title' ) );
        $this->_data['uri_to_assoc'] = $this->uri->uri_to_assoc(3,array('groupId', 'groupTitle', 'sort', 'id', 'action'));
        $this->_data ['data'] = $_POST;
        $this->_executeView ();
        $this->load->module_model ( 'myuser' , 'group_model' );
        $listGroup = $this->group_model->getList ();
        $this->_data ['listGroup'] = $listGroup;
        $this->_view ( "myuser/groupView.php" );
    }

    protected function _addExecute() {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div>', '</div>' );
            $rules ['title'] = "required|trim";
            $rules ['desc'] = "required|trim";

            $data = array (
                'groupName' => trim ( $this->input->post ( 'title' ) ), 
                'groupDesc' => trim ( $this->input->post ( 'desc' ) ) 
            );
            $this->load->model ( 'user_model' );
            $this->load->model ( 'group_model' );
            
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = sprintf ( $this->lang->line ( 'myuser_group_add_failed' ), $data ['groupName'] );
            
            //get members_location
            //$members_location = members_get_cfg ( 'members_location' );
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->group_model->getByTitle ( $data ['groupName'] )) {
                $result ['status'] = 'Group sudah ada.';
            } elseif ($this->group_model->add ($data)) {
                $result ['is_success'] = true;
                $result ['id'] = $this->db->insert_id ();
                $result ['status'] = sprintf ( $this->lang->line ( 'myuser_group_add_success' ), anchor ( 'myuser/group/detail/id/' . $result ['id'], $data ['groupName'] ) );
                $_POST = array();
            }

            if (isAjax ()) {
                echo Zend_Json::encode ( $result );die();
            } else {
                $this->_data ['errorMessage'] = $result ['status'];
                $this->_data ['isSuccess'] = $result ['is_success'];
            }
        }
    }
    
    
    public function add() {
        if (! isAccess ( 'myuser', 'group', 'add' )) {
            redirect ( 'myuser/group/view' );
        }
        add_title ( $this->lang->line ( 'myuser_group_add' ) );
        $this->_addExecute ();
        $this->_view ( "myuser/groupAdd.php" );
    }

    protected function _executeView() {
        $array = $this->uri->uri_to_assoc ( 3, array ('action', 'id' ) );
    }


    protected function _editExecute($id) {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div>', '</div>' );
            $rules ['title'] = "required|trim";
            $rules ['desc'] = "required|trim";

            $data = array (
                'groupName' => trim ( $this->input->post ( 'title' ) ), 
                'groupDesc' => trim ( $this->input->post ( 'desc' ) ) 
            );
            $this->load->model ( 'user_model' );
            $this->load->model ( 'group_model' );
            
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = sprintf ( $this->lang->line ( 'myuser_group_update_failed' ), $data ['groupName'] );
            
            //get members_location
            //$members_location = members_get_cfg ( 'members_location' );
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->group_model->update ($id, $data)) {
                $result ['is_success'] = true;
                $result ['id'] = $id;
                $groupDetail = $this->group_model->get ( $id );
                $this->_data['groupDetail'] = $groupDetail;                
                $result ['status'] = sprintf ( $this->lang->line ( 'myuser_group_update_success' ), anchor ( 'myuser/group/detail/id/' . $result ['id'], $data ['groupName'] ) );
            }

            if (isAjax ()) {
                echo Zend_Json::encode ( $result );die();
            } else {
                $this->_data ['errorMessage'] = $result ['status'];
                $this->_data ['isSuccess'] = $result ['is_success'];
            }
        }
    }

    public function edit() {
        if (! isAccess ( 'myuser', 'group', 'edit' )) {
            redirect ( 'myuser/group/view' );
        }
        add_title ( $this->lang->line ( 'myuser_group_edit' ) );
        $array = $this->uri->uri_to_assoc ( 3, array ('id' ) );
        $id = $array ['id'];
        if (! $id)
            show_404 ();
        $this->load->model ( 'group_model' );
        $groupDetail = $this->group_model->get ( $id );
        if (! $groupDetail)
            show_404 ();
        $this->_data['groupDetail'] = $groupDetail;
        $this->_editExecute ($id);
        $this->_view ( "myuser/groupEdit.php" );
    }
    
    function delete() {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->load->model ( 'myuser_group' );
            $this->validation->set_error_delimiters ( '<div class="error">', '</div>' );
            $rules ['id'] = "required|trim";
            $id = trim ( $this->input->post ( 'id' ) );
            $result = array ();
            $result ['is_success'] = false;
            $result ['status'] = 'Gagal Delete Group';
            $this->validation->set_rules ( $rules );
            if ($this->validation->run () == false) {
                $result ['status'] = $this->validation->error_string;
            } elseif ($this->myuser_group->del ( $id )) {
                $result ['is_success'] = true;
                $result ['status'] = 'Berhasil Delete Group';
                $result ['id'] = $id;
            } else {
            }
            $this->load->helper ( 'myjson' );
            myjson_header ();
            echo myjson_encode ( $result, true );
        } else {
            show_404 ();
        }
    }
    
    function detail() {
        if (! isAccess ( 'myuser', 'group', 'detail' )) {
            redirect ( 'myuser/group/view' );
        }
        add_title ( $this->lang->line ( 'myuser_group_detail' ) );
        $array = $this->uri->uri_to_assoc ( 3, array ('id','action' ,'userId' ) );
        $id = $array ['id'];
        if (! $id)
            show_404 ();
        $this->load->module_model ( 'myuser', 'group_model' );
        $this->load->module_model('myuser','user_model');
        $groupDetail = $this->group_model->get ( $id );
        if (! $groupDetail)
            show_404 ();
        $this->_data['groupDetail'] = $groupDetail;

        $this->_addAccess ( $id );
        $this->_addMembers ( $id );
        $this->_delMembers ( $id );


        //load list members_access_to_members
        $listGroupAccess = $this->group_model->getListAccess ( $id );
        //assign list_user_access
        $this->_data ['listGroupAccess'] = $listGroupAccess;
        
        $listUser = $this->group_model->getListUser($id);
        $this->_data ['listUser'] = $listUser;
        /*
        $this->_addMembers ( $id );
        $this->_delMembers ( $id );
        
        //assign group
        $this->_data ['group'] = $group;
        
        //assign list members_group_to_members
        $this->_data ['groupMembers'] = $this->myuser_group->getListMembers ( $id );
        
        //load model myuser_members
        $this->load->model ( 'myuser_members' );
        //get list members
        $list = $this->myuser_members->getList ();
        //convert list members to smarty options value
        $members_list = array ();
        foreach ( $list as $key => $value ) {
            $members_list [$value ['members_id']] = $value ['members_username'];
        }
        $this->_data ['membersListMyOptions'] = $members_list;
        
        //load list members_access
        $list_access = $this->myindo_members->getListMembersAccess ();
        //assign list_access
        $this->_data ['listAccess'] = $list_access;
        
        //load list members_access_to_members_group
        $list_group_access = $this->myuser_group->getListAccess ( $id );
        //assign list_group_access
        $this->_data ['listGroupAccess'] = $list_group_access;
        */

        $this->_view ( "myuser/groupDetail.php" );
    }
    
    protected function _addMembers($id) {
        if ($this->input->post ( 'kirim' ) == 'groupDetailUser') {
            $user = trim($this->input->post ( 'user' ));
            $errors = '';
            $userDetail = array();
            if (!empty($user)) {
                $userDetail = $this->user_model->getByLogin($user);
            } else {
                $errors = 'Masukkan User';
            }
            if (!empty($errors)) {
                $this->_data ['errorMessage'] = $errors;
            } elseif (!$userDetail) {
                $this->_data ['errorMessage'] = 'User tidak ada';
            } elseif ($this->group_model->addUser ( $userDetail->userId, $id )) {
                $this->_data ['errorMessage'] = 'Berhasil Tambah User kedalam Group';
            } else {
                $this->_data ['errorMessage'] = 'Gagal Tambah User kedalam Group';
            }
        }
    }
    
    function _delMembers($id) {
        $array = $this->uri->uri_to_assoc(3,array('action','userId'));
        if ($array['action'] && $array['userId'] && $array['action'] == 'delete') {
            if ($this->group_model->delUser ( $array['userId'], $id )) {
                $this->_data ['errorMessage'] = 'Berhasil Delete User dari dalam Group';
            } else {
                $this->_data ['errorMessage'] = 'Gagal Delete User dari dalam Group';
            }
        }
    }
    
    function _addAccess($id) {
        if ($this->input->post ( 'kirim' ) == 'groupDetailAccess' && isAccess ( 'myuser', 'group','access' )) {
            $userAccess = $this->input->post ( 'access' );
            if ($this->group_model->addAccess ( $id, $userAccess )) {
                $this->_data ['errorMessage'] = 'Berhasil Update Access';
                $this->_data ['isSuccess'] = true;
                //$this->mylogs->log ( 'myuser', 'members', 'addAccess', 1, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            } else {
                $this->_data ['errorMessage'] = 'Gagal Update Access';
                //$this->mylogs->log ( 'myuser', 'members', 'addAccess', 0, $this->_data ['errorMessage'], array ('members_id' => $id, 'username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
            }
        }
    
    }

}


