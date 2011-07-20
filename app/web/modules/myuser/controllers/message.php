<?php
if (! defined ( 'BASEPATH' ))
    show_404 ( 'No direct script access allowed' );

class Message extends Controller {
    public function __construct() {
        parent::__construct ();
        isController('myuser','message');
        $this->_data = array();
        $this->load->module_model('myuser','message_model');
        
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    
    function index() {
        redirect('myuser/message/view');
    }
    function view() {
        if (! isAccess ( 'myuser', 'message', 'view'))
            redirect ();
        $array = $this->uri->uri_to_assoc(3,array('page','id','action','tipe','status'));
        if (!$array['page'])
            $array['page'] = 0;
        //status  0 = read , 1 = unread
        $tipeList = array(
            'inbox' => 'Inbox',
            'outbox' => 'Outbox'
        );
        if (!$array['tipe'] || !isset($tipeList[$array['tipe']]))
            $array['tipe'] = 'inbox';
        $where = array();
        $where['userMessageTipe'] = $array['tipe'];
        if ($array['tipe'] == 'inbox') {
            $where['userIdTo'] = getUserId();
            add_title('Message Inbox');
        }
        if ($array['tipe'] == 'outbox') {
            $where['userIdFrom'] = getUserId();
            add_title('Message Outbox');
        }
        
        $limit = 10;
        $total = $this->message_model->getCount($where);
        $listMessage = $this->message_model->getList($where,$limit,$array['page']);
        $this->_data['listMessage'] = $listMessage;

        $this->load->library ( 'pagination' );
        $config = $this->config->item('paging');
        $this->_data['uri_to_assoc'] = $array;
        unset($array['page']);
        $config ['base_url'] = site_url ( 'myuser/message/view/' . $this->uri->assoc_to_uri ( $array ) . '/page' );
        $config ['total_rows'] = $total;
        $config ['per_page'] = $limit;
        $config ['uri_segment'] = 4 + (2 * count ( $array ));
        $this->pagination->initialize ( $config );
        $pages_html = $this->pagination->create_links ();
        $this->_data ['pages_html'] = $pages_html;
        $this->_view ( 'myuser/messageView' );
    }
    protected function _addExecute() {
        if ($this->input->post ( 'kirim' ) == 'kirim') {
            $username = trim($this->input->post('username'));
            $username = rtrim($username,';');
            $title = trim($this->input->post('title'));
            $message = trim($this->input->post('message'));
            $errors = array();
            if (empty($title))
                $errors[] = 'Masukkan Judul';
            if (empty($message))
                $errors[] = 'Masukkan Message';
            $listUser = array();
            if (empty($username)) {
                $errors[] = 'Masukkan Username';
            } else {
                $_listUser = explode(';' , $username);
                $this->load->module_model('myuser','user_model');
                if ($_listUser)
                    foreach($_listUser as $row) {
                        $userDetail = $this->user_model->getByLogin($row);
                        if (!$userDetail)
                            $errors[] = 'User ' . $row. ' tidak ada';
                        if ($userDetail)
                            $listUser[] = $userDetail;
                    }
                if (!$listUser) {
                    $errors[] = 'User Kosong';
                }
            }
            if ($errors) {
                $this->_data ['errorMessage'] = implode('<br />' , $errors);
            } else {
                $this->db->trans_begin();
                foreach($listUser as $row) {
                    $data = array();
                    $data['userIdFrom'] = getUserId();
                    $data['userIdTo'] = $row->userId;
                    $data['userMessageTipe'] = 'inbox';
                    $data['userMessageTitle'] = $title;
                    $data['userMessageContent'] = $message;
                    $data['userMessageStatus'] = 1;
                    $this->message_model->add($data);
                    $data = array();
                    $data['userIdFrom'] = getUserId();
                    $data['userIdTo'] = $row->userId;
                    $data['userMessageTipe'] = 'outbox';
                    $data['userMessageTitle'] = $title;
                    $data['userMessageContent'] = $message;
                    $data['userMessageStatus'] = 0;
                    $this->message_model->add($data);
                }
                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    $this->_data ['errorMessage'] = 'Gagal Kirim Pesan';
                } else {
                    $this->db->trans_commit();
                    $this->_data ['errorMessage'] = 'Berhasil Kirim Pesan';
                    $this->_data ['isSuccess'] = true;
                    $_POST = array();
                }                
            }
            
        }
    }
    

    function add() {
        if (! isAccess ( 'myuser', 'message', 'add'))
            redirect();
        $array = $this->uri->uri_to_assoc(3,array('id','tipe'));
        add_title('Kirim Pesan');
        $this->_tinyMCE();
        $this->_addExecute();
        $this->_data['uri_to_assoc'] = $array;
        $this->_view ( 'myuser/messageAdd' );        
    }
    function _tinyMCE() {
            add_js_libs ( 'tiny_mce/3.3.5.1/tiny_mce.js' );
            $jsHead = <<<EOLEOL
<!-- tinyMCE -->
<script language="javascript" type="text/javascript">
tinyMCE.init({
    theme: "advanced",
    theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink",
    theme_advanced_buttons2 : "",
    theme_advanced_buttons3 : "",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    mode: "exact",
    elements : "message"
});
</script>
<!-- /tinyMCE -->
EOLEOL;
            add_content ( 'head_end_before', $jsHead );        
    }
}
