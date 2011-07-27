<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MyIndoCMS
 *
 * MyIndoCMS is Product for PT MyIndo Cyber Media
 *
 * @package     MyIndoCMS
 * @author      PT MyIndo Cyber Media
 * @copyright   Copyright (c) 2007, PT MyIndo Cyber Media
 * @license     http://www.myindo.co.id/license.html
 * @link        http://www.myindo.co.id
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * MyIndoCMS User Class
 *
 * This class contains functions members
 *
 * @package     MyIndoCMS
 * @subpackage  Libraries
 * @category    Libraries
 * @author      PT MyIndo Cyber Media
 * @link        http://www.myindo.co.id/cms/libraries/members.html
 */

// ------------------------------------------------------------------------

include_once "Myindo_auth.php";
define('USER_CHPASSWD_FAILED',0);
define('USER_CHPASSWD_SUCCESS',1);
define('USER_CHPASSWD_NOTLOGIN',2);
define('USER_CHPASSWD_WRONGPASSWD',3);

class Myindo_user extends Myindo_auth
{
    protected $CI;
    protected $db;
    protected $user_id;
    protected $user_login;
    protected $user_password;
    protected $user_name;
    protected $user_desc;
    protected $user_status;
    protected $user_generate;
    protected $user_access_list;
    
    protected $auto_add_access = true;

    protected $_auth_prefix = "auth_user_";

    /**
     * Constructor
     *
     * Sets the $config data from the primary config.php file as a class variable
     *
     * @access  public
     * @param   string  the config file name
     * @param   boolean if configuration values should be loaded into their own section
     * @param   boolean true if errors should just return false, false if an error message should be displayed
     * @return  boolean if the file was successfully loaded or not
     */
    public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->db = $this->CI->db;
        $this->_initUser();
        log_message('debug', "User Class Initialized");
    }

    public function resetUser()
    {
        if (isset($this->user_id)) unset($this->user_id);
        if (isset($this->user_login)) unset($this->user_login);
        if (isset($this->user_password)) unset($this->user_password);
        if (isset($this->user_name)) unset($this->user_name);
        if (isset($this->user_desc)) unset($this->user_desc);
        if (isset($this->user_status)) unset($this->user_status);
        if (isset($this->user_generate)) unset($this->user_generate);
    }

    protected function _initUser()
    {
        $this->CI->load->helper('date');
        $this->CI->load->module_helper('myuser','myuser');
        //$this->auto_add_access =  true;
    }

    public function setUserId($id)
    {
        $this->user_id = $id;
    }

    public function getUserId()
    {
        return isset($this->user_id) ? $this->user_id : false;
    }

    public function setUserLogin($userLogin)
    {
        $this->user_login = strtolower($userLogin);
    }

    public function getUserLogin()
    {
        return $this->user_login;
    }

    public function setUserPassword($userPassword)
    {
        $this->user_password = $userPassword;
    }

    public function getUserPassword()
    {
        return $this->user_password;
    }

    public function setUserStatus($userStatus)
    {
        $this->user_status = $userStatus;
    }

    public function getUserStatus()
    {
        return $this->user_status;
    }

    public function setUserGenerate($userGenerate)
    {
        $this->user_generate = $userGenerate;
    }

    public function isLoginAllow($userLogin)
    {
        return preg_match($this->CI->config->item('user_allow'),$userLogin);
    }

    function insertAccess($data) {
        return $this->db->insert('Access',$data) && $this->db->affected_rows() > 0 ;
    }
    function getAccess($code,$data = array()) {
        $this->db->select('Access.*');
        $this->db->from('Access');
        $this->db->where('Access.accessCode',$code);
        $query = $this->db->get();
        if ($query) {
            if (($row = $query->row_array())) {
                if (isset($row['accessDesc']) && isset($data['accessDesc']) && $row['accessDesc'] <> $data['accessDesc']) {
                    $this->db->where('accessId',$row['accessId']);
                    $this->db->limit(1);
                    $this->db->update('Access',array('accessDesc'=>$data['accessDesc']));
                }
                return $row;
            } else {
                if ($data && $this->insertAccess($data)) {
                    return $this->getAccess($code,array());
                }
            }
        }
        return array();
    }
    function addAccess($module,$controller=false,$action=false,$title='')
    {
        if ($this->auto_add_access && is_string($module)) {
            $module = strtolower($module);
            $moduleDesc = $module;
            $moduleList = $this->CI->config->item('moduleList');
            if (isset($moduleList[$module]))
                $moduleDesc = $moduleList[$module];
            $moduleDetail = $this->getAccess($module,array('accessPid'=>0,'accessCode'=>$module,'accessName'=>$module,'accessDesc'=>$moduleDesc));
            if ($moduleDetail && $controller) {
                $controller = strtolower($controller);
                $controllerDesc = $controller;
                $controllerList = $this->CI->config->item('controllerList');
                if (isset($controllerList[$module . '_' . $controller]))
                    $controllerDesc = $controllerList[$module . '_' . $controller];
                $controllerDetail = $this->getAccess($module.'_'.$controller,array('accessPid'=>$moduleDetail['accessId'],'accessCode'=>$module.'_'.$controller,'accessName'=>$controller,'accessDesc'=>$controllerDesc));
                if ($controllerDetail && $action) {
                    $action = strtolower($action);
                    $actionDesc = $action;
                    $actionList = $this->CI->config->item('actionList');
                    if (isset($actionList[$module . '_' . $controller . '_' . $action]))
                        $actionDesc = $actionList[$module . '_' . $controller . '_' . $action];
                    $this->getAccess($module.'_'.$controller.'_'.$action,array('accessPid'=>$controllerDetail['accessId'],'accessCode'=>$module.'_'.$controller.'_'.$action,'accessName'=>$action,'accessDesc'=>$actionDesc));
                }
            }
            /*
            $this->CI->load->helper('url');
            $name = url_title($name,'underscore');
            $where = array(
                'members_access' => $name,
                'members_access_lang' => $this->language_id
            );
            $query = $this->db->getwhere('members_access',$where);
            if ($query->num_rows() < 1) {
                $data = array(
                    'members_access' => $name,
                    'members_access_lang' => $this->language_id,
                    'members_access_desc' => $desc
                );
                return $this->db->insert('members_access',$data);
            }
            */
            return FALSE;
        }
    }

    function getListAccess($parentId = 0) {
        $this->db->from('Access');
        $this->db->orderby('accessCode');
        $this->db->where('Access.accessPid',$parentId);
        $this->db->where("accessCode <> '' ");
        $query = $this->db->get();
        return $query->result_array();
    }
    function getListAccessx()
    {
        $this->db->from('Access');
        $this->db->orderby('accessCode');
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $mod = $row->accessCode;
                $mod = explode('_',$mod);
                $mod = $mod[0];
                $row->modulename = $mod;
                $list[] = $row;
            }
        }
        return $list;
    }

    
    function getUserAccessList($userId, $full=TRUE)
    {
        static $_userAccessList = null;
        if ($_userAccessList !== null) {
            return $_userAccessList;
        }
        /*
        $this->db->where('members.members_id', $members_id);
        $this->db->where('members_access.members_access_lang', $this->language_id);
        $this->db->select('members_access.*');
        $this->db->from('members');
        $this->db->join('members_access_to_members', 'members.members_id = members_access_to_members.members_id');
        $this->db->join('members_access', 'members_access.members_access_id = members_access_to_members.members_access_id');
        $this->db->orderby('members_access.members_access','ASC');
        */
        $this->db->select('Access.*');
        $this->db->from('User');
        $this->db->join('UserAccess','User.userId=UserAccess.userId');
        $this->db->join('Access','UserAccess.accessId = Access.accessId');
        $this->db->where('User.userId' , $userId);
        $this->db->order_by('Access.accessCode','ASC');
        
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach($query->result() AS $row) {
                if ($full)
                    $list[] = $row;
                else {
                    $accessCode = strtolower($row->accessCode);
                    $accessCode = explode('_',$accessCode);
                    if (count($accessCode) == 2 ) {
                        $list[] = $accessCode[0];
                    } elseif (count($accessCode) == 3 ) {
                        $list[] = $accessCode[0];
                        $list[] = $accessCode[0] . '_' . $accessCode[1];
                    }
                    $list[] = $row->accessCode;
                }
            }
        }
        if (count($list) > 1)
            $list = array_unique($list);
        $_userAccessList = $list;
        return $list;
    }


    function getUserAccessGroupList($userId,$full=TRUE)
    {
        static $_userAccessGroupList = null;
        if ($_userAccessGroupList !== null) {
            return $_userAccessGroupList;
        }
        /*
        $this->db->where('members.members_id', $members_id);
        $this->db->where('members_access.members_access_lang', $this->language_id);
        $this->db->where('members_group.members_group_lang', $this->language_id);
        $this->db->select('members_access.*');
        $this->db->from('members');
        //members.members_id = members_group_to_access.members_id
        $this->db->join('members_group_to_members', 'members.members_id = members_group_to_members.members_id');
        //members_group.members_group_id = members_group_to_members.members_group_id
        $this->db->join('members_group', 'members_group.members_group_id = members_group_to_members.members_group_id');
        //members_group.members_group_id = members_access_to_members_group.members_group_id
        $this->db->join('members_access_to_members_group', 'members_group.members_group_id = members_access_to_members_group.members_group_id');
        //members_access.members_access_id = members_access_to_members_group.members_access_id
        $this->db->join('members_access', 'members_access.members_access_id = members_access_to_members_group.members_access_id');
        $this->db->orderby('members_access.members_access','ASC');
        */
        $this->db->select('Access.*');
        $this->db->from('User');
        $this->db->join('UserGroup','User.userId = UserGroup.userId');
        $this->db->join('Group','UserGroup.groupId = Group.groupId');
        $this->db->join('GroupAccess','GroupAccess.groupId = Group.groupId');
        $this->db->join('Access','Access.accessId = GroupAccess.accessId');
        $this->db->where('User.userId',$userId);
        $this->db->order_by('Access.accessCode','ASC');

        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach($query->result() AS $row) {
                if ($full) {
                    $list[] = $row;
                } else {
                    $accessCode = strtolower($row->accessCode);
                    $accessCode = explode('_',$accessCode);
                    if (count($accessCode) == 2 ) {
                        $list[] = $accessCode[0];
                    } elseif (count($accessCode) == 3 ) {
                        $list[] = $accessCode[0];
                        $list[] = $accessCode[0] . '_' . $accessCode[1];
                    }
                    $list[] = strtolower($row->accessCode);
                }
            }
        }
        $_userAccessGroupList = $list;
        return $list;
    }

    function getUserGroupList($userId,$full=TRUE)
    {
        /*
        $this->db->where('members.members_id', $members_id);
        $this->db->where('members_group.members_group_lang', $this->language_id);
        $this->db->select('members_group.*');
        $this->db->from('members');
        //members.members_id = members_group_to_access.members_id
        $this->db->join('members_group_to_members', 'members.members_id = members_group_to_members.members_id');
        //members_group.members_group_id = members_group_to_members.members_group_id
        $this->db->join('members_group', 'members_group.members_group_id = members_group_to_members.members_group_id');
        $this->db->orderby('members_group.members_group_title','ASC');
        $query = $this->db->get();
        */
        $this->db->select('Group.*');
        $this->db->from('User');
        $this->db->join('UserGroup','User.userId = UserGroup.userId');
        $this->db->join('Group','UserGroup.groupId = Group.groupId');
        $this->db->where('User.userId',$userId);
        $this->db->order_by('Group.groupDesc','ASC');

        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach($query->result() AS $row) {
                if ($full)
                    $list[] = $row;
                else
                    $list[] = strtolower($row->groupDesc);
            }
        }
        return $list;
    }

    function setId($id)
    {
        $this->setUserId($id);
    }

    function getId()
    {
        return $this->getUserId();
    }

    function setUsername($username)
    {
        $this->setUserLogin($username);
    }

    function getUsername()
    {
        return $this->getUserLogin();
    }

    function setGenerate($generate)
    {
        $this->setUserGenerate($generate);
    }

    function getLogin()
    {
        //if (! $this->is_username_allow($this->members_username)) return array();
        $this->db->select('userId AS id,userLogin AS username, userPassword AS passwd,userName as name,userStatus as status');
        $this->db->where('userLogin', $this->user_login);
        $this->db->where('userStatus', 1);
        $this->db->from('User');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() >0) {
            $row = $query->row();
            $result = array(
                'id' => $row->id,
                'username' => $row->username,
                'passwd' => $row->passwd,
                'status' => $row->status,
                'name' => $row->name
            );
            return $result;
        }
        return array();
    }

    function getUserOnline() {
        $this->db->select('count(User.userId) as count');
        $this->db->from('User');
        $this->db->join('UserIdentify','User.userId = UserIdentify.userId');        
        $expire = (int) ($this->CI->config->item('auth_expire_login') * 60);
        if (!$expire)
            $export  = 5 * 60;
        $now = time();
        $sql = "(UserIdentify.userTimeAccess + $expire > $now)";
        $this->db->where($sql);
        $query = $this->db->get();
        if ($query && ($row = $query->row_array()))
            return $row['count'];
        return 0;
    }
    function getAuth()
    {
        $id         = $this->user_id;
        $username   = $this->user_login;
        $generate   = $this->user_generate;
        $language_id= $this->language_id;
        $this->db->select('User.*');
        $array = array(
            'User.userId' => $id,
            'User.userLogin' => $username,
            'User.userStatus' => 1,
            'UserIdentify.userGenerate' => $generate
        );
        $this->db->where($array);
        $expire = (int) ($this->CI->config->item('auth_expire_login') * 60);
        if (!$expire)
            $export  = 5 * 60;
        $now = time();
        $sql = "(UserIdentify.userTimeAccess + $expire > $now)";
        $this->db->where($sql);
        $this->db->from('User');
        $this->db->join('UserIdentify','User.userId = UserIdentify.userId');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->setUserId($row->userId);
            $this->setUserLogin($row->userLogin);
            $this->user_name = $row->userName;
            return TRUE;
        }
        return FALSE;
    }

    function insertAuth()
    {
        $this->db->where('userId', $this->user_id);
        $query = $this->db->get('UserIdentify');
        if ($query->num_rows() < 1) {
            $data = array(
                'userId' => $this->user_id,
                'userTimeAccess' => time(),
                'userIp' => $this->CI->input->ip_address(),
                'userGenerate' => '',
                'userIdentifyModifiedTime' => time()
            );
            $this->db->insert('UserIdentify', $data);
        }
    }

    function updateAuth()
    {
        $this->db->where('userId', $this->user_id);
        $data = array(
            'userTimeAccess' => time(),
            'userIp' => $this->CI->input->ip_address(),
            'userGenerate' => $this->user_generate
        );
        return $this->db->update('UserIdentify', $data);
    }

    function getAccessList()
    {
        $this->members_access_list = array();
        $access_list = $this->getUserAccessList($this->user_id, FALSE);
        $access_group_list = $this->getUserAccessGroupList($this->user_id, FALSE);
        $result = array();
        if ($access_list && $access_group_list) {
            $result = array_merge($access_list,$access_group_list);
        } elseif ($access_list) {
            $result = $access_list;
        } elseif ($access_group_list) {
            $result = $access_group_list;
        }
        if ($result) {
            $result = array_unique($result);
            sort($result);
        }
        $this->members_access_list = $result;
        return $result;
    }

    function getModuleList()
    {
        $module_list = array();
        $members_access_list = $this->members_access_list;
        if (is_array($members_access_list) && $members_access_list)
        foreach ($members_access_list AS $access) {
            $module = explode("_",$access);
            if (! in_array($module[0],$module_list))
                $module_list[] = $module[0];
            if (count($module) > 2) {
                $name = $module[0] . "_" . $module[1];
                if (! in_array($name, $module_list))
                    $module_list[] = $name;
            }
        }
        $this->members_access_list = array();
        return $module_list;
    }

    function getGroupList()
    {
        $result = $this->getUserGroupList($this->user_id, FALSE);
        return $result;
    }

    function getConfigList()
    {
        return array();
        if (! $this->user_id) return array();
        $this->db->from('members_config');
        $this->db->where('members_id', $this->members_id);
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0)
        foreach($query->result() AS $row)
            $list[$row->members_config_name] = $row->members_config_value;
        return $list;
    }


    var $members_group_id;
    var $members_group_title;
    var $members_group_lang;
    var $members_group_desc;

    function resetMembersGroup()
    {
        if (isset($this->members_group_id)) unset($this->members_group_id);
        if (isset($this->members_group_title)) unset($this->members_group_title);
        if (isset($this->members_group_desc)) unset($this->members_group_desc);
    }

    function setMembersGroupId($members_group_id)
    {
        $this->members_group_id = $members_group_id;
    }

    function setMembersGroupTitle($members_group_title)
    {
        $this->members_group_title = $members_group_title;
    }

    function setMembersGroupDesc($members_group_desc)
    {
        $this->members_group_desc = $members_group_desc;
    }

    function setMembersGroupInit($data)
    {
        $list = array('id','title','lang','desc');
        if (!(is_array($data) && $data)) return false;
        $this->reset_members_group();
        foreach($data AS $key=>$value) 
        if (in_array($key,$list)) {
            $name = "members_group_".$key;
            $this->$name = $value;
        }
    }

    function addMembersGroup($data=array())
    {
        $this->CI->load->helper('date');
        $this->set_members_group_init($data);
        $data = array(
            'members_group_title' => $this->members_group_title,
            'members_group_lang' => $this->language_id,
            'members_group_desc' => $this->members_group_desc,
            'members_group_ctime' => now(),
            'members_group_mtime' => now()

        );
        return ($this->db->insert('members_group',$data) && ($this->db->affected_rows() > 0));
    }
    
    function getMembersGroup($data=array())
    {
        $this->set_members_group_init($data);
        if (!isset($this->members_group_id)) return array();
        $this->db->where('members_group_id', $this->members_group_id);
        $this->db->where('members_group_lang', $this->language_id);
        $this->db->limit(1);
        $this->db->from('members_group');
        $query = $this->db->get();
        if ($query->num_rows() >0)
            return $query->row();
        return array();
    }

    function updateMembersGroup($data=array())
    {
        $this->CI->load->helper('date');
        $this->set_members_group_init($data);
        if (!isset($this->members_group_id)) return false;
        $data = array(
            'members_group_title' => $this->members_group_title,
            'members_group_desc' => $this->members_group_desc,
            'members_group_mtime' => now()
        );
        $this->db->where('members_group_id', $this->members_group_id);
        $this->db->where('members_group_lang', $this->language_id);
        return ($this->db->update('members_group',$data) && ($this->db->affected_rows() > 0));
    }

    function getListMembersGroupAccess($data=array())
    {
        $this->set_members_group_init($data);
        if (!isset($this->members_group_id)) return array();
        $this->db->select('members_access_to_members_group.members_access_id');
        $this->db->from('members_access_to_members_group');
        //members_access.members_access_id = members_access_to_members_group.members_access_id
        $this->db->join('members_access', 'members_access.members_access_id = members_access_to_members_group.members_access_id');
        $this->db->where('members_access_to_members_group.members_group_id',$this->members_group_id);
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach($query->result() AS $row) {
                $list[] = $row->members_access_id;
            }
        }
        return $list;
    }

    function getListMembersGroup()
    {
        $this->db->select('*');
        $this->db->where('members_group_lang',$this->language_id);
        $this->db->from('members_group');
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach($query->result() AS $row) {
                $list[] = $row;
            }
        }
        return $list;
    }

    function delMembersGroup($id='')
    {
        $this->CI->load->helper('date');
        if($id) $this->members_group_id = $id;
        if (!isset($this->members_group_id)) return false;
        $this->db->where('members_group_id', $this->members_group_id);
        $this->db->where('members_group_lang', $this->language_id);
        return ($this->db->delete('members_group') && ($this->db->affected_rows() > 0));
    }

    /*
     return code
        0 = FAILED
        1 = SUCCESS
        2 = NOT LOGIN
        3 = OLD PASSWORD WRONG
        4 = 
    */
    function chpasswd($oldpasswd,$newpasswd)
    {
        if (!$oldpasswd || !$newpasswd) return USER_CHPASSWD_FAILED;
        if (! $this->isRegistered()) return USER_CHPASSWD_NOTLOGIN;
        $login = $this->getLogin();
        if (! $login) return USER_CHPASSWD_FAILED;
        $_oldpasswd = crypt($oldpasswd,$login['passwd']);
        if ($_oldpasswd <> $login['passwd']) return USER_CHPASSWD_WRONGPASSWD;
        if ($this->db->platform() <> 'postgre')
        $this->db->limit(1);
        $this->db->where('members_id',$login['id']);
        $this->db->where('members_id',$this->getId());
        $this->db->where('members_passwd',$_oldpasswd);
        $this->db->set('members_passwd',crypt($newpasswd));
        return $this->db->update('members') && ($this->db->affected_rows() > 0 ) ? USER_CHPASSWD_SUCCESS : USER_CHPASSWD_FAILED;
    }


}

