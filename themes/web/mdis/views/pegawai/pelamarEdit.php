<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tglReg ,  #dateBorn ").datepicker({
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
		<div class="box-header">Edit Pelamar</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','pelamar','view') ? anchor('pegawai/pelamar/view', '<span class="icon_text preview"></span>Daftar pelamar', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/pelamar/edit/id/'.$dataEdit['id_pelamar'].'/time/' . time(),array('name'=>'formAddpelamar','id'=>'formAddpelamar'),array('kirim'=>'kirim')); ?>
            <table> 
            	<tr>
                    <td width="200">Posisi</td>
                    <td>
                       <?php echo $htmlSelectJabatan?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">No. KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'noKtp','value'=>get_data($dataEdit,'noKtp_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($dataEdit,'nama_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Tempat / Tanggal Lahir</td>
                    <td>
                        <?php echo form_input(array('name'=>'placeBorn','value'=>get_data($dataEdit,'tempatLahir_pelamar'),'class'=>'form-field'));?>
                         <?php echo form_input(array('name'=>'dateBorn','id'=>'dateBorn','value'=>get_data($dataEdit,'tanggalLahir_pelamar'),'class'=>'form-field','style'=>"width: 100px;"));?>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Jenis Kelamin</td>
                    <td>
                        <div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadioSex ?>
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Agama</td>
                    <td>
                        <?php echo $htmlAgama?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Melamar</td>
                    <td>
                        <?php echo form_input(array('name'=>'tglReg','id'=>'tglReg','value'=>get_data($dataEdit,'tanggal_pelamar'),'class'=>'form-field','style'=>"width: 100px;"));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Keahlian</td>
                    <td>
                        <?php echo form_input(array('name'=>'skill','value'=>get_data($dataEdit,'skill_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Pendidikan</td>
                    <td>
                        <?php echo $htmlPendidikan?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Alamat</td>
                    <td>
                         
                        <?php echo form_textarea(array('name'=>'alamat','value'=>get_data($dataEdit,'alamat_pelamar'), 'class'=> 'form-field',"style"=>"width: 400px;height: 100px;"));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Telepon</td>
                    <td>
                        <?php echo form_input(array('name'=>'telepon','value'=>get_data($dataEdit,'noTelepon_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Handphone</td>
                    <td>
                        <?php echo form_input(array('name'=>'handphone','value'=>get_data($dataEdit,'noHP_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Gaji Terakhir</td>
                    <td>
                        <?php echo form_input(array('name'=>'lastPayment','value'=>get_data($dataEdit,'gajiTerakhir_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Gaji Penawaran</td>
                    <td>
                        <?php echo form_input(array('name'=>'lastTarget','value'=>get_data($dataEdit,'gajiTawaran_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Status Pribadi</td>
                    <td>
                       <div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlRadioStatusPribadi ?>
                        </div>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Kelurahan</td>
                    <td>
                        <?php echo form_input(array('name'=>'kelurahan','value'=>get_data($dataEdit,'kelurahan_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kecamatan</td>
                    <td>
                        <?php echo form_input(array('name'=>'kecamatan','value'=>get_data($dataEdit,'kecamatan_pelamar'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kota</td>
                    <td>
                        <?php echo form_input(array('name'=>'kota','value'=>get_data($dataEdit,'kota_pelamar'),'class'=>'form-field'));?>
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