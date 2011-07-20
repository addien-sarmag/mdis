<?php
	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Retur-Faktur-Pajak-Suplier'.'.pdf';
	
	$pdf->SetFont('Arial','UB',12);
	$pdf->Cell(0,5,'RETUR FAKTUR PAJAK SUPPLIER',$borderActive,1,'C');
	
	$pdf->Ln(5);
	
//foreach ($dataView as $res) :
//endforeach;	
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(140,3,'',$borderActive,0,'C');
	$pdf->Cell(50,3,'Lampiran 1 A',$borderActive,2,'L');
	$pdf->Cell(50,3,'Keputusan Direktur Jenderal Pajak',$borderActive,2,'L');
	$pdf->Cell(50,3,'No. : [ PER-13/PJ/2010 ]',$borderActive,2,'L');
	$pdf->Cell(50,3,'Tanggal  : [24 Maret 2010]',$borderActive,2,'L');
	
/*	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'FAKTUR PAJAK',$borderActive,0,'C');
*/	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,2,'','LTR',1);
	$pdf->Cell(50,5,'Kode dan Nomor Seri Faktur Pajak  : ','L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,5,'Kode dan Nomor Seri Faktur Pajak','R',1);
	$pdf->Cell(0,2,'','LBR',1);
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'',1,1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(40,7,'Kode Retur','LT',0);
	$pdf->Cell(2,7,':','T',0);
	//$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,'Kode Retur','TR');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(40,5,'Supplier','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,'Supplier','R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(40,7,'Tanggal','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,'Tanggal','R',1);
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'',1,1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(40,7,'Status','LT',0);
	$pdf->Cell(2,7,':','T',0);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(0,7,'Status','');
	$pdf->MultiCell(0,0,'','LBR');
//	$pdf->SetFont('Arial','',8);
//	$pdf->Cell(40,5,'Jumlah Pajak yang Dikurangi','L',0);
//	$pdf->Cell(2,5,':','',0);
//	$pdf->MultiCell(0,5,'Jumlah Pajak yang Dikurangi','R');
//	$pdf->SetFont('Arial','',8);
//	$pdf->Cell(40,7,'PPN','L',0);
//	$pdf->Cell(2,7,':','',0);
//	$pdf->Cell(0,7,'PPN','R',1);
//	$pdf->SetFont('Arial','',8);
//	$pdf->Cell(40,5,'Total','L',0);
//	$pdf->Cell(2,5,':','',0);
//	$pdf->SetFont('Arial','',8);
//	$pdf->MultiCell(0,5,'Total','R');
//	$pdf->SetFont('Arial','',8);
//	$pdf->Cell(40,7,'Status','L',0);
//	$pdf->Cell(2,7,':','',0);
//	$pdf->SetFont('Arial','',8);
//	$pdf->MultiCell(0,7,'Status','R');
//	$pdf->MultiCell(0,0,'','LBR');
//	$pdf->SetFont('Arial','',8);
//	$pdf->Cell(35,5,'Status','BL',0);
//	$pdf->Cell(2,5,':','B',0);
//	$pdf->SetFont('Arial','',8);
//	$pdf->MultiCell(0,5,$res['fakturPajakCustomerStatus'],'BR');
		
//	$pdf->WriteTable($columns);
	/*
	$pdf->Cell(80,5,'','LBR',0,'L');
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'Attn. Bpk. Apoy /Ibu Linda','LBR',2,'L');
	*/
/*	$pdf->Ln(2);
	$thead  = array( '  No.   ','                                                Description               ','              Quantity  ','            Unit Price Us $     ','                                         Total US $ ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
	$pdf->Ln();
	$n = 0;
	foreach ( $thead as $val ):
		$pdf->Cell($w[$n++],1,'','LRT');
	endforeach;
	
	$count = count($listTable);
	$countterm = count( $dataTerms ) < 3 && count( $dataTerms ) >= 0 ? ( count( $dataTerms ) == 1 ?  17.5 :  ( count( $dataTerms ) == 2 ? 2 * 17.5 : 35 )  ) : 0;
	$heightspace =   ( 24 * 5 + 5 + $countterm ) - ( $count * 5  ) ; 
	$heightspace =  $heightspace <= 0 ? 5 : $heightspace ;
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $listTable ) foreach( $listTable as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.','height'=>5,'font_style' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2, 'linearea'=>'LR');
	$col[] = array('text' =>  $res['desk'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => number_format(  $res['qty'] )  , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => $res['unit'] , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => $res['total'] , 'width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	$hargaTotal = $hargaTotal + $res['total'];
	endforeach;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++],'height'=> $heightspace, 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$columns[] = $col;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++],'height'=> 5, 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' => 'Freight + Insurance ', 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => $dataProfile['freight'] , 'width' => $w[$n++], 'align' => 'R');
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => '' , 'width' => $w[0] + $w[1], 'align' => 'R' , 'linearea'=>'LT');
	$col[] = array('text' => 'Net Total US $' , 'width' => $w[2] + $w[3], 'align' => 'C','font_style' => 'B', 'linearea'=>'LTRB');
	$col[] = array('text' => $hargaTotal  + $dataProfile['freight'] , 'width' => $w[4],'font_style' => '', 'align' => 'R');
	$columns[] = $col;
	
	
	
	$col = array();
	$col[] = array('text' => 'Terms and Conditions : ' , 'width' => 190 , 'align' => 'L', 'linearea'=>'LTR' );
	$columns[] = $col;
	
	
	$n = 1;
	if ( $dataTerms ) foreach ( $dataTerms as $val ):
		$col = array();
		$col[] = array('text' => $n++ .' .  ' , 'width' => 7 , 'align' => 'L', 'linearea'=>'LTB' );
		$col[] = array('text' => $val['desk'] , 'width' => 183 , 'align' => 'L', 'linearea'=>'TRB' );
		$columns[] = $col;
	endforeach;
	
	$col = array();
	$col[] = array('text' => 'Shipment To : ', 'width' => 95 , 'align' => 'L', 'linearea'=>'LTR','font_style' => 'B' );
	$col[] = array('text' => 'Authorized Signature' , 'width' => 95 / 2, 'align' => 'C', 'linearea'=>'LTRB' );
	$col[] = array('text' => 'Order Acceptance' , 'width' => 95 / 2 , 'align' => 'C' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => $dataProfile['shipment'],'height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' ,'font_style' => '');
	$col[] = array('text' => '', 'height'=> 5 ,'width' =>  ( 95 /2 ) , 'align' => 'L' , 'linearea'=>'LTR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => '','height'=> 5 , 'width' => 95  , 'align' => 'L', 'linearea'=>'LR' ,'font_style' => '');
	$col[] = array('text' => '', 'height'=> 10 ,'width' =>  ( 95 /2 ) , 'align' => 'L' , 'linearea'=>'LR');
	$col[] = array('text' => '' , 'width' => ( 95 /2 ) , 'align' => 'L' );
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => 'Attn : '. $dataProfile['mengetahui']  ,'height'=> 5 ,'font_style' => 'B', 'width' => 95  , 'align' => 'L', 'linearea'=>'LBR' ,'font_style' => 'B');
	$col[] = array('text' => 'Manager', 'height'=> 5 ,'width' =>  ( 95 /2 ) , 'align' => 'C' );
	$col[] = array('text' => ucwords( $dataProfile['suplierName'] ) , 'width' => ( 95 /2 ) );
	$columns[] = $col;
	
		
	$pdf->WriteTable($columns);
	
*/	
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
