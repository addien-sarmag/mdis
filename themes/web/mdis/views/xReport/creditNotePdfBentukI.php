<?php
	$pdf = new templateIV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Credit-Note '.str_replace( array( "/" ) , '\\'  , $noCN) .'.pdf';
//	$filename = 'Credit-Note '.$noCN.'.pdf';
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,'Pembeli','LTR',1,'L');
	$pdf->Cell(20,5,'Nama    : ','L',0,'L');
	$pdf->MultiCell(0,5,$nmCustomer,'R',1,'L');
	$pdf->Cell(20,5,'ALamat    : ','L',0,'L');
	$pdf->MultiCell(0,5,$alamatCustomer,'R',1,'L');
	$pdf->Cell(20,5,'NPWP    : ','L',0,'L');
	$pdf->MultiCell(0,5,$npwpCustomer,'R',1,'L');
	$pdf->Cell(0,5,'','LR',1,'L');
	
	$pdf->SetFont('times','B',12);
	$pdf->Cell(0,10,'CREDIT NOTE',1,1,'C');
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,$noCN.'         ',1,1,'R');
	
	$pdf->Cell(0,5,'','LTR',1,'L');
	$pdf->Cell(0,5,'Penjual','LR',1,'L');
	$pdf->Cell(20,5,'Nama    : ','L',0,'L');
	$pdf->MultiCell(0,5,'PT. DITAJAYA MITRA PERKASA','R',1,'L');
	$pdf->Cell(20,5,'ALamat    : ','L',0,'L');
	$pdf->MultiCell(0,5,'Taman Aries Blok D XI/10 RT. 002/06','R',1,'L');
	$pdf->Cell(20,5,'NPWP    : ','L',0,'L');
	$pdf->MultiCell(0,5,'01.00.877.9-431.000','R',1,'L');
	$pdf->Cell(0,5,'','LR',1,'L');
	
	$pdf->Cell(140,8,'Atas Invoice No. '.$invoiceKode,'LT',0,'C');
	$pdf->Cell(50,8,'Tanggal   :'. ina_date($cnTanggal),'RT',1,'L');
	
	$thead  = array( '  No.   ','              Nama Barang / Jasa Kena Pajak                                                         ','           Kwantum      ','         Harga Satuan      ','                Harga Total   ');
	$thead2  = array( '  Urut   ','                                                                   ','                 ','         '.$matauang.'     ','                '.$matauang.'  ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
	$pdf->Ln();
	$n = 0;
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),'TB',0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,0,'C');
	$pdf->Cell($w[$n],5,trim ( $thead2[$n++] ),1,1,'C');
	
						
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataView ) foreach( $dataView as $res ):
	$col = array();
	$n = 0;
	$hargaTotalRow = 0;
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  $res['barangNama']." ".$res['barangKode'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => number_format( $res['creditNoteJumlah']  ) , 'width' => $w[$n++], 'align' => 'C');
	
	$col[] = array('text' => number_format( $res['creditNoteHarga'] ), 'width' => $w[$n++], 'align' => 'R');
	
	//$hargaTotalRow = $res['hrgSatuan'] * $res['hrgSatuan2'];
	$col[] = array('text' => number_format($res['creditNoteTotalHarga']), 'width' => $w[$n++] , 'align' => 'R');
	
	$columns[] = $col;
	
//	$hargaTotal  = $hargaTotal + $hargaTotalRow;
	endforeach;
	
	// example
//	$hrgRetur = 12410000;
	
	$col = array();
	$col[] = array('text' =>  'Jumlah Harga Jual Yang Dikembalikan' , 'width' => $w[0] + $w[1] + $w[2] + $w[3]  , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => number_format( $cnTotal ), 'width' => $w[4], 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
	// example
//	$hrgPajakMin = 213000;
	$col = array();
	$col[] = array('text' =>  'Jumlah Pajak Yang Dikurangi' , 'width' => $w[0] + $w[1] + $w[2] + $w[3]  , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => number_format( $cnJmlPajakDikurangi ), 'width' => $w[4], 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
	// example
	//$ppn = 12300;
	$ppn = (10/100) * $cnTotal;
	$col = array();
	$col[] = array('text' =>  'Pajak Pertambahan Nilai' , 'width' => $w[0] + $w[1] + $w[2] + $w[3]  , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => number_format( $ppn ), 'width' => $w[4], 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
	// example
	//$hargaTotal = $hargaTotal - ( $hrgRetur +  $hrgPajakMin + $ppn ) ;
	$hargaTotal = $cnTotal - $cnJmlPajakDikurangi + $ppn;
	$col = array();
	$col[] = array('text' =>  'Jumlah' , 'width' => $w[0] + $w[1] + $w[2] + $w[3]  , 'align' => 'L','linewidth'=>0.2);
	$col[] = array('text' => number_format( $hargaTotal ), 'width' => $w[4], 'align' => 'R','linewidth'=>0.2);
	$columns[] = $col;
	
	$pdf->WriteTable($columns);
	
	
	$pdf->Cell(0,5,'','LR',1);
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,' Jakarta, '. ina_date( $cnTanggal ),'R',1,'C');
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,'Penjual' ,'R',1,'C');
	$pdf->Cell(0,10,'','LR',1);
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,'( PT. DITAJAYA MITRA PERKASA )' ,'R',1,'C');
	$pdf->Cell(0,10,'' ,'LBR',1,'C');
	
	/*
	 * save in local and give file to user 
	 */
	$pdfpath	= FCPATH.'media' . DS . 'private' . DS . 'pdf' . DS . 'sales'. DS . 'credit note'. DS. getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
	
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);