<?php
require_once('myfpdf.php');


class templateV extends MYFPDF
{
	
	var $borderActive ;
	var $userLocation ;
	var $lnHeader ;
	
	function Header()
	{
	
	/*
	 * images config
	 */
	$positionX 		=	10;
	$positionY		=	10;
	$scaleX			=	22;
	$scaleY			=	17.4;
	
	$this->SetFont('Arial','B',14);
	
	//Logo
	$this->Image('./app/web/libraries/fpdf/images/logoInvoice.jpg',$positionX,$positionY,$scaleX,$scaleY);
	
	$this->Cell(25);
	$this->Cell(0,8,'PT DITAJAYA MITRA PERKASA',$this->borderActive,2,'L');
	
	$this->SetFont('Arial','',8);
	$this->Cell(0,3,'Perkantoran Kencana Niaga 1, Blok D1 No. 2-P Meruya Utara, Kembangan',$this->borderActive,2,'L');
	$this->Cell(0,3,'Jakarta Barat 11620 Indonesia  Phone   :  +62 21 5864635  Fax   :  +62 21 585 5537',$this->borderActive,2,'L');
	$this->Cell(0,3,'ditajaya@gmail.com - www.ditajaya.com',$this->borderActive,1,'L');
	
	$this->Cell(0,2,'','B',2,'L');
	
	$this->lnHeader = $this->lnHeader ? $this->lnHeader : 10 ;
	$this->Ln( $this->lnHeader);
	}

	//Page footer
	function Footer(){
		
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Page number
		$this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',$this->borderActive,0,'C');
		
	}
}
