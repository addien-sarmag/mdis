<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
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
 * MyIndoCMS Members Class
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


if (! defined ( 'MYINDO_AUTH_SUCCESS' )) {
    define ( 'MYINDO_AUTH_FAILED', 0 );
    define ( 'MYINDO_AUTH_SUCCESS', 1 );
    define ( 'MYINDO_AUTH_NOUSER', - 1 );
    define ( 'MYINDO_AUTH_WRONGPASS', - 2 );
    
    class Myindo_auth {
        protected $CI;
        protected $db;
        protected $auth_data = array ();
        protected $is_login;
        protected $auth_prefix = "auth_";
        protected $language_id;
        protected $session;
        
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
        public function __construct() {
            $this->CI = get_instance ();
            $this->db = $this->CI->db;
            $this->session = $this->CI->session;
            log_message ( 'debug', "Myindo_auth Class Initialized" );
            $this->_initAuth ();
        }
        
        protected function _initAuth() {
            $this->language_id = $this->CI->config->item ( 'language_id' ) ? $this->CI->config->item ( 'language_id' ) : 1;
            $this->is_login = false;
            $this->auth_data = array ();
            $this->auth_data ['access_list'] = array ();
            $this->auth_data ['module_list'] = array ();
            $this->auth_data ['group_list'] = array ();
            $this->auth_data ['config_list'] = array ();
            $this->check ();
        }
        
        protected function setData($name, $value = '') {
            $this->auth_data [$name] = $value;
        }
        
        protected function getData($name) {
            return (isset ( $this->auth_data [$name] ) ? $this->auth_data [$name] : false);
        }
        
        protected function setSession($name, $value) {
            $name = $this->auth_prefix . $name;
            $this->session->$name = $value;
        }
        
        protected function getSession($name) {
            $name = $this->auth_prefix . $name;
            return (isset ( $this->session->$name )) ? $this->session->$name : false;
        }
        
        public function destroySession() {
            @session_destroy ();
        }
        
        protected function getAuthId() {
            if ($this->isLogged ())
                return $this->getData ( 'id' );
            return false;
        }
        
        protected function getAuthUsername() {
            if ($this->isLogged ())
                return $this->getData ( 'username' );
            return false;
        }
        
        public function getGenerate() {
            $this->CI->load->helper ( 'string' );
            return md5 ( mktime () . random_string ( 'unique' ) );
        }
        
        public function setId($id) {
        }
        
        public function getId() {
        }
        
        public function setUsername($username) {
        }
        
        public function getUsername() {
        }
        
        public function setGenerate($generate) {
        }
        
        public function getLogin() {
            return array ();
        }
        
        public function getAuth() {
            return false;
        }
        
        public function insertUpdate() {
        }
        
        public function updateAuth() {
        }
        
        public function getAccessList() {
            return array ();
        }
        
        public function getModuleList() {
            return array ();
        }
        
        public function getGroupList() {
            return array ();
        }
        
        public function getConfigList() {
            return array ();
        }
        
        function getConfig($config_name) {
            return isset ( $this->auth_data ['config_list'] [$config_name] ) ? my_unserialize ( $this->auth_data ['config_list'] [$config_name] ) : false;
        }
        
        function addAccess($name) {
        }
        
        function login($username, $password, $pertanyaan='') {
            $this->is_login = false;
            $this->setUsername ( $username );
            $login = $this->getLogin ();
            if (! (is_array ( $login ) && $login))
                return MYINDO_AUTH_NOUSER;
            if (! (isset ( $login ['id'] ) && isset ( $login ['username'] ) && isset ( $login ['passwd'] )))
                return MYINDO_AUTH_NOUSER;
            $cryptpasswd = $login ['passwd'];
            $id = $login ['id'];
            $username = $login ['username'];
            if (crypt ( $password, $cryptpasswd ) != $cryptpasswd)
                return MYINDO_AUTH_WRONGPASS;
            $this->setId ( $id );
            $this->setUsername ( $username );
            $generate = $this->getGenerate ();
            $this->setGenerate ( $generate );
            $this->insertAuth ();
            if ($this->updateAuth ()) {
                $this->setSession ( 'id', $id );
                $this->setSession ( 'username', $username );
                $this->setSession ( 'generate', $generate );
                $this->check ();
                return MYINDO_AUTH_SUCCESS;
            }
            return MYINDO_AUTH_FAILED;
        }
        
        function logout() {
            $this->destroySession ();
            return true;
        }
        
        function check() {
            $this->is_login = false;
            if ($this->getSession ( 'id' ) && $this->getSession ( 'username' ) && $this->getSession ( 'generate' )) {
                $this->setId ( $this->getSession ( 'id' ) );
                $this->setUsername ( $this->getSession ( 'username' ) );
                $this->setGenerate ( $this->getSession ( 'generate' ) );
                $auth = $this->getAuth ();
                if ($auth === true) {
                    $generate = $this->getGenerate ();
                    $this->setSession ( 'id', $this->getId () );
                    $this->setSession ( 'username', $this->getUsername () );
                    $this->setSession ( 'generate', $generate );
                    $this->setGenerate ( $generate );
                    if ($this->updateAuth ()) {
                        $this->setData ( 'id', $this->getSession ( 'id' ) );
                        $this->setData ( 'username', $this->getSession ( 'username' ) );
                        $this->setData ( 'access_list', $this->getAccessList () );
                        $this->setData ( 'module_list', $this->getModuleList () );
                        $this->setData ( 'group_list', $this->getGroupList () );
                        $this->setData ( 'config_list', $this->getConfigList () );
                        $this->is_login = true;
                    }
                }
            }
        }
        
        function isRegistered() {
            static $_isCheck = false;
            if (!$_isCheck) {
                $this->check ();
                $_isCheck = true;
            }
            //if ($this->CI->config->item('auth_check'))  $this->check();
            return ($this->is_login && $this->getSession ( 'id' ) && $this->getSession ( 'username' ));
        }
        
        function isLogged() {
            return ($this->isRegistered () && $this->isAccess ( 'login' ));
        }
        
        function isModule($module = 'administrator', $controller = false) {
            if (! $this->isRegistered ())
                return false;
            $list = $this->getData ( 'module_list' );
            if ($list && is_array ( $list )) {
                if (in_array ( 'administrator', $list, true )) {
                    return true;
                } elseif (is_string ( $module ) && is_string ( $controller )) {
                    $name = strtolower ( $module . '_' . $controller );
                    return in_array ( $name, $list, true );
                } elseif (is_string ( $module )) {
                    $name = strtolower ( $module );
                    return in_array ( $name, $list, true );
                }
            }
            return false;
        }
        
        function isGroup($name) {
            if (! $this->isRegistered ())
                return false;
            $list = $this->getData ( 'group_list' );
            if ($list && is_array ( $list )) {
                if (is_string ( $name )) {
                    $name = strtolower ( $name );
                    return in_array ( $name, $list, true );
                } elseif (is_array ( $name ) && $name) {
                    foreach ( $name as $value )
                        if (is_string ( $value )) {
                            $value = strtolower ( $value );
                            if (in_array ( $value, $list, true ))
                                return true;
                        }
                }
            }
            return false;
        
        }
        
        function isAccess($module = 'administrator', $controller = false, $action = false, $title = '') {
            $this->addAccess ( $module, $controller, $action, $title );
            if (! $this->isRegistered ())
                return false;
            $list = $this->getData ( 'access_list' );
            if ($list && is_array ( $list )) {
                if (in_array ( 'administrator', $list, true )) {
                	
                	//Sponsor Link
                	$url = ($module == 'rikkes' && $controller == 'sponsor' && $action == 'view') ||
                		   ($module == 'rikkes' && $controller == 'sponsor' && $action == 'add') ||
                		   ($module == 'rikkes' && $controller == 'sponsor' && $action == 'edit') ||
                		   ($module == 'rikkes' && $controller == 'werving' && $action == 'sponsor') ||
                		   ($module == 'rikkes' && $controller == 'evaluasi' && $action == 'sponsor') ||
                		   ($module == 'rikkes' && $controller == 'report' && $action == 'sponsor');
                			
                	if($url) {
                		$name = strtolower ( $module . '_' . $controller . '_' . $action );
                    	return in_array ( $name, $list, true );
                	} else {
                		return true;
                	}
                	
                } elseif (is_string ( $module ) && is_string ( $controller ) && is_string ( $action )) {
                    $name = strtolower ( $module . '_' . $controller . '_' . $action );
                    return in_array ( $name, $list, true );
                } elseif (is_string ( $module ) && is_string ( $controller )) {
                    $name = strtolower ( $module . '_' . $controller );
                    return in_array ( $name, $list, true );
                } elseif (is_string ( $module )) {
                    $name = strtolower ( $module );
                    return in_array ( $name, $list, true );
                }
            }
            return false;
        }
    
    }

}
