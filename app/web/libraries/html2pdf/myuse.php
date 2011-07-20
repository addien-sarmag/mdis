<?php

require_once ('HTML2PDF.php');

class myuse {
	
	 var $icon					= '';
	 var $line					= '';
	 var $kop_default			= array();
	 var $backtop_wrapper  		= "27mm";
	 var $backbottom_wrapper  	= "20mm";
	 var $backleft_wrapper 		= "8mm";
	 var $backright_wrapper  	= "8mm";
	 var $style_header			= "style='margin-top: 20px; width: 515px;'";
	 var $attr_label_header     = "style='font-size: 12px; '";
	 var $style_thead			= "style=' text-align: left; border: solid 1px #000000;'";
	 var $style_theadNumber		= "style=' text-align: center; border: solid 1px #000000;'";
	 var $attr_headContent		= "style='width:100%; text-align: center; font-size: 14px; font-weight: bold; padding-bottom: 20px;'";
	 var $attr_tailContent		= "style='width:100%; text-align: right; font-size: 12px;'";
	 var $attr_td				= "style='border:  solid 1px #000000;'";
	 var $atrr_number_row		= "style='width: 5%; border: solid 1px #000000; text-align: center;'";
	 
	 var $html = "";
	 
	
	function __construct( $param = array() ){
		
		// insert some key like default variabel on top, to this array you will replace whatever key default on the top;
		$config = array('backtop_wrapper' , 'backbottom_wrapper', 'backleft_wrapper', 'backright_wrapper' ,'style_header'  );
		
		if( $config ) foreach ( $config as $val ){
			
			$this->$val = ( ! isset($param[$val])) ? $this->$val : $param[$val];
		}
		
		$this->html .= $this->open_page();
	}
    
    public function open_page( ){
    	$html_temp = "<page backtop='".$this->backtop_wrapper."' 
					    	backbottom='".$this->backbottom_wrapper."' 
					    	backleft='".$this->backleft_wrapper."' 
					    	backright='".$this->backright_wrapper."'>";
    	
    	return $html_temp;
    }
    
	public function close_page( ){
    	$html_temp = "</page >";
    	
    	return $html_temp;
    }
    
    
    public function page_header(  $param = array( ) , $html = '' ){
    	
		foreach ( array('icon', 'kop', 'line' ) as $val ){
			
			$$val = ( ! isset($param[$val])) ? FALSE : $param[$val];
		}
		
    	$html_temp =  "<page_header $this->style_header >"; 
    	
    	if ( ! $param )
			$this->getArrayKopDefault();
    	
    	if ( $line || $this->line )
    		$html_temp .= "<div $line $this->line >";
    	
    	$html_temp .= "<div >";
    	
    	if ( $icon || $this->icon )
    		$html_temp .= "<img $icon $this->icon />";
    		
    	
    	if ( ! empty (  $kop ) ) foreach ( $kop as $res ) {
    		
    		$attr = array_key_exists ( 'attr' , $res ) ? $res['attr'] : $this->attr_label_header;
    		
	    	$html_temp 	.= "<label ". $attr ." '>".$res['desc']."</label><br/>";
	    	
    	}
    	
    	
    	if ( ! $param ) {
    		
	    	foreach (  $this->kop_default as $res ) {
	    		
	    		$attr = array_key_exists ( 'attr' , $res ) ? $res['attr'] : $this->attr_label_header;
	    		
		    	$html_temp 	.= "<div ". $attr ." '>".$res['desc']."</div>";
	    	}
    	}
    	
	   $html_temp .= "</div >";
	   
	   if ( $line || $this->line )
	   		$html_temp .= "</div >";
	   	
	   $html_temp .= "</page_header>";
	    	
	    if ( $html ) 
	    	$html_temp = $html;
	   
	   $this->html .= $html_temp ;
    }
    
	public function page_footer ( $html = '' ){
		
		$html_temp = "<page_footer>";
		
		$html_tempContent = "<div style='width:100%; text-align: center; font-size: 10px;'>Page [[page_cu]] / [[page_nb]]</div>";
		
		if ( $html )
			$html_tempContent = $html;
		
		$html_temp .= $html_tempContent . "</page_footer>";
		
    	$this->html .= $html_temp ;
    }
    
    public function page_middleContent ( $table = array()  , $number_row = false , $number_column = false , $html = '' ){
    	
    	$html_temp = "<table style='width: 100%;border: solid 1px #000000; border-collapse: collapse' align='left'>";
    	
    	
    	if ( $table ) foreach ( array('thead', 'tbody' ) as $val ){
    		
			$$val = ( ! isset($table[$val])) ? FALSE : $table[$val];
		}
    	
    	
    	if ( $thead ) {
	    	$html_thead = "<thead><tr>";
	    	
	    	if ( $number_row == true )
			    	$html_thead .= "<th ". $this->atrr_number_row ." >". 'No.' ."</th>";  
	    	
	    	if ( $thead ) foreach ( $thead as $val ) {
	    		
	    		$attr = array_key_exists( 'attr' , $val) ?  $val['attr'] : $this->style_thead ;
	    	
		    	$html_thead .= "<th ". $attr ." >". $val['desc'] ."</th>";  
		    
	    	}
	    	
	    	$html_thead .= "</tr>";
	    	
	    	
	    if ( $number_column == true ){
	    	
	    	$html_thead .= "<tr>";
	    	
	    	$n = 1;
	    	if ( $number_row == true )
			    	$html_thead .= "<th ". $this->atrr_number_row ." >". $n++ ."</th>";  
	    			
			    	if ( $thead ) foreach ( $thead as $val ) {
			    	
				    	$html_thead .= "<th ". $this->style_theadNumber ." >". $n++ ."</th>";  
			    	}
	    	
	    	$html_thead .= "</tr>";
	    
	    } 
	    
	    $html_thead .= "</thead>";
    	
    	$html_temp .= $html_thead;
    	
    	}
    	
    	
    	if ( ! empty ( $tbody ) ) { 
    		$html_body = "<tbody>";
    		
    		$n_row = 1;
    		if ( ! empty ( $tbody['value'] ) ) foreach( $tbody['value'] as $val ){
    			
    			$html_body .= "<tr>";
    			
    			if( $number_row == true )
    				$html_body .= "<td  ". $this->atrr_number_row ." >". $n_row++ ."</td>";
    			
    				if ( $tbody['key'] ) for( $n = 0 ;$n < count( $tbody['key'] ) ;$n++ ){
    					
    					$attr = array_key_exists( 'attr' , $tbody ) ?  $tbody['attr'][$n] : $this->attr_td ;
    					
    					$html_body .= "<td  ". $attr .">". $val[$tbody['key'][$n]]."</td>";
    					
    				}
    				
    			$html_body .= "</tr>";
    		
    		}
    		
    		$html_body .= "</tbody>";
    		$html_temp .= $html_body ;
    	}
    	
    		
    		$tfooter = false;
    	if ( $tfooter == true ){
    		
    		$html_foot = "<tfoot><tr>";
    		
    		if ( $number_row == true )
			    	$html_foot .= "<th style='border: solid 1px #000000;'>". 'No.' ."</th>";  
	    	
	    	if ( $thead ) foreach ( $thead as $val ) {
	    		
	    		$attr = array_key_exists( 'attr' , $val) ?  $val['attr'] : $this->style_thead ;
	    	
		    	$html_foot .= "<th  style='border: solid 1px #000000;'>". $val['desc'] ."</th>";  
		    
	    	}
	    	
	    	$html_foot .= "</tr></tfoot>";
	    	
	    	$html_temp .= $html_foot;
	    	
    	}
    	
    	$html_temp .= "</table>";
    	
    	if ( $html )
    		$html_temp = $html ;
    		
    	$this->html .= $html_temp ;
    
    }
    
    
    
    
    public function page_headContent( $param = '' , $html = '' ){
    	
		$html_temp = '';
    	
    	if ( ! is_array ( $param ) )
    		$html_temp .= "<div ". $this->attr_headContent .">". $param ."</div>";
    	
    	
    	if ( is_array ( $param ) && ! empty ( $param ) ) foreach (  $param as $val ){
    		
    		$attr = array_key_exists( 'attr' , $val) ?  $val['attr'] : $this->attr_headContent ;
    		
    		$html_temp .= "<div ". $attr .">". $val['desc'] ."</div>";
    	
    	}
    		
    	if ( $html )
    		$html_temp = $html ;
    		
    	$this->html .= $html_temp ;
    	
    }
    
    public function page_tailContent( $param = '' , $html = '' ){
    	
    	$html_temp = '';
    	
    	if ( ! is_array ( $param ) )
    		$html_temp .= "<div ". $this->attr_tailContent .">". $param ."</div>";
    	
    	
    	if ( is_array ( $param ) && $param ) foreach (  $param as $val ){
    		
    		$attr = array_key_exists( 'attr' , $val) ?  $val['attr'] : $this->attr_tailContent ;
    		
    		$html_temp .= "<div ". $attr .">". $val['desc'] ."</div>";
    	
    	}
    		
    	if ( $html )
    		$html_temp = $html ;
    		
    	$this->html .= $html_temp ;
    
    }
    
    public function getArrayKopDefault(){
    	$CI =& get_instance();
		$CI->load->Module_config('xReport','xReport');
		
		$this->icon 	   = $CI->config->item('attrIcon');
		$this->line 	   = $CI->config->item('attrLine');
		$this->kop_default = $CI->config->item('kopReport');
    }
    
    public function checkHtml(){
    	
    	echo $html_temp =<<<EOL
    	<html>
<head>
<title>Error</title>
<style type="text/css">

body {
background-color:	#fff;
margin:				40px;
font-family:		Lucida Grande, Verdana, Sans-serif;
font-size:			12px;
color:				#000;
}

#content  {
border:				#999 1px solid;
background-color:	#fff;
padding:			20px 20px 12px 20px;
}

h1 {
font-weight:		normal;
font-size:			14px;
text-decoration:	underline;
color:				#990000;
margin: 			0 0 4px 0;
}
</style>
</head>
<body>
	<div id="content">
<h1>This Your Html Viewer</h1>
<div>{$this->html}</div>
</body>
</html>
EOL;

    	die;
  	}
    
    
    public function page_output ( $filename = 'Example.pdf', $sens = 'P' ,  $format = 'A4' , $langue='fr', $unicode=true, $encoding='UTF-8'){
		
    	$this->html .= $this->close_page();
    	
	    $html2pdf = new HTML2PDF(  $sens ,  $format , $langue , $unicode , $encoding );
	    
	    $html2pdf->WriteHTML($this->html);
	   
	    
	    if (  dirname( $filename ) !== '.' ){ // save to local 
	    	
	    	@mkdir( dirname( $filename ),0755,true );
	    	$html2pdf->Output($filename, 'F');
	
			$files =  file_properties( array( 'file' => $filename , 'application' => 'application/pdf', 'userId' => getUserId() ) );
			file_download($files);
	    	
	    }else if (  dirname( $filename ) === '.'  ) { // default
	    	
	    	$html2pdf->Output($filename, 'I');
	    	
	    }
		
    }
    
    
    
}