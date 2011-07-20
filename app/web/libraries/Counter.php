<?php

class Counter {
	public function __construct() {
		$this->CI = get_instance();
		$this->add();
	}
	
	public function add() {
	    $data = array();
	    $data['userId'] = getUserId();
	    $data['counterIp'] = $this->CI->input->ip_address();
        $data['counterReferrer'] = $this->CI->input->server('HTTP_REFERER') ? $this->CI->input->server('HTTP_REFERER')  : '';
        $data['counterUserAgent'] = $this->CI->input->user_agent();
        $data['counterUrl'] = $this->CI->input->server('PHP_SELF');
        $data['counterStatus'] = 0;
        $data['counterCreateTime'] = date('Y-m-d H:i:s');
        $data['counterModifiedTime'] = date('Y-m-d H:i:s');
        $this->CI->db->insert('Counter',$data);
	}
	public function getHits() {
	    $this->CI->db->select('count(counterId) as count');
	    $query = $this->CI->db->get('Counter');
	    $row = $query->row_array();
	    return $row['count'];
	}
}