<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Group_model extends Model {


    public function __construct($params = array())
    {
        // Call the Model constructor
        parent::__construct();
        $this->config->load('group');
        log_message('debug', "Group_model Model Initialized");
    }


    function setId($id)
    {
        $this->_userId = $id;
    }

    function setGroupId($id)
    {
        $this->_groupId = $id;
    }

    function setStatus($status)
    {
        $this->_userStatus = $status;
    }

    public function setUserLocation($location) {
        $this->_userLocation = $location;
    }

    public function setUserLocationAccess($locationAccess) {
        $this->_userLocationAccess = $locationAccess;
    }

    function add($data=array())
    {
        if (! $data) return false;
        $data['groupCreateTime'] = time();
        $data['groupModifiedTime'] = time();
        $result = $this->db->insert('Group',$data) && $this->db->affected_rows();
        return $result;
    }


    function get($id)
    {
        if (! $id) return false;
        $this->db->select('Group.*');
        $this->db->from('Group');
        $this->db->where('groupId',$id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->row_array();
        return false;
    }
    function getByTitle($title) {
        if (empty($title)) return array();
        $this->db->select('Group.*');
        $this->db->from('Group');
        $this->db->where('groupName',$title);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->row();
        return array();
    }


    function addUser($id,$groupId)
    {
        if ($this->getUser($id,$groupId)) return false;
        $data = array("userId" => $id, "groupId" => $groupId);
        return $this->db->insert('UserGroup',$data) && $this->db->affected_rows();
    }

    function getUser($id,$groupId)
    {
        if (! $id) return false;
        if (! $groupId) return false;
        $this->db->from('UserGroup');
        $this->db->where('userId',$id);
        $this->db->where('groupId',$groupId);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->row();
        return false;

    }

    function del($id)
    {
        if (! $this->get($id)) return false;
        $this->db->where('groupId', $id);
        return ($this->db->delete('Group') && ($this->db->affected_rows() > 0));
    }

    function delUser($id,$groupId)
    {
        if (! $this->getUser($id,$groupId)) return false;
        $this->db->where('userId',$id);
        $this->db->where('groupId',$groupId);
        return $this->db->delete('UserGroup') && $this->db->affected_rows();
    }



    function update($id,$data=array())
    {
        if (! $this->get($id)) return false;
        if (! $data) return false;
        $this->db->where('groupId',$id);
        $result = $this->db->update('Group',$data) && $this->db->affected_rows();
        return $result;
    }

    function getList()
    {
        $this->db->select('Group.*');
        $this->db->from('Group');
        $this->db->orderby('groupName','ASC');
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0)
            return $query->result_array();
        return $list;
    }

    function getCount()
    {
        $this->db->select('count(groupId) AS count');
        $this->db->from('Group');
        $query = $this->db->get();
        if ($query->num_rows() > 0 ) {
            $row = $query->row();
            return $row['count'];
        }
        return 0;
    }

    function getListUser($id,$limit = false,$offset=0)
    {
        if (! $this->get($id)) return false;
        $this->db->select('User.*');
        $this->db->from('Group');
        $this->db->join('UserGroup','UserGroup.groupId = Group.groupId');
        $this->db->join('User','User.userId = UserGroup.userId');
        $this->db->where('Group.groupId',$id);
        $this->db->order_by('User.userLogin','asc');
        if ($limit && $limit > 0)
            $this->db->limit($limit,$offset);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function addAccess($id,$access=array())
    {
        if (! $this->get($id)) return false;
        $this->db->trans_begin();
        $this->db->query("DELETE FROM GroupAccess WHERE groupId = ? ", array($id));
        if (is_array($access) && $access)
        foreach ($access AS $key=>$value) {
            $data = array('accessId' => $value, 'groupId' => $id);
            $query = $this->db->insert_string('GroupAccess',$data);
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
        $this->db->select('GroupAccess.accessId');
        $this->db->from('GroupAccess');
        //members_access.members_access_id = members_access_to_members.members_access_id
        $this->db->join('Access', 'Access.accessId = GroupAccess.accessId');
        $this->db->where('GroupAccess.groupId',$id);
        $query = $this->db->get();
        $list = array();
        if ($query->num_rows() > 0) {
            foreach($query->result() AS $row) {
                $list[] = $row->accessId;
            }
        }
        return $list;
    }


}
