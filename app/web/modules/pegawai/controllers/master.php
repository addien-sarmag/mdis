<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class master extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array (); 
        
        isController('pegawai','master');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/master/view' );
    }
     
    public function view() {
    	if (! isAccess ( 'pegawai', 'master', 'view'))
            redirect (); 
        
        $this->_view ( 'pegawai/masterView' );
    }
    
}
