<?php $this->load->view('header') ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit jabatan</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','jabatan','view') ? anchor('pegawai/jabatan/view', '<span class="icon_text preview"></span>Daftar jabatan', 'class="button white fr"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/jabatan/edit/id/'.$dataEdit['id_jabatan'].'/time/' . time(),array('name'=>'formAddjabatan'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($dataEdit,'nama_jabatan'), 'class' => 'form-field	'));?>
                       
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tipe Jabatan</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadiotipeJabatan;?>
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