<?php

	$pdf = new MYFPDF('P','mm','A4');
	
	$borderActive  = false;
//	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Account-Payable'.'.pdf';
	
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,3,'LAPORAN STOCK BARANG',$borderActive,1,'C');
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,3,'ACCOUNT PAYABLE',$borderActive,1,'C');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,3,'[ Per 27-28 Januari 2010 ]',$borderActive,0,'C');
	
	$pdf->Ln(5);
	$thead  = array( '  No.   ','       Nama Perusahaan               ','              No. Invoice  ','                                                               Jumlah                           ','         GRAND TOTAL  ');
	$thead2 = array('EURO','SGD','USD','KURS','Rp.');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'C');
		$n++;
	endforeach;
	
	$pdf->Ln();
	$pdf->Cell($w[0],5,'','LBR');
	$pdf->Cell($w[1],5,'','LBR');
	$pdf->Cell($w[2],5,'','LBR');
	$pdf->Cell($w[3] / 5 ,5,trim ( $thead2[0] ),1,0,'C');
	$pdf->Cell($w[3] / 5 ,5,trim ( $thead2[1] ),1,0,'C');
	$pdf->Cell($w[3] / 5 ,5,trim ( $thead2[2] ),1,0,'C');
	$pdf->Cell($w[3] / 5 ,5,trim ( $thead2[3] ),1,0,'C');
	$pdf->Cell($w[3] / 5 ,5,trim ( $thead2[4] ),1,0,'C');
	$pdf->Cell($w[4]  ,5,'','LBR',0,'C');
	
	$dataExample = array(
						'DHL' => array(
									array( 
											'noInvoice' 		=> 'a123',
											'euro' 	 			=> 21000,
											'sgd' 	 			=> 324000,
											'usd' 	 			=> 12000,
											'kurs' 	 			=> 3423000,
											'rp' 	 			=> 12000,
											),
									array( 
											'noInvoice' 		=> 'a124',
											'euro' 	 			=> 123000,
											'sgd' 	 			=> 143200,
											'usd' 	 			=> 7420,
											'kurs' 	 			=> 634000,
											'rp' 	 			=> 10000,
											),
									array( 
											'noInvoice' 		=> 'cd323',
											'euro' 	 			=> 21000,
											'sgd' 	 			=> 324000,
											'usd' 	 			=> 12000,
											'kurs' 	 			=> 3423000,
											'rp' 	 			=> 314000,
											),
									array( 
											'noInvoice' 		=> 'fe523',
											'euro' 	 			=> 123000,
											'sgd' 	 			=> 143200,
											'usd' 	 			=> 7420,
											'kurs' 	 			=> 634000,
											'rp' 	 			=> 643200,
											),
								),
						'Biotama' => array(
										array( 
											'noInvoice' 		=> 'a123',
											'euro' 	 			=> 21000,
											'sgd' 	 			=> 324000,
											'usd' 	 			=> 12000,
											'kurs' 	 			=> 3423000,
											'rp' 	 			=> 12000,
											),
										array( 
											'noInvoice' 		=> 'a124',
											'euro' 	 			=> 123000,
											'sgd' 	 			=> 143200,
											'usd' 	 			=> 7420,
											'kurs' 	 			=> 634000,
											'rp' 	 			=> 10000,
											),
								
									)
						
						);	
						
	
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	$allGrand = 0;
	if ( $dataExample ) foreach( $dataExample as $key => $val ):
		$nama = $key;
		$nNama = 0;
		$sumArray = count( $val ) ;
		$stepArray = 1;
		$hargaTotal = 0;
		$realhargaTotal = 0;
		if ( $val )foreach (  $val as $vals ):
		$col = array();
		$n = 0;
		
		$namaPerusahaan = $nNama <= 0 ?  $nama : ''  ;
		$number = $nNama <= 0 ? $urut. '.' : '' ;
		
		$col[] = array('text' =>  $number , 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
		$col[] = array('text' => ucwords( $namaPerusahaan ) , 'width' => $w[$n++], 'align' => 'L');
		$col[] = array('text' =>  $vals['noInvoice'] , 'width' => $w[$n++], 'align' => 'C');
		
		$col[] = array('text' => number_format( $vals['euro']  ) , 'width' => $w[$n] / 5, 'align' => 'R');
		$col[] = array('text' => number_format( $vals['sgd']  ) , 'width' => $w[$n] / 5, 'align' => 'R');
		$col[] = array('text' => number_format( $vals['usd']  ) , 'width' => $w[$n] / 5, 'align' => 'R');
		$col[] = array('text' => number_format( $vals['kurs']  ) , 'width' => $w[$n] / 5, 'align' => 'R');
		$col[] = array('text' => number_format( $vals['rp']  ) , 'width' => $w[$n++] / 5, 'align' => 'R');
		
		$hargaTotal = $hargaTotal + $vals['rp'];
		$reshargaTotal = $stepArray ==  $sumArray ? $hargaTotal : 0;
		$realhargaTotal = $reshargaTotal;
		$reshargaTotal = $reshargaTotal == 0 ? '' :  number_format( $reshargaTotal  );
		$stepArray ++ ;
		$col[] = array('text' => $reshargaTotal   , 'width' => $w[$n++], 'align' => 'R');
		
		$nNama ++;
		$columns[] = $col;
		endforeach;
		
		$urut++;
		$allGrand = $allGrand + $realhargaTotal;
	endforeach;
	$pdf->WriteTable($columns);
	
	$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3] ,5,'  GRAND TOTAL',1,0);
	$pdf->Cell($w[4],5,number_format( $allGrand ),1,0,'R');
	
	/*
	 * save in local and give file to user 
	
	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files); */
	
	$pdf->Output( $filename ,'I');