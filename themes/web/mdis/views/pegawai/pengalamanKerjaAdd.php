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
		<div class="box-header">Tambah Pengalaman Kerja</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','pengalamanKerja','view') ? anchor('pegawai/pengalamanKerja/view/nip/'.get_data($uri_to_assoc,'nip'), '<span class="icon_text preview"></span>Daftar pengalaman Kerja', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/pengalamanKerja/add/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddpengalamanKerja','id'=>'formAddpengalamanKerja'),array('kirim'=>'kirim')); ?>
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
                    <td width="200">Nama Perusahaan</td>
                    <td>
                        <?php echo form_input(array('name'=>'company','value'=>get_data($_POST,'company'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Jabatan</td>
                    <td>
                        <?php echo form_input(array('name'=>'jabatan','value'=>get_data($_POST,'jabatan'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Tanggal Masuk</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggalMasuk','id'=>'tanggalMasuk','value'=>get_data($_POST,'tanggalMasuk'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Tanggal Keluar</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggalKeluar','id'=>'tanggalKeluar','value'=>get_data($_POST,'tanggalKeluar'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                 
                <tr>
                    <td width="200">Gaji Terakhir</td>
                    <td>
                        <?php echo form_input(array('name'=>'gaji','value'=>get_data($_POST,'gaji'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Alasan Resend</td>
                    <td>
                        <?php echo form_textarea(array('name'=>'alasan','value'=>get_data($_POST,'alasan'),'class'=>'form-field','style'=>'width: 400px;height: 100px;'));?>
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