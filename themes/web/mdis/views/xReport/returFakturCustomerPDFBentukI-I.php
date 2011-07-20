<?php
	$pdf = new templateIV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Retur-Faktur '.str_replace( array( "/" ) , '\\'  , $rfpKode) .'.pdf';
//	$filename = 'Credit-Note '.$noCN.'.pdf';
	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(100,8,'NOTA RETUR','LT',0,'R');
	
	
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(90,8,'Nomor: '.$rfpKode,'RT',1,'C');
	//$pdf->Cell(0,10,'NOTA RETUR',1,1,'C');
	
	$pdf->Cell(120,8,'Atas Faktur Pajak Nomor : '.$noFP/*.$invoiceKode*/,'LT',0,'L');
	$pdf->Cell(70,8,'Tanggal : '. $rfpTanggal,'RT',1,'L');
	
	$pdf->SetFont('Arial','BU',10);
	$pdf->Cell(0,5,'Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak','LTR',1,'L');
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(20,5,'Nama    : ','L',0,'L');
	$pdf->MultiCell(0,5,$nmCustomer,'R',1,'L');
	$pdf->Cell(20,5,'ALamat    : ','L',0,'L');
	$pdf->MultiCell(0,5,$alamatCustomer,'R',1,'L');
	$pdf->Cell(20,5,'NPWP    : ','L',0,'L');
	$pdf->MultiCell(0,5,$npwpCustomer,'R',1,'L');
	$pdf->Cell(0,5,'','LR',1,'L');
	
	
//	$pdf->Cell(0,5,$noCN.'         ',1,1,'R');
	
	$pdf->SetFont('Arial','BU',10);
	$pdf->Cell(0,5,'','LTR',1,'L');
	$pdf->Cell(0,5,'Penjual','LR',1,'L');
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(20,5,'Nama    : ','L',0,'L');
	$pdf->MultiCell(0,5,'PT. DITAJAYA MITRA PERKASA','R',1,'L');
	$pdf->Cell(20,5,'ALamat    : ','L',0,'L');
	$pdf->MultiCell(0,5,'Perk. Kencana Niaga I Jl. Tmn. Aries Blok D.1 No.2-p, Meruya Utara, Kembangan - Jakarta Barat 11520','R',1,'L');
	$pdf->Cell(20,5,'NPWP    : ','L',0,'L');
	$pdf->MultiCell(0,5,'01.00.877.9-431.000','R',1,'L');
	$pdf->Cell(0,5,'','LR',1,'L');
	
	$thead  = array( '  No.   ','              Nama Barang / Jasa Kena Pajak                                             ','                         Harga Jual/Penggantian/Uang Muka/Termin                              ','      Valas *)   ','       Rp.      ');
//	$thead2  = array( '  Urut   ','                                                                   ','                 ','         '.$matauang.'     ','                '.$matauang.'  ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		if ( $n <  count ($thead) - 2 )
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'C');
		
		$n++;
	endforeach;
	$pdf->Ln();
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		if ( $n <  count ($thead) - 3 )
		$pdf->Cell($w[$n],5,'','LBR',0,'C');
		
		if ( $n == 3 )
		$pdf->Cell($w[2]/2,5,trim ( $thead[$n] ),'LTBR',0,'C');
		
		
		if ( $n == 4 )
		$pdf->Cell($w[2]/2,5,trim ( $thead[$n] ),'LTBR',0,'C');
		
		$n++;
	endforeach;
	
	$pdf->Ln();
	/*$n = 0;
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),'TB',0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,1,'C');*/
	
						
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	$totalRupiahSeluruhnya = 0;
	
//	print_r($dataView);
//	die();
	if ( $dataView ) foreach( $dataView as $res ):
	$col = array();
	
	$n = 0;
	$hargaTotalRow = 0;
	
	if ($matauang !== 'IDR') {
		$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
		$col[] = array('text' =>  $res['barangNama']." ".$res['barangKode']. "        ".$res['returFakturPajakCustomerListJumlah']." ".$res['satuanSingkatan'] , 'width' => $w[$n++], 'align' => 'L');
	
		$col[] = array('text' => $matauang." ".number_format($res['returFakturPajakCustomerListTotal'],2,'.',','), 'width' => $w[2]/2, 'align' => 'R');
	
		$totalRupiah = $res['returFakturPajakCustomerListTotal'] * $kurs;
		$col[] = array('text' => $totalRupiah, 'width' => $w[2]/2 , 'align' => 'R');
	
		$totalRupiahSeluruhnya += $totalRupiah;
	
	}elseif($matauang === 'IDR'){
		$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
		$col[] = array('text' => $res['barangNama']." ".$res['barangKode']. "        ".$res['returFakturPajakCustomerListJumlah']." ".$res['satuanSingkatan'], 'width' => $w[$n++], 'align' => 'L');
	
		$col[] = array('text' => '', 'width' => $w[2]/2, 'align' => 'R');
	
		$col[] = array('text' => number_format($res['returFakturPajakCustomerListTotal'],2,',','.'), 'width' => $w[2]/2 , 'align' => 'R');
	
		
	}
	//$hargaTotal  = $hargaTotal + $hargaTotalRow;
	
	$columns[] = $col;
	endforeach;
	$pdf->WriteTable($columns);
	// example
//	$hrgRetur = 12410000;
	$columns = array();
	
	if ($matauang !== 'IDR') {
	$col = array();
	$col[] = array('text' =>  'Jumlah Harga Jual Yang Dikembalikan' , 'width' => $w[0] + $w[1]   , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => number_format( $rfpTotal ,2,'.',','), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$col[] = array('text' => number_format( $totalRupiahSeluruhnya ), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
	// example
//	$hrgPajakMin = 213000;
	
	// example
	//$ppn = 12300;
	$ppnAsing = (10/100) * $rfpTotal;
	$ppnRp = (10/100) * $totalRupiahSeluruhnya;
	$col = array();
	$col[] = array('text' =>  'PPN yang diretur' , 'width' => $w[0] + $w[1]  , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => number_format( $ppnAsing, 2,'.',',' ), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$col[] = array('text' => /*number_format( $ppn )*/'', 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
//	$col = array();
//	$col[] = array('text' =>  'PPNBM yang diminta kembali' , 'width' => $w[0] + $w[1]   , 'align' => 'L','linewidth'=>0.2);
//	$col[] = array('text' => number_format( $rfpJmlPajakDikurangi, 2,'.',',' ), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
//	$jmlPajakDikurangidlmRupiah = $kurs * $rfpJmlPajakDikurangi;
//	
//	$col[] = array('text' => number_format( $jmlPajakDikurangidlmRupiah ), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
//	$columns[] = $col;
	
	$pdf->WriteTable($columns);
	}else{
	$col = array();
	$col[] = array('text' =>  'Jumlah Harga Jual Yang Dikembalikan' , 'width' => $w[0] + $w[1]   , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => '', 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$col[] = array('text' => number_format( $rfpTotal ,2,',','.'), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
	// example
//	$hrgPajakMin = 213000;
	
	// example
	//$ppn = 12300;
	$ppn = (10/100) * $rfpTotal;
	$col = array();
	$col[] = array('text' =>  'PPN yang diretur' , 'width' => $w[0] + $w[1]  , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => '', 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$col[] = array('text' => number_format( $ppn, 2,',','.' ), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
//	$col = array();
//	$col[] = array('text' =>  'PPNBM yang diminta kembali' , 'width' => $w[0] + $w[1]   , 'align' => 'L','linewidth'=>0.2);
//	$col[] = array('text' => '', 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
//	$col[] = array('text' => number_format( $rfpJmlPajakDikurangi, 2,',','.' ), 'width' => $w[2]/2, 'align' => 'R','linewidth'=>0.2);
//	$columns[] = $col;
	
	$pdf->WriteTable($columns);
	}
	
	$pdf->Cell(0,5,'','LR',1);
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,' Jakarta, '. ina_date(date('Y-m-d'))/*. ina_date( $cnTanggal )*/,'R',1,'C');
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,'Pembeli' ,'R',1,'C');
	$pdf->Cell(0,10,'','LR',1);
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,$nmCustomer ,'R',1,'C');
	$pdf->Cell(0,10,'' ,'LBR',1,'C');
	
	$pdf->SetFont('Arial','',10);
//	$pdf->Cell(0,5,$noCN.'         ',1,1,'R');
	
	$pdf->SetFont('Arial','',10);
//	$pdf->Cell(0,5,$noCN.'         ',1,1,'R');
	
	$pdf->Cell(0,3,'','LTR',1,'L');
	$pdf->Cell(0,5,'Lembar ke - 1 : untuk PKP Penjual ','LR',1,'L');
	$pdf->MultiCell(0,5,'Lembar ke - 2 : untuk Pembeli ','LR',1,'L');
	$pdf->MultiCell(0,5,'Kurs : '.$kurs.' / '.$matauang,'LR',1,'L');
	$pdf->Cell(0,3,'','LBR',1,'L');
	
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,5,'*)  Diisi apabila penyerahan menggunakan mata uang asing','',0,'L');
	/*
	 * save in local and give file to user 
	 */
	$pdfpath	= FCPATH.'media' . DS . 'private' . DS . 'pdf' . DS . 'finance'. DS . 'retur faktur customer'. DS. getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');

	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);	