<?php

	$pdf = new MYFPDF('P','mm','A4');
	
	$borderActive  = false;
//	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$filename = 'Listing-Pajak-Keluaran'.'.pdf';
	
	
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(0,3,'LAPORAN STOCK BARANG',$borderActive,1,'C');
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,3,'[ Per 27-28 Januari 2010 ]',$borderActive,0,'C');
	
	$pdf->Ln(5);
	$thead  = array( '  No.   ','      Tgl FP              ','                  Customer  ','          ' ,'             Sales ','            Rate ','            Total Sales' ,'          PPN Dipungut ' ,'        ', '                    PPN REAL');
	  
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		
		$border = $n == 8 ? 'LBR': 1 ;
		
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),$border,0,'C');
		$n++;
	endforeach;
	
	$dataExample = array(
						array( 
								'noFp' 				=> '1450',
								'tglFp' 	 		=> '2011-02-28',
								'customer' 	 		=> 'PT. MAYORA INDAH Tbk',
								'empty1'			=> 'USD',
								'sales'				=> 52300,
								'rate'				=> 52300,
								'totalSales'		=> 52300,
								'ppnDipungut'		=> 52300,
								'empty2'			=> 1,
								'ppnReal'			=> 52300,
								),
						);
	
	$pdf->Ln(); 

	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	$totalppnReal = 0 ;
	$totalEmpty2  = 0 ;
	$totalppnDipungut = 0 ;
	$totalSales		  = 0 ;
	if ( $dataExample ) foreach( $dataExample as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' =>  $res['noFp'] , 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' =>  ina_date( $res['tglFp'] ) , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  $res['customer'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  $res['empty1'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  number_format( $res['sales'] ), 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' =>  number_format( $res['rate'] ), 'width' => $w[$n++]);
	
	$totalSales = $totalSales + $res['totalSales'];
	$col[] = array('text' =>  number_format( $res['totalSales'] ), 'width' => $w[$n++]);
	
	$totalppnDipungut = $totalppnDipungut  +  $res['ppnDipungut'];
	$col[] = array('text' =>  number_format( $res['ppnDipungut'] ), 'width' => $w[$n++]);
	
	$totalEmpty2 = $totalEmpty2 + $res['empty2'];
	$col[] = array('text' =>  '( ' .$res['empty2'] . ' )', 'width' => $w[$n++]);
	
	$totalppnReal = $totalppnReal + $res['ppnReal'];
	$col[] = array('text' =>  number_format( $res['ppnReal'] ) , 'width' => $w[$n++]);
	
	$columns[] = $col;
	
	endforeach;
	$pdf->WriteTable($columns);
	
	$n = 0;
	foreach ( $thead as $val ):
		
		$border = $n == 8 ? 'LBR': 1 ;
		
		$pdf->Cell($w[$n],5,'',$border,0,'C');
		$n++;
	endforeach;
	
	$pdf->Ln();
	$columns = array();  
	$n = 0;
	$col = array();
	$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2,'font_size'=>6,'font_style'=>'B');
	$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  'TOTAL FAKTUR PAJAK' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  '' , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  '', 'width' => $w[$n++], 'align' => 'R');
	$col[] = array('text' =>  '', 'width' => $w[$n++]);
	$col[] = array('text' =>  number_format( $totalSales ), 'width' => $w[$n++]);
	$col[] = array('text' =>  number_format( $totalppnDipungut ), 'width' => $w[$n++]);
	$col[] = array('text' =>  '( '.  number_format( $totalEmpty2 )  .' )', 'width' => $w[$n++]);
	$col[] = array('text' =>  number_format( $totalppnReal ) , 'width' => $w[$n++]);
	$columns[] = $col;
	$pdf->WriteTable($columns);
	
	/*
	 * save in local and give file to user 
	 */
	$pdfpath	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'purchasing'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);
	
//	$pdf->Output( $filename ,'I');