<?php $this->load->view('header') ?>

<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tgl_cuti").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});

}); 
</script>

<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Cuti</div>
		<div class="box-content">
        <?php echo isAccess('absensi','rekamanCuti','view') ? anchor('absensi/rekamanCuti/view', 'Rekaman Cuti', 'class="button white"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('absensi/rekamanCuti/edit/id/'.$dataEdit['id_cuti'].'/time/' . time(),array('name'=>'formAddCuti'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">NIP</td>
                    <td>
                        <?php echo form_input(array('name'=>'nip','value'=>get_data($dataEdit,'nip'), 'class'=> 'form-field'));?>
                    </td>
                </tr>
               <tr>
                    <td>Jumlah Cuti</td>
                    <td>
                        <?php echo form_input(array('name'=>'jml_cuti','value'=>get_data($dataEdit,'jml_cuti'),'class'=>'form-field','id'=>'jml_cuti'));?>
                    </td>
                </tr>
				<tr>
                    <td>Tanggal Cuti</td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggal_cuti','value'=>get_data($dataEdit,'tanggal_cuti'),'class'=>'form-field'));?>
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