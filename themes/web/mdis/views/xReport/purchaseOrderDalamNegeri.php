<?php
	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Purchase-Order-Dalam-Negeri'.'.pdf';
	
	$pdf->SetFont('Arial','UB',12);
	$pdf->Cell(0,5,'PURCHASE ORDER',$borderActive,1,'C');
	
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(80,5,'No.          : '.'027/PO/DMP/II/2011','LTR',0,'L');
	$pdf->Cell(0,5,'To  :','LTR',1,'L');
	$pdf->Cell(80,5,'Date.       : '.'[ Maret 2, 2011 ]','LR',2,'L');
	$pdf->Cell(80,5,'Payment : '. '[ 30 days after shipment ]','LR',2,'L');
	$pdf->Cell(80,5,'Require Delivery : '. '[ 3 weeks ]','LR',2,'L');
	
	$pdf->SetXY(90, 46);
	$almt = 'Iris ( MALAYSIA ) SDN. BHD ( 15741310/D ) No.20, Jalan Anggerik Mokara 2143 Kota Kemuning Section 31, 34054 Shah Alam, Selanggor Darul Ehsan, Malaysia Attn. Jessie Kuck';
	$col = array();
		$col[] = array('text' => $almt,'height'=>5, 'width' => 110 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
	$columns[] = $col;
	$pdf->WriteTable($columns);
	
	$pdf->Cell(80,5,'','LBR',0,'L');
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'Attn. Bpk. Apoy /Ibu Linda','LBR',2,'L');
	
	
	
	$pdf->Ln(2);
	$thead  = array( '  No.   ','                                                Description               ','              Quantity  ','            Unit Price Us $     ','                                         Total US $ ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'C');
		$n++;
	endforeach;
	
	$dataExample = array(
							array( 
											'desc' 		=> 'Air Filter Electronic EIR 321',
											'qty' 	 	=> 21000,
											'unit' 	 	=> 324000,
											'total' 	=> 43240000,
											),
							array( 
											'desc' 		=> 'Switch Carbon  ER 32',
											'qty' 	 	=> 21000,
											'unit' 	 	=> 324000,
											'total' 	=> 423450000,
											),
						);
						
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
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2, 'linearea'=>'LBRT');
	$col[] = array('text' =>  $res['desc'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => number_format( $res['qty']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['unit']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['total']  ) , 'width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	$hargaTotal = $hargaTotal + $res['total'];
	endforeach;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$columns[] = $col;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => 'PPN 10 %' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( 43240000  ) , 'width' => $w[$n++], 'align' => 'R');
	$columns[] = $col;
	
	
	$col = array();
	$col[] = array('text' => '' , 'width' => $w[0] + $w[1], 'align' => 'R' , 'linearea'=>'LT');
	$col[] = array('text' => 'Net Total US $' , 'width' => $w[2] + $w[3], 'align' => 'C','font_style' => 'B', 'linearea'=>'LTRB');
	$col[] = array('text' => number_format( $hargaTotal  ) , 'width' => $w[4],'font_style' => '', 'align' => 'R');
	$columns[] = $col;
	
	$dataTerms = array(
						array(
							'desc'	=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' 
						),
						array(
							'desc'	=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500' 
						),
						array(
							'desc'	=> 'when an unknown printer took a galley of type and scrambled it to make a type specimen book.' 
						),
						array(
							'desc'	=> 'when an unknown printer took a galley of type and scrambled it to make a type specimen book.' 
						),
						array(
							'desc'	=> 'when an unknown printer took a galley of type and scrambled it to make a type specimen book.' 
						),
					  );
	
	
	$col = array();
	$col[] = array('text' => 'Terms and Conditions : ' , 'width' => 190 , 'align' => 'L', 'linearea'=>'LTR' );
	$columns[] = $col;
	
	
	$n = 1;
	if ( $dataTerms ) foreach ( $dataTerms as $val ):
		$col = array();
		$col[] = array('text' => $n++ .' .  ' , 'width' => 7 , 'align' => 'L', 'linearea'=>'LTB' );
		$col[] = array('text' => $val['desc'] , 'width' => 183 , 'align' => 'L', 'linearea'=>'TRB' );
		$columns[] = $col;
	endforeach;
	
	$col = array();
	$col[] = array('text' => 'Shipment To : ', 'width' => 95 , 'align' => 'L', 'linearea'=>'LTR','font_style' => 'B' );
	$col[] = array('text' => 'Authorized Signature' , 'width' => 95 / 2, 'align' => 'C', 'linearea'=>'LTRB' );
	$col[] = array('text' => 'Order Acceptance' , 'width' => 95 / 2 , 'align' => 'C' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => 'Door to door by DHL direct to  direct to Jakarta Door to door by DHL direct to Jakarta  direct to Jakarta Door to door by DHL direct to Jakarta ','height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' ,'font_style' => '');
	$col[] = array('text' => '', 'height'=> 10 ,'width' =>  ( 95 /2 ) , 'align' => 'L' , 'linearea'=>'LTR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => 'Attn : Bu Evi / Bu Mega ','height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LBR' ,'font_style' => 'B');
	$col[] = array('text' => 'Manager', 'height'=> 5 ,'width' =>  ( 95 /2 ) , 'align' => 'C' );
	$col[] = array('text' => 'Sumber Harapan' , 'width' => ( 95 /2 ) );
	$columns[] = $col;
	
	
	$pdf->WriteTable($columns);
	
	
	/*
	 * save in local and give file to user 
	 */
//	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
//	@mkdir( dirname( $pdfpath ),0755,true );
//	$pdf->Output($pdfpath, 'F');
//	
//	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
//	file_download($files);

	$pdf->Output($filename , 'I' );