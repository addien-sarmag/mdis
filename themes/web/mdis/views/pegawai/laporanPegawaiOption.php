<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script>
jQuery(document).ready(function() {
	
	var untuk = $("#untuk"),
		tipe  = $("input[name=tipe]"),
		bentuk = $("#bentuk");

	var show 	= $("#show"),
		cancel 	= $("#cancel"),
		divAcc 	= $("#divAcc"),
		tanggal 	= $("#tanggal"),
		hiddenAction 	= $("#hiddenAction")
		tglAll 	= $([]).add(tanggal);

		var tipe = '';

	
		$('#profile').change(function (){

			tipe = 'profile';
			$(this).getBentuk(tipe);
			
		});
	
		$('#rh').change(function (){

			tipe = 'rh';
			$(this).getBentuk(tipe);
				
		});


		jQuery.fn.getBentuk = function ( param ){
			
			$(".classx").remove();
		
			$.ajax({
				type: 'post',
				url: "<?php echo site_url()."/personel/personelReport/getJsonBentuk"?>",
				dataType: "json",
				data: "tipe="+param ,
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
		
		var review = "show";

		show.click(function (){
			
								if ( review == "show" ) {
								divAcc.show("blind");
								}
			review = "hide";			
		});

		cancel.click(function (){
								if (  review == "hide"  ) {
								hiddenAction.val("hide");
								divAcc.hide("blind");
								}
			review = "show";
		});

		var d = new Date();
		$(tglAll).datepicker({
							   dateFormat: 'yy-mm-dd', 
							   changeMonth: true,
							   changeYear: true,
		});
	
	
})
</script>
<!-- CONTENT -->

<div id="content">
<div class="column full fl">
		<div class="box">
		<div class="box-header">Laporan Penyumbangan Export Option</div>
		<div class="box-content">
		<?php echo $history;?>
		
		<div class="clear"></div>

        	<a name="top"></a>
			<div id="cms_status" style="display:none"></div>
     
            <?php  echo form_open( $link ,array('kirim'=>'kirim')); ?>
           <div class="box" >
			<div class="box-header " style="font-size: 16px;"> </div>
			<div class="box-content box-table" style="padding-bottom: 20px;"> 
			<br/>
			<?php echo form_hidden("paper",'A4')?>
			<?php echo form_hidden("type",'pdf')?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gwlines">
            
               
                 <tr>
                    <td colspan="2">&nbsp;</td>
                </tr> 
                <tr>
                    <td width="200"><?php echo $optionpage['acc'] ?></td>
                    <td>
                        <div class="radiocheck" style="margin-bottom:10px;">
							<input  type="radio" name="note" value="show" id="show" /><label for="show">Tampilkan</label>
					    	<input  type="radio" name="note" value="cancel" id="cancel" checked/><label for="cancel">Batal</label> 
					    	
			    		</div>
					</td>
                </tr>
                <tr>
                    <td width="200"></td>
                    <td>
                    	<div id="divAcc" style="display:none;">
                    	<table >
                    		<tr>
                    			<td width="200" ><?php echo $optionpage['tgl'] ?> </td>
                    			<td>
                    				<?php echo form_input(array('name'=>'tempat','id'=>"tempat",'value'=>$optionpagedefault['tempat'],'class'=>'form-field half small','style'=>'width:220px;'));?>
                         	<?php echo form_input(array('name'=>'tanggal','id'=>"tanggal",'value'=>$optionpagedefault['tgl'],'class'=>'form-field half small','style'=>'width:100px;'));?>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td width="200" ><?php echo $optionpage['jabatan'] ?></td>
                    			<td>
                    				<?php echo form_input(array('name'=>'jabatan','id'=>"jabatan",'value'=>$optionpagedefault['jabatan'],'class'=>'form-field half small','style'=>'width:220px;'));?>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td width="200" ><?php echo $optionpage['namapersonel'] ?></td>
                    			<td>
                    				<?php echo form_input(array('name'=>'namaPersonelAcc','id'=>"namaPersonelAcc",'value'=>'','class'=>'form-field half small','style'=>'width:220px;'));?>
                    			</td>
                    		</tr>
                    	</table>
                    	</div> 
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
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>

<?php $this->load->view('footer') ?>