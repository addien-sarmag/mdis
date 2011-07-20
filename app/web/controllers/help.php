<?php

class help extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->_data = array();
        isController('login');
    }

    function index()
    {
        add_title('Bantuan');
        $this->load->view('help');
    }
    
    
   
}
