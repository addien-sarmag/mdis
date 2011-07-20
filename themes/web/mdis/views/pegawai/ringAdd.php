<?php $this->load->view('header') ?>

<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Tambah Ring</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','ring','view') ? anchor('pegawai/ring/view', '<span class="icon_text preview"></span>Daftar ring', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/ring/add/time/' . time(),array('name'=>'formAddring','id'=>'formAddring'),array('kirim'=>'kirim')); ?>
            <table> 
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
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
                        <?php echo form_input(array('name'=>'fee','value'=>get_data($_POST,'fee'),'class'=>'form-field'));?>
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