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
		<div class="box-header">Edit Kontrak </div>
		<div class="box-content">
        <?php echo isAccess('pegawai','ktp','view') ? anchor('pegawai/kontrakPegawai/view/nip/'.get_data($uri_to_assoc,'nip'), '<span class="icon_text preview"></span>Daftar Kontrak', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/kontrakPegawai/edit/id/'.get_data($uri_to_assoc,'id').'/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddkontrakPegawai','id'=>'formAddkontrakPegawai'),array('kirim'=>'kirim')); ?>
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
                    <td width="200">Nomor Kontrak </td>
                    <td>
                        <?php echo form_input(array('name'=>'nomor','value'=>get_data($dataEdit,'nomor_kontrakPegawai'),'class'=>'form-field'));?>
                        <?php echo form_hidden( "nomorOld" , get_data($dataEdit,'nomor_kontrakPegawai') );?>
                    </td>
                </tr>  
                 <tr>
                    <td width="200">Tanggal Mulai</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggalAwal','id'=>'tanggalAwal','value'=>get_data($dataEdit,'tanggalAwal_kontrakPegawai'),'class'=>'form-field' ));?>
                    </td>
                </tr>
                 <tr>
                    <td width="200">Tanggal Selesai</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggalAkhir','id'=>'tanggalAkhir','value'=>get_data($dataEdit,'tanggalAkhir_kontrakPegawai'),'class'=>'form-field' ));?>
                    </td>
                </tr>
                 
                <tr>
                    <td width="200">Keterangan</td>
                    <td>
                        <?php echo form_textarea(array('name'=>'desc','value'=>get_data($dataEdit,'desc_kontrakPegawai'),'class'=>'form-field','style'=>'width: 400px;height: 100px;'));?>
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