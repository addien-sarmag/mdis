<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class kandidat_model extends Model {
    /**
     * Table Name
     * @var string
     */
    protected $_table = 'tbl_kandidat';
    /**
     * Table Field Prefix
     * @var string
     */
    protected $_prefix = '_kandidat';
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
            
        return $this->db->insert ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    
    }
    /**
     * update Data
     * @param string $kode
     * @param array $data
     * @return boolean
     */
    public function update($id, $data) {
        if (! $id || ! $this->get ( $id ) || ! $data)
            return array ();
        $this->db->where ( 'id'.$this->_prefix, $id );
        $this->db->limit ( 1 );
        return $this->db->update ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
    /**
     * get Data
     * @param string $kode
     * @return array|mixed
     */
    public function get($id) {
        if (! $id) {
            return array ();
        }
         $this->db->join( "tbl_jabatan" , $this->_table.".id_jabatan = tbl_jabatan.id_jabatan"  ,"left");
        $query = $this->db->get_where ( $this->_table, array (  'id'.$this->_prefix => $id ) );
        return $query->row_array ();
    }
    /**
     * delete Data
     * @param string $kode
     * @return boolean
     */
    public function delete($id) {
        if (! $id || ! $this->get ( $id ))
            return array ();
        $this->db->where ( 'id'.$this->_prefix , $id );
        $this->db->limit ( 1 );
        return $this->db->delete ( $this->_table ) && ($this->db->affected_rows () > 0) ? true : false;
    }
    public function getList($limit = 100, $offset = 0 , $where = array() ) {
        $this->db->from ( $this->_table );
        $this->db->limit ( $limit, $offset );
          
        $query = $this->db->get ();
         
        
        return $query->result_array ();
    }
    public function getCount() {
        $this->db->select ( 'count(' . 'id'.$this->_prefix.') as count' );
        $this->db->from ( $this->_table );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
}