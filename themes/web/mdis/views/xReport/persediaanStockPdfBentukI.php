<?php

	$pdf = new MYFPDF('P','mm','A4');
	
	$borderActive  = false;
//	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Persediaan-Stock'.'.pdf';
//	$filename = 'Invoice-Penjualan '.str_replace( array( "/" ) , '\\'  , $noInvoice) .'.pdf';
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,3,'KARTU PERSEDIAAN',$borderActive,1,'C');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,3,'[ Per 27-28 Januari 2010 ]',$borderActive,0,'C');
	
	$pdf->Ln(5);
	$thead  = array( '  No.   ','                                       Description                                         ','              Record Gudang  ','          Record Evi ','         Actual ','              Keterangan ' );
	  
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
	$dataExample = array(
						array( 
								'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
								'rGudang' 	 		=> 4320000,
								'rEvi' 	 			=> 439200,
								'actual'			=> 213000,
								'keterangan'		=> '+ 1 pcs'
								),
						array( 
								'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
								'rGudang' 	 		=> 4320000,
								'rEvi' 	 			=> 439200,
								'actual'			=> 213000,
								'keterangan'		=> '+ 1 pcs'
								),
						array( 
								'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
								'rGudang' 	 		=> 4320000,
								'rEvi' 	 			=> 439200,
								'actual'			=> 213000,
								'keterangan'		=> '+ 1 pcs'
								),
						);	
						
	$dataExample  =  array_merge($dataExample,$dataExample);
	$dataExample  =  array_merge($dataExample,$dataExample);
	$dataExample  =  array_merge($dataExample,$dataExample);
	$dataExample  =  array_merge($dataExample,$dataExample);
	$dataExample  =  array_merge($dataExample,$dataExample);
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataExample ) foreach( $dataExample as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  $res['namaBarang'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => number_format( $res['rGudang']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['rEvi']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['actual']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => $res['keterangan'] , 'width' => $w[$n++], 'align' => 'C');
	
	$columns[] = $col;
	
	endforeach;
	$pdf->WriteTable($columns);
	
	/*
	 * save in local and give file to user 
	 */
//	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
//	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'I');
	
//	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
//	file_download($files);
	
	
	
//	$pdf->Output( $filename ,'I');