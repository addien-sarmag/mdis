<?php $this->load->view('header') ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Kontrak Pegawai</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','kontrakPegawai','view') ? anchor('pegawai/kontrakPegawai/view', '<span class="icon_text preview"></span>Daftar kontrak Pegawai', 'class="button white fr"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/kontrakPegawai/edit/id/'.$dataEdit['id_pengalaman'].'/time/' . time(),array('name'=>'formAddkontrakPegawai'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($dataEdit,'nama_kontrakPegawai'), 'class' => 'form-field	'));?>
                       
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