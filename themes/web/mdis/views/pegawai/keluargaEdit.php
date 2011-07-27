<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#dateBorn").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});
 

}); 
</script>
<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Keluarga</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','keluarga','view') ? anchor('pegawai/keluarga/view/nip/'.get_data($uri_to_assoc,'nip'), '<span class="icon_text preview"></span>Daftar Keluarga', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/keluarga/edit/id/'.get_data($dataEdit,'id_keluarga').'/nip/'.get_data($uri_to_assoc,'nip').'/time/' . time(),array('name'=>'formAddkeluarga','id'=>'formAddkeluarga'),array('kirim'=>'kirim')); ?>
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
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'nama','value'=>get_data($dataEdit,'nama_keluarga'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Jenis Kelamin</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadioSex;?>
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Hubungan</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlTipeKeluarga;?>
                        </div>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Tempat / Tanggal Lahir</td>
                    <td>
                        <?php echo form_input(array('name'=>'placeBorn','value'=>get_data($dataEdit,'tempatLahir_keluarga'),'class'=>'form-field'));?>
                         <?php echo form_input(array('name'=>'dateBorn','id'=>'dateBorn','value'=>get_data($dataEdit,'tanggalLahir_keluarga'),'class'=>'form-field','style'=>"width: 100px;"));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Pendidikan</td>
                    <td>
                        <?php echo $htmlPendidikan?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Pekerjaan</td>
                    <td>
                        <?php echo form_input(array('name'=>'pekerjaan','value'=>get_data($dataEdit,'pekerjaan_keluarga'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Keterangan</td>
                    <td>
                         
                        <?php echo form_textarea(array('name'=>'desc','value'=>get_data($dataEdit,'keterangan_keluarga'), 'class'=> 'form-field',"style"=>"width: 400px;height: 100px;"));?>
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