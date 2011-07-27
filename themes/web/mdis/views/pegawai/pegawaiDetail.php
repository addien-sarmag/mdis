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

	$("#buka").click(function (){

		$("#lengkap").show("blind");
	});

	$("#tutup").click(function (){

		$("#lengkap").hide("blind");
	});

}); 
</script>

<style type="text/css">
<!--
	.trdetail{ width : 200px; height : 30px;  }
	.trdetail_2{ width : 200px; height : 40px;  }
-->
</style>
<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Detail pegawai</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','pegawai','view') ? anchor('pegawai/pegawai/view', '<span class="icon_text preview"></span>Daftar pegawai', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <div class="box" style="margin-top: 20px;">
			<div class="box-header">Data Pegawai - Perusahaan</div>
			<div class="box-content">
            <table> 
            	<tr>
                    <td class="trdetail" >NIP </td>
                    <td>
                        <?php echo get_data($dataEdit,'nip_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail" >Nama Lengkap</td>
                    <td>
                        <?php echo get_data($dataEdit,'namaLengkap_karyawan')?>
                    </td>
                </tr> 
                
                <tr>
                    <td class="trdetail">Nama Panggil</td>
                    <td>
                        <?php echo get_data($dataEdit,'namaPanggil_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Jenis Kelamin</td>
                    <td>
                    	 <?php echo get_data($dataEdit,'gender_karyawan') == "L" ? ucwords("Laki-laki") : ucwords("Perempuan") ?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Tempat / Tanggal Lahir</td>
                    <td>
                        <?php echo get_data($dataEdit,'tempatLahir_karyawan')?> , 
                        <?php echo ina_date( get_data($dataEdit,'tanggalLahir_karyawan')) ?>
                    </td>
                </tr> 
                 <tr>
                    <td class="trdetail">Usia </td>
                    <td>
                        <?php echo get_data($dataEdit,'usia_karyawan')?>
                    </td>
                </tr> 
                 <tr>
                    <td class="trdetail">No NPWP</td>
                    <td>
                        <?php echo get_data($dataEdit,'noNpwp_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Agama</td>
                    <td>
                     <?php echo ! empty($dataEdit['agama_karyawan']) ? ucwords( get_data($dataEdit,'agama_karyawan') ) : "" ?>
                    </td>
                </tr> 
                </table> 
                
                <div id="lengkap" style="display:none"> 
                <table>
                <tr>
                    <td class="trdetail">Warga Negara </td>
                    <td>
                        <?php echo get_data($dataEdit,'wargaNegara_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Suku Bangsa / Asal Bangsa </td>
                    <td>
                        <?php echo get_data($dataEdit,'sukuBangsa_karyawan')?>
                    </td>
                </tr> 
                
                <tr>
                    <td class="trdetail">TelePhone</td>
                    <td>
                        <?php echo get_data($dataEdit,'noTelepon_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">HandPhone</td>
                    <td>
                        <?php echo get_data($dataEdit,'noHp_karyawan')?>
                    </td>
                </tr> 
                
                <tr>
                    <td class="trdetail">Pendidikan Terakhir</td>
                    <td>
                      <?php echo ! empty($dataEdit['pendidikan_karyawan']) ? ucwords( get_data($dataEdit,'pendidikan_karyawan') ) : "" ?>
                    </td>
                </tr> 
                
                <tr>
                    <td class="trdetail">Status Pribadi </td>
                    <td>
                    	 <?php echo ! empty($dataEdit['statusPribadi_karyawan']) ? ucwords( get_data($dataEdit,'statusPribadi_karyawan') ) : "" ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail">Active / Resend </td>
                    <td>
                       <?php echo ! empty($dataEdit['active_karyawan']) ? ucwords( get_data($dataEdit,'active_karyawan') ) : "" ?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Tanggal Masuk</td>
                    <td> 
                    	<?php echo get_data($dataEdit,'tanggalMasuk_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Tanggal Keluar</td>
                    <td> 
                    	 <?php echo get_data($dataEdit,'tanggalKeluar_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Berat Badan </td>
                    <td>
                        <?php echo get_data($dataEdit,'berat_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Tinggi Badan </td>
                    <td>
                       <?php echo get_data($dataEdit,'tinggi_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Status Karyawan </td>
                    <td>
                    	  <?php echo ! empty($dataEdit['status_karyawan']) ? ucwords( get_data($dataEdit,'status_karyawan') ) : "" ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail">Alamat </td>
                    <td>
                        <?php echo get_data($dataEdit,'alamat_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Kelurahan </td>
                    <td>
                        <?php echo get_data($dataEdit,'kelurahan_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Kecamatan </td>
                    <td>
                       <?php echo get_data($dataEdit,'kecamatan_karyawan')?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail">Kota </td>
                    <td>
                        <?php echo get_data($dataEdit,'kota_karyawan')?>
                    </td>
                </tr>  
            </table>
            </div>
                
               <table> 
                <tr>
                    <td class="trdetail">Tampilkan Data Lengkap</td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px;">
                    	<?php 
                    		$radio = "";
					        foreach( array("buka"=>"Tampilkan","tutup"=>"Sembunyikan") as $key => $val ){
					        	 
								$radio .= "<input  type='radio' name='btnlengkap' value='$key' id='$key'  /><label for='$key'>$val</label>";
					    	}  
					    	echo $radio ;
                    	?>
                     	</div>
                    </td>
                </tr> 
                </table> 
            </div></div>
            
        <div class="box" style="margin-top: 20px;">
			<div class="box-header">Data Pegawai - Perusahaan</div>
			<div class="box-content">
			<?php  echo form_open('pegawai/pegawai/detail/id/'.$dataEdit['nip_karyawan'].'/time/' . time(),array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
            <table>
               <tr>
                    <td class="trdetail">Jabatan </td>
                    <td>
                       <?php echo $htmlSelectJabatan?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail">Mitra Kerja </td>
                    <td>
                       <?php echo $htmlSelectMitra?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail">Unit Kerja </td>
                    <td>
                       <?php echo $htmlSelectUnit?>
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
            </div>
            </div>
            
            
            <div class="box" style="margin-top: 20px;">
			<div class="box-header">Data Pegawai Tambahan</div>
			<div class="box-content"> 
            <table>
               <tr>
                    <td class="trdetail_2">Keluarga </td>
                    <td>
                       <?php echo anchor('pegawai/keluarga/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Keluarga', 'class="button white"') ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail_2">Pengalaman Kerja</td>
                    <td>
                        <?php echo anchor('pegawai/pengalamanKerja/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Pengalaman Kerja', 'class="button white"') ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail_2">Kontrak Kerja </td>
                    <td>
                       <?php echo anchor('pegawai/kontrakPegawai/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Kontrak Kerja', 'class="button white"') ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail_2">Rekaman Hutang </td>
                    <td>
                       <?php echo anchor('pegawai/hutang/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Rekaman Hutang', 'class="button white"') ?>
                    </td>
                </tr> 
                <tr>
                    <td class="trdetail_2">Penguasaan Bahasa </td>
                    <td>
                       <?php echo anchor('pegawai/bahasa/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Bahasa', 'class="button white"') ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail_2">Ktp </td>
                    <td>
                       <?php echo anchor('pegawai/ktp/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Ktp', 'class="button white"') ?>
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail_2">Rekening </td>
                    <td>
                       <?php echo anchor('pegawai/rekening/view/nip/'.$dataEdit['nip_karyawan'], '<span class="icon_text preview"></span>Daftar Rekening', 'class="button white"') ?>
                    </td>
                </tr>  
            </table> 
            </div>
            </div>
            
			<?php endif;?>
			
          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>
  
<?php $this->load->view('footer') ?>