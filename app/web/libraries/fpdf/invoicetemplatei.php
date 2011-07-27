<?php

define('FPDF_FONTPATH','font/');
require_once('myfpdf.php');


class invoicetemplatei extends MYFPDF
{
	
	var $borderActive ;
	var $userLocation ;
	
	
	
	//Page header
	function Header()
	{
	
	/*
	 * images config
	 */
	$positionX 		=	10;
	$positionY		=	10;
	$scaleX			=	17;
	$scaleY			=	13.7;
		
//	$this->SetTopMargin(20);
	$this->SetFont('Arial','B',14);
	
	//Logo
	$this->Image('./app/web/libraries/fpdf/images/logoInvoice.jpg',$positionX,$positionY,$scaleX,$scaleY);
	
	$this->Cell(18);
	$this->Cell(90,5,'PT DITAJAYA MITRA PERKASA',$this->borderActive,2,'L');
	
	$this->SetFont('Arial','',8);
	$this->Cell(90,3,'Perkantoran Kencana Niaga 1, Blok D1 No. 2-P',$this->borderActive,0,'L');
	$this->Cell(50,3,'Phone   :  +62 21 586 4635',$this->borderActive,1,'L');
	
	$this->Cell(18);
	$this->Cell(90,3,'Jl. Taman Aries, Meruya Utara, Kembangan',$this->borderActive,0,'L');
	$this->Cell(50,3,'Fax       :  +62 21 585 5537',$this->borderActive,1,'L');
	
	$this->Cell(18);
	$this->Cell(90,3,'Jakarta 11620, Indonesia',$this->borderActive,0,'L');
	
	$this->Ln(10);
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
