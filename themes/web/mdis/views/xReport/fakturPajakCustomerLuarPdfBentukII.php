<?php  
	$pdf = new templateiv( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$hiddenBorderObject  = true;
	$hiddenLabelObject  = true;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Faktur-Pajak-Customer'.'.pdf';
	
	$fontSize = 9;
	
	foreach ($dataView as $res)  
	
	$pdf->rect(10,24,190,228);
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(140,3,'',$borderActive,0,'C');
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'FAKTUR PAJAK',$borderActive,0,'C');
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(0,2,'','LR',1);
	$pdf->Cell(50,5,'Kode dan Nomor Seri Faktur Pajak  : ','L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,5,$res['fakturPajakCustomerKode'],'R',1);
	$pdf->Cell(0,2,'','LBR',1);
	
	$pdf->SetFont('Arial','B',$fontSize);
	$pdf->Cell(0,5,'Pengusaha Kena Pajak',1,1);
	
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(30,7,'Nama','LT',0);
	$pdf->Cell(2,7,':','T',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,'PT. DITAJAYA MITRA PERKASA','TR');
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,'Perk. Kencana Niaga I Jl. Tmn. Aries Blok D.1 No.2-p, Meruya Utara, Kembangan - Jakarta Barat 11520','R');
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,'01. 719. 954. 8 - 086. 000','R',1);
	
	$pdf->SetFont('Arial','B',$fontSize);
	$pdf->Cell(0,5,'Pembeli Barang Kena Pajak / Penerima Jasa Kena Pajak ',1,1);
	
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(30,7,'Nama','LT',0);
	$pdf->Cell(2,7,':','T',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,$res['customerNamaPerusahaan'],'TR');
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,$res['customerAlamat'],'R');
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,$res['customerNPWP'],'R',1);
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',$fontSize);
	$pdf->Cell(8,7,'No.','LRT',0);
	$pdf->Cell(105,7,'Nama Barang Kena Pajak / Jasa Kena Pajak','TR',0,'C');
	$pdf->Cell(77,7,'Harga Jual / Penggantian /  Uang Muka / Termin','BTR',1,'C');
		
	$thead  = array( '        ','                                                                                                         ','                Valas *)                ','                (Rp.)                ');
	//$thead = array('No');
	$n = 0;

	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->SetFont('Arial','B',$fontSize);
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

	$dataExample2 = array_merge($dataExample2,$dataExample2);
	
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataExample2 ) foreach( $dataExample2 as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => '.....%', 'width' => $z[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'LTBR',"height"=> 5);
	$col[] = array('text' =>  'Rp. ..........................', 'width' => $z[$n++], 'align' => 'L');
	$col[] = array('text' => 'Rp. .........................' , 'width' => $z[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => 86, 'align' => 'R','linearea'=>'LR');
	
	$columns[] = $col;
	endforeach;
	$pdf->WriteTable($columns);

	$pdf->Cell($z[0] + $z[1] , 5,'Jumlah',1,0);
	$pdf->Cell($z[2] , 5,'Rp. .........................',1,1,'L');
	$pdf->Cell(0, 5,'Kurs : '.number_format($kurs,2,',','.') .'/ 1 US$','LR',0,1,'L');
	
	/*$pdf->Cell(145,5,'','L',0,'C');
	$pdf->Cell(0,5,'Netiana Kaban','R',1,'C'); 
	
	$pdf->SetFont('Arial', '', 6);
	$hargaTotal = 0;
	$pdf->Cell(0,5,'','LR',1);
	$pdf->Cell(0,5,'*) Coret yang tidak perlu','LBR',1);*/


	$pdf->Output($filename , 'I' );