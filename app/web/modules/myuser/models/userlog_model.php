<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class userlog_model extends Model {
    /**
     * Table Name
     * @var string
     */
    protected $_table = 'Counter';
    /**
     * Table Field Prefix
     * @var string
     */
    protected $_prefix = 'counter';
    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
    /**
     * add Data
     * @param string $data
     * @return boolean
     */
    public function add($data) {
        if (! $data || ! is_array ( $data ))
            return false;
        $data [$this->_prefix . 'CreateTime'] = date ( 'Y-m-d H:i:s' );
        $data [$this->_prefix . 'ModifiedTime'] = date ( 'Y-m-d H:i:s' );
        return $this->db->insert ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    
    }
    /**
     * update Data
     * @param string $kode
     * @param array $data
     * @return boolean
     */
    public function update($kode, $data) {
        if (! $kode || ! $this->get ( $kode ) || ! $data)
            return array ();
        $this->db->where ( $this->_prefix . 'Kode', $kode );
        $this->db->limit ( 1 );
        return $this->db->update ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
    /**
     * get Data
     * @param string $kode
     * @return array|mixed
     */
    public function get($kode) {
        if (! $kode) {
            return array ();
        }
        $query = $this->db->get_where ( $this->_table, array ($this->_prefix . 'Kode' => $kode ) );
        return $query->row_array ();
    }
    /**
     * delete Data
     * @param string $kode
     * @return boolean
     */
    public function delete($kode) {
        if (! $kode || ! $this->get ( $kode ))
            return array ();
        $this->db->where ( $this->_prefix . 'Kode', $kode );
        $this->db->limit ( 1 );
        return $this->db->delete ( $this->_table ) && ($this->db->affected_rows () > 0) ? true : false;
    }
    public function getList($limit = 100, $offset = 0 , $ip = '', $date = '' , $user = '') {
    	$this->db->select( 'counterIp,counterReferrer,counterUserAgent,counterUrl,DATE( counterCreateTime ) as tanggal,TIME( counterCreateTime ) as waktu ,userName' );
        $this->db->from ( $this->_table );
        $this->db->join ( 'User us', "us.userId=".$this->_table.".userId",'left' );
        
        if (  $ip && ! empty ( $ip ))
        	$this->db->like( $this->_table.'.'.$this->_prefix.'Ip',$ip,'both');
        	
        if (  $date && ! empty ( $date ))
        	$this->db->like( 'DATE( '.$this->_table.'.'.$this->_prefix.'CreateTime ) '  ,$date,'before');
        	
        if (  $user && ! empty ( $user ))
        	$this->db->like( 'us.userName'  ,$user,'before');
        
        $this->db->limit ( $limit, $offset );
        $this->db->order_by( $this->_prefix.'Id' , 'Desc' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    
	public function getJsonList( $ip = '', $date = '' , $user = '' , $field = '') {
		
		
    	$this->db->select( $field );
    	$this->db->distinct( $field );
        $this->db->from ( $this->_table );
        $this->db->join ( 'User us', "us.userId=".$this->_table.".userId",'left' );
        
        if (  $ip && ! empty ( $ip ))
        	$this->db->like( $this->_table.'.'.$this->_prefix.'Ip',$ip,'before');
        	
        if (  $date && ! empty ( $date ))
        	$this->db->like( 'DATE( '.$this->_table.'.'.$this->_prefix.'CreateTime ) '  ,$date,'before');
        	
        if (  $user && ! empty ( $user ))
        	$this->db->like( 'us.userName'  ,$user,'before');
        
        $this->db->order_by( $this->_prefix.'Id' , 'Desc' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    
    public function getCount(  $ip = '' , $date = '' , $user = '') {
        $this->db->select ( 'count(' . $this->_prefix . 'Id ) as count' );
        $this->db->from ( $this->_table );
        $this->db->join ( 'User us', "us.userId=".$this->_table.".userId",'left' );
        
        if (  $ip && ! empty ( $ip ))
        	$this->db->like( $this->_table.'.'.$this->_prefix.'Ip',$ip,'both');
        	
        if (  $date && ! empty ( $date ))
        	$this->db->like( 'DATE( '.$this->_table.'.'.$this->_prefix.'CreateTime ) '  ,$date,'before');
        
        if (  $user && ! empty ( $user ))
        	$this->db->like( 'us.userName'  ,$user,'before');
        
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
	public function getListData( $tableName = '' ) {
    	$this->db->select( $tableName );
    	$this->db->distinct( $tableName );
        $this->db->from ( $this->_table );
        $this->db->join ( 'User us', "us.userId=".$this->_table.".userId",'left' );
        
        $this->db->order_by( $this->_prefix.'Id' , 'Desc' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    
}