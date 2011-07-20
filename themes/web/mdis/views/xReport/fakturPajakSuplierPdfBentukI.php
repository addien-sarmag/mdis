<?php

	$pdf = new MYFPDF('P','mm','A4');
	
	$borderActive  = false;
//	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Faktur-Pajak-Suplier'.'.pdf';
	
	foreach ($dataView as $res) :
	endforeach;
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(140,3,'',$borderActive,0,'C');
	$pdf->Cell(50,3,'Lampiran 1 A',$borderActive,2,'L');
	$pdf->Cell(50,3,'Keputusan Direktur Jenderal Pajak',$borderActive,2,'L');
	$pdf->Cell(50,3,'No. : [ PER-13/PJ/2010 ]',$borderActive,2,'L');
	$pdf->Cell(50,3,'Tanggal  : [24 Maret 2010]',$borderActive,2,'L');
	
	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'FAKTUR PAJAK',$borderActive,0,'C');
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,2,'','LTR',1);
	$pdf->Cell(50,5,'Kode dan Nomor Seri Faktur Pajak  : ','L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,5,$res['fakturPajakSuplierKode'],'R',1);
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
	$pdf->Cell(0,7,'01.084.43242.4324.000','R',1);
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,5,'Pembeli Barang Kena Pajak / Penerima Jasa Kena Pajak ',1,1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'Nama','LT',0);
	$pdf->Cell(2,7,':','T',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,$res['suplierIdNama'],'TR');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,$res['suplierIdAlamat'],'R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,$res['suplierIdNPWP'],'R',1);
	
	$thead  = array( '  No.   ','                Nama Barang Kena Pajak / Jasa Kena Pajak                                                 ','                 Harga Jual / Penggantian /  Uang Muka / Termin ( Rp. )      ');
	  
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
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
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataView ) foreach( $dataView as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  'Nama Barang' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => 'Harga' , 'width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	
	endforeach;
	$pdf->WriteTable($columns);
	
	$pdf->Cell($w[0] + $w[1] , 5,'Harga Jual / Penggantian / Uang Muka / Termin',1,0);
	$pdf->Cell($w[2] , 5,$res['fakturPajakSuplierTotal'],1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'Dikurangi Potongan Harga ',1,0);
	$pdf->Cell($w[2] , 5,$res['fakturPajakSuplierDiskon'].' %',1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'Dikurangi Uang Muka Yang Telah Diterima',1,0);
	$pdf->Cell($w[2] , 5,'[ '.number_format( 3210000 ) . ' ]',1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'Dasar Pengenaan Pajak',1,0);
	$pdf->Cell($w[2] , 5,$res['fakturPajakSuplierDasarPengenaanPajak'],1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] , 5,'PPN = 10 % x Dasar Pengenaan Pajak ',1,0);
	$pdf->Cell($w[2] , 5,$res['fakturPajakSuplierPpn'],1,1,'R');
	
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
	$pdf->Cell($z[2] , 5,'[ Rp. '.number_format( 3210000 ) . ' ]',1,0,'R');
	$pdf->Cell(30);
	$pdf->Cell(0,5,' Nama      Netiana Kaban','R',1,'C');
	
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
	$pdf->Output( $filename ,'I');