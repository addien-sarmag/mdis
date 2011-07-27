<?php $this->load->view('header') ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Absen</div>
		<div class="box-content">
        <?php echo isAccess('absensi','rekamanAbsen','view') ? anchor('absensi/rekamanAbsen/view', 'Rekaman Absensi', 'class="button white"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('absensi/rekamanAbsen/edit/id/'.$dataEdit['id_absensi'].'/time/' . time(),array('name'=>'formAddAbsen'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">NIP</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'nip','value'=>get_data($dataEdit,'nip'), 'class'=> 'form-field'));?>
                    </td>
                </tr>
                
				<tr>
                    <td>Tanggal Absen</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'tgl_absensi','value'=>get_data($dataEdit,'tgl_absensi'),'class'=>'form-field'));?>
                    </td>
                </tr>
				<tr>
                    <td>Jam Masuk</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'jam_masuk','value'=>get_data($dataEdit,'jam_masuk'),'class'=>'form-field'));?>
                    </td>
                </tr>
				<tr>
                    <td>Jam Keluar</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'jam_keluar','value'=>get_data($dataEdit,'jam_keluar'),'class'=>'form-field'));?>
                    </td>
                </tr>
				<tr>
                    <td>Keterangan</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'keterangan','value'=>get_data($dataEdit,'keterangan'),'class'=>'form-field'));?>
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