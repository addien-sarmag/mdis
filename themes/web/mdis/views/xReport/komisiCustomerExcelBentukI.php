<?php 
$excelOnes 	= new excelone();

//$excelOnes->HeaderingExcel( $filename );

/*
 * config variabel starting  
 * 
 */
 $rowNo = 0 ;
 $heightNo = 0 ;
// ====================== end config ============================= 

@mkdir(dirname($pdfpath),0755,true);

$workbook = new Workbook($pdfpath);
$sheetOne =& $workbook->add_worksheet( $sheetName );

/* =========================================================
 *  created data format excel
 * =========================================================
 */

$formatTpl =& $workbook->add_format(); //Memformat header (judul) tabel dengan font bold, horiz rata tengah dan verical rata tengah
$formatTpl -> set_bold(); 
$formatTpl -> set_align('center');
$formatTpl -> set_align('vcenter');

$formatTipe =& $workbook->add_format(); //Memformat header (judul) tabel dengan font bold, horiz rata tengah dan verical rata tengah
$formatTipe -> set_align('right');
$formatTipe -> set_italic();
$formatTipe -> set_align('vbottom');
$formatTipe -> set_size(10); 

$formatTitlePage= & $workbook->add_format();  //Memformat Judul dengan font tebal, wanrna biru, hiriz rata kiri, verti rata tengah dan ukuran font 12
$formatTitlePage->set_bold();
$formatTitlePage->set_align('left');
$formatTitlePage->set_align('vcenter');
$formatTitlePage->set_size(12); 


$formatThead =& $workbook->add_format(); //Memformat header (judul) tabel dengan font bold, horiz rata tengah dan verical rata tengah
$formatThead -> set_bold(); 
$formatThead -> set_align('center');
$formatThead -> set_align('vcenter');
$formatThead -> set_right(1);
$formatThead -> set_left(1);
$formatThead -> set_top(1);
$formatThead -> set_bottom(1);

$formatColNum =& $workbook->add_format(); //Memformat header (judul) tabel dengan font bold, horiz rata tengah dan verical rata tengah
$formatColNum -> set_align('center');
$formatColNum -> set_align('vcenter');
$formatColNum -> set_right(1);
$formatColNum -> set_left(1);
$formatColNum -> set_top(1);
$formatColNum -> set_bottom(1);



$tdTengah =& $workbook->add_format();
$tdTengah -> set_align('center');
$tdTengah -> set_right(1);
$tdTengah -> set_left(1);
$tdTengah -> set_top(1);
$tdTengah -> set_bottom(1);

$tdLeft=& $workbook->add_format();
$tdLeft -> set_align('left');
$tdLeft -> set_right(1);
$tdLeft -> set_left(1);
$tdLeft -> set_top(1);
$tdLeft -> set_bottom(1);

$tdRight=& $workbook->add_format();
$tdRight -> set_align('right');
$tdRight -> set_color('gray');
$tdRight -> set_align('vcenter');
$tdRight->set_size(7);

// ========= end created data format excel =================


/*
 * set page up
 */
$sheetOne->set_landscape();
$sheetOne->set_paper( 3 );
$sheetOne ->_print_gridlines = 0 ;




/* ========================================
 * Header config and intialication ! please ,be carefully  
 * ========================================
 */ 
$header=array('  No. ','   No. Pusat  ','     Nama      ',' Tempat/Tanggal Lahir ', '   Kelas  ');

$countAwalHeader = count ( $header );

foreach($field as $fields):
		
			if(strlen($fields['kode'])==6  &&  $fields['myGroup'] == 'U' ):
				   	$header[count($header)]=$fields['field'];
			endif;
		
endforeach;

foreach($field as $fields):
		
			if(strlen($fields['kode'])==6  &&  $fields['myGroup'] != 'U' ):
				   	$header[count($header)]=$fields['field'];
			endif;
		
endforeach;

$header_end=array(' U ',' A ',' B ',' D ',' L ','  G  ',' J ',' Hasil ',' Keterangan ');



	/*
	 * 
	 * implode the array header and header_end
	 */
//for($n=0;$n<count($header_end);$n++):
//	$header[count($header)]=$header_end[$n];
//endfor;
$header = array_merge( $header , $header_end );
	// end emplode

$limitColumn = count($header); // count header column 

for( $n = 0 ; $n < $limitColumn ; $n++ ):
	$plus = ( $n <= 4  || $n > $limitColumn - 10 ) ? 0 : 1 ;
	$w[$n]=strlen( $header[$n]  )+$plus;
endfor;

// ==================== end  Header config =====================







/* =====================================
 * set height every row 
 * ===================================== 
 */
$arrayHeight = array(15,15,25,15,15,15,30,12,12);

for ( $n = 0 ; $n < count ($arrayHeight) ;$n++ ):
	$sheetOne->set_row( $n , $arrayHeight[$n] );	
endfor;

$heightContent = array( 15 );

$maxArrayHeight = count( $arrayHeight );
$batasHeightContent = count( $data ) + $maxArrayHeight ;

for ( $n = $maxArrayHeight ; $n <  $batasHeightContent ; $n++ ): 
	$sheetOne->set_row( $n , $heightContent[0] );
endfor;

// ================ end set height ======






/* ============================================
 * set width every row
 * ============================================
 */
for($n = 0 ; $n < count( $header );$n++):
	if ( $n < $limitColumn - 2 ) :
		$sheetOne->set_column(1,$n,$w[$n]);
		
	endif;
endfor;

// =========== end set width ==================








/* ================================================
 *  place for title page and title table
 * ================================================
 */



$tpl1 = $Header[0];
$tpl2 = $Header[1];

 /*
  * template 
  */
$sheetOne->write_string($rowNo,0,$tpl1,$formatTpl);
$sheetOne->merge_cells($rowNo,0,$rowNo++,2 );

$sheetOne->write_string($rowNo,0,$tpl2,$formatTpl);
$sheetOne->merge_cells($rowNo,0,$rowNo++,2 );

$sheetOne->write_string($rowNo,0,$finalNamaModelPdf,$formatTipe);  	// report tipe 
$sheetOne->merge_cells($rowNo,0,$rowNo++,$limitColumn + 1 );		// report tipe 

// ============== end template  ========================


$title = $Header[2];
$title2 = strtoupper($about);
 /*
  * title page 
  */
$sheetOne->write_string($rowNo,0,$title,$formatTitlePage);
$sheetOne->merge_cells($rowNo,0,$rowNo++,$limitColumn - 1 );

$sheetOne->write_string($rowNo,0,$title2,$formatTitlePage);
$sheetOne->merge_cells($rowNo,0,$rowNo++,$limitColumn - 1 );

$sheetOne->write_string($rowNo,0,'',$formatTitlePage);
$sheetOne->merge_cells($rowNo,0,$rowNo++,$limitColumn - 1 );
// =========== end title page ==========


 /*
  *   header table  merge
  */
$batasHAwal = $countAwalHeader; //count ( $header );
$batasNoUmum = $batasHAwal + $countUmum + $countNoUmum ;		// batas jenis pemeriksaan

for($n = 0 ; $n < $limitColumn  ;$n++):
	if ( $n < $limitColumn - 2 ) :
		
		if  (  $n < $batasHAwal || $n > $batasHAwal + $countUmum - 1  ):
				if (  $n > $batasHAwal + $countUmum - 1 ):
					if (  $n < $batasNoUmum ):
						$sheetOne->write_string($rowNo,$n,$header[$n],$formatThead);
						$sheetOne->merge_cells($rowNo  ,$n,$rowNo  + 1 , $n);
					else:	
						$sheetOne->write_string($rowNo,$n,'RUMUS STAKES',$formatThead);
						$sheetOne->merge_cells($rowNo,$batasNoUmum,$rowNo,  $limitColumn - 3 );
					endif;
				else:
					
						$sheetOne->write_string($rowNo,$n,$header[$n],$formatThead);
						$sheetOne->merge_cells( $rowNo  ,$n, $rowNo + 1  , $n);
						
				endif;
		else:
			$sheetOne->write_string($rowNo,$n,'UMUM',$formatThead);
			$sheetOne->merge_cells($rowNo,$batasHAwal,$rowNo, $batasHAwal + $countUmum - 1);
		endif;
		
		
	else:
	
		
	
		if ( $n == $limitColumn - 2 ):
		
		$sheetOne->write_string($rowNo,$n ,$header[$n],$formatThead);
		$sheetOne->write_string($rowNo,$n + 1,'',$formatThead);
		$sheetOne->merge_cells($rowNo ,$n,$rowNo + 1,$n + 1 );
		endif;
		
		if ( $n == $limitColumn - 1 ):
			
			$sheetOne->write_string($rowNo,$n + 1,$header[$n],$formatThead);
			$sheetOne->write_string($rowNo,$n + 2,'',$formatThead);
			$sheetOne->merge_cells($rowNo ,$n + 1 ,$rowNo + 1,$n + 2 );
		endif;
		
	endif;
endfor;
 // =========== end header table ==========

// =========== end place for title ==========



 /*
  *   header table 
  */
$rowNo++;
for($n = 0 ; $n < $limitColumn  ;$n++):
	if ( $n < $limitColumn - 2 ) :
		if  (  $n > $batasHAwal || $n < $batasHAwal + $countUmum - 1  ): 
			$sheetOne->write_string($rowNo,$n,$header[$n],$formatThead);
		endif;
	else:
	
		
	
		if ( $n == $limitColumn - 2 ):
		
		$sheetOne->write_string($rowNo,$n ,$header[$n],$formatThead);
		$sheetOne->write_string($rowNo,$n + 1,'',$formatThead);
		$sheetOne->merge_cells($rowNo,$n,$rowNo,$n + 1 );
		endif;
		
		if ( $n == $limitColumn - 1 ):
			
			$sheetOne->write_string($rowNo,$n + 1,$header[$n],$formatThead);
			$sheetOne->write_string($rowNo,$n + 2,'',$formatThead);
			$sheetOne->merge_cells($rowNo,$n + 1 ,$rowNo,$n + 2 );
		endif;
		
	endif;
endfor;
 // =========== end header table ==========

// =========== end place for title ==========





/* ======================================================
 * created column number 
 * ======================================================
 */
$rowNo++;
for($n = 0 ; $n < $limitColumn  ;$n++):
	if ( $n < $limitColumn - 2 ) :
		$sheetOne->write_string($rowNo,$n,$n+1,$formatColNum);
	else:
		
		if ( $n == $limitColumn - 2 ):
			$sheetOne->write_string($rowNo,$n ,$n,$formatColNum);
			$sheetOne->write_string($rowNo,$n + 1,$n + 1,$formatColNum);
		endif;
		
		if ( $n == $limitColumn - 1 ):
			$sheetOne->write_string($rowNo,$n + 1,$n + 1,$formatColNum);
			$sheetOne->write_string($rowNo,$n + 2,$n + 2,$formatColNum);
		endif;
		
	endif;
endfor;



// ===================== end column number ==============




/* ======================================================
 * content table 
 * ======================================================
 */
$rowNo++;
$urut 	=	$start;
$no		=	$number;
$nu		=	0;
$isi	=	"";

$jum_rikkes=count($rikkes);
$jum_field=count($field);

$batasLoop = 0;
foreach ( $field as $fields ) :
	if  (  strlen( $fields['kode'] ) == 6 )
		$batasLoop++;
endforeach;

$A = array();
$B = array();
$D = array();
$L = array();
$G = array();
$J = array();

print_r($data);

foreach( $data as $res):
	
	$sheetOne->write_string($rowNo,0,$urut++,$tdTengah);
	$sheetOne->write_string($rowNo,1,$res['personalNoPusat'],$tdTengah);
	$sheetOne->write_string($rowNo,2,$res['personalNama'],$tdLeft);
	$sheetOne->write_string($rowNo,3,$res['bornplace'].",".ina_dateSlash($res['brithday']),$tdLeft);
	$sheetOne->write_string($rowNo,4,$res['kelasNama'],$tdTengah);
	

	$m = 5;
  	foreach($field as $fields):
 		
  		if(strlen($fields['kode'])==6 && ( $fields['myGroup'] == 'U' )):
        	
  			
		   for($n=0;$n < $batasLoop;$n++):
  					if(!empty($rikkes[$nu][$n]['kode'])):
  					$alpabet[$n]=$rikkes[$nu][$n]['score'];
  					
  					if ( $rikkes[$nu][$n]['myGroup']  == 'U'  )
							$umum[$n]=$rikkes[$nu][$n]['score'];
  					
	  						if( trim($fields['kode'])== trim($rikkes[$nu][$n]['kode'])):
	  							$isi = $rikkes[$nu][$n]['descr'].' '.$rikkes[$nu][$n]['score'];
	  						
	  						endif;
					
  					endif;
  					
  					
  			endfor;
  			
				$sheetOne->write_string($rowNo,$m,$isi,$tdLeft);
  			$isi='';
  			$m++;
    	endif;
    	
    	
    endforeach;
    
    foreach($field as $fields):
    	$d = 0 ;
		$a = 0 ;
		$b = 0 ;
		$l = 0 ;
		$g = 0 ;
		$j = 0 ;
 		
  		if(strlen($fields['kode'])==6 && ( $fields['myGroup'] != 'U' )):
        	
  			
		   for($n=0;$n < $batasLoop;$n++):
  					if(!empty($rikkes[$nu][$n]['kode'])):
  					$alpabet[$n]=$rikkes[$nu][$n]['score'];
  					
  					if ( strtoupper( $rikkes[$nu][$n]['myGroup'] ) == 'A'  )
									$A[$a++] = $rikkes[$nu][$n]['score'];
									
					if ( strtoupper( $rikkes[$nu][$n]['myGroup'] ) == 'B'  )
									$B[$b++] = $rikkes[$nu][$n]['score'];
									
								
					if ( strtoupper( $rikkes[$nu][$n]['myGroup'] ) == 'D'  )
									$D[$d++] = $rikkes[$nu][$n]['score'];
									
								
					if ( strtoupper( $rikkes[$nu][$n]['myGroup'] )  == 'L'  )
									$L[$l++] = $rikkes[$nu][$n]['score'];
								
					if ( strtoupper( $rikkes[$nu][$n]['myGroup'] ) == 'G'  )
									$G[$g++] = $rikkes[$nu][$n]['score'];
									
					if ( strtoupper( $rikkes[$nu][$n]['myGroup'] ) == 'J'  )
									$J[$j++] = $rikkes[$nu][$n]['score'];
  					
  					
  					
	  						if( trim($fields['kode'])== trim($rikkes[$nu][$n]['kode'])):
	  							$isi = $rikkes[$nu][$n]['descr'].' '.$rikkes[$nu][$n]['score'];
	  						
	  						endif;
					
  					endif;
  					
  					
  			endfor;
  			
				$sheetOne->write_string($rowNo,$m,$isi,$tdLeft);
  			$isi='';
  			$m++;
    	endif;
    	
    	
    endforeach;
    		
    
    				$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $umum ) ) ,$tdTengah);
					$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $A ) ) ,$tdTengah);
					$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $B ) ) ,$tdTengah);
					$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $D ) ) ,$tdTengah);
					$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $L ) ) ,$tdTengah);
					$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $G ) ) ,$tdTengah);
					$sheetOne->write_string($rowNo,$m++, rumusStakes ( aplabet_stakes( $J ) ) ,$tdTengah);
    
    
    		$nilai_des=(!empty($alpabet))?aplabet_stakes($alpabet):"-";
    		$result=(!empty($alpabet))?nilai_stakes($nilai_des,$jum_rikkes,$alpabet,$nilai_des):"-";
    		$destination=($result!="-")?kode_result($result):"-";
			$final=($result!='-')?$destination:'TH';
			$alpabet=array();
    			
				$sheetOne->write_string($rowNo,$m++,$nilai_des,$tdTengah);
				$sheetOne->write_string($rowNo,$m++,$result,$tdTengah);

				$sheetOne->write_string($rowNo,$m++,$final,$tdTengah);
				$sheetOne->write_string($rowNo,$m,'',$tdTengah);
   
       
        
        $nu++;
        $rowNo++;
      
	endforeach;       

// ================= end content =================

// ================ created rekap conten =========================
$tdAcc =& $workbook->add_format();
$tdAcc -> set_align('center');
	
$rowNo++;

$title3 = $titleRekap['KET'];
$title4 = $titleRekap['MS'];
$title5 = $titleRekap['TMS'];
$title6 = $titleRekap['TH'];

$title8 	= $titleRekap['KLA'];
$title9 	= $titleRekap['B'];
$title10 	= $titleRekap['C'];
$title11 	= $titleRekap['K1'];
$title12 	= $titleRekap['K2'];
$title13 	= $titleRekap['TH2'];
$title14 	= $titleRekap['TOTAL'];


$sheetOne->write_string($rowNo,0,$title3,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

if ( $hiddenAction == 'show' && $tempat && $tanggal ):
$sheetOne->write_string($rowNo,$limitColumn-2,$tempat.', '.ina_date($tanggal),$tdAcc);
$sheetOne->merge_cells($rowNo,$limitColumn-2,$rowNo,$limitColumn+1);

$sheetOne->merge_cells($rowNo+1,$limitColumn-2,$rowNo+1,$limitColumn+1);
endif;

$sheetOne->write_string($rowNo++,3,'',$tdLeft);

$sheetOne->write_string($rowNo,0,$title4,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

$sheetOne->write_string($rowNo++,3,$rekap["MS"],$tdLeft);


$sheetOne->write_string($rowNo,0,$title5,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);


if ( $hiddenAction == 'show' && $an ):
$sheetOne->write_string($rowNo,$limitColumn-2,$an,$tdAcc);
$sheetOne->merge_cells($rowNo,$limitColumn-2,$rowNo,$limitColumn+1);
endif;

$sheetOne->write_string($rowNo++,3,$rekap["TMS"],$tdLeft);

$sheetOne->write_string($rowNo,0,$title6,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);


if ( $hiddenAction == 'show' && $jabatan ):
$sheetOne->write_string($rowNo,$limitColumn-2,$jabatan,$tdAcc);
$sheetOne->merge_cells($rowNo,$limitColumn-2,$rowNo,$limitColumn+1);
endif;

$sheetOne->write_string($rowNo++,3,$rekap["TH"],$tdLeft);
				
$sheetOne->merge_cells($rowNo,$limitColumn-2,$rowNo++,$limitColumn+1); 		// space row


$sheetOne->write_string($rowNo,0,$title8,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

$sheetOne->write_string($rowNo++,3,'',$tdLeft);

$sheetOne->write_string($rowNo,0,$title9,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

$sheetOne->write_string($rowNo++,3,$rekap["B"],$tdLeft);

$sheetOne->write_string($rowNo,0,$title10,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

$sheetOne->write_string($rowNo++,3,$rekap["C"],$tdLeft);
 
$sheetOne->write_string($rowNo,0,$title11,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

if ( $hiddenAction == 'show' && $namaPersonel ):

$sheetOne->merge_cells($rowNo-3,$limitColumn-2,$rowNo-3,$limitColumn+1);
$sheetOne->merge_cells($rowNo-2,$limitColumn-2,$rowNo-2,$limitColumn+1);
$sheetOne->merge_cells($rowNo-1,$limitColumn-2,$rowNo-1,$limitColumn+1);

$sheetOne->write_string($rowNo,$limitColumn-2,$namaPersonel,$tdAcc);
$sheetOne->merge_cells($rowNo,$limitColumn-2,$rowNo,$limitColumn+1);
endif;

$sheetOne->write_string($rowNo++,3,$rekap["K1"],$tdLeft);
 
$sheetOne->write_string($rowNo,0,$title12,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

if ( $hiddenAction == 'show' && ( $pangkat  || $corp  || $nrp ) ):

$sheetOne->write_string($rowNo,$limitColumn-2,$pangkat.' '.$corp.' NRP.'.$nrp,$tdAcc);
$sheetOne->merge_cells($rowNo,$limitColumn-2,$rowNo,$limitColumn+1);
endif;

$sheetOne->write_string($rowNo++,3,$rekap["K2"],$tdLeft);
 
$sheetOne->write_string($rowNo,0,$title13,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);



$sheetOne->write_string($rowNo++,3,$rekap["TH"],$tdLeft);
 
$sheetOne->write_string($rowNo,0,$title14,$tdLeft);
$sheetOne->merge_cells($rowNo,0,$rowNo,2);

$sheetOne->write_string($rowNo++,3,$rekap["TOTAL"],$tdLeft);

// =================== end rekap rikkes ==================================

/*
 * created data for who do this !
 */
$rowNo = $rowNo ;

$sheetOne->write_string($rowNo++,$limitColumn + 1,"$userId.$userLocation",$tdRight);

$workbook->close();

/*
 *  find the file and try to download that file
 */
$files =  file_properties( array( 'file' => $pdfpath , 'application' => 'application/vnd.ms-excel', 'userId' => $userId) );
file_download($files);

