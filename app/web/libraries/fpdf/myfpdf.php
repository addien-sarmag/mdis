<?php
require_once('fpdf.php');

class myfpdf extends FPDF
{
   // Margins
   var $left = 10;
   var $right = 10;
   var $top = 10;
   var $bottom = 10;
   var $fillColor = '255,255,255';
   var $fontName	= 'Arial';
   var $align		= '';
   var $font_style	= '';
   var $font_style1	= 'B';
   var $textcolor	= '0,0,0';
   var $font_size	= 8 ;
   var $linewidth	= 0.1;
   var $drawcolor	= '0,0,0';
   var $linearea	= 'LTBR';
   var $height		= 5 ;
         
   // Create Table
   function WriteTable($tcolums)
   {
   		
      // go through all colums
      for ($i = 0; $i < sizeof($tcolums); $i++)
      {
         $current_col = $tcolums[$i];
         $height = 0;
         
         // get max height of current col
         $nb=0;
         for($b = 0; $b < sizeof($current_col); $b++)
         {
         	$this->fillColor 	= (  array_key_exists( 'fillcolor', $current_col[$b] )   )? $current_col[$b]['fillcolor'] :  $this->fillColor ;
         	$this->fontName 	= (  array_key_exists( 'font_name', $current_col[$b] )   )? $current_col[$b]['font_name'] :  $this->fontName ;
         	$this->font_style 	= (  array_key_exists( 'font_style', $current_col[$b])  )? $current_col[$b]['font_style'] :  $this->font_style ;
         	$this->textcolor 	= (  array_key_exists( 'textcolor', $current_col[$b])  )? $current_col[$b]['textcolor'] :  $this->textcolor ;
         	$this->font_size 	= (  array_key_exists( 'font_size', $current_col[$b])  )? $current_col[$b]['font_size'] :  $this->font_size ;
         	$this->linewidth 	= (  array_key_exists( 'linewidth', $current_col[$b])  )? $current_col[$b]['linewidth'] :  $this->linewidth ;
         	$this->drawcolor 	= (  array_key_exists( 'drawcolor', $current_col[$b])  )? $current_col[$b]['drawcolor'] :  $this->drawcolor ;
         	$this->linearea 	= (  array_key_exists( 'linearea', $current_col[$b])  )? $current_col[$b]['linearea'] :  $this->linearea ;
         	$this->height 		= (  array_key_exists( 'height', $current_col[$b])  )? $current_col[$b]['height'] :  $this->height ;
            // set style
            $this->SetFont( $this->fontName, $this->font_style , $this->font_size );
            $color = explode(",", $this->fillColor);
            $this->SetFillColor($color[0], $color[1], $color[2]);
            
            $color = explode(",", $this->textcolor );
            $this->SetTextColor($color[0], $color[1], $color[2]);  
                      
            $color = explode(",", $this->drawcolor );            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            $this->SetLineWidth( $this->linewidth );
                        
            $nb = max($nb, $this->NbLines($current_col[$b]['width'], $current_col[$b]['text']));            
            $height = $this->height ;
         }  
         $h=$height*$nb;
         
         
         // Issue a page break first if needed
         $this->CheckPageBreak($h);
         
         // Draw the cells of the row
         for($b = 0; $b < sizeof( $current_col ); $b++)
         {
         	$this->fillColor 	= (  array_key_exists( 'fillcolor', $current_col[$b] )   )? $current_col[$b]['fillcolor'] :  $this->fillColor ;
         	$this->fontName 	= (  array_key_exists( 'font_name', $current_col[$b] )   )? $current_col[$b]['font_name'] :  $this->fontName ;
         	$this->align 		= (  array_key_exists( 'align', $current_col[$b] 	 )   )? $current_col[$b]['align'] 	  :  $this->align ;
         	$this->font_style 	= (  array_key_exists( 'font_style', $current_col[$b])   )? $current_col[$b]['font_style']:  $this->font_style ;
         	$this->textcolor 	= (  array_key_exists( 'textcolor', $current_col[$b])  )? $current_col[$b]['textcolor'] :  $this->textcolor ;
         	$this->font_size 	= (  array_key_exists( 'font_size', $current_col[$b])  )? $current_col[$b]['font_size'] :  $this->font_size ;
         	$this->linewidth 	= (  array_key_exists( 'linewidth', $current_col[$b])  )? $current_col[$b]['linewidth'] :  $this->linewidth ;
         	$this->drawcolor 	= (  array_key_exists( 'drawcolor', $current_col[$b])  )? $current_col[$b]['drawcolor'] :  $this->drawcolor ;
         	$this->linearea 	= (  array_key_exists( 'linearea', $current_col[$b])  )? $current_col[$b]['linearea'] :  $this->linearea ;
         	$this->height 		= (  array_key_exists( 'height', $current_col[$b])  )? $current_col[$b]['height'] :  $this->height ;
         	
            $w = $current_col[$b]['width'];
            $a = $this->align;
            
            // Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            
            // set style
            $this->SetFont( $this->fontName , $this->font_style , $this->font_size	 );
            $color = explode(",", $this->fillColor );
            $this->SetFillColor($color[0], $color[1], $color[2]);
            
            $color = explode(",", $this->textcolor );
            $this->SetTextColor($color[0], $color[1], $color[2]); 
                       
            $color = explode(",", $this->drawcolor );            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            $this->SetLineWidth( $this->linewidth );
            
            $color = explode(",", $this->fillColor );            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            
            
            // Draw Cell Background
            $this->Rect($x, $y, $w, $h, 'FD');
            
            $color = explode(",", $this->drawcolor );   
                     
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            
            // Draw Cell Border
            if (substr_count( $this->linearea , "T") > 0)
            {
               $this->Line($x, $y, $x+$w, $y);
            }            
            
            if (substr_count( $this->linearea , "B") > 0)
            {
               $this->Line($x, $y+$h, $x+$w, $y+$h);
            }            
            
            if (substr_count( $this->linearea , "L") > 0)
            {
               $this->Line($x, $y, $x, $y+$h);
            }
                        
            if (substr_count( $this->linearea , "R") > 0)
            {
               $this->Line($x+$w, $y, $x+$w, $y+$h);
            }
            
            
            // Print the text
            $this->MultiCell($w, $this->height , $current_col[$b]['text'], 0, $a, 0);
            
            // Put the position to the right of the cell
            $this->SetXY($x+$w, $y);         
         }
         
         // Go to the next line
         $this->Ln($h);          
      }                  
   }

   
   // If the height h would cause an overflow, add a new page immediately
   function CheckPageBreak($h)
   {
      if($this->GetY()+$h>$this->PageBreakTrigger)
         $this->AddPage($this->CurOrientation);
   }


   // Computes the number of lines a MultiCell of width w will take
   function NbLines($w, $txt)
   {
      $cw=&$this->CurrentFont['cw'];
      if($w==0)
         $w=$this->w-$this->rMargin-$this->x;
      $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
      $s=str_replace("\r", '', $txt);
      $nb=strlen($s);
      if($nb>0 and $s[$nb-1]=="\n")
         $nb--;
      $sep=-1;
      $i=0;
      $j=0;
      $l=0;
      $nl=1;
      while($i<$nb)
      {
         $c=$s[$i];
         if($c=="\n")
         {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
         }
         if($c==' ')
            $sep=$i;
         $l+=$cw[$c];
         if($l>$wmax)
         {
            if($sep==-1)
            {
               if($i==$j)
                  $i++;
            }
            else
               $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
         }
         else
            $i++;
      }
      return $nl;
   }
   

        
}
