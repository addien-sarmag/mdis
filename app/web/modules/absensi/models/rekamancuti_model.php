<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class RekamanCuti_model extends Model {
    /**
     * Table Name
     * @var string
     */
    protected $_table = 'tbl_cuti';
    /**
     * Table Field Prefix
     * @var string
     */
    protected $_prefix = '_cuti';
    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
   
    public function add($data) {
        if (! $data || ! is_array ( $data ))
            return false;
        //$data ['barangCreateTime'] = date ( 'Y-m-d H:i:s' );
        //$data ['barangModifiedTime'] = date ( 'Y-m-d H:i:s' );
        return $this->db->insert ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
   	
	 //update master
    public function update($id, $data) {
        if (! $id || ! $data)
            return array ();
        $this->db->from ($this->_table);
        $this->db->where ( 'id'.$this->_prefix, $id );
        
        //if ($pId !== false)
            //$this->db->where ( $this->_prefix . 'Pid', $pId );
        $this->db->limit ( 1 );
        return $this->db->update ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
	
	
    
    public function get($id) {
	//$this->db->select('tbl_absensi');
	$this->db->from($this->_table);
	$this->db->where('id'.$this->_prefix, $id);
	//$this->db->limit ( $limit, $offset );
	//$this->db->order_by ( 'BarangKategori.barangKategoriKode' );
	$query = $this->db->get();
	return $query->row_array();
    }
	
    // hapus data absen
    public function delete($id, $nip = '') {
	if (! $id ) //|| ! $this->get ( $id ))
        	return array ();
        $this->db->from ( $this->_table );
        $this->db->where ( 'id'.$this->_prefix, $id );
        $this->db->or_where ( 'nip', $nip );
        $this->db->limit ( 1 );
        return $this->db->delete ( $this->_table ) && ($this->db->affected_rows () > 0) ? true : false;
    }

	
	
    public function getList($limit = 100, $offset = 0) {
        $this->db->from ( $this->_table );
        $this->db->limit ( $limit, $offset );
        $query = $this->db->get ();
        return $query->row_array ();
    }
	
	
    public function getCount() {
        $this->db->select ( 'count(id' . $this->_prefix . ') as count' );
        $this->db->from ( $this->_table );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
	
	//hitung jumlah pasangan
	/**public function getCountAbsen($nip ='') {
		$this->db->select ( 'count(id_absensi) as count' );
		$this->db->from ( $this->_table );
		if ($nip != '')
		    $this->db->where('nip',$nip);
		$query = $this->db->get ();
		if ($query && ($row = $query->row_array ())) {
			return $row ['count'];
		}
		return 0;
	}*/
}