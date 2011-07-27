<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tanggalAwal  , #tanggalAkhir").datepicker({
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
		<div class="box-header">Tambah Rekening</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','rekening','view') ? anchor('pegawai/rekening/view/nip/'.get_data($uri_to_assoc,'nip'), '<span class="icon_text preview"></span>Daftar rekening', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/rekening/add/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddrekening','id'=>'formAddrekening'),array('kirim'=>'kirim')); ?>
            <table> 
            	<tr>
                    <td width="200">Nip</td>
                    <td>
                    	<?php $array =  ! empty($uri_to_assoc['nip'])  ? array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field','readonly'=>false) : 
                    					array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field' );
                    	?>
                        
                    	<?php echo form_input($array);?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Nomor Rekening</td>
                    <td>
                        <?php echo form_input(array('name'=>'noRekening','value'=>get_data($_POST,'noRekening'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                 <tr>
                    <td width="200">Nama Bank</td>
                    <td>
                        <?php echo form_input(array('name'=>'nama','value'=>get_data($_POST,'nama'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Cabang Bank</td>
                    <td>
                        <?php echo form_input(array('name'=>'cabang','id'=>'cabang','value'=>get_data($_POST,'cabang'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Pemakaian</td>
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