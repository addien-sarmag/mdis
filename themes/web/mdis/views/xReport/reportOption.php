<?php $this->load->view('header') ?>
<link type="text/css" href="<?php echo base_url() ?>js/libs/jqueryui/1.8.2/css/ui-lightness/jquery-ui-1.8.2.custom.css" rel="stylesheet" />
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script>
$(function() {
	
	var untuk = $("#untuk"),
		tipe  = $("input[name=tipe]"),
		bentuk = $("#bentuk");

	
	
	$('#pdf').change(function (){
		
		$(this).getBentuk();
		
	});

	$('#excel').change(function (){

			$(this).getBentuk();
			
	});


jQuery.fn.getBentuk = function (){

	$(".classx").remove();

	$.ajax({
		type: 'post',
		url: "<?php echo site_url()."/xReport/report/getBentuk"?>",
		dataType: "json",
		data: "tipe="+$(this).val()+"&untuk="+untuk.val() ,
		success: function(data) {

	
			$.each( data, function( key, value ) { 
				bentuk.append("<option value="+key+" class='classx' >"+value+"</option>");
			});
			
			
			},
		error : function(e){

				alert('cannot get a some data');
			}

	}); 
	
}
	
	
});
</script>
<!-- CONTENT -->

<div id="content">
<div class="column full fl">
		<div class="box">
		<div class="box-header">Report Option</div>
		<div class="box-content">
		<?php echo isAccess('purchasing','purchaseOrder','view') ? anchor($history, '<span class="icon_text preview"></span>Daftar PO', 'class="button white fl"') : ''; ?> 
		
		<div class="clear"></div>

        	<a name="top"></a>
			<div id="cms_status" style="display:none"></div>
     
            <?php  echo form_open('xReport/report/'.$link ,array('kirim'=>'kirim')); ?>
           
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gwlines">
              	<input type="hidden" name="untuk" id="untuk" value='<?php echo $for?>' ></input>
                 <tr>
                    <td>Type File</td>
                    <td style="padding-top:10px;">
					<?php $tipe = array( 'pdf' =>'Pdf'/*,'excel'=>'Excel'*/)?>
					<div class="radiocheck" style="margin-bottom:10px;">
					    	<?php foreach( $tipe as $key => $val ): ?>
								<input  type="radio" name="tipe" value="<?php echo $val?>" id="<?php echo $key?>" /><label for="<?php echo $key?>"><?php echo $val?></label> 
					    	<?php endforeach;?>
					    	
				    	</div>
					
                    </td>
                </tr>
              <tr >
                    <td style='width:200px;'>Bentuk</td>
                    <td>
                    	<select name='bentuk' id="bentuk">
                    	</select>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="padding-top:10px;">
                         <input type="submit" class="button themed" name="submit"  id='submit' value="Cetak" />
                    </td>
                </tr>
            </table>
            </form>

          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>

<?php $this->load->view('footer') ?>
