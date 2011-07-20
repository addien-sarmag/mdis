<?php

class Pages extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->_data = array();
        $this->load->module_library('personal','users');
        $this->load->module_model('personal','personal_model');
        $this->load->module_helper('personal','myusers');
    }
    protected function _view($template, $data = array(),$result=false)
    {
        if ($data && is_array($data)) {
            return $this->load->view($template,$data,$result);
        }
        return $this->load->view($template,$this->_data,$result);
    }
    function content($identifier = '')
    {
        if ($identifier == 'about-us') {
            add_title('About Us');
            $this->_view('pages/aboutUs',$this->_data);
            return;
        }
        if ($identifier == 'contact-us') {
            add_title('Contact Us');
            $this->_view('pages/contactUs',$this->_data);
            return ;
        }
    }
}
