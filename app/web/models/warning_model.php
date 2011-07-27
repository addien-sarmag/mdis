<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

	class warning_model extends Model {
   
    public function __construct() {
        // Call the Model constructor
        parent::__construct ();
    }
	
    public function getTanggalJatuhTempo() {
    	$this->db->select('count(settingAgingPiutangId) as count ');
    	$this->db->from('SettingAgingPiutang');
    	$tanggalHariIni= date ( 'Y-m-d');
    	$this->db->where('settingAgingPiutangUsiaEnd >= ',$tanggalHariIni);
		$query=$this->db->get();
		 if($query&&($row=$query->row_array())) {
    	 	return $row['count'];
    	 }
    	 return 0;
	}

    public function getListCustomer() {
    	$this->db->select('invoiceKode ');
	    $this->db->select('settingAgingPiutangUsiaStart ');
	    $this->db->select('settingAgingPiutangUsiaEnd ');
	    $this->db->from('SettingAgingPiutang');
	   	$this->db->join('InvoiceCustomer','InvoiceCustomer.invoiceId=SettingAgingPiutang.invoiceId');
	    $tanggalHariIni= date ( 'Y-m-d');
	    $this->db->where('settingAgingPiutangUsiaEnd >= ',$tanggalHariIni);
		$query=$this->db->get();
		return $query->result_array();
		}
	}