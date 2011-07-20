<?php

require_once('myfpdf.php');


class templateIV extends MYFPDF
{
	
	var $borderActive ;
	var $jumlahActive = false;
	var $jumlahSize ;
	var $personAcc = ''; 
	var $hiddenBorderObject = true;
	var $hiddenLabelObject = true;
	
	function Footer( ){
		
		$this->SetFont('Arial','',9);
		if ( $this->jumlahActive ){
			
		$border = $this->hiddenBorderObject ? 1 : "";
		$label = $this->hiddenLabelObject ? 'Jumlah' : "" ;
		$this->Cell($this->jumlahSize[0] + $this->jumlahSize[1] , 5,$label,$border,0);
		$label = $this->hiddenLabelObject ? 'Rp. .........................' : "" ;
		$this->Cell($this->jumlahSize[2] , 5,$label,$border,0,'L'); 
		
		$border = $this->hiddenBorderObject ? 'R' : "";
		$this->Cell(0, 5,$this->personAcc,$border,1,'C');
		
		$this->SetFont('Arial', '', 6); 
		$border = $this->hiddenBorderObject ? 'LR' : "";
		$this->Cell(0,5,' ',$border,1);
		$border = $this->hiddenBorderObject ? 'LBR' : "";
		$label = $this->hiddenLabelObject ? '*) Coret yang tidak perlu' : "" ;
		$this->Cell(0,5,$label,$border,1);
		} 
		 
		
	}
	
	
}
