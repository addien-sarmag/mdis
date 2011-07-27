<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tgl_absensi").datepicker({
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
		<div class="box-header">Tambah Absen</div>
		<div class="box-content">
        <?php echo isAccess('absensi','masterAbsen','view') ? anchor('absensi/rekamanAbsen/view', '<span class="icon_text preview"></span>Rekaman Absen', 'class="button white"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('absensi/rekamanAbsen/add/time/' . time(),array('name'=>'formAddAbsen','id'=>'formAddAbsen'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">NIP</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'nip','value'=>get_data($_POST,'nip'), 'class'=> 'form-field'));?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Absen</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'tgl_absensi','value'=>get_data($_POST,'tgl_absensi'),'class'=>'form-field', 'id'=>'tgl_absensi'));?>
                    </td>
                </tr>
				<tr>
                    <td>Jam Masuk</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'jam_masuk','value'=>get_data($_POST,'jam_masuk'),'class'=>'form-field'));?>
                    </td>
                </tr>
				<tr>
                    <td>Jam Keluar</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'jam_keluar','value'=>get_data($_POST,'jam_keluar'),'class'=>'form-field'));?>
                    </td>
                </tr>
				<tr>
                    <td>Keterangan</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'keterangan','value'=>get_data($_POST,'keterangan'),'class'=>'form-field'));?>
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