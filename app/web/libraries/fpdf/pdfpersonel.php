<?php
define('FPDF_FONTPATH','font/');
require('fpdf.php');


class pdfpersonel extends FPDF
{
//Page header
	function Header()
	{
	$this->SetTopMargin(20);
	//Logo
	//$this->Image('logo_pb.png',10,8,33);
	//Arial bold 15
	$this->SetFont('Arial','B',12);
	$this->Cell(5);
	//Title
	$this->Cell('',0,'MARKAS BESAR ANGKATAN DARAT','',0,'C');
	//Line break
	$this->Ln(5);
	$this->Cell(5);
	$this->Cell('',0,'DIREKTORAT KESEHATAN','',0,'C');
	//Line break
	$this->Ln();
	}

//Page footer
	function Footer(){
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
?>