<?php

	$pdf = new templatehtml('P','mm','A4');
	
	
	$pdf->SetRightMargin(120);
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);
	
	$pdf->WriteHTML($html);
	$pdf->Output();

	