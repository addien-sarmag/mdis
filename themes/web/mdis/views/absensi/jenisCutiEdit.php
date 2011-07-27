<?php $this->load->view('header') ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit jenis Cuti</div>
		<div class="box-content">
        <?php echo isAccess('absensi','jenisCuti','view') ? anchor('absensi/jenisCuti/view', '<span class="icon_text preview"></span>Daftar jenis Cuti', 'class="button white"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('absensi/jenisCuti/edit/id/'.$dataEdit['id_jenis_cuti'].'/time/' . time(),array('name'=>'formAddjenisCuti'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">Nama</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'nama','value'=>get_data($dataEdit,'nama_cuti'), 'class' => 'form-field	'));?>
                       
                    </td>
                </tr>
		<tr>
                    <td>Jangka Waktu</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'jangkawaktu','value'=>get_data($dataEdit,'jangka_waktu'), 'class' => 'form-field	'));?>
                       
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