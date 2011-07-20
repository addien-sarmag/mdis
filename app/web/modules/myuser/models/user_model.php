<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends Model {
	protected $_userStatus = '';
	protected $_userLogin = '';
	protected $_userId = '';
	protected $_userLocation = '';
	protected $_userLocationAccess = '';

	public function __construct($params = array())
	{
		// Call the Model constructor
		parent::__construct();
		$this->config->load('user');
		log_message('debug', "User_model Model Initialized");
	}


	public function setId($id)
	{
		$this->_userId = $id;
	}

	public function setLogin($login)
	{
		$this->_userLogin = $login;
	}

	public function setStatus($status)
	{
		$this->_userStatus = $status;
	}

	public function setUserLocation($location) {
		$this->_userLocation = $location;
	}

	public function setUserLocationAccess($locationAccess) {
		$this->_userLocationAccess = $locationAccess;
	}

	public function add($data=array())
	{
		if (! $data) return false;
		if (isset($data['userPassword'])) $data['userPassword'] = crypt($data['userPassword']);
		$data['userCreateTime'] = date('Y-m-d H:i:s');
		$data['userModifiedTime'] = date('Y-m-d H:i:s');
		$result = $this->db->insert('User',$data) && $this->db->affected_rows();
		return $result;
	}
    
	public function addPertanyaan($id='',$data=array())
	{
		if (! $data || ! $id) return false;
		
		$data['userConfigModifiedTime'] = date('Y-m-d H:i:s');
		$getPertanyaan = $this->getPertanyaan($id);
		if ($getPertanyaan){
			$this->db->where('userId', $id);
				$result = $this->db->update('UserConfig',$data) && $this->db->affected_rows();
		}else{
			$result = $this->db->insert('UserConfig',$data) && $this->db->affected_rows();
		}
		
		return $result;
	}

	public function get($id)
	{
		if (! $id) return false;
		$this->db->select('User.*');
		$this->db->from('User');
		$this->db->where('userId',$id);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		return $query->row();
		return array();
	}
	public function getByLogin($login)
	{
		if (! $login) return false;
		$this->db->select('User.*');
		$this->db->from('User');
		$this->db->where('userLogin',$login);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		return $query->row();
		return array();
	}

	public function update($id,$data=array())
	{
		if (! $this->get($id)) return false;
		if (! $data) return false;
		if (isset($data['userPassword']) && !empty($data['userPassword'])) $data['userPassword'] = crypt($data['userPassword']);
		$this->db->where('userId',$id);
		$result = $this->db->update('User',$data) && ($this->db->affected_rows() > 0 );
		return $result;
	}

	public function getList($where = array() ,$limit = 100, $offset=0, $sort = 'userLogin', $order = 'asc')
	{
		$this->db->select('User.userId, User.userLogin, User.userName, User.userDesc, User.userStatus');
		$this->db->from('User'); 
		
		if (isset ( $where ['groupId'] ))
			$this->db->where ( 'User.userId IN (SELECT userId FROM UserGroup WHERE groupId = "'.$where ['groupId'].'") ');      
		if (isset ( $where ['letter'] ))
		$this->db->like ( 'User.userLogin' , $where ['letter'] , 'after' );
		if (isset ( $where ['userStatus'] ))
		$this->db->where ( 'User.userStatus' , $where ['userStatus'] );
		
		$this->db->order_by ( $sort , $order );
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getCount($where = array())
	{
		
		$this->db->select('count(User.userId) AS count');
		$this->db->from('User');
		$this->db->join('UserLocation','User.userId = UserLocation.userId','LEFT');
		
		if (isset ( $where ['groupId'] ))
			$this->db->where ( 'User.userId IN (SELECT userId FROM UserGroup WHERE groupId = "'.$where ['groupId'].'") ');      
		if (isset ( $where ['letter'] ))
		$this->db->like ( 'User.userLogin' , $where ['letter'] , 'after' );
		if (isset ( $where ['userStatus'] ))
		$this->db->where ( 'User.userStatus' , $where ['userStatus'] );
		
		$query = $this->db->get();
		if ($query && ($row = $query->row_array()))
		return $row['count'];
		return 0;
	}

	public function addAccess($id,$access=array())
	{
		if (! $this->get($id)) return false;
		$this->db->trans_begin();
		$this->db->query("DELETE FROM UserAccess WHERE userId = ? ", array($id));
		if (is_array($access) && $access)
		foreach ($access AS $key=>$value) {
		$data = array('accessId' => $value, 'userId' => $id);
		$query = $this->db->insert_string('UserAccess',$data);
		$this->db->query($query);
		}
		if ($this->db->trans_status() === FALSE) {
		$this->db->trans_rollback();
		return false;
		} else {
		$this->db->trans_commit();
		return true;
		}
	}

	function getListAccess($id)
	{
		if (! $this->get($id)) return false;
		$this->db->select('UserAccess.accessId');
		$this->db->from('UserAccess');
		$this->db->join('Access', 'Access.accessId = UserAccess.accessId');
		$this->db->where('UserAccess.userId',$id);
		$query = $this->db->get();
		$list = array();
		if ($query->num_rows() > 0) {
		foreach($query->result() AS $row) {
			$list[] = $row->accessId;
		}
		}
		return $list;
	}
    
	function getAllGroup(){
		$this->db->select('Group.*');
		$this->db->from('Group');
		$query = $this->db->get();
		
		$list = array();
		if ($query->num_rows() > 0) {
		foreach($query->result() AS $row) {
			$list[] = $row;
		}
		}
		return $list;
	}
    
    
	function getListGroup($id,$full = false)
	{
		if (! $this->get($id)) return false;
		$this->db->select('Group.*');
		$this->db->from('Group');
		$this->db->join('UserGroup', 'UserGroup.groupId = Group.groupId');
		$this->db->join('User', 'UserGroup.userId = User.userId');
		$this->db->where('User.userId',$id);
		$query = $this->db->get();
		$list = array();
		if ($query->num_rows() > 0) {
		foreach($query->result() AS $row) {
			if ($full)
			$list[] = $row;
			else
			$list[] = $row->groupId;
		}
		}
		return $list;
	}

	public function addUserLogin($userId)
	{
		$data = array();
		$data['userId'] = $userId;
		$data['userLoginIp'] = $this->input->ip_address();
		$data['userLoginStatus'] = 1;
		$data['userLoginCreateTime'] = date('Y-m-d H:i:s');
		$data['userLoginModifiedTime'] = date('Y-m-d H:i:s');
		$result = $this->db->insert('UserLogin',$data) && $this->db->affected_rows();
		return $result;
	}
	public function getLastUserLogin($userId) {
		$this->db->from('UserLogin');
		$this->db->where('userId',$userId);
		$this->db->order_by('userLoginCreateTime','desc');
		$this->db->limit(2);
		$array = $this->db->get()->result_array();
		if ($array)
		return array_pop($array);
		return array();
	}

	function getListUserOnline($limit = 10, $offset =0) {
		$this->db->select('User.userLogin');
		$this->db->select('User.userName');
		$this->db->select('UserIdentify.*');
		$this->db->from('User');
		$this->db->join('UserIdentify','User.userId = UserIdentify.userId');        
		$expire = (int) ($this->config->item('auth_expire_login') * 60);
		if (!$expire)
		$export  = 5 * 60;
		$now = time();
		$sql = "(UserIdentify.userTimeAccess + $expire > $now)";
		$this->db->where($sql);
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	function getCountUserOnline() {
		$this->db->select('count(User.userId) as count');
		$this->db->from('User');
		$this->db->join('UserIdentify','User.userId = UserIdentify.userId');        
		$expire = (int) ($this->config->item('auth_expire_login') * 60);
		if (!$expire)
		$export  = 5 * 60;
		$now = time();
		$sql = "(UserIdentify.userTimeAccess + $expire > $now)";
		$this->db->where($sql);
		$query = $this->db->get();
		if ($query && ($row = $query->row_array()))
		return $row['count'];
		return 0;
	}

	function getIdNewUser($username){
		$this->db->select('User.userId');
		$this->db->from('User');
		$this->db->where('User.userLogin',$username);
		$query = $this->db->get();
		
		return $query->result_array();
	}
}
