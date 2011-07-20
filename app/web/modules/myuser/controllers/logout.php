<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Logout extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    function index() {
        //$this->mylogs->log ( 'myuser', 'members', 'logout', 1, 'Logout', array ('username' => $this->myindo_members->getUsername () ), $this->myindo_members->getId () );
        $this->myindo_user->logout ();
        redirect ( 'myuser/login' );
    }

}


