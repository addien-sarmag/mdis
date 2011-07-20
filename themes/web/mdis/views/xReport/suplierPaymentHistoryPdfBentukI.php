<?php
	$pdf = new templateIII( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive  = $borderActive;
	$pdf->lnHeader		= 3 ;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Suplier-Payment-History'.'.pdf';
	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'Supplier Payment History',$borderActive,1,'C');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,ina_date( '2010-09-24' ) .' to '.ina_date( date('Y-m-d') ),$borderActive,1,'C');
	
	$thead  = array( '    Cheque    ','Chq Date                 ','       PO  ','                 Date ','                            Supplier Inv. ','                     Purchase Total Amt ','                      Amount Applied' );
	   
	$pdf->Ln(5);
	$n = 0;
	$wAll = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$wAll = $wAll + $w[$n];
		$n++;
	endforeach;
	
	$dataExample = array(
						'Abadi Filter' => array(
							
										  '0BCAK12'   =>		array( 
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 32400000,
																				'amountApplied' 	=> 34200000,
																				),
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 5234000,
																				'amountApplied' 	=> 32440000,
																				),
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 43240000,
																				'amountApplied' 	=> 234400000,
																				),
																		
																	),
										'0FWE84'   =>		array( 
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 32400000,
																				'amountApplied' 	=> 34200000,
																				),
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 5234000,
																				'amountApplied' 	=> 32440000,
																				),
																		
																	),
												),
							'Cash Purchase' => array(
							
										  '0RWEI56'   =>		array( 
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 32400000,
																				'amountApplied' 	=> 34200000,
																				),
																		
																	),
										'0IUD87'   =>		array( 
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 32400000,
																				'amountApplied' 	=> 34200000,
																				),
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 5234000,
																				'amountApplied' 	=> 32440000,
																				),
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 5234000,
																				'amountApplied' 	=> 32440000,
																				),
																		array ( 
																				'chqDate' 	 		=> '2010-02-21',
																				'noPo' 	 			=> 'LKO9189',
																				'poDate' 	 		=> '2010-03-05',
																				'supplierInvoice' 	=> '0665/AF/XI/09',
																				'poTotalAmt' 	 	=> 43240000,
																				'amountApplied' 	=> 234400000,
																				),
																		
																	),
												),
						);
	
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	$allGrand = 0;
	if ( $dataExample ) foreach( $dataExample as $key => $val ):
		
		$namaPerusahaan = $key;
		
		$col = array();
		$col[] = array('text' =>  $namaPerusahaan ,'height'=>7, 'width' => $wAll, 'align' => 'L','linewidth'=>0.2,'font_style' => 'B','fillcolor'=>'255,255,255');
		$columns[] = $col;
		
		if ( $val ) foreach ( $val as $keys => $vals ):
			$kdJurnal = $keys ;
			
			$totalAmount = 0;
			$nkdJurnal = 0;
			if ( $vals ) foreach ( $vals as $valss ): 
			$n = 0;
			$col = array();
			
			$cekkdJurnal = $nkdJurnal <= 0 ? $kdJurnal : '';
			$border = $nkdJurnal <= 0 ? 'LTR' : 'LR';
			
			$col[] = array('text' =>  $cekkdJurnal , 'width' => $w[$n++],'height'=>5, 'align' => 'L','linewidth'=>0.2,'font_style' => '','fillcolor'=>'255,255,255','linearea'=>$border);
			$col[] = array('text' =>  ina_dateSlash ( $valss['chqDate'] ), 'width' => $w[$n++], 'align' => 'C','linearea'=>'LTBR');
			$col[] = array('text' =>   $valss['noPo'] , 'width' => $w[$n++], 'align' => 'C');
			$col[] = array('text' =>  ina_dateSlash ( $valss['poDate'] ), 'width' => $w[$n++], 'align' => 'C');
			$col[] = array('text' =>   $valss['supplierInvoice'] , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' =>  number_format ( $valss['poTotalAmt'] ), 'width' => $w[$n++], 'align' => 'C');
			$col[] = array('text' =>  number_format ( $valss['amountApplied'] ), 'width' => $w[$n++], 'align' => 'C');
			
			$columns[] = $col;
			
			$totalAmount = $totalAmount + $valss['amountApplied'];
			$nkdJurnal++;
			$n++;
			endforeach;
			
			$col = array();
			$col[] = array('text' => 'Total for Payment ' . $kdJurnal , 'width' => $wAll - $w[6] , 'align' => 'R','linewidth'=>0.2,'fillcolor'=>'200,197,197');
			$col[] = array('text' =>  number_format ( $totalAmount ), 'width' => $w[6], 'align' => 'C');
			$columns[] = $col;
		
		endforeach;
		
	endforeach;
	$pdf->WriteTable($columns);
	
	$pdf->Output( $filename ,'I');