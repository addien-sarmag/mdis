<?php

	$pdf = new templateV('P','mm','A4');
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Stock-Barang'.'.pdf';
	
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,3,'LAPORAN STOCK BARANG',$borderActive,1,'C');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,3,'[ Per 27-28 Januari 2010 ]',$borderActive,0,'C');
	
	$pdf->Ln(5);
	$thead  = array( '  No.   ','                                       Description                                         ','              Record Gudang  ','          Record Evi ','         Actual ','              Keterangan ' );
	  
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
	$dataExample = array(
						"kategori1"	=> array( 
											array( 
													'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
													'rGudang' 	 		=> 4320000,
													'rEvi' 	 			=> 439200,
													'actual'			=> 213000,
													'keterangan'		=> '+ 1 pcs'
													),
											array( 
													'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
													'rGudang' 	 		=> 4320000,
													'rEvi' 	 			=> 439200,
													'actual'			=> 213000,
													'keterangan'		=> '+ 1 pcs'
													),
											array( 
													'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
													'rGudang' 	 		=> 4320000,
													'rEvi' 	 			=> 439200,
													'actual'			=> 213000,
													'keterangan'		=> '+ 1 pcs'
													),
											),
						"kategori2"	=> array( 
											array( 
													'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
													'rGudang' 	 		=> 4320000,
													'rEvi' 	 			=> 439200,
													'actual'			=> 213000,
													'keterangan'		=> '+ 1 pcs'
													),
											array( 
													'namaBarang' 		=> 'Oil Filter 204324 ( EQ 6.1 324 )',
													'rGudang' 	 		=> 4320000,
													'rEvi' 	 			=> 439200,
													'actual'			=> 213000,
													'keterangan'		=> '+ 1 pcs'
													),
											),
						);	
						
						
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	
	$urutKategory = 1; 
	$columns = array();  
	$hargaTotal = 0;
	if ( $dataExample ) foreach( $dataExample as $key => $val ):
		$urut = 1;
		$col = array();
		$n = 0;
		
			$col[] = array('text' => "", 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2 ,'fillcolor' => "211,211,211");
			$col[] = array('text' => $key , 'width' => $w[$n++], 'align' => 'L');
			$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' => '' , 'width' => $w[$n++], 'align' => 'C');
			
		$columns[] = $col;
	
	
			if ( $val ) foreach( $val as $res ):
			$col = array();
			$n = 0;
			
			$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2 ,'fillcolor' => "255,255,255");
			$col[] = array('text' =>  $res['namaBarang'] , 'width' => $w[$n++], 'align' => 'L');
			$col[] = array('text' => number_format( $res['rGudang']  ) , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' => number_format( $res['rEvi']  ) , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' => number_format( $res['actual']  ) , 'width' => $w[$n++], 'align' => 'R');
			$col[] = array('text' =>  $res['keterangan'] , 'width' => $w[$n++], 'align' => 'C');
			
			$columns[] = $col;
			endforeach;
			
			
	
	endforeach;
	$pdf->WriteTable($columns);
	
	/*
	 * save in local and give file to user 
	 */
//	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
//	@mkdir( dirname( $pdfpath ),0755,true );
//	$pdf->Output($pdfpath, 'F');
//	
//	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
//	file_download($files);
	
	
	
	$pdf->Output( $filename ,'I');