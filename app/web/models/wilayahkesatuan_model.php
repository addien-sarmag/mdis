<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Wilayahkesatuan_model extends Model {
    /**
     * Table Name
     * @var string
     */
    protected $_table = 'WilayahKesatuan';
    /**
     * Table Field Prefix
     * @var string
     */
    protected $_prefix = 'wilayahKesatuan';
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
     * @param string $id
     * @param array $data
     * @return boolean
     */
    public function update($id, $data, $pId = false) {
        if (! $id || ! $this->get ( $id, $pId ) || ! $data)
            return array ();
        $this->db->where ( $this->_prefix . 'Id', $id );
        if ($pId !== false)
            $this->db->where ( $this->_prefix . 'Pid', $pId );
        $this->db->limit ( 1 );
        return $this->db->update ( $this->_table, $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
    /**
     * get Data
     * @param string $id
     * @return array|mixed
     */
    public function get($id, $pId = false) {
        if (! $id) {
            return array ();
        }
        if ($pId !== false)
            $this->db->where ( $this->_prefix . 'Pid', $pId );
        $query = $this->db->get_where ( $this->_table, array ($this->_prefix . 'Id' => $id ) );
        return $query->row_array ();
    }
    /**
     * get Data
     * @param string $id
     * @return array|mixed
     */
    public function getByKode($kode) {
        if (! $kode) {
            return array ();
        }
        $query = $this->db->get_where ( $this->_table, array ($this->_prefix . 'Kode' => $kode ) );
        return $query->row_array ();
    }
    /**
     * delete Data
     * @param string $id
     * @return boolean
     */
    public function delete($id, $pId = false) {
        if (! $id || ! $this->get ( $id, $pId ))
            return array ();
        $this->db->where ( $this->_prefix . 'Id', $id );
        if ($pId !== false)
            $this->db->where ( $this->_prefix . 'Pid', $pId );
        $this->db->limit ( 1 );
        return $this->db->delete ( $this->_table ) && ($this->db->affected_rows () > 0) ? true : false;
    }
    public function getListForm($where = array(), $kode = false) {
        $this->db->from ( $this->_table );
        if (isset ( $where [$this->_prefix . 'Pid'] ))
            $this->db->where ( $this->_prefix . 'Pid', $where [$this->_prefix . 'Pid'] );
        $query = $this->db->get ();
        $list = array ();
        foreach ( $query->result_array () as $row ) {
            if ($kode)
                $list [$row [$this->_prefix . 'Id']] = $row [$this->_prefix . 'Desc'] . ' (' . $row [$this->_prefix . 'Kode'] . ')';
            else
                $list [$row [$this->_prefix . 'Id']] = $row [$this->_prefix . 'Desc'];
        }
        return $list;
    }
    public function getList($where = array(), $limit = 100, $offset = 0) {
        $this->db->from ( $this->_table );
        if (isset ( $where [$this->_prefix . 'Pid'] ))
            $this->db->where ( $this->_prefix . 'Pid', $where [$this->_prefix . 'Pid'] );
        $this->db->order_by ('wilayahKesatuanPid');
        $this->db->order_by ('wilayahKesatuanKode');
        $this->db->limit ( $limit, $offset );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    public function getCount($where = array()) {
        $this->db->select ( 'count(' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        if (isset ( $where [$this->_prefix . 'Pid'] ))
            $this->db->where ( $this->_prefix . 'Pid', $where [$this->_prefix . 'Pid'] );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    public function getListSatuanKerja($where = array(), $limit = 100, $offset = 0) {
        $this->db->select ( $this->_table . '.*' );
        $this->db->select ( 'Kotama.wilayahKesatuanDesc AS KotamaDesc' );
        $this->db->from ( $this->_table );
        $this->db->join ( $this->_table . ' as Kotama', $this->_table . '.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $this->db->limit ( $limit, $offset );
        $this->db->order_by ( $this->_table . '.' . $this->_prefix . 'Kode' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    public function getCountSatuanKerja($where = array()) {
        $this->db->select ( 'count(' . $this->_table . '.' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        $this->db->join ( $this->_table . ' as Kotama', $this->_table . '.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    public function getListUnitKerja($where = array(), $limit = 100, $offset = 0) {
        $this->db->select ( $this->_table . '.*' );
        $this->db->select ( 'Kotama.wilayahKesatuanDesc AS KotamaDesc,Kotama.wilayahKesatuanId AS KotamaId' );
        $this->db->select ( 'SatuanKerja.wilayahKesatuanDesc AS SatuanKerjaDesc' );
        $this->db->from ( $this->_table );
        $this->db->join ( $this->_table . ' as SatuanKerja', $this->_table . '.' . $this->_prefix . 'Pid = SatuanKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as Kotama', 'SatuanKerja.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['satuanId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['satuanId'] );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( 'SatuanKerja.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $this->db->limit ( $limit, $offset );
        $this->db->order_by ( $this->_table . '.' . $this->_prefix . 'Kode' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    public function getCountUnitKerja($where = array()) {
        $this->db->select ( 'count(' . $this->_table . '.' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        $this->db->join ( $this->_table . ' as SatuanKerja', $this->_table . '.' . $this->_prefix . 'Pid = SatuanKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as Kotama', 'SatuanKerja.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['satuanId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['satuanId'] );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( 'SatuanKerja.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
    public function getListBagian($where = array(), $limit = 100, $offset = 0) {
        $this->db->select ( $this->_table . '.*' );
        $this->db->select ( 'UnitKerja.wilayahKesatuanDesc AS UnitKerjaDesc' );
        $this->db->select ( 'Kotama.wilayahKesatuanDesc AS KotamaDesc,Kotama.wilayahKesatuanId AS KotamaId' );
        $this->db->select ( 'SatuanKerja.wilayahKesatuanDesc AS SatuanKerjaDesc,SatuanKerja.wilayahKesatuanId AS SatuanId' );
        $this->db->from ( $this->_table );
        $this->db->join ( $this->_table . ' as UnitKerja', $this->_table . '.' . $this->_prefix . 'Pid = UnitKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as SatuanKerja', 'UnitKerja.' . $this->_prefix . 'Pid = SatuanKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as Kotama', 'SatuanKerja.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['unitId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['unitId'] );
        if (isset ( $where ['satuanId'] ))
            $this->db->where ( 'UnitKerja.' . $this->_prefix . 'Pid', $where ['satuanId'] );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( 'SatuanKerja.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $this->db->limit ( $limit, $offset );
        $this->db->order_by ( $this->_table . '.' . $this->_prefix . 'Kode' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    public function getCountBagian($where = array()) {
        $this->db->select ( 'count(' . $this->_table . '.' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        $this->db->join ( $this->_table . ' as UnitKerja', $this->_table . '.' . $this->_prefix . 'Pid = UnitKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as SatuanKerja', 'UnitKerja.' . $this->_prefix . 'Pid = SatuanKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as Kotama', 'SatuanKerja.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['unitId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['unitId'] );
        if (isset ( $where ['satuanId'] ))
            $this->db->where ( 'UnitKerja.' . $this->_prefix . 'Pid', $where ['satuanId'] );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( 'SatuanKerja.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
	public function getListSubBagian($where = array(), $limit = 100, $offset = 0) {
        $this->db->select ( $this->_table . '.*' );
        $this->db->select ( 'Bagian.wilayahKesatuanDesc AS BagianDesc' );
        $this->db->select ( 'UnitKerja.wilayahKesatuanDesc AS UnitKerjaDesc' );
        $this->db->select ( 'Kotama.wilayahKesatuanDesc AS KotamaDesc' );
        $this->db->select ( 'SatuanKerja.wilayahKesatuanDesc AS SatuanKerjaDesc' );
        $this->db->from ( $this->_table );
        
        $this->db->join ( $this->_table . ' as Bagian', $this->_table . '.' . $this->_prefix . 'Pid = Bagian.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as UnitKerja', 'Bagian.' . $this->_prefix . 'Pid = UnitKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as SatuanKerja', 'UnitKerja.' . $this->_prefix . 'Pid = SatuanKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as Kotama', 'SatuanKerja.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['bagianId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['bagianId'] );
        if (isset ( $where ['unitId'] ))
            $this->db->where ( 'Bagian.' . $this->_prefix . 'Pid', $where ['unitId'] );
        if (isset ( $where ['satuanId'] ))
            $this->db->where ( 'UnitKerja.' . $this->_prefix . 'Pid', $where ['satuanId'] );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( 'SatuanKerja.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
            
        $this->db->limit ( $limit, $offset );
        $this->db->order_by ( $this->_table . '.' . $this->_prefix . 'Kode' );
        $query = $this->db->get ();
        return $query->result_array ();
    }
    public function getCountSubBagian($where = array()) {
        $this->db->select ( 'count(' . $this->_table . '.' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        
        $this->db->join ( $this->_table . ' as Bagian', $this->_table . '.' . $this->_prefix . 'Pid = Bagian.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as UnitKerja', 'Bagian.' . $this->_prefix . 'Pid = UnitKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as SatuanKerja', 'UnitKerja.' . $this->_prefix . 'Pid = SatuanKerja.' . $this->_prefix . 'Id' );
        $this->db->join ( $this->_table . ' as Kotama', 'SatuanKerja.' . $this->_prefix . 'Pid = Kotama.' . $this->_prefix . 'Id' );
        
        $this->db->where ( 'Kotama.' . $this->_prefix . 'Pid', 0 );
        if (isset ( $where ['bagianId'] ))
            $this->db->where ( $this->_table . '.' . $this->_prefix . 'Pid', $where ['bagianId'] );
        if (isset ( $where ['unitId'] ))
            $this->db->where ( 'Bagian.' . $this->_prefix . 'Pid', $where ['unitId'] );
        if (isset ( $where ['satuanId'] ))
            $this->db->where ( 'UnitKerja.' . $this->_prefix . 'Pid', $where ['satuanId'] );
        if (isset ( $where ['kotamaId'] ))
            $this->db->where ( 'SatuanKerja.' . $this->_prefix . 'Pid', $where ['kotamaId'] );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
    public function getParentId($id) {
    	$this->db->where ( "wilayahKesatuanId" , $id);
    	$query = $this->db->get ( $this->_table );
    	$row = $query->row();
    	$parentId = $row->wilayahKesatuanPid;
    	return $parentId;
    }
    
	public function getKode($id) {
		$this->db->select ( 'count(' . $this->_prefix . 'Id) as count' );
        $this->db->from ( $this->_table );
        $this->db->where ($this->_prefix . 'Id' , $id);
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
    //Detail
    
    //Lokasi
	public function getLokasi($id) {
        if (! $id) {
            return array ();
        }
        $query = $this->db->get_where ( 'WilayahKesatuanLokasi' , array ( 'wilayahKesatuanId' => $id ) );
        return $query->row_array ();
    }
	public function cekLokasi($id) {
		$this->db->select ( 'count(wilayahKesatuanId) as count' );
        $this->db->from ( 'WilayahKesatuanLokasi' );
        $this->db->where ( 'wilayahKesatuanId' , $id );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
	public function addLokasi($data) {
        if (! $data || ! is_array ( $data ))
            return false;

        return $this->db->insert ( 'WilayahKesatuanLokasi' , $data ) && ($this->db->affected_rows () > 0) ? true : false;
    
    }
    public function updateLokasi($id, $data) {
        if (! $id || ! $data)
            return array ();
            
        $this->db->where ( 'wilayahKesatuanId', $id );
        $this->db->limit ( 1 );
        return $this->db->update ( 'WilayahKesatuanLokasi' , $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }	
    
    //Area
	public function getListArea($id, $limit = 100, $offset = 0) {
        $this->db->select ( 'WilayahKesatuanArea.*' );
        $this->db->from ( 'WilayahKesatuanArea' );
        $this->db->where ( 'wilayahKesatuanId' , $id );
        $this->db->limit ( $limit, $offset );
        $this->db->order_by ( 'wilayahKesatuanAreaId' , 'Desc');
        $query = $this->db->get ();
        return $query->result_array ();
    }
	public function getCountArea($id) {
        $this->db->select ( 'count(WilayahKesatuanAreaId) as count' );
        $this->db->from ( 'WilayahKesatuanArea' );
        $this->db->where ( 'wilayahKesatuanId' , $id );
        $this->db->order_by ( 'wilayahKesatuanAreaId' , 'Desc');
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    public function getArea($areaId) {
        if (! $areaId) {
            return array ();
        }
        $query = $this->db->get_where ( 'WilayahKesatuanArea' , array ( 'wilayahKesatuanAreaId' => $areaId ) );
        return $query->row_array ();
    }
	public function addArea($data) {
        if (! $data || ! is_array ( $data ))
            return false;
		$data ['wilayahKesatuanAreaCreateTime'] = date ( 'Y-m-d H:i:s' );
        $data ['wilayahKesatuanAreaModifiedTime'] = date ( 'Y-m-d H:i:s' );
        return $this->db->insert ( 'WilayahKesatuanArea' , $data ) && ($this->db->affected_rows () > 0) ? true : false;
    
    }
    public function updateArea($areaid, $data) {
        if (! $areaid || ! $data)
            return array ();
            
        $this->db->where ( 'wilayahKesatuanAreaId', $areaid );
        $this->db->limit ( 1 );
        return $this->db->update ( 'WilayahKesatuanArea' , $data ) && ($this->db->affected_rows () > 0) ? true : false;
    }
	public function deleteArea($areaid) {
        if (! $areaid )
            return array ();
            
        $this->db->where ( 'wilayahKesatuanAreaId', $areaid );
        $this->db->limit ( 1 );
        return $this->db->delete ( 'WilayahKesatuanArea' ) && ($this->db->affected_rows () > 0) ? true : false;
    }	
}
