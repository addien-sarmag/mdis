<?php
require('fpdf.php');

class coverlanscape extends FPDF
{
	
	function Header()
	{
	
	$border = 0;
		
	//Arial bold 15
	$this->SetFont('Arial','B',16);

	//Title
	$this->Cell('',5,'MARKAS BESAR ANGKATAN DARAT',$border,2,'L');
	//Line break
	$this->Ln(5);
//	$this->Cell(12,5,'','',0);
	$this->Cell('',5,'DIREKTORAT KESEHATAN',$border,0,'L');
	$this->Ln(15);
	}


	function Footer(){
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
//		$this->Cell(0,10,'Page '.$this->PageNo()."/{nb}",0,0,'C');
	}
	
	
	
}
