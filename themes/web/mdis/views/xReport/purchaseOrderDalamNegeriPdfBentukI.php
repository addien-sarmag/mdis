<?php
	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$columns = array();
	$filename = 'Purchase-Order-Dalam-Negeri'.'.pdf';
	
	$pdf->SetFont('Arial','UB',14);
	$pdf->Cell(0,5,'PURCHASE ORDER',$borderActive,1,'C');
	
	$pdf->Ln(5);
		
	$col = array();
		$col[] = array('text' => '','height'=>5, 'width' => 70 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LTR');
		$col[] = array('text' => 'To : ','height'=>5, 'width' => 120 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LTR');
	$columns[] = $col;
	
	$col = array();
		$col[] = array('text' => 'No.   : '.$dataProfile['noPO'] ,'font_style' => '','height'=>5, 'width' => 70 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
		$col[] = array('text' =>  ucwords( $dataProfile['suplierName'] ),'font_style' => 'B','height'=>5, 'width' => 120 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
	$columns[] = $col;
	
	$col = array();
		$col[] = array('text' => 'Date  : '.ina_date( $dataProfile['tglPO'] ) ,'font_style' => '','height'=>5, 'width' => 70 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
		$col[] = array('text' =>  ucwords( $dataProfile['suplierAlamat'] ),'height'=>5, 'width' => 120 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
	$columns[] = $col;
	
	$col = array();
		$col[] = array('text' => 'Payment  : '. $dataProfile['paymentPO']." ".$dataProfile['paymentdaysPO']  ,'height'=>5, 'width' => 70 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
		$col[] = array('text' =>  'Telp. '.  $dataProfile['suplierTelp'],'height'=>5, 'width' => 120 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
	$columns[] = $col;
	
	$col = array();
		$col[] = array('text' => 'Required Delivery  : '. ina_date( $dataProfile['requiredPO'] ),'font_style' => '' ,'height'=>5, 'width' => 70 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
		$col[] = array('text' =>  'Attn. ' . ucwords( $dataProfile['suplierPIC'] ) ,'font_style' => 'B','height'=>5, 'width' => 120 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LR');
	$columns[] = $col;
	
	$col = array();
		$col[] = array('text' => '' ,'height'=>1, 'width' => 70 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LBR');
		$col[] = array('text' =>  '' ,'height'=>1, 'width' => 120 , 'align' => 'L','linewidth'=>0.2, 'linearea'=>'LBR');
	$columns[] = $col;
	
	
	$pdf->WriteTable($columns);
	
	$pdf->SetFont('Arial', 'B', 10);
	$pdf->Ln(2);
	$thead  = array( '  No.   ','                                                Description               ','              Quantity  ','            Unit Price  Rp.     ','                                        Total Rp.   ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'C');
		$n++;
	endforeach;
	
	$pdf->Ln();
	$n = 0;
	foreach ( $thead as $val ):
		$pdf->Cell($w[$n++],1,'','LRT');
	endforeach;
	

	$count = count($listTable);
	$countterm = count( $dataTerms ) < 3 && count( $dataTerms ) >= 0 ? ( count( $dataTerms ) == 1 ?  2 * 17.5 :  ( count( $dataTerms ) == 2 ?  17.5  : 35 )  ) : 0;
	$heightspace =   ( 24 * 4 + 4 + $countterm ) - ( $count * 4  ) ; 
	$heightspace =  $heightspace <= 0 ? 5 : $heightspace ;
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 14);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $listTable ) foreach( $listTable as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.' ,'font_style' => '','height'=>7, 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2, 'linearea'=>'LR');
	$col[] = array('text' =>  $res['desk'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => number_format( $res['qty']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['unit']  ) , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['total']  ) , 'width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	$hargaTotal = $hargaTotal + $res['total'];
	endforeach;
	
	$calPPN = $dataProfile['ppnPO'] / 100 * $hargaTotal ;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++],'height'=> $heightspace , 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$columns[] = $col;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '','height'=> 5, 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => "PPN ". $dataProfile['ppnPO'] ." %" , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $calPPN  ) , 'width' => $w[$n++], 'align' => 'R');
	$columns[] = $col;
	
	
	$col = array();
	$col[] = array('text' => '' , 'width' => $w[0] + $w[1], 'align' => 'R' , 'linearea'=>'LT');
	$col[] = array('text' => 'Total' , 'width' => $w[2] + $w[3], 'align' => 'C','font_style' => 'B', 'linearea'=>'LTRB');
	$col[] = array('text' => number_format( $hargaTotal + $calPPN ) , 'width' => $w[4],'font_style' => '', 'align' => 'R');
	$columns[] = $col;
	
	
	
	
	$col = array();
	$col[] = array('text' => 'Terms and Conditions : ' , 'width' => 190 , 'align' => 'L', 'linearea'=>'LTR' ,'height' => 5 );
	$columns[] = $col;
	
	
	$n = 1;
	if ( $dataTerms ) foreach ( $dataTerms as $val ):
		$col = array();
		$col[] = array('text' => $n++ .' .  ' , 'width' => 7 , 'align' => 'L', 'linearea'=>'LTB' );
		$col[] = array('text' => $val['desk'] , 'width' => 183 , 'align' => 'L', 'linearea'=>'TRB' );
		$columns[] = $col;
	endforeach;
	
	
	$col = array();
	$col[] = array('text' => 'Delivery Address : ','height' => 5, 'width' => 95 , 'align' => 'L', 'linearea'=>'LTR','font_style' => 'B' );
	$col[] = array('text' => 'Authorized Signature' , 'width' => 95 / 2, 'align' => 'C', 'linearea'=>'LTRB' );
	$col[] = array('text' => 'Order Acceptance' , 'width' => 95 / 2 , 'align' => 'C' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => $profile['name'],'height'=> 5 ,'font_style' => 'B', 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' );
	$col[] = array('text' => '' ,'width' =>  ( 95 /2 ) ,'font_style' => '', 'align' => 'L' , 'linearea'=>'LTR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' =>  $profile['alamat'],'height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' ,'font_style' => '');
	$col[] = array('text' => '' ,'width' =>  ( 95 /2 ) , 'align' => 'L' , 'linearea'=>'LR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => '','height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' ,'font_style' => '');
	$col[] = array('text' => '' ,'width' =>  ( 95 /2 ) , 'align' => 'L' , 'linearea'=>'LR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => '','height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' ,'font_style' => '');
	$col[] = array('text' => '' ,'height'=> 10,'width' =>  ( 95 /2 ) , 'align' => 'L' , 'linearea'=>'LR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => 'Attn : '. $dataProfile['mengetahui'] ,'font_style' => 'B','height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LBR' ,'font_style' => 'B');
	$col[] = array('text' => 'Manager', 'height'=> 5 ,'font_style' => 'B','width' =>  ( 95 /2 ) , 'align' => 'C' );
	$col[] = array('text' => ucwords( $dataProfile['suplierName'] ) ,'font_style' => 'B', 'width' => ( 95 /2 ) );
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