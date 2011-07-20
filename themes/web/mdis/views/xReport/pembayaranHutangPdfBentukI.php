<?php

	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$columns = array();
	$filename = 'Budget-Purchasing'.'.pdf';
	
	$pdf->SetFont('Arial','UB',12);
	$pdf->Cell(0,5,'BUDGET PURCHASING',$borderActive,1,'C');
	$pdf->Ln(5);
	
	$pdf->SetFont('Arial','B',8); 
	$thead  = array( '  No.   ','Tanggal              ','No      ',' Mata Uang       ','Jumlah  Budget                       ','                       Keterangan                                              ');
	
	$n = 0;
	
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'L');
		$n++;
	endforeach;
	

	
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataView ) foreach( $dataView as $res ):
	$res['budgetPurchasingJumlahUang'] = number_format($res['budgetPurchasingJumlahUang'], 0, ',', '.');
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.' ,'font_style' => '','font_size'=>'8','height'=>5, 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2, 'linearea'=>'LBRT');
	$col[] = array('text' => $res['budgetPurchasingTanggal'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['budgetPurchasingNo'], 'width' => $w[$n++], 'align' => 'C');
	$col[] = array('text' => $res['mataUangKode'], 'width' => $w[$n++], 'align' => 'C');
	
	$col[] = array('text' => $res['budgetPurchasingJumlahUang'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['budgetPurchasingKeterangan'] , 'width' => $w[$n++], 'align' => 'L');
	
		
	$columns[] = $col;
	endforeach;
	
	$pdf->WriteTable($columns);
	
	$pdf->Output($filename , 'I' );