<?php $this->load->view('header') ?>

<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Tambah Bahasa</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','bahasa','view') ? anchor('pegawai/bahasa/view/nip/'.get_data($uri_to_assoc,'nip'), '<span class="icon_text preview"></span>Daftar Bahasa', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/bahasa/add/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddbahasa','id'=>'formAddbahasa'),array('kirim'=>'kirim')); ?>
            <table> 
            	<tr>
                    <td width="200">Nip</td>
                    <td>
                    	<?php $array =  ! empty($uri_to_assoc['nip'])  ? array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field','readonly'=>false) : 
                    					array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field' );
                    	?>
                        
                    	<?php echo form_input($array);?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Tipe</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadioStatus?>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'nama','id'=>'nama','value'=>get_data($_POST,'nama'),'class'=>'form-field'));?>
                    </td>
                </tr>   
                <tr>
                    <td width="200">Penguasaan</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadiotTipe?>
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