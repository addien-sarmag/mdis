<?php $this->load->view('header') ?>

<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Tambah unit</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','unit','view') ? anchor('pegawai/unit/view', '<span class="icon_text preview"></span>Daftar unit', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/unit/add/time/' . time(),array('name'=>'formAddunit','id'=>'formAddunit'),array('kirim'=>'kirim')); ?>
            <table> 
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Area</td>
                    <td>
                        <?php echo form_input(array('name'=>'area','value'=>get_data($_POST,'area'),'class'=>'form-field'));?>
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