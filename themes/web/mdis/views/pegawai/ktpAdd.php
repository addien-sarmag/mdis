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
		<div class="box-header">Tambah KTP</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','ktp','view') ? anchor('pegawai/ktp/view/nip/'.get_data($uri_to_assoc,'nip'), '<span class="icon_text preview"></span>Daftar KTP', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/ktp/add/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddktp','id'=>'formAddktp'),array('kirim'=>'kirim')); ?>
            <table> 
            	<tr>
                    <td width="200">NIP</td>
                    <td>
                    	<?php $array =  ! empty($uri_to_assoc['nip'])  ? array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field','readonly'=>false) : 
                    					array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field' );
                    	?>
                        
                    	<?php echo form_input($array);?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Nomor KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'noKTP','value'=>get_data($_POST,'noKTP'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Alamat</td>
                    <td>
                        <?php echo form_textarea(array('name'=>'alamat','value'=>get_data($_POST,'alamat'),'class'=>'form-field','style'=>'width: 400px;height: 100px;'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Kelurahan</td>
                    <td>
                        <?php echo form_input(array('name'=>'kelurahan','id'=>'kelurahan','value'=>get_data($_POST,'kelurahan'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Kecamatan</td>
                    <td>
                        <?php echo form_input(array('name'=>'kecamatan','id'=>'kecamatan','value'=>get_data($_POST,'kecamatan'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                 
                <tr>
                    <td width="200">Kota</td>
                    <td>
                        <?php echo form_input(array('name'=>'kota','value'=>get_data($_POST,'kota'),'class'=>'form-field'));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Provinsi</td>
                    <td>
                        <?php echo form_input(array('name'=>'provinsi','value'=>get_data($_POST,'provinsi'),'class'=>'form-field' ));?>
                    </td>
                </tr>  
                 <tr>
                    <td width="200">Tanggal Jadi</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggalAwal','id'=>'tanggalAwal','value'=>get_data($_POST,'tanggalAwal'),'class'=>'form-field' ));?>
                    </td>
                </tr>
                 <tr>
                    <td width="200">Tanggal Berlaku Hingga</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggalAkhir','id'=>'tanggalAkhir','value'=>get_data($_POST,'tanggalAkhir'),'class'=>'form-field' ));?>
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