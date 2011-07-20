<?php

require('fpdf.php');

class pdfpersediaanp extends FPDF
{
	var $userId ;
	var $userLocation ;
//Page header
	function Header()
	{
	$this->SetTopMargin(20);
	
	$borderSize = false;
	//Logo
	//$this->Image('logo_pb.png',10,8,33);
	//Arial bold 15
	$this->SetFont('Arial','B',8);
	//Title
	$wHeader =	80;
	$this->Cell($wHeader,5,'DIREKTORAT KESEHATAN',$borderSize,2,'C');
	$this->Cell($wHeader,5,'TENTARA NASIONAL INDONESIA ANGKATAN DARAT',$borderSize,0,'C');
	$this->Cell($wHeader+117,5,'NO. ......................................................................',$borderSize,1,'R');
	$this->Cell($wHeader,5,'SUB DIREKTORAT BINALPALKES',$borderSize,2,'C');
	$this->Cell($wHeader,5,'','T',2,'C');
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
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}'."/by : ".$this->userId,0,0,'C');
		
		$this->SetFont('Arial','',7);
		$this->SetTextColor(207);
		$this->Cell('',10,$this->userLocation.".".$this->userId,0,0,'R');
	}
}
?>