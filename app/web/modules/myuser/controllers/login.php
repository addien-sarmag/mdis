<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Login extends Controller {
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
    protected function _redirect($action) {
        redirect ( 'myuser/login/' . $action );
    }
    protected function url($action) {
        return site_url ( 'myuser/login/' . $action );
    }
    protected function _executeLogin() {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $this->load->library ( 'validation' );
            $this->validation->set_error_delimiters ( '<div class="notification error">', '</div>' );
            $rules ['username'] = "required|trim";
            $rules ['password'] = "required|trim";
            
            $this->validation->set_rules ( $rules );
            $this->load->library ( 'validation' );
            $data = array ("status" => '<div class="notification error">' . $this->lang->line ( 'login_failed' ) . '</div>', "is_success" => false );
            if ($this->validation->run () == FALSE) {
                $data ['status'] = $this->validation->error_string;
            } else {
                $login = $this->myindo_user->login ( $this->input->post ( 'username' ), $this->input->post ( 'password' ) );
                if ($login == MYINDO_AUTH_SUCCESS) {
                    $this->load->module_model('myuser','user_model');
                    $this->user_model->addUserLogin(getUserId());
                    $data ['status'] = '<div class="notification success">' . $this->lang->line ( 'login_success' ) . '</div>';
                    $data ['is_success'] = true;
                    //$this->mylogs->log ( 'myuser', 'members', 'login', 1, $data ['status'], array ('username' => $this->input->post ( 'username' ) ), $this->myindo_user->getId () );
                    //echo $this->myindo_user->getId();
                    //die();
                    if (isset ( $this->session->uri_string ) && $this->session->uri_string) {
                        $url = site_url ( trim ( $this->session->uri_string, '/' ) );
                    } else {
                        $url = site_url ();
                    }
                    add_content ( 'head_meta', '<meta http-equiv="refresh" content="2;url=' . $url . '">' );
                    //echo 'berhasil login';
                //header('Location: ' . site_url());
                } else {
                    //echo $this->myindo_user->getId();die();
                    //$this->mylogs->log ( 'myuser', 'members', 'login', 0, $data ['status'], array ('username' => $this->input->post ( 'username' ) ) );
                }
            }
            $this->_data ['errors'] = $data ['status'];
            $this->_data ['is_success'] = $data ['is_success'];
        }
    }
    public function index() {
        if (isLogged ( false ))
            redirect ( '' );
            //$this->load->('myuser','login');
        //$this->lang->module_load('myuser','myuser');
        //echo $this->lang->line('myuser_index_title');
        $this->_data ['is_success'] = false;
        add_title ( 'Login' );
        $this->_executeLogin ();
        $this->_view ( 'myuser/loginIndex' );
    }
}