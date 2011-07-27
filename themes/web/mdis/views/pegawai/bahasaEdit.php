<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tanggalMasuk  , #tanggalKeluar").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});
 

}); 
</script>
<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Bahasa</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','bahasa','view') ? anchor('pegawai/bahasa/view/id/'.get_data($uri_to_assoc,'id').'/nip/'.get_data($dataEdit,'nip_karyawan'), '<span class="icon_text preview"></span>Daftar Bahasa', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/bahasa/edit/id/'.get_data($uri_to_assoc,'id').'/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddbahasa','id'=>'formAddbahasa'),array('kirim'=>'kirim')); ?>
            <table> 
            	<tr>
                    <td width="200">Nip</td>
                    <td>
                    	<?php $array =   array('name'=>'nip','value'=>get_data($dataEdit,'nip_karyawan'),'class'=>'form-field','readonly'=>false) ;
                    	?>
                        
                    	<?php echo form_input($array);?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Tipe</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadioStatus?>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'nama','id'=>'nama','value'=>get_data($dataEdit,'nama_bahasa'),'class'=>'form-field'));?>
                    </td>
                </tr>   
                <tr>
                    <td width="200">Status</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadiotTipe?>
                        </div>
                    </td>
                </tr>  
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo form_submit('submit','Simpan', 'class="button themed"');?>
                    </td>
                </tr>
            </table>
            </form>
			<?php endif;?>
			
          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>
  
<?php $this->load->view('footer') ?>