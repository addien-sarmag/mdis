<?php

	$pdf = new invoiceTemplateI('P','mm','A4');
	
	$borderActive  = false;
	$pdf->borderActive = $borderActive;
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
//	$pdf->SetMargins(15,20,15);
	
	$filename = 'Invoice-Penjualan '.str_replace( array( "/" ) , '\\'  , $noInvoice) .'.pdf';
//	$filename = 'Invoice-Penjualan '.$noInvoice.'.pdf';
	
	$pdf->SetFont('Arial', 'B', 20);
	$pdf->SetLineWidth(0.4);
	$pdf->Cell(38,6,'INVOICE','B',1,'L');
	
	$pdf->SetFont('Arial', 'B', 10);
	$pdf->Cell(39,5,'FAKTUR PENJUALAN',$borderActive,1,'L');
	
	$pdf->Ln(5);
	$pdf->SetFont('Arial', '', 8);
	$pdf->SetLineWidth(0.2);
	$height = 5;
	$width  = 60;
	$width2 = 127;
	$pdf->Cell($width,$height,'  Invoice #         : '.$noInvoice,'LTR',0,'L');
	$pdf->Cell(3);
	$pdf->Cell($width2 - 50,$height,' Customer PO# : '.$poKode,1,0,'L');
	$pdf->Cell($width2  - ( $width2 - 50 ),$height,'  Dated : '.$poTanggal,1,1,'L');
	
	$pdf->Cell($width,$height,'  Surat Jalan     : '.$suratJalanKode,'LR',0,'L');
	$pdf->Cell(3);
	$pdf->MultiCell($width2,5,' Sold to : '. $namaCustomer,'LR');
	
	$pdf->Cell($width,$height,'  Date                : '.$invoiceTanggal,'LR',0,'L');
	$pdf->Cell(3);
	$pdf->Cell($width2,$height,'','LR',1,'L');
	
	$pdf->Cell($width,$height,'  Sales Code     : '.$kodeSales,'LBR',0,'L');
	$pdf->Cell(3);
	$pdf->Cell($width2,$height,'','LBR',1,'L');
	
	 
	$thead  = array( '  No.   ','                      Description                    ','      Qty      ','          Unit         ','             Unit Price '.$matauang.'       ','       Discount      ','                Amount              ');
	 
	$pdf->Ln(2);
	$n = 0;
	foreach ( $thead as $val ):
		$w[] = strlen($thead[$n]);
		$pdf->Cell($w[$n],5,trim( $thead[$n] ),1,0,'C');
		$n++;
	endforeach;
	
//	$dataExample = array(
//						array( 
//								'desc' 		=> 'Amoxicililnium Trihydrate "Compacted"',
//								'qty' 	 	=> '12',
//								'unit' 		=> 'SKR3243',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'Amoxicililnium Trihydrate "Compacted"',
//								'qty' 	 	=> '12',
//								'unit' 		=> 'SKR3243',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'Amoxicililnium Trihydrate "Compacted"',
//								'qty' 	 	=> '12',
//								'unit' 		=> 'SKR3243',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'Amoxicililnium Trihydrate "Compacted"',
//								'qty' 	 	=> '12',
//								'unit' 		=> 'SKR3243',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'Amoxicililnium Trihydrate "Compacted"',
//								'qty' 	 	=> '12',
//								'unit' 		=> 'SKR3243',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'Amoxicililnium Trihydrate "Compacted"',
//								'qty' 	 	=> '12',
//								'unit' 		=> 'SKR3243',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'TetraCiklin"',
//								'qty' 	 	=> '6',
//								'unit' 		=> 'SKT4324',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//						array( 
//								'desc' 		=> 'Anoreksi Abilicin"',
//								'qty' 	 	=> '8',
//								'unit' 		=> 'PW345',
//								'unitPrice' 	=> '20',
//								'discount' 		=> '423000',
//								'amount' 	 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing',
//								),
//								
//						);
						
//	$dataExample  =  array_merge($dataExample,$dataExample);
						
	$columns = array();  
	
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);
	$urut = 1;
	if ( $dataView ) foreach( $dataView as $res ):
	
	$col = array();
	$n = 0;
	
	$col[] = array('text' => $urut++ . '.', 'width' => $w[$n++], 'align' => 'C','linewidth'=>0.2);
	$col[] = array('text' => $res['barangNama'] , 'width' => $w[$n++], 'align' => 'L');
	$col[] = array('text' => $res['invoiceCustomerListJumlah'] , 'width' => $w[$n++], 'align' => 'C');
	
	$col[] = array('text' => $res['barangKode'] , 'width' => $w[$n++], 'align' => 'C');
	$col[] = array('text' => number_format($res['invoiceCustomerListHargaSatuan']) , 'width' => $w[$n++] , 'align' => 'C');
	$col[] = array('text' => $res['invoiceCustomerListDiskonPerItem'].' %' , 'width' => $w[$n++], 'align' => 'C');
	$col[] = array('text' => number_format($res['invoiceCustomerListTotalHargaSetelahDiskon']) , 'width' => $w[$n++], 'align' => 'C');
	
	$columns[] = $col;
	endforeach;
	
	
	$width 		= 190;
	$widthFirst = $width / 3 + 35.7;
	$widthMid 	= $width / 3 - 29.4;
	$widthEnd	= $width / 3 - 6.3;
	
	$col = array();
	$col[] = array('text' => ' Authorized Signature : ', 'width' => $widthFirst, 'align' => 'L','linearea'=>'LTR');
	$col[] = array('text' => ' Sales Value '.$matauang, 'width' => $widthMid, 'align' => 'L');
	$col[] = array('text' => number_format($totalInvoice), 'width' => $widthEnd, 'align' => 'R');
	$columns[] = $col;
	
	$diskon = ($invoiceDiskonGlobal/100) * $totalInvoice;
	$col = array();
	$col[] = array('text' => '', 'width' => $widthFirst, 'align' => 'L','linearea'=>'LR');
	$col[] = array('text' => ' Discount ', 'width' => $widthMid, 'align' => 'L');
	$col[] = array('text' => number_format($diskon), 'width' => $widthEnd, 'align' => 'R');
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => '', 'width' => $widthFirst, 'align' => 'L','linearea'=>'LR');
	$col[] = array('text' => ' VAT ( PPN ) 10%', 'width' => $widthMid, 'align' => 'L');
	$ppn = (10/100)* $totalInvoice;
	$col[] = array('text' => number_format($ppn), 'width' => $widthEnd, 'align' => 'R');
	$columns[] = $col;
	
	$grandTotal = $totalInvoice - $diskon + $ppn;
	$col = array();
	$col[] = array('text' => '', 'width' => $widthFirst, 'align' => 'L','linearea'=>'LR');
	$col[] = array('text' => ' Grand Total ', 'width' => $widthMid, 'align' => 'L','font_style'=>'B');
	$col[] = array('text' => number_format($grandTotal), 'width' => $widthEnd, 'align' => 'R','linearea'=>'LBTR','font_style'=>'');
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => 'Note : ', 'width' => $width / 4 - 30, 'align' => 'C','linearea'=>'LT');
	$syarat1 = "1. Pembayaran PPN jika dibayar dalam Rupiah dibayarkan sesuai dengan jumlah yang tertera di dalam faktur pajak yang terlampir";
	$col[] = array('text' => $syarat1, 'width' => $width / 4 + 34, 'align' => 'L');
	$col[] = array('text' => ' Payment term : ', 'width' => $width / 4 - 13.5 , 'align' => 'L','linearea'=>'LT');
	$col[] = array('text' => $termin, 'width' => $width / 4 + 9.5 , 'align' => 'L','linearea'=>'TR');
	$columns[] = $col;
	
	$col = array();
	$col[] = array('text' => ' ', 'width' => $width / 4 - 30, 'align' => 'R','linearea'=>'LB');
	$syarat2 = "2. Biaya bank ditanggung oleh pembeli";
	$col[] = array('text' => $syarat2, 'width' => $width / 4 + 34, 'align' => 'L');
	$col[] = array('text' => '', 'width' => $width / 4 - 13.5 , 'align' => 'R','linearea'=>'LB');
	$col[] = array('text' => '', 'width' => $width / 4 + 9.5 , 'align' => 'L','linearea'=>'BR');
	$columns[] = $col;
	
	$pdf->WriteTable($columns);
	
	/*
	 * save in local and give file to user 
	 */
	$pdfpath	= FCPATH.'media' . DS . 'private' . DS . 'pdf' . DS . 'sales'. DS . 'invoice' . DS .getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename .'.pdf'  ;
	@mkdir( dirname( $pdfpath ),0755,true );
	$pdf->Output($pdfpath, 'F');
	
//	$pdf->Output($filename, 'I');
	
	$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/pdf', 'userId' => getUserId() ) );
	file_download($files);
	