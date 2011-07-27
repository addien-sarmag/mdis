<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class Cek_model extends Model {

    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
    public function cekKode($table , $kode) {
        $this->db->select ( 'count('.$table.'Kode ) as count' );
        $this->db->from ( $table );
        $this->db->where ( $table.'Kode'  , $kode );
        $query = $this->db->get ();
        if ($query && ($row = $query->row_array ())) {
            return $row ['count'];
        }
        return 0;
        
    }
 
}