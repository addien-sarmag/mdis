<?php
	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$columns = array();
	
	$filename = 'Surat-Jalan '.str_replace( array( "/" ) , '\\'  , $noSJ) .'.pdf';
	//$filename = 'Surat-Jalan'.'.pdf';
	
	$spaceHeadContent = 110;
	$fontSize	= 8;
	
	/*
	 * *******************************
	 * 
	 * 	 head config content
	 * ******************************
	 */
	
	$date  	 = 	$sjTanggal;					// <= TGL RIGHT HERE 
	$sentto  = 	 ucwords($nmCustomer);					// <= SENT TO  RIGHT HERE 
	$address =  $alamatCustomer;			// <= ADDRESS RIGHT HERE
	$nosuratjalan =  $noSJ;						// <= NO SURAT JALAN RIGHT HERE
	$kendaraan	 = $namaKendaraan; 						// <= JENIS KENDARAAN RIGHT HERE
	$nokendaraan = $nopolKendaraan; 							// <= NOMOR KENDARAAN RIGHT HERE
	
	
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell($spaceHeadContent,5,"",$borderActive,0);
	$pdf->Cell(20,5,'Jakarta,',$borderActive,0,'L');
	$pdf->Cell(0,5, $date ,'B',1);   									
	
	$pdf->Cell($spaceHeadContent,5,"",$borderActive,0);
	$pdf->Cell(20,5,'Kepada Yth,',$borderActive,0,'L');
	$pdf->MultiCell(0,5, $sentto , 'B');   						
	
	$pdf->Cell($spaceHeadContent,5,"",$borderActive,0);
	$pdf->Cell(20,5,'Alamat ',$borderActive,0,'L');
	$pdf->MultiCell(0,5, $address ); 							
	
	$pdf->Cell($spaceHeadContent + 20 ,1,"",$borderActive,0);
	$pdf->SetLineWidth(0.5);
	$pdf->Cell(0,1,'','B',2);
	$pdf->SetLineWidth(0.1);
	$pdf->Cell(0,1,'','B');
	
	$pdf->Ln(5);
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,5,'SURAT JALAN      No. ' . $nosuratjalan ,$borderActive,1,'C');
	
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',$fontSize);
	$pdf->Cell(80,5,'Dengan Kendaraan : ' . $kendaraan ,$borderActive,0,'L');
	$pdf->Cell(40,5,'No. : ' . $nokendaraan ,$borderActive,0,'L');
	$pdf->Cell(0,5,'Kami ada kirim barang - barang tersebut dibawah ini : ' ,$borderActive,1,'L');
	
	$pdf->SetLineWidth(0.5);
	$pdf->Cell(0,1,'','B',1);
	
	$pdf->Ln(1);
	$pdf->SetLineWidth(0.2);
	$pdf->SetFont('Arial','B',10);
	$thead  = array( '  BANYAKNYA                                       ','                                                                                                                  NAMA BARANG               ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($val);
		$pdf->Cell($w[$n],8,trim ( $val ),1,0,'C');
		$n++;
	endforeach;
	
//	$listTable = array(
//						array(
//								"qty" => "200",
//								"none" => "",
//								"nama"		=> "Filter C FZE 210"
//						),
//						array(
//								"qty" => "310",
//								"none" => "",
//								"nama"		=> "Gear Full Tear FE 400"
//						),
//						
//						);
	
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 10);
	
	$columns = array();  
	if ( $dataView ) foreach( $dataView as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $res['suratJalanListJumlahBarang'],'font_style' => '','height'=>5, 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2, 'linearea'=>'LBRT');
	$col[] = array('text' => '' , 'width' => $w[$n]/6, 'align' => 'C');
	$col[] = array('text' => $res['barangNama']." ".$res['barangKode'], 'width' => $w[$n] -  $w[$n++] / 6 ,'align' => 'L');
	
	$columns[] = $col;
	endforeach;
	
	$pdf->WriteTable($columns);
	
	$pdf->Cell($w[0],5,"",$borderActive,0,'C');
	$pdf->Cell($w[1]/6,5,"Tanda Terima",$borderActive,0,'C');
	$pdf->Cell(30,5,"",$borderActive);
	$pdf->Cell(0,5,"Hormat Kami",$borderActive,1,'C');
	
	
	
	/*
	 * save in local and give file to user 
	 */
	$pdfpath	= FCPATH.'media' . DS . 'private' . DS . 'pdf' . DS . 'sales'. DS . 'surat jalan'. DS .getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);

//	$pdf->Output($filename , 'I' );