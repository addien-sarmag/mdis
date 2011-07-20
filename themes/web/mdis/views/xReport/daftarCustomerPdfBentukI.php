<?php

	$pdf = new templateii('L','mm','A4');
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Daftar-Customer'.'.pdf';
	
	$pdf->SetFont('Arial','BU',12);
	$pdf->Cell('',5,'DAFTAR CUSTOMER',$borderActive,1,'C');
	
	$pdf->SetFont('Arial','',10);
	$pdf->Ln(2);
	$pdf->Cell(207);
	$pdf->Cell(70,5,'Nama    : [ LIA ] ',$borderActive ,2);
	$pdf->Cell(70,5,'[ Januari 2010 ]',$borderActive ,2);
	
	$thead  = array( '  No.   ','            NAMA CUSTOMER            ','               TYPE COMPRESOR      ','      KODE    ','             TELEPHONE   ','                CONTACT PERSON             ');
	$thead2 = array( '  4  ' , '  5  ', '  6  ', '  7  ', '  8  ', '  10  ', '  11  ', '   12 ', '   13 ', '   14 ', '   17 ', '   18 ', '   19 ', '   21 ', '   24 ', '   25 ', '   26 ', '   27 ', '   28 ', '   29 ' );
	
	$thead = array_merge( $thead ,  $thead2 );
	
	$pdf->Ln(5);
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
	$dataExample = array(
						array( 
								'nama' 		=> 'Alexandria Putri',
								'type' 	 	=> 'AT 5',
								'kode' 		=> '0271',
								'phone' 	=> '77732377',
								'contact' 	=> 'MISTONO KARUNIA BUDI PURBA',
								'4' 	=> '', 
								'5' 	=> '', 
								'6' 	=> '', 
								'7' 	=> '', 
								'8' 	=> '', 
								'10' 	=> '', 
								'11' 	=> '', 
								'12' 	=> '', 
								'13' 	=> '', 
								'14' 	=> '', 
								'17' 	=> '', 
								'18' 	=> '', 
								'19' 	=> '', 
								'21' 	=> '', 
								'24' 	=> '', 
								'25' 	=> '', 
								'26' 	=> '', 
								'27' 	=> '', 
								'28' 	=> '',
								'29' 	=> ''
								),
						array( 
								'nama' 		=> 'Astrid Trilianda',
								'type' 	 	=> 'LGH 400',
								'kode' 		=> '0271',
								'phone' 	=> '34573534',
								'contact' 	=> 'RETNO ( M ), KHUSNUL ( M )',
								'4' 	=> '', 
								'5' 	=> '', 
								'6' 	=> '', 
								'7' 	=> '', 
								'8' 	=> '', 
								'10' 	=> '', 
								'11' 	=> '', 
								'12' 	=> '', 
								'13' 	=> '', 
								'14' 	=> '', 
								'17' 	=> '', 
								'18' 	=> '', 
								'19' 	=> '', 
								'21' 	=> '', 
								'24' 	=> '', 
								'25' 	=> '', 
								'26' 	=> '', 
								'27' 	=> '', 
								'28' 	=> '',
								'29' 	=> ''
								),
						array( 
								'nama' 		=> 'TONG YANG',
								'type' 	 	=> 'WK 777',
								'kode' 		=> '4321',
								'phone' 	=> '73453467',
								'contact' 	=> 'BE MAE, KUSMIANO ',
								'4' 	=> '', 
								'5' 	=> '', 
								'6' 	=> '', 
								'7' 	=> '', 
								'8' 	=> '', 
								'10' 	=> '', 
								'11' 	=> '', 
								'12' 	=> '', 
								'13' 	=> '', 
								'14' 	=> '', 
								'17' 	=> '', 
								'18' 	=> '', 
								'19' 	=> '', 
								'21' 	=> '', 
								'24' 	=> '', 
								'25' 	=> '', 
								'26' 	=> '', 
								'27' 	=> '', 
								'28' 	=> '',
								'29' 	=> ''
								),
						);
						
	$dataExample = array_merge( $dataExample , $dataExample );
	$dataExample = array_merge( $dataExample , $dataExample );
	$dataExample = array_merge( $dataExample , $dataExample );
	$dataExample = array_merge( $dataExample , $dataExample );
	
	
	$columns = array();  
	
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	if ( $dataExample ) foreach( $dataExample as $res ):
	
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' => $res['nama'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['type'] , 'width' => $w[$n++], 'align' => 'C');
	
	$col[] = array('text' => $res['kode'] , 'width' => $w[$n++], 'align' => 'C');
	$col[] = array('text' => $res['phone'] , 'width' => $w[$n++] , 'align' => 'C');
	$col[] = array('text' => $res['contact'] , 'width' => $w[$n++], 'align' => 'C');
	$col[] = array('text' => $res['4'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['5'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['6'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['7'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['8'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['10'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['11'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['12'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['13'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['14'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['17'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['18'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['19'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['21'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['24'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['25'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['26'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['27'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['28'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['29'] , 'width' => $w[$n++], 'align' => 'L');
	
	$columns[] = $col;
	endforeach;
	$pdf->WriteTable($columns);
	
	/*
	 * save in local and give file to user 
	*/
	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ) ,0755 ,true );
	$pdf->Output($pdfpath , 'F');
	
	$files =  file_properties( array( 'file' => $pdfpath, 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files); 