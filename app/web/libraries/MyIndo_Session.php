<?php
date_default_timezone_set('Asia/Jakarta');

function uc_words($str, $destSep='_', $srcSep='_')
{
    return str_replace(' ', $destSep, ucwords(str_replace($srcSep, ' ', $str)));
}

function __autoload($class)
{
    if (strpos($class, '/')!==false) {
        return;
    }
	if (strpos($class, 'Zend_')===false) {
                return;
    }
    $classFile = uc_words($class, DS).'.php';

    if (strpos($class, 'Web_') !== false) {
        if (defined('LIB_PATH'))
            if (file_exists(LIB_PATH . DIRECTORY_SEPARATOR . $classFile))
                include($classFile);
    } else {
        include($classFile);
    }
}

//require_once "Zend/Session.php";
$options = array(
	'save_path' => FCPATH .  'data' . DS . 'var' . DS . 'session',
    'name' => 'MyIndoSession'
);
//$options['cookie_domain'] = App::getConfig('cookie_domain');
Zend_Session::setOptions($options);
Zend_Session::start();

class MyIndo_Session {
    public function __construct()
    {
        $CI = get_instance();
        $CI->session = new Zend_Session_Namespace('MyIndoSession');
    }
    public function genSession($namespace)
    {
        $_namespace = strtolower($namespace);
        $CI = get_instance();
        $CI->$_namespace = new Zend_Session_Namespace($namespace);
    }
}
