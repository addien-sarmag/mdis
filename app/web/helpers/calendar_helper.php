<?php

function  ina_date( $string_date ) {
	if ( $string_date == '0000-00-00') 
		return 'Date is empty';
		
	$month=array(
					"01"=>"Januari",
					"02"=>"Pebruari",
					"03"=>"Maret",
					"04"=>"April",
					"05"=>"Mei",
					"06"=>"Juni",
					"07"=>"Juli",
					"08"=>"Agustus",
					"09"=>"September",
					"10"=>"Oktober",
					"11"=>"November",
					"12"=>"Desember"
					);
	
	$split=explode("-",$string_date,3);			
	$res=$split[2]." ".$month[$split[1]]." ".$split[0];
	
	return $res;
}

function  eng_date( $string_date ) {
	if ( $string_date == '0000-00-00') 
		return 'Date is empty';
		
	$month=array(
					"01"=>"January",
					"02"=>"February",
					"03"=>"March",
					"04"=>"April",
					"05"=>"May",
					"06"=>"June",
					"07"=>"July",
					"08"=>"August",
					"09"=>"September",
					"10"=>"October",
					"11"=>"November",
					"12"=>"December"
					);
	
	$split=explode("-",$string_date,3);			
	$res=$month[$split[1]]." ".$split[2].", ".$split[0];
	
	return $res;
}

function ina_dateSlash( $string_date ){
 	if ( $string_date == '0000-00-00') 
		return 'Date is empty';
	
 	$split=explode("-",$string_date,3);			
 	$res=$split[2]."/".$split[1]."/".$split[0];
 	
 	return $res;
 }
 
function  inaDateNoTanggal( $string_date ) {
	if ( $string_date == '0000-00-00') 
		return 'Date is empty';
		
	$month=array(
					"01"=>"Januari",
					"02"=>"Pebruari",
					"03"=>"Maret",
					"04"=>"April",
					"05"=>"Mei",
					"06"=>"Juni",
					"07"=>"Juli",
					"08"=>"Agustus",
					"09"=>"September",
					"10"=>"Oktober",
					"11"=>"November",
					"12"=>"Desember"
					);
	
	$split=explode("-",$string_date,3);			
	$res = $month[$split[1]]." ".$split[0];
	
	return $res;
}