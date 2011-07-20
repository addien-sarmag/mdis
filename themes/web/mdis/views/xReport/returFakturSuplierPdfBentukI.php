<?php
	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Retur-Faktur-Pajak-Suplier'.'.pdf';
	
	
foreach ($dataView as $res) :
endforeach;	
	
/*	$pdf->SetFont('Arial','',8);
	$pdf->Cell(140,3,'',$borderActive,0,'C');
	$pdf->Cell(50,3,'Lampiran 1 A',$borderActive,2,'L');
	$pdf->Cell(50,3,'Keputusan Direktur Jenderal Pajak',$borderActive,2,'L');
	$pdf->Cell(50,3,'No. : [ PER-13/PJ/2010 ]',$borderActive,2,'L');
	$pdf->Cell(50,3,'Tanggal  : [24 Maret 2010]',$borderActive,2,'L');
*/	
/*	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'FAKTUR PAJAK',$borderActive,0,'C');
*/	
	$pdf->Ln(5);
/*	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,2,'','LTR',1);
	$pdf->Cell(50,5,'Kode dan Nomor Seri Faktur Pajak  : ','L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,5,'','R',1);
*/	$pdf->Cell(0,2,'','B',1);
	
//	$pdf->SetFont('Arial','B',8);
//	$pdf->Cell(0,5,'Pembeli',1,1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'Pembeli','L',0);
	$pdf->Cell(2,7,'','T',0);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(0,7,'','R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'Nama','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(0,7,$res['suplierIdNama'],'R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,$res['suplierIdAlamat'],'R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,$res['suplierIdNPWP'],'R',1);
	
//	$pdf->SetFont('Arial','B',8);
//	$pdf->Cell(0,5,'',1,1);
	
	$pdf->SetFont('Arial','B',8);
	$pdf->MultiCell(0,7,'RETUR FAKTUR PAJAK','LTR','C');

	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'','LT',0);
	$pdf->Cell(2,7,'','T',0);
	$pdf->SetFont('Arial','B',8);
	$pdf->MultiCell(0,7,'No.'.$res['returFakturPajakSuplierKode'],'TR','R');

	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(0,7,'KEPADA PENJUAL','LTR',1,'L');
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'Nama','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(0,7,'PT. DITAJAYA MITRA PERKASA','R');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,5,'Alamat','L',0);
	$pdf->Cell(2,5,':','',0);
	$pdf->MultiCell(0,5,'Perk. Kencana Niaga I Jl. Tmn. Aries Blok D.1 No.2-p, Meruya Utara, Kembangan - Jakarta Barat 11520','R');
	//	$pdf->Cell(2,5,'','Meruya Utara - Kembangan, Jakarta Barat 11620',0);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(30,7,'NPWP','L',0);
	$pdf->Cell(2,7,':','',0);
	$pdf->Cell(0,7,'01.719.954.8-035.000','R',1);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(130,7,'Atas Faktur Pajak No. '.$res['fakturPajakSuplierKode'], 'LT',0,'L');
	$pdf->Cell(0,7,'Tanggal : '.ina_date($res['fakturPajakSuplierTanggal']),'TR',1,'L');
		
	$thead  = array( '  No.   ','                Nama Barang / Jasa Kena Pajak                 ','Kwantum                  ','Harga Satuan (IDR)         ','                 Harga Jual / Penggantian /  Uang Muka ( Rp. )      ');
	  
	
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
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataExample ) foreach( $dataExample as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  'Nama Barang' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => 'Kwantum' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => 'Harga','width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => 'Harga Jual','width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	
	endforeach;
	$pdf->WriteTable($columns);
	
foreach ($dataView as $res) :
endforeach;

	$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3], 5,'Jumlah Harga Jual Yang Dikembalikan',1,0);
	$pdf->Cell($w[4] , 5,$res['returFakturPajakSuplierTotal'],1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3], 5,'Jumlah Pajak Yang Dikurangi',1,0);
	$pdf->Cell($w[4] , 5,$res['returFakturPajakSuplierJumlahPajakDikurangi'],1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3], 5,'Pajak Pertambahan Nilai',1,0);
	$pdf->Cell($w[4] , 5,$res['returFakturPajakSuplierPpn'],1,1,'R');
	
	$pdf->Cell($w[0] + $w[1] + $w[2] + $w[3], 5,'Jumlah',1,0);
	$pdf->Cell($w[4] , 5,$res['returFakturPajakSuplierTotalAkhir'],1,1,'R');
	
/*	$pdf->Cell($w[0] + $w[1] , 5,'PPN = 10 % x Dasar Pengenaan Pajak ',1,0);
	$pdf->Cell($w[2] , 5,'',1,1,'R');
	
	$pdf->Cell(0,5,'','LRT',1);
	$pdf->Cell(0,5,'     Pajak Penjualan Atas Barang Mewah ','LR',1);
*/	
//	$thead  = array( '  Tarif   ','                                     DPP         ','                                     PPn BM  ');
	  
	
//	$n = 0;
//	foreach ( $thead as $val ):
//		$z[] = strlen($thead[$n]);
//		$pdf->Cell($z[$n],5,trim ( $thead[$n] ),1,0,'C');
//		$n++;
//	endforeach;
	$date = date ('j F Y');
//	$pdf->Cell(40);
	$pdf->Cell(0,7,'Jakarta, '.$date,'LR',1,'R');
	
//	$dataExample2 = array(
//						array( 
//								'tarif' 		=> 20,
//								'dpp' 	 			=> 4320000,
//								'ppnBm' 	 			=> 4320000,
//								),
//						array( 
//								'tarif' 		=> 10,
//								'dpp' 	 			=> 4320000,
//								'ppnBm' 	 			=> 4320000,
//								),
//						);	
						
	
//	$columns = array();  
//	$hargaTotal = 0;
//	if ( $dataExample2 ) foreach( $dataExample2 as $res ):
//	$col = array();
//	$n = 0;
	
//	$col[] = array('text' => '.....%', 'width' => $z[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'LTBR');
//	$col[] = array('text' =>  'Rp. ..........................', 'width' => $z[$n++], 'align' => 'L');
//	$col[] = array('text' => 'Rp. .........................' , 'width' => $z[$n++], 'align' => 'L');
//	$col[] = array('text' => '', 'width' => 86, 'align' => 'R','linearea'=>'LR');
	
//	$columns[] = $col;
//	endforeach;
//	$pdf->WriteTable($columns);
	
//	$pdf->Cell($z[0] + $z[1] , 5,'Jumlah',1,0);
//	$pdf->Cell($z[2] , 5,'[ Rp. '.number_format( 3210000 ) . ' ]',1,0,'R');
//	$pdf->Cell(30);
	$pdf->Cell(0,7,'[ Nama      Netrodam Kaban ]','LR',1,'R');
	$pdf->SetFont('Arial','',8);
	$pdf->MultiCell(0,7,'Lembar ke 1 : Untuk Pengusaha Kena Pajak yang menerbitkan Faktur Pajak','LTR',1,'L');
	$pdf->Cell(0,7,'Lembar ke 2 : Untuk Pembeli','LR',1,'L');
//	$pdf->Cell(0,7,'Lembar ke 2 : Untuk Pembeli','LR',1,'R');
		
	$pdf->SetFont('Arial', '', 6);
	$hargaTotal = 0;
	$pdf->Cell(0,5,'','LR',1);
	$pdf->Cell(0,5,'*) Coret yang tidak perlu','LBR',1);

//	$pdf->SetFont('Arial','',6);
//	$pdf->Cell(0,6,'',)
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
	
	
	
<<<<<<< .mine
	$col = array();
	$col[] = array('text' => 'Terms and Conditions : ' , 'width' => 190 , 'align' => 'L', 'linearea'=>'LTR' );
	$columns[] = $col;
=======
	$pdf->Cell(0,5,'','LR',1);
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,' Jakarta, '. $rfpTanggal,'R',1,'C');
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,'Pembeli' ,'R',1,'C');
	$pdf->Cell(0,10,'','LR',1);
	$pdf->Cell(120,5,'','L');
	$pdf->Cell(0,5,'( PT. DITAJAYA MITRA PERKASA )' ,'R',1,'C');
	$pdf->Cell(0,10,'' ,'LBR',1,'C');
>>>>>>> .r771
	
<<<<<<< .mine
=======
	/*
	 * save in local and give file to user 
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