<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Wilayah_model extends Model {

    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
    public function getListProvinsi() {
        $this->db->from('Provinsi');
        $this->db->order_by('provinsiId');
        $query = $this->db->get();
        //$list = array();
        $list[''] = 'Pilih Provinsi';
        foreach($query->result_array() as $row)
            $list[$row['provinsiId']] = $row['provinsiNama'];
        return $list;
        
    }
	public function getProvinsiName($id) {
        if (! $id) {
            return array ();
        }
        $query = $this->db->get_where ( 'Provinsi' , array ( 'provinsiId' => $id ) );
        return $query->row_array ();
    }
    public function getListKabupaten($provinsiId = false) {
        $this->db->from('Kabupaten');
        $this->db->order_by('provinsiId');
        $this->db->order_by('kabupatenId');
        if ($provinsiId !== false)
            $this->db->where('provinsiId',$provinsiId);
        $query = $this->db->get();
        
        //$list = array();
        $list[''] = 'Pilih Kabupaten';
        foreach($query->result_array() as $row)
            $list[$row['kabupatenId']] = $row['kabupatenNama'];
        return $list;
    }
	public function getKabupatenName($id) {
        if (! $id) {
            return array ();
        }
        $query = $this->db->get_where ( 'Kabupaten' , array ( 'kabupatenId' => $id ) );
        return $query->row_array ();
    }
    public function getListKecamatan($kabupatenId=false,$provinsiId = false) {
        $this->db->from('Kecamatan');
        $this->db->order_by('provinsiId');
        $this->db->order_by('kabupatenId');
        $this->db->order_by('kecamatanId');
        if ($kabupatenId !== false)
            $this->db->where('kabupatenId',$kabupatenId);
        if ($provinsiId !== false)
            $this->db->where('provinsiId',$provinsiId);
        $query = $this->db->get();
        
        //$list = array();
        $list[''] = 'Pilih Kecamatan';
        foreach($query->result_array() as $row)
            $list[$row['kecamatanId']] = $row['kecamatanNama'];
        return $list; 
    }  
	public function getKecamatanName($id) {
        if (! $id) {
            return array ();
        }
        $query = $this->db->get_where ( 'Kecamatan' , array ( 'kecamatanId' => $id ) );
        return $query->row_array ();
    }  
}