<?php
define('FPDF_FONTPATH','font/');
require('fpdf.php');


class PDF extends FPDF
{
	var $userId ;
	var $userLocation ;
//Page header
	function Header()
	{
	$this->SetTopMargin(20);
	//Logo
	//$this->Image('logo_pb.png',10,8,33);
	//Arial bold 15
	$this->SetFont('Arial','B',14);
	$this->Cell(5);
	//Title
	$this->Cell('',0,'MARKAS BESAR ANGKATAN DARAT','',0,'L');
	//Line break
	$this->Ln(5);
	$this->Cell(5);
	$this->Cell(90,1,'DIREKTORAT KESEHATAN','',0,'C');
	//Line break
	$this->Ln();
	}

//Page footer
	function Footer(){
		
		//printing data who is do this
		$this->userId = ( $this->userId == "" )? getUserId() : $this->userId;
		$this->userLocation = ( $this->userId == "" )? getUserLocation() : $this->userId;
		
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		
		$this->SetFont('Arial','',7);
		$this->SetTextColor(207);
		$this->Cell('',10,$this->userLocation.".".$this->userId,0,0,'R');
	}
}
?>