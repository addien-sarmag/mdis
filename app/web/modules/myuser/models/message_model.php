<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends Model {


    protected $_userStatus = '';
    protected $_userLogin = '';
    protected $_userId = '';
    protected $_userLocation = '';
    protected $_userLocationAccess = '';

    public function __construct($params = array())
    {
        // Call the Model constructor
        parent::__construct();
        log_message('debug', "Message_model Model Initialized");
    }

    public function add($data=array())
    {
        if (! $data) return false;
        $data['userMessageCreateTime'] = date('Y-m-d H:i:s');
        $data['userMessageModifiedTime'] = date('Y-m-d H:i:s');
        $result = $this->db->insert('UserMessage',$data) && $this->db->affected_rows();
        return $result;
    }

    public function get($id)
    {
        if (! $id) return false;
        $this->db->select('UserMessage.*');
        $this->db->from('UserMessage');
        $this->db->where('userMessage',$id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->row();
        return array();
    }
    public function update($id,$data=array())
    {
        if (! $this->get($id,$userId)) return false;
        if (! $data) return false;
        $this->db->where('userMessage',$id);
        $result = $this->db->update('UserMessage',$data) && ($this->db->affected_rows() > 0 );
        return $result;
    }
    public function getList($where = array() ,$limit = 100 , $offset = 0)
    {

        $this->db->select('UserMessage.*');
        $this->db->select('UserFrom.userLogin as userLoginFrom');
        $this->db->select('UserFrom.userName as userNameFrom');
        $this->db->select('UserTo.userLogin as userLoginTo');
        $this->db->select('UserTo.userName as userNameTo');
        $this->db->from('UserMessage');
        $this->db->join('User as UserFrom' , 'UserFrom.userId = UserMessage.userIdFrom');
        $this->db->join('User as UserTo' , 'UserTo.userId = UserMessage.userIdTo');
        $this->db->order_by('UserMessage.userMessageCreateTime','asc');
        if (isset($where['userMessageTipe']))
            $this->db->where('UserMessage.userMessageTipe',$where['userMessageTipe']);
        if (isset($where['userMessageStatus']))
            $this->db->where('UserMessage.userMessageStatus',$where['userMessageStatus']);
        if (isset($where['userIdFrom']))
            $this->db->where('UserMessage.userIdFrom',$where['userIdFrom']);
        if (isset($where['userIdTo']))
            $this->db->where('UserMessage.userIdTo',$where['userIdTo']);
        $this->db->limit($limit,$offset);
        $query = $this->db->get();
        return $query->result_array();
    }    
    public function getCount($where = array())
    {

        $this->db->select('count(UserMessage.userMessageId) as count');
        $this->db->from('UserMessage');
        $this->db->join('User as UserFrom' , 'UserFrom.userId = UserMessage.userIdFrom' );
        $this->db->join('User as UserTo' , 'UserTo.userId = UserMessage.userIdTo');
        $this->db->order_by('UserMessage.userMessageCreateTime','asc');
        if (isset($where['userMessageTipe']))
            $this->db->where('UserMessage.userMessageTipe',$where['userMessageTipe']);
        if (isset($where['userMessageStatus']))
            $this->db->where('UserMessage.userMessageStatus',$where['userMessageStatus']);
        if (isset($where['userIdFrom']))
            $this->db->where('UserMessage.userIdFrom',$where['userIdFrom']);
        if (isset($where['userIdTo']))
            $this->db->where('UserMessage.userIdTo',$where['userIdTo']);
        $query = $this->db->get();
        
        if (($row = $query->row_array()))
            return $row['count'];
        return 0;
    }    
}
