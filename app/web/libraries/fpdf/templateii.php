<?php
require_once('myfpdf.php');


class templateii extends MYFPDF
{
	
	var $borderActive ;
	var $userLocation ;
	
	//Page header
	function Header()
	{
	
	$this->SetFont('Arial','B',12);
	$this->Cell(90,5,'PT DITAJAYA MITRA PERKASA',$this->borderActive,2,'L');
	$this->Ln(5);
	}

	//Page footer
	function Footer(){
		
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',$this->borderActive,0,'C');
		
	}
}
