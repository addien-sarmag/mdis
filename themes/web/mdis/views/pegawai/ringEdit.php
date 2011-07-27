<?php $this->load->view('header') ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Ring</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','ring','view') ? anchor('pegawai/ring/view', '<span class="icon_text preview"></span>Daftar ring', 'class="button white fr"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/ring/edit/id/'.$dataEdit['id_ring'].'/time/' . time(),array('name'=>'formAddring'),array('kirim'=>'kirim')); ?>
            <table>
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($dataEdit,'nama_ring'), 'class' => 'form-field	'));?>
                       
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tipe</td>
                    <td>
                        <?php echo $htmlTipe?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Fee</td>
                    <td>
                        <?php echo form_input(array('name'=>'fee','value'=>get_data($dataEdit,'fee_ring'),'class'=>'form-field'));?>
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