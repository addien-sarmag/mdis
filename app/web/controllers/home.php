<?php

class Home extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->_data = array();
        isController('login');
        $this->load->model ( 'warning_model' );
       
    }

    function index() {
        if (!isLogged())
            redirect('myuser/login');
        $this->load->module_model('myuser','user_model');
        $listOnline = $this->user_model->getListUserOnline();
        $this->_data['listOnline'] = $listOnline;

        /*$warning=$this->warning_model->getTanggalJatuhTempo();
        $this->_data['warning']=$warning;
        if ($warning > 0 ) {
        	$listCustomer=$this->warning_model->getListCustomer();
        	$this->_data['listCustomer']=$listCustomer;
        }*/
      	$this->load->view('home',$this->_data);
    }
}
