<?php

	$pdf = new templateV( 'P' , 'mm' , 'A4' );
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	$pdf->lnHeader = 2;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$columns = array();
	$filename = 'Account-List'.'.pdf';
	
	$pdf->SetFont('Arial','UB',12);
	$pdf->Cell(0,5,'ACCOUNT LIST',$borderActive,1,'C');
	$pdf->Ln(5);
	
	$pdf->SetFont('Arial','',10);
	$thead  = array( '  No.   ','      Account               ','                                                             Account Name  ','                    Account Type     ','               Parent   ','           Code   ');
	
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim ( $thead[$n] ),'LTR',0,'C');
		$n++;
	endforeach;
	
	
	$arrayExample = array(
							array(
								'number'	=> '1-000',
								'name'		=> 'Asset',
								'type'		=> 'Cash/Bank',
								'parent'	=> '1-0000',
								'kode'		=> 'D',
							),
							array(
								'number'	=> '1-001',
								'name'		=> 'Asset',
								'type'		=> 'Cash/Bank',
								'parent'	=> '1-0000',
								'kode'		=> 'D',
							),
							array(
								'number'	=> '1-002',
								'name'		=> 'Asset',
								'type'		=> 'Cash/Bank',
								'parent'	=> '1-0000',
								'kode'		=> 'D',
							),
							
					);
	
	$listTable = $listTable ? $listTable : $arrayExample; 
	
	$listTable = array_merge( $listTable , $listTable );
	$listTable = array_merge( $listTable , $listTable );
	$listTable = array_merge( $listTable , $listTable );
	$listTable = array_merge( $listTable , $listTable );
	
	
	$pdf->Ln(); 
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	$columns = array();  
	$hargaTotal = 0;
	if ( $listTable ) foreach( $listTable as $res ):
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.' ,'font_style' => '','font_size'=>'8','height'=>5, 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2, 'linearea'=>'LBRT');
	$col[] = array('text' =>  $res['number'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' =>  $res['name']  , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['type']  , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['parent']  , 'width' => $w[$n++], 'align' => 'C');
	$col[] = array('text' => $res['kode']  , 'width' => $w[$n++], 'align' => 'C');
	
	$columns[] = $col;
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
	
	$pdf->Output($filename , 'I' );