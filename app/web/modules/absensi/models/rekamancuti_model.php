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
   // protected $_prefix = 'masterAbsen';
    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
    /**
     * add Data
     * @param string $data
     * @return boolean
     */
    /**public function add($data) {
        if (! $data || ! is_array ( $data ))
            return false;
        $data [$this->_prefix . 'CreateTime'] = date ( 'Y-m-d H:i:s' );
        $data [$this->_prefix . 'ModifiedTime'] = date ( 'Y-m-d H:i:s' );
        return $this->db->insert ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
		}*/
		
    
    
	
	public function addMaster($data) {
        if (! $data || ! is_array ( $data ))
            return false;
        //$data ['barangCreateTime'] = date ( 'Y-m-d H:i:s' );
        //$data ['barangModifiedTime'] = date ( 'Y-m-d H:i:s' );
        return $this->db->insert ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
		}
    /**
     * update Data
     * @param string $kode
     * @param array $data
     * @return boolean
     
    public function update($id, $data) {
        if (! $id || ! $this->get ( $id ) || ! $data)
            return array ();
        $this->db->where ( $this->_prefix . 'Id', $id );
        $this->db->limit ( 1 );
        return $this->db->update ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }*/
	
	 //update master
    public function updateCuti($id, $data) {
        if (! $id || ! $data)
            return array ();
        $this->db->from ($this->_table);
        $this->db->where ( 'nip', $id );
        
        //if ($pId !== false)
            //$this->db->where ( $this->_prefix . 'Pid', $pId );
        $this->db->limit ( 1 );
        return $this->db->update ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
	
	
    /**
     * get Data
     * @param string $kode
     * @return array|mixed
     
    public function get($id) {
        if (! $id) {
            return array ();
        }
        $query = $this->db->get_where ( $this->_table, array ($this->_prefix . 'Id' => $id ) );
        return $query->row_array ();
    }*/
	function get($id) {
		//$this->db->select('tbl_absensi');
		$this->db->from($this->_table);
		$this->db->where('nip', $id);
		//$this->db->limit ( $limit, $offset );
		//$this->db->order_by ( 'BarangKategori.barangKategoriKode' );
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
    /**
     * delete Data
     * @param string $kode
     * @return boolean
     */
    /**public function delete($id) {
        if (! $id || ! $this->get ( $id ))
            return array ();
        $this->db->where ( $this->_prefix . 'Id', $id );
        $this->db->limit ( 1 );
        return $this->db->delete ( $this->_table ) && ($this->db->affected_rows () > 0) ? true : false;
    }*/
	
	// hapus data absen
    public function deleteCuti($id, $nip) {
	if (! $id ) //|| ! $this->get ( $id ))
        	return array ();
        $this->db->from ( $this->_table );
        $this->db->where ( 'id_cuti', $id );
        $this->db->where ( 'nip', $nip );
        $this->db->limit ( 1 );
        return $this->db->delete ( $this->_table ) && ($this->db->affected_rows () > 0) ? true : false;
    }

	
	
    public function getList($limit = 100, $offset = 0) {
        $this->db->from ( $this->_table );
        $this->db->limit ( $limit, $offset );
        $query = $this->db->get ();
        return $query->result_array ();
    }
	
		
	
    /**public function getCount() {
        $this->db->select ( 'count(' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }*/
	
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