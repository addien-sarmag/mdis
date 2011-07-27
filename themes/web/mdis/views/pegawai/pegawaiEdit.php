<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#dateBrith  , #dateOut").datepicker({
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
		<div class="box-header">Edit pegawai</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','pegawai','view') ? anchor('pegawai/pegawai/view', '<span class="icon_text preview"></span>Daftar pegawai', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/pegawai/edit/id/'.$dataEdit['nip_karyawan'].'/time/' . time(),array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
            <table> 
            	<tr>
                    <td width="200">NIP </td>
                    <td>
                        <?php echo form_input(array('name'=>'nip','value'=>get_data($dataEdit,'nip_karyawan'),'class'=>'form-field'));?>
                        <?php echo form_hidden( 'nipOld', get_data($dataEdit,'nip_karyawan'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Nama Lengkap</td>
                    <td>
                        <?php echo form_input(array('name'=>'completeName','value'=>get_data($dataEdit,'namaLengkap_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                
                <tr>
                    <td width="200">Nama Panggil</td>
                    <td>
                        <?php echo form_input(array('name'=>'callName','value'=>get_data($dataEdit,'namaPanggil_karyawan'),'class'=>'form-field'));?>
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
                    <td width="200">Tempat / Tanggal Lahir</td>
                    <td>
                        <?php echo form_input(array('name'=>'placeBrith','value'=>get_data($dataEdit,'tempatLahir_karyawan'),'class'=>'form-field'));?>
                        <?php echo form_input(array('name'=>'dateBrith','id'=>"dateBrith",'value'=>get_data($dataEdit,'tanggalLahir_karyawan'),'class'=>'form-field',"style"=>"width:100px;"));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Usia </td>
                    <td>
                        <?php echo form_input(array('name'=>'usia','value'=>get_data($dataEdit,'usia_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">No NPWP</td>
                    <td>
                        <?php echo form_input(array('name'=>'npwp','value'=>get_data($dataEdit,'noNpwp_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Agama</td>
                    <td>
                        <?php echo $htmlAgama;?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Warga Negara </td>
                    <td>
                        <?php echo form_input(array('name'=>'wargaNegara','value'=>get_data($dataEdit,'wargaNegara_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Suku Bangsa / Asal Bangsa </td>
                    <td>
                        <?php echo form_input(array('name'=>'suku','value'=>get_data($dataEdit,'sukuBangsa_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                
                <tr>
                    <td width="200">TelePhone</td>
                    <td>
                        <?php echo form_input(array('name'=>'telepon','value'=>get_data($dataEdit,'noTelepon_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">HandPhone</td>
                    <td>
                        <?php echo form_input(array('name'=>'handphone','value'=>get_data($dataEdit,'noHp_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                
                <tr>
                    <td width="200">Pendidikan Terakhir</td>
                    <td>
                        <?php echo $htmlPendidikan;?>
                    </td>
                </tr> 
                
                <tr>
                    <td width="200">Status Pribadi </td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlstatusPribadi;?>
                        </div>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Active / Resend </td>
                    <td>
                      <div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlActive;?>
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Masuk</td>
                    <td> 
                    	 <?php echo form_input(array('name'=>'dateIn','id'=>"dateIn",'value'=>get_data($dataEdit,'tanggalMasuk_karyawan'),'class'=>'form-field',"style"=>"width:100px;","readonly"=>'readonly'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Keluar</td>
                    <td> 
                    	 <?php echo form_input(array('name'=>'dateOut','id'=>"dateOut",'value'=>get_data($dataEdit,'tanggalKeluar_karyawan'),'class'=>'form-field',"style"=>"width:100px;"));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Berat Badan </td>
                    <td>
                        <?php echo form_input(array('name'=>'berat','value'=>get_data($dataEdit,'berat_karyawan'),'class'=>'form-field'));?> &nbsp; kg
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tinggi Badan </td>
                    <td>
                        <?php echo form_input(array('name'=>'tinggi','value'=>get_data($dataEdit,'tinggi_karyawan'),'class'=>'form-field'));?> &nbsp; cm
                    </td>
                </tr> 
                <tr>
                    <td width="200">Status Karyawan </td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                        <?php echo $htmlstatusKaryawan;?>
                        </div>
                    </td>
                </tr>  
                <tr>
                    <td width="200">Alamat </td>
                    <td>
                        <?php echo form_textarea(array('name'=>'address','value'=>get_data($dataEdit,'alamat_karyawan'),'class'=>'form-field','style'=>'width: 400px;height: 100px;'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kelurahan </td>
                    <td>
                        <?php echo form_input(array('name'=>'kelurahan','value'=>get_data($dataEdit,'kelurahan_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kecamatan </td>
                    <td>
                        <?php echo form_input(array('name'=>'kecamatan','value'=>get_data($dataEdit,'kecamatan_karyawan'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kota </td>
                    <td>
                        <?php echo form_input(array('name'=>'kota','value'=>get_data($dataEdit,'kota_karyawan'),'class'=>'form-field'));?>
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