<?php $this->load->view('header') ?>

<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Tambah mitra Kerja</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','mitraKerja','view') ? anchor('pegawai/mitraKerja/view', '<span class="icon_text preview"></span>Daftar mitra Kerja', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/mitraKerja/add/time/' . time(),array('name'=>'formAddmitraKerja','id'=>'formAddmitraKerja'),array('kirim'=>'kirim')); ?>
            <table> 
                <tr>
                    <td>Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr>
                 <tr>
                    <td width="200">Alamat</td>
                    <td>
                        <?php echo form_textarea(array('name'=>'address','value'=>get_data($_POST,'address'), 'class'=> 'form-field',"style"=>"width: 400px;height: 100px;"));?>
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