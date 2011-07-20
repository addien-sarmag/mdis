<?php
	
		include "OLEwriter.php";
		include "BIFFwriter.php";
		include "Worksheet.php";
		include "Workbook.php";
	
class excelone{
	
	public function HeaderingExcel($filename){
		header("Content-type:application/vnd.ms-excel");
		header("Content-Disposition:attachment;filename=$filename.xls");
		header("Expires:0");
		header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
		header("Pragma: public");
	}
	
}