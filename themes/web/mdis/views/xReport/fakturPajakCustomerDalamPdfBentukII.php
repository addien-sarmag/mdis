<?php
	$pdf = new templateiv( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$hiddenBorderObject  = $activeLabel;
	$hiddenLabelObject  = $activeBorder;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->setMargins(4,2,1,3);
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$fontSize = 9;
	
	$filename = 'Faktur-Pajak-Customer'.'.pdf';
	 
	if ($dataView) foreach ($dataView as $res) 
	
	$pdf->Ln(29); 
	$pdf->SetFont('Arial','B',12);
	$label = $hiddenLabelObject ? 'FAKTUR PAJAK' : "";
	$pdf->Cell(0,5,$label,$borderActive,0,'C');
	
	$height = 11 ;
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(0,2,'',$borderActive,1);
	$label = $hiddenLabelObject ? 'Kode dan Nomor Seri Faktur Pajak  : ' : "";
	$border = $hiddenBorderObject ? "LT" : "";
	$pdf->Cell(55,$height,$label,$border,0); 
	$pdf->SetFont('Arial','B',10);
	$label = $hiddenLabelObject ? $res['fakturPajakCustomerKode'] : "" ;
	$border = $hiddenBorderObject ? "RT" : "";
	$pdf->Cell(0,$height,$label,$border,1); 
	
	$label = $hiddenLabelObject  ? 'Pengusaha Kena Pajak' : '';
	$pdf->SetFont('Arial','B',$fontSize);
	$pdf->Cell(0,5,$label,$hiddenBorderObject,1);
	
	$pdf->SetFont('Arial','',$fontSize);
	$label = $hiddenLabelObject ? 'Nama': "" ;
	$border = $hiddenBorderObject ? "LT" : "";
	$pdf->Cell(46,7,$label,$border,0);
	$border = $hiddenBorderObject ? "T" : "";
	$pdf->Cell(2,7,'',$border,0);
	$pdf->SetFont('Arial','B',10);
	$label = $hiddenLabelObject ? 'PT. DITAJAYA MITRA PERKASA': "" ;
	$border = $hiddenBorderObject ? "TR" : "";
	$pdf->MultiCell(0,7,$label,$border);
	
	$pdf->SetFont('Arial','',$fontSize);
	$label = $hiddenLabelObject ? 'Alamat' : "" ;
	$border = $hiddenBorderObject ? "L" : "";
	$pdf->Cell(46,11,$label,$border,0);
	$pdf->Cell(2,11,'','',0);
	$label = $hiddenLabelObject ? 'Perk. Kencana Niaga I Jl. Tmn. Aries Blok D.1 No.2-p, Meruya Utara, Kembangan - Jakarta Barat 11520' : "" ;
	$border = $hiddenBorderObject ? "R" : ""; 
	$pdf->MultiCell(0,11,$label,$border);
	
	$pdf->SetFont('Arial','',$fontSize);
	$label = $hiddenLabelObject ? 'NPWP' : "" ;
	$border = $hiddenBorderObject ? "L" : ""; 
	$pdf->Cell(46,7,$label,$border,0);
	$pdf->Cell(2,7,'','',0);
	$label = $hiddenLabelObject ? '01. 719. 954. 8 - 086. 000' : "" ;
	$border = $hiddenBorderObject ? "R" : ""; 
	$pdf->Cell(0,7,$label,$border,1);
	
	$pdf->SetFont('Arial','B',$fontSize);
	$label = $hiddenLabelObject ? 'Pembeli Barang Kena Pajak / Penerima Jasa Kena Pajak ': "" ;
	$border = $hiddenBorderObject ? 1 : ""; 
	$pdf->Cell(0,7,$label,$border,1);
	
	$pdf->SetFont('Arial','',$fontSize);
	$label = $hiddenLabelObject ? 'Nama': "" ;
	$border = $hiddenBorderObject ? 'LT' : ""; 
	$pdf->Cell(46,9,$label,$border,0);
	$border = $hiddenBorderObject ? 'T' : ""; 
	$pdf->Cell(2,9,'',$border,0);
	$pdf->SetFont('Arial','B',10);
	$border = $hiddenBorderObject ? 'TR' : ""; 
	$pdf->MultiCell(0,9,$res['customerNamaPerusahaan'],$border);
	
	$pdf->SetFont('Arial','',$fontSize);
	$label = $hiddenLabelObject ? 'Alamat' : "" ;
	$border = $hiddenBorderObject ? 'L' : "";
	$pdf->Cell(46,15,$label,$border,0);
	$pdf->Cell(2,15,'','',0);
	$border = $hiddenBorderObject ? 'R' : ""; 
	$pdf->MultiCell(0,15,$res['customerAlamat'],$border);
	
	$pdf->SetFont('Arial','',$fontSize);
	$label = $hiddenLabelObject ? 'NPWP' : "" ;
	$border = $hiddenBorderObject ? 'L' : "";
	$pdf->Cell(46,7,$label,$border,0);
	$pdf->Cell(2,7,'','',0);
	$border = $hiddenBorderObject ? 'R' : "";
	$pdf->Cell(0,7,$res['customerNPWP'],$border,1);
	
	$thead  = array( '  No.         ','                    Nama Barang Kena Pajak / Jasa Kena Pajak                                            ','                           Harga Jual / Penggantian /  Uang Muka / Termin ( Rp. )      ');
		
	$border = $hiddenBorderObject ? 1 : "";
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->SetFont('Arial','B',$fontSize);
		
		$label = $hiddenLabelObject ?  $thead[$n] : "" ;
		$pdf->Cell($w[$n],12,trim ( $label ),$border,0,'C');
		$n++;
	endforeach;
	
	
	$dataExample = array(
						array( 
								'Nama' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
								'fakturPajakCustomerListHargaJualRupiah' 	 			=> 4320000,
								),
						array( 
								'Nama' 		=> 'Cool Fan AO 849 ( EQ 6.1 324 )',
								'fakturPajakCustomerListHargaJualRupiah' 	 			=> 439200,
								),
						);	
						
	$dataView  =  array_merge($dataView,$dataView); 
	
	$count = count($dataView);
	$heightspace =   60  - ( $count * 5 ) ;
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0; 
	if ( $dataView ) foreach( $dataView as $res ):
	$col = array();
	$n = 0;
	
	$linearea = $urut <= 1 ? 'LTR' : 'LR' ;
	
	$border = $hiddenBorderObject ? $linearea : "";
	
	$res['Nama'] = "sadasdsa";
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=> $border);
	$col[] = array('text' =>  $res['Nama'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => 'Rp. '.number_format($res['fakturPajakCustomerListHargaJualRupiah'],2,',','.') , 'width' => $w[$n++], 'align' => 'R');
	
	$columns[] = $col;
	
	endforeach;
	
	$border = $hiddenBorderObject ? 'LR' : "";
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++],'height'=> $heightspace, 'align' => 'C','linewidth'=>0.2,'linearea'=> $border);
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R'); 
	$columns[] = $col;
	
	$pdf->WriteTable($columns);
	
	$height = 10;
	$label = $hiddenLabelObject ? 'Harga Jual / Penggantian / Uang Muka / Termin  *)' : "" ;
	$border = $hiddenBorderObject ? 1 : "";
	$pdf->Cell($w[0] + $w[1] , $height,$label,$border,0);
	$label = $hiddenLabelObject ? 'Rp. ' : "" ;
	$border = $hiddenBorderObject ? 1 : "";
	$pdf->Cell($w[2] , $height,$label.number_format($res['fakturPajakCustomerTotal'],2,',','.'),$border,1,'R');
	
	$height = 8;
	$label = $hiddenLabelObject ? 'Dikurangi Potongan Harga ' : "" ;
	$pdf->Cell($w[0] + $w[1] , $height,$label,$border,0);
	$label = $hiddenLabelObject ? 'Rp. ' : "" ;
	$pdf->Cell($w[2] , $height,$label.number_format($res['fakturPajakCustomerDiskon'],2,',','.'),$border,1,'R');
	
	$height = 9;
	$label = $hiddenLabelObject ? 'Dikurangi Uang Muka Yang Telah Diterima' : "" ;
	$pdf->Cell($w[0] + $w[1] , $height,$label,$border,0);
	$label = $hiddenLabelObject ? 'Rp. ' : "" ;
	$pdf->Cell($w[2] , $height,$label.number_format($res['fakturPajakCustomerUangMuka'],2 , ',','.'),$border,1,'R');
	
	$label = $hiddenLabelObject ? 'Dasar Pengenaan Pajak' : "" ;
	$pdf->Cell($w[0] + $w[1] , $height,$label,$border,0);
	$pdf->Cell($w[2] , $height,'Rp. '.number_format($res['fakturPajakCustomerDasarPengenaanPajak'],2 , ',','.'),$border,1,'R');
	
	$label = $hiddenLabelObject ? 'PPN = 10 % x Dasar Pengenaan Pajak ' : "" ;
	$pdf->Cell($w[0] + $w[1] , $height,$label,$border,0);
	$pdf->Cell($w[2] , $height,'Rp. '.number_format($res['fakturPajakCustomerPpn'],2 , ',','.'),$border,1,'R');
	
	$border = $hiddenBorderObject ? "LRT" : "";
	$pdf->Cell(0,9,'',$border,1);
	$border = $hiddenBorderObject ? "LR" : "";
	$label = $hiddenLabelObject ? '     Pajak Penjualan Atas Barang Mewah ' : "" ;
	$pdf->Cell(0,6,$label,$border,1);
	
	$thead  = array( '  Tarif               ','                                    DPP         ','                                     PPn BM  ');
	  
	$border = $hiddenBorderObject ? 1 : "";
	$n = 0;
	foreach ( $thead as $val ):
		$z[] = strlen($thead[$n]);
		$label = $hiddenLabelObject ? $thead[$n] : "" ;
		
		$pdf->Cell($z[$n],5,trim ( $label ),$border,0,'C');
		$n++;
	endforeach;
	$date = date ('j F Y');
	$pdf->Cell(20);
	$pdf->SetFont('Arial', '', $fontSize); 
	$border = $hiddenBorderObject ? "R" : "";
	
	$label = $hiddenLabelObject ? 'Jakarta, ' : "" ;
	$pdf->Cell(0,5,$label.$date,$border,1,'C');
	
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
	
	$border = $hiddenBorderObject ? "LTRB" : "";
	
	$col[] = array('text' => '', 'width' => $z[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>$border,'height'=> 5);
	$col[] = array('text' => '', 'width' => $z[$n++], 'align' => 'C');
	$col[] = array('text' => '' , 'width' => $z[$n++], 'align' => 'C');
	$border = $hiddenBorderObject ? "LR" : "";
	$col[] = array('text' => '', 'width' => 90, 'align' => 'C','linearea'=>$border);
	
	$columns[] = $col;
	endforeach;
	$pdf->WriteTable($columns);
	 
	$pdf->jumlahActive = true;
	$pdf->jumlahSize = $z;
	$pdf->personAcc	 = 'Netiana Kaban';
	$pdf->hiddenBorderObject = $hiddenBorderObject;
	$pdf->hiddenLabelObject = $hiddenLabelObject;
	  
	
	
	 

	$pdf->Output($filename , 'I' );