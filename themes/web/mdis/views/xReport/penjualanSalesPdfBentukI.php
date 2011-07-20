<?php

	$pdf = new MYFPDF('P','mm','A4');
	
	$borderActive  = false;
//	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Penjualan-Sales'.'.pdf';
	
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,3,'PT. DITAJAYA MITRA PERKASA',$borderActive,1,'L');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,3,'DAFTAR PENJUALAN [ Januari 2010 ]',$borderActive,1,'L');
	
	$thead  = array( '  Sales   ','   Tgl   ','   Invoice No       ','                             Customer  ','                                                                          Harga ( USD ) ','       Harga ( Rp. )    ' );
	$thead2  = array( '  Service   ',' Mesin ','   Sparepart  ','  Filter    ');
	
	$pdf->Ln(5);
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'C');
		$n++;
	endforeach;
	
	$pdf->Ln();
	$pdf->Cell($w[0],5,'','LBR',0,'C');
	$pdf->Cell($w[1],5,'','LBR',0,'C');
	$pdf->Cell($w[2],5,'','LBR',0,'C');
	$pdf->Cell($w[3],5,'','LBR',0,'C');
	$pdf->Cell($w[4] / 4,5,trim ( $thead2[0] ),1,0,'C');
	$pdf->Cell($w[4] / 4,5,trim ( $thead2[1] ),1,0,'C');
	$pdf->Cell($w[4] / 4,5,trim ( $thead2[2] ),1,0,'C');
	$pdf->Cell($w[4] / 4,5,trim ( $thead2[3] ),1,0,'C');
	$pdf->Cell($w[5],5,'','LBR',0,'C');
	
	$dataExample = array(
						'Ita' => array(
									array( 
											'tgl' 				=> '12',
											'noInvoice' 	 	=> '7445',
											'customer' 	 		=> 'PT. Philips Indonesia',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
									array( 
											'tgl' 				=> '13',
											'noInvoice' 	 	=> '645',
											'customer' 	 		=> 'PT. Pindo Deli Pulp & Paper Mills',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
									array( 
											'tgl' 				=> '14',
											'noInvoice' 	 	=> '432',
											'customer' 	 		=> 'PT. Aqua Golden Missisipi Tbk',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
										),
						'Bagas' => array(
									array( 
											'tgl' 				=> '12',
											'noInvoice' 	 	=> '7445',
											'customer' 	 		=> 'PT. Philips Indonesia',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
									array( 
											'tgl' 				=> '13',
											'noInvoice' 	 	=> '645',
											'customer' 	 		=> 'PT. Pindo Deli Pulp & Paper Mills',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
									array( 
											'tgl' 				=> '14',
											'noInvoice' 	 	=> '432',
											'customer' 	 		=> 'PT. Aqua Golden Missisipi Tbk',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
									array( 
											'tgl' 				=> '14',
											'noInvoice' 	 	=> '432',
											'customer' 	 		=> 'PT. Djarum',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
											),
									array( 
											'tgl' 				=> '14',
											'noInvoice' 	 	=> '432',
											'customer' 	 		=> 'PT. Sepanjang Jaya',
											'service' 	 		=> 12000,
											'mesin' 	 		=> 3423000,
											'sparepart' 	 	=> 12000,
											'filter' 	 		=> 12000,
											'harga' 	 		=> 12000,
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
		$total = array('filter' => 0, 'service' => 0 ,'mesin' => 0,'sparepart' => 0 , 'harga' => 0) ;
			if ( $val )foreach (  $val as $vals ):
			$col = array();
			$n = 0;
			
			$namaSales = $nNama <= 0 ?  $nama : ''  ;
			$border = $nNama <= 0  ? 'LTBR'  : 'LR' ;
			
			$col[] = array('text' =>  strtoupper( $namaSales ) , 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea' => $border ,'fillcolor'=>'255,255,255');
			$col[] = array('text' =>  $vals['tgl'], 'width' => $w[$n++], 'align' => 'L','linearea' => 'LTBR');
			$col[] = array('text' =>  $vals['noInvoice'] , 'width' => $w[$n++], 'align' => 'C');
			$col[] = array('text' =>  $vals['customer'] , 'width' => $w[$n++], 'align' => 'L');
			
			$total['service'] = $total['service'] + $vals['service'];
			$col[] = array('text' => number_format( $vals['service']  ) , 'width' => $w[$n] / 4, 'align' => 'R');
			
			$total['mesin'] = $total['mesin'] + $vals['mesin'];
			$col[] = array('text' => number_format( $vals['mesin']  ) , 'width' => $w[$n] / 4, 'align' => 'R');
			
			$total['sparepart'] = $total['sparepart'] + $vals['sparepart'];
			$col[] = array('text' => number_format( $vals['sparepart']  ) , 'width' => $w[$n] / 4, 'align' => 'R');
			
			$total['filter'] = $total['filter'] + $vals['filter'];
			$col[] = array('text' => number_format( $vals['filter']  ) , 'width' => $w[$n++] / 4, 'align' => 'R');
			
			$total['harga'] = $total['harga'] + $vals['harga'];
			$col[] = array('text' => number_format ( $vals['harga'] )  , 'width' => $w[$n++], 'align' => 'R');
			
			$nNama ++;
			$columns[] = $col;
			endforeach;
		
		$col = array();
		$n = 0;
		
		$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'fillcolor'=>'200,197,197');
		$col[] = array('text' =>  '', 'width' => $w[$n++], 'align' => 'L');
		$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'C');
		$col[] = array('text' =>  'Total '. strtoupper( $nama ), 'width' => $w[$n++], 'align' => 'L');
		
		$col[] = array('text' => number_format( $total['service'] ) , 'width' => $w[$n] / 4, 'align' => 'R');
		$col[] = array('text' => number_format( $total['mesin']   ) , 'width' => $w[$n] / 4, 'align' => 'R');
		$col[] = array('text' => number_format( $total['sparepart']  ) , 'width' => $w[$n] / 4, 'align' => 'R');
		$col[] = array('text' => number_format( $total['filter']  ) , 'width' => $w[$n++] / 4, 'align' => 'R');
		
		$col[] = array('text' => number_format( $total['harga'] )  , 'width' => $w[$n++], 'align' => 'R');
		$columns[] = $col;
		
		$grandTotal['Service'][] 	= $total['service'] ;
		$grandTotal['Mesin'][] 		= $total['mesin'] ;
		$grandTotal['Sparepart'][] 	= $total['sparepart'] ;
		$grandTotal['Filter'][] 	= $total['filter'] ;
		
	endforeach;
	$pdf->WriteTable($columns);
	
	$pdf->Ln(5);
	$endTotal = 0 ;
	foreach( $grandTotal as $key => $val ):
		$grand = 0;
		if ( $val ) foreach ( $val as $keys => $vals ):
			$grand = $grand + $vals;
		endforeach;
		
		$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3], 5, $key, 0, 0,'R' );
		$pdf->Cell( $w[4] - $w[4] / 4 ,5,'.................................................................................');
		$pdf->MultiCell($w[4] / 4,5, number_format ( $grand ),0,'R');
		$endTotal = $endTotal + $grand;
	endforeach;
	
		$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3], 5, 'Total', 0, 0,'R' );
		$pdf->Cell( $w[4] ,5,'.............................................................................................................');
		$pdf->MultiCell($w[5] ,5, number_format ( $endTotal ),0,'R');
	
	/*
	 * save in local and give file to user 
	 */
	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);
		
