<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Cek_barang extends Model {

    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
    public function cekKategoriBarang($table, $kode) {
        $this->db->select ( 'count('.$table.'Kode ) as count' );
        $this->db->from ( $table );
        $this->db->where ( $table.'Kode'  , $kode );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
	public function cekBarang($table, $kode) {
        $this->db->select ( 'count('.$table.'Kode ) as count' );
        $this->db->from ( $table );
        $this->db->where ( $table.'Kode'  , $kode );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
    
	public function cekSatuanBarang($table, $nama) {
        $this->db->select ( 'count('.$table.'Nama ) as count' );
        $this->db->from ( $table );
        $this->db->where ( $table.'Nama'  , $nama );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
    }
 
}