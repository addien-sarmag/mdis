<?php
require('fpdf.php');

class pdflanscape extends FPDF
{	
	var $userId ;
	var $userLocation ;

//Page header
	function Header()
	{
	//Logo
	//$this->Image('images/angga1.png',10,8,33);
	//Arial bold 15
	$this->SetFont('Arial','B',14);

	//Title
	$this->Cell('',1,'MARKAS BESAR ANGKATAN DARAT','',0,'L');
	//Line break
	$this->Ln(5);
	$this->Cell(12,5,'','',0);
	$this->Cell('',1,'DIREKTORAT KESEHATAN','',0,'L');
	$this->Ln(15);
	}

//Page footer
	function Footer( ){
		
		$this->userId = ( $this->userId == "" )? getUserId() : $this->userId;
		$this->userLocation = ( $this->userId == "" )? getUserLocation() : $this->userId;
		
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
		$this->Cell(0,10,'Page '.$this->PageNo()."/{nb}",0,0,'C');
		
		$this->SetFont('Arial','',7);
		$this->SetTextColor(207);
		$this->Cell('',10,$this->userLocation.".".$this->userId,0,0,'R');
	}
	
	
	
}
?>