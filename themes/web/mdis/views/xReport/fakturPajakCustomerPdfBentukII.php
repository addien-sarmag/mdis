<?php
	$pdf = new templateiv( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Faktur-Pajak-Customer'.'.pdf';
	
	
foreach ($dataView as $res) :
endforeach;	
	
	$pdf->rect(10,24,190,228);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(140,3,'',$borderActive,0,'C');
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'FAKTUR PAJAK',$borderActive,0,'C');
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,2,'','LR',1);
	$pdf->Cell(50,5,'Kode dan Nomor Seri Faktur Pajak  : ','L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,5,$res['fakturPajakCustomerKode'],'R',1);
	$pdf->Cell(0,2,'','LBR',1);
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'Pengusaha Kena Pajak',1,1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'Nama','LT',0);
	$pdf->Cell(2,7,':','T',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,'PT. DITAJAYA MITRA PERKASA','TR');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,'Perk. Kencana Niaga I Jl. Tmn. Aries Blok D.1 No.2-p, Meruya Utara, Kembangan - Jakarta Barat 11520','R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,'01. 719. 954. 8 - 086. 000','R',1);
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'Pembeli Barang Kena Pajak / Penerima Jasa Kena Pajak ',1,1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'Nama','LT',0);
	$pdf->Cell(2,7,':','T',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,$res['customerNamaPerusahaan'],'TR');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,$res['customerAlamat'],'R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,$res['customerNPWP'],'R',1);
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(8,7,'No.','LRT',0);
	$pdf->Cell(105,7,'Nama Barang Kena Pajak / Jasa Kena Pajak','TR',0,'C');
	$pdf->Cell(77,7,'Harga Jual / Penggantian /  Uang Muka / Termin','BTR',1,'C');
		
	$thead  = array( '        ','                                                                                                         ','                Valas *)                ','                (Rp.)                ');
	//$thead = array('No');
	$n = 0;

	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
	
	$dataExample = array(
						array( 
								'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
								'hrg' 	 			=> 4320000,
								),
						array( 
								'namaBarang' 		=> 'Cool Fan AO 849 ( EQ 6.1 324 )',
								'hrg' 	 			=> 439200,
								),
						);	
						
	$dataExample  =  array_merge($dataExample,$dataExample);
	$dataExample  =  array_merge($dataExample,$dataExample);

	$count = count($dataView);
	$heightspace =   ( 113  ) - ( $count * 5  ) ; 
	$heightspace =  $heightspace <= 0 ? 5 : $heightspace ;
	
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataView ) foreach( $dataView as $res ):
	$col = array();
	$n = 0;
	
	$linearea = $urut <= 1 ? 'LTR' : 'LR' ;

	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=> $linearea);
	$col[] = array('text' =>  $res['Nama'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => 'US$ '.number_format($res['fakturPajakCustomerListHargaJualValas'],2 , '.',','), 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => /*$res['fakturPajakCustomerListHargaJualRupiah']*/'' , 'width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	
	endforeach;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++],'height'=> $heightspace, 'align' => 'C','linewidth'=>0.2,'linearea'=> 'LR');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R'); 
	$columns[] = $col;
	
	$pdf->WriteTable($columns);

	$pdf->Cell($w[0] + $w[1] , 5,'Harga Jual / Penggantian / Uang Muka / Termin  *)',1,0);
	$pdf->Cell($w[2], 5,'US$ '. number_format($res['fakturPajakCustomerTotal'],2 , '.',','),1,0,'R');
	$pdf->Cell($w[3], 5,'',1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'Dikurangi Potongan Harga ',1,0);
	$pdf->Cell($w[2], 5,'US$ '. number_format($res['fakturPajakCustomerDiskon'],2 , '.',','),1,0,'R');
	$pdf->Cell($w[3], 5,'',1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'Dikurangi Uang Muka Yang Telah Diterima',1,0);
	$pdf->Cell($w[2], 5,'US$ '.number_format($res['fakturPajakCustomerUangMuka'],2 , '.',','),1,0,'R');
	$pdf->Cell($w[3], 5,'',1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'Dasar Pengenaan Pajak',1,0);
	$pdf->Cell($w[2], 5,'US$ '.number_format($res['fakturPajakCustomerDasarPengenaanPajak'],2 , '.',','),1,0,'R');
	
	$dppInRp = $res['fakturPajakCustomerDasarPengenaanPajak'] * $res['kurs'];
	$pdf->Cell($w[3], 5,'Rp. '.number_format($dppInRp,2,',','.'),1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'PPN = 10 % x Dasar Pengenaan Pajak ',1,0);
	$pdf->Cell($w[2] , 5,'US$ '.number_format($res['fakturPajakCustomerPpn'],2 , '.',','),1,0,'R');
	
	$ppnInRp = $res['fakturPajakCustomerPpn'] * $res['kurs'];
	$pdf->Cell($w[3], 5,'Rp. '.number_format($ppnInRp,2,',','.'),1,1,'R');
	
	$kurs = $res['kurs'];
	
	$pdf->Cell(0,5,'','LRT',1);
	//$pdf->Ln(75);
	$pdf->SetY(-70);
    
	$pdf->Cell(0,5,'     Pajak Penjualan Atas Barang Mewah ','LR',1);
	
	$thead  = array( '  Tarif   ','                                     DPP         ','                                     PPn BM  ');
	  
	
	$n = 0;
	foreach ( $thead as $val ):
		$z[] = strlen($thead[$n]);
		$pdf->Cell($z[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	$date = date ('j F Y');
	$pdf->Cell(40);
	$pdf->Cell(0,5,'Jakarta, '.$date,'R',1,'C');
	
	$dataExample2 = array(
						array( 
								'tarif' 		=> 20,
								'dpp' 	 			=> 4320000,
								'ppnBm' 	 			=> 4320000,
								),
						array( 
								'tarif' 		=> 10,
								'dpp' 	 			=> 4320000,
								'ppnBm' 	 			=> 4320000,
								),
						);	
						
	
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataExample2 ) foreach( $dataExample2 as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => '.....%', 'width' => $z[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'LTBR');
	$col[] = array('text' =>  'Rp. ..........................', 'width' => $z[$n++], 'align' => 'L');
	$col[] = array('text' => 'Rp. .........................' , 'width' => $z[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => 86, 'align' => 'R','linearea'=>'LR');
	
	$columns[] = $col;
	endforeach;
	$pdf->WriteTable($columns);

	$pdf->Cell($z[0] + $z[1] , 5,'Jumlah',1,0);
	$pdf->Cell($z[2] , 5,'Rp. .........................',1,1,'L');
	$pdf->Cell(0, 5,'Kurs : '.number_format($kurs,2,',','.') .'/ 1 US$','LR',0,1,'L');
	
	$pdf->Cell(145,5,'','L',0,'C');
	$pdf->Cell(0,5,'Netiana Kaban','R',1,'C'); 
	
	$pdf->SetFont('Arial', '', 6);
	$hargaTotal = 0;
	$pdf->Cell(0,5,'','LR',1);
	$pdf->Cell(0,5,'*) Coret yang tidak perlu','LBR',1);
	
	/*
	 * save in local and give file to user 
	 */
/*	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);	
*/	
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