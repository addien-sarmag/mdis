<?php

	$pdf = new templateIII( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	
	$filename = 'Penawaran '.str_replace( array( "/" ) , '\\'  , $noPenawaran) .'.pdf';
	
	$pdf->Cell(30,5,'Tanggal',$borderActive,0,'L');
	$pdf->Cell(3,5,': ',$borderActive,0,'L');
	$pdf->Cell(62,5,$tanggal,'B',0,'L');
	$pdf->Cell(30,5,'No. Penawaran',$borderActive,0,'L');
	$pdf->Cell(3,5,': ',$borderActive,0,'L');
	$pdf->Cell(62,5,$noPenawaran,'B',1,'L');
	$pdf->Cell(30,5,'Marketing',$borderActive,0,'L');
	$pdf->Cell(3,5,': ',$borderActive,0,'L');
	$pdf->Cell(62,5,$marketing,'B',1,'L');
	
	$pdf->Ln(8);
	$pdf->Cell(30,5,'Kepada',$borderActive,0,'L');
	$pdf->Cell(3,5,':',$borderActive,0,'L');
	$pdf->Cell(0,5,$namaCustomer,$borderActive,1,'L');
	$pdf->Cell(30,5,'Telp.',$borderActive,0,'L');
	$pdf->Cell(3,5,':',$borderActive,0,'L');
	$pdf->Cell(0,5,$teleponCustomer,$borderActive,1,'L');
	$pdf->Cell(30,5,'Fax',$borderActive,0,'L');
	$pdf->Cell(3,5,':',$borderActive,0,'L');
	$pdf->Cell(0,5,$faxCustomer,$borderActive,1,'L');
	
	$pdf->Ln(6);
	$pdf->Cell(30,5,'Up.',$borderActive,0,'L');
	$pdf->Cell(3,5,':  '.$up,$borderActive,0,'L');
	
	$totalArrayCP = count($contactPerson)-1;
	$no = 0;
	$strPerson = '';
	$n = 0;
	if ( $contactPerson  ) foreach ( $contactPerson as $val ):
		$koma = $n < count( $contactPerson ) - 1 ? ',' : '' ; 
		
		$strPerson .=  $val . $koma;
		$n ++;
	endforeach;
	$pdf->Cell(62,5,$strPerson,'B',1,'L');
	
	$pdf->Cell(30,5,'Tembusan',$borderActive,0,'L');
	$pdf->Cell(3,5,':',$borderActive,0,'L');
	$pdf->Cell(62,5, $tembusan ,'B',1,'L');
	
	$pdf->Ln(5);
	$pdf->Cell(30,5,'Dengan Hormat,',$borderActive,0,'L');
	
	$pdf->Ln(5);
	$pdf->Cell(0,5,$kataPengantar,$borderActive,0,'L');
	
	$thead  = array( '  No.   ','                      KETERANGAN                                                                  ','             Jumlah      ','             Harga '.$matauang      ,'                        Jumlah   ');
	
	$pdf->Ln(7);
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
//	$dataExample = array(
//						array( 
//								'keterangan' 		=> 'Top Tool Exchange 2.0',
//								'jumlah' 	 		=> '432',
//								'hrgSatuan' 		=> '13000',
//								'jumlah' 			=> '26500000',
//								),
//						array( 
//								'keterangan' 		=> 'Guxo Grill Maximum',
//								'jumlah' 	 		=> '36',
//								'hrgSatuan' 		=> '34000',
//								'jumlah' 			=> '6543000000',
//								),
//						array( 
//								'keterangan' 		=> 'Gun Tool Express F30',
//								'jumlah' 	 		=> '25',
//								'hrgSatuan' 		=> '40500',
//								'jumlah' 			=> '6340000000',
//								),
//								
//						);
//						
//	$dataExample  =  array_merge($dataExample,$dataExample);
//	$dataExample  =  array_merge($dataExample,$dataExample);
//	
//	
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	if ( $dataView ) foreach( $dataView as $res ):
	
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  $res['barangNama']." ".$res['plat']." ".$res['barangKode'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => number_format( $res['penawaranListJumlah']  ) , 'width' => $w[$n++], 'align' => 'R');
	
	$col[] = array('text' => number_format( $res['penawaranListHarga'] ), 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => number_format( $res['penawaranListTotal'] ), 'width' => $w[$n++] , 'align' => 'R');
	
	$columns[] = $col;
	endforeach;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'LTB');
	$col[] = array('text' =>  '* Spesifikasi terdapat pada lampiran' , 'width' => $w[$n++], 'align' => 'L','linearea'=>'BT');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R','linearea'=>'LTBR');
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => '', 'width' => $w[$n++] , 'align' => 'R');
	$columns[] = $col;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'T');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L','linearea'=>'T');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R','linearea'=>'T');
	$col[] = array('text' => 'Harga Sebelum Pajak '.$matauang, 'width' => $w[$n++], 'align' => 'L','linearea'=>'LBTR');
	//$diskon = ($diskon) ? ($diskon/100) * $total : 0;
	$diskon = 0;
	$hargaAkhir = $total - $diskon;
	$col[] = array('text' => number_format( $hargaAkhir ), 'width' => $w[$n++] , 'align' => 'R','linearea'=>'LTBR');
	$columns[] = $col;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => 'PPn 10 %', 'width' => $w[$n++], 'align' => 'L','linearea'=>'LBTR');
	$ppn = (10/100)*$total;
	$col[] = array('text' => number_format( $ppn ), 'width' => $w[$n++] , 'align' => 'R','linearea'=>'LTBR');
	$columns[] = $col;
	
	$col = array();
	$n = 0;
	$col[] = array('text' => '', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'linearea'=>'');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' => 'Total Harga '.$matauang, 'width' => $w[$n++], 'align' => 'L','linearea'=>'LBTR');
	$totalSsdhPpn = $total + $ppn;
	$col[] = array('text' => number_format( $totalSsdhPpn ), 'width' => $w[$n++] , 'align' => 'R','linearea'=>'LTBR');
	$columns[] = $col;
	
	$pdf->WriteTable($columns);
	
	
	$pdf->Ln(6);
	$pdf->SetFont('Arial', 'B', 8);
	$pdf->Cell(10);
	$pdf->Cell(30,5,'Syarat dan Kondisi : ',$borderActive,0,'L');
	
	$pdf->Ln(9);
	$pdf->SetFont('Arial', '', 8);
	$n = 1;
	foreach($dataView2 as $val){
	$pdf->Cell(10);
	$pdf->Cell(0,5,$n++ . '. '.$val['penawaranTermDescription'],$borderActive,1,'L');
	
//$pdf->Cell(0,5,$n++ . '. 'Estimasi pengiriman unit yaitu 3 bulan setelah PO diterima,$borderActive,2,'L');
//	$pdf->Cell(0,5,$n++ . '.  Harga belum termasuk jasa instalasi.',$borderActive,2,'L');
//	$pdf->Cell(0,5,$n++ . '.  Harga termasuk start up pada saat barang diterima.',$borderActive,2,'L');
//	$pdf->SetFont('Arial', 'B', 8);
//	$pdf->Cell(0,5,$n++ . '.  Standar garansi yaitu 5 tahun Heat exchanger dan 2 tahun untuk unit dryer.',$borderActive,2,'L');
//	$pdf->SetFont('Arial', '', 8);
//	$pdf->Cell(0,5,$n++ . '.  Syarat pembayaran 30% uang muka pada saat Po dan 70% pada saat barang diterima.',$borderActive,2,'L');
//	$pdf->Cell(0,5,$n++ . '.  Masa berlaku penawaran 1 bulan.',$borderActive,2,'L');
//	$pdf->Cell(0,5,$n++ . '.  Pembayaran PPN jika dalam Rupiah, dibayarkan sesuai yang tertera pada Faktur Pajak.',$borderActive,2,'L');
//	$pdf->Cell(0,5,$n++ . '.  Biaya Bank ditanggung oleh Pembeli ( Full amount only ).',$borderActive,2,'L');
//	
	}
	$pdf->Ln(7);
	$pdf->Cell(10);
	$pdf->Cell(0,5,'Demikian kami sampaikan penawaran harga ini atas perhatian dan kerjasamanya kami ucapkan terima kasih.',$borderActive,2,'L');
	
	$pdf->Ln(10);
	$pdf->Cell(10);
	$pdf->Cell(30,5,'Hormat Kami,',$borderActive,2,'L');
	
	$pdf->Ln(20);
	$pdf->Cell(10);
	$pdf->Cell(30,5,'[ Nur Saliah ]',$borderActive,2,'L');
	$pdf->Cell(30,5,'[ Sales Manager ]',$borderActive,2,'L');
	
	/*
	 * save in local and give file to user 
	 */
//	$pdfpath	= FCPATH.'media' . DS . 'private' . DS . 'pdf' . DS . 'sales'. DS . 'penawaran' . DS .getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
//	@mkdir( dirname( $pdfpath ),0755,true );
//	$pdf->Output($pdfpath, 'F');
	$pdf->Output($filename, 'I');
	
//	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
//	file_download($files);