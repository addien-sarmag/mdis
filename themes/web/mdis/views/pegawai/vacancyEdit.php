<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tglReg ,  #tglAwal ,#tglAkhir  ").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});

}); 
</script>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Lowongan</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','vacancy','view') ? anchor('pegawai/vacancy/view', '<span class="icon_text preview"></span>Daftar Lowongan', 'class="button white fr"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/vacancy/edit/id/'.$dataEdit['id_lowongan'].'/time/' . time(),array('name'=>'formAddvacancy'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">Tipe Lowongan</td>
                    <td>
                        <?php echo $htmlSelectJabatan?>
                       
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Tanggal Awal</td>
                    <td>
                        <?php echo form_input(array('name'=>'tglAwal','id'=>'tglAwal','value'=>get_data($dataEdit,'tglAwal_lowongan'),'class'=>'form-field','style'=>"width: 100px;"));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Akhir</td>
                    <td>
                        <?php echo form_input(array('name'=>'tglAkhir','id'=>'tglAkhir','value'=>get_data($dataEdit,'tglAkhir_lowongan'),'class'=>'form-field','style'=>"width: 100px;"));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Keterangan</td>
                    <td> 
                        <?php echo form_textarea(array('name'=>'desc','value'=>get_data($dataEdit,'desc_lowongan'), 'class'=> 'form-field',"style"=>"width: 400px;height: 100px;"));?>
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