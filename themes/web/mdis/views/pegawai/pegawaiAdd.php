<?php $this->load->view('header') ?>

<!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Tambah pegawai</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','pegawai','view') ? anchor('pegawai/pegawai/view', '<span class="icon_text preview"></span>Daftar pegawai', 'class="button white fr"') : ''; ?>
        <br /><br />      
        
			<div id="loading" style="display:none;"><img src="loading.gif" alt="loading..." /></div>
        	<div id="result" style="display:none;"></div>
        	
            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('pegawai/pegawai/add/time/' . time(),array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
            <table> 
                <tr>
                    <td width="200">Nama Lengkap</td>
                    <td>
                        <?php echo form_input(array('name'=>'completeName','value'=>get_data($_POST,'completeName'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Nama Panggil</td>
                    <td>
                        <?php echo form_input(array('name'=>'callName','value'=>get_data($_POST,'callName'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Nama</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tempat, TTL</td>
                    <td>
                        <?php echo form_input(array('name'=>'placeBrith','value'=>get_data($_POST,'placeBrith'),'class'=>'form-field'));?>
                        <?php echo form_input(array('name'=>'dateBrith','value'=>get_data($_POST,'dateBrith'),'class'=>'form-field',"style"=>"width:100px;"));?>
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
                    <td width="200"  colspan="2">----------------------------------------------------------------------------------------------------------------------------------</td> 
                </tr> 
                
                 <tr>
                    <td width="200">No KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'noKtp','value'=>get_data($_POST,'noKtp'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Jalan KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kelurahan KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kecamatan KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kota KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Kode KTP</td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200" colspan="2">----------------------------------------------------------------------------------------------------------------------------------</td> 
                </tr>  
                 <tr>
                    <td width="200">Tanggal Jalan </td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200"> Tanggal Kelurahan </td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Kecamatan </td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Kota </td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Kode </td>
                    <td>
                        <?php echo form_input(array('name'=>'name','value'=>get_data($_POST,'name'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                  
                 
                 <tr>
                    <td width="200" colspan="2">----------------------------------------------------------------------------------------------------------------------------------</td> 
                </tr> 
                 <tr>
                    <td width="200">No NPWP</td>
                    <td>
                        <?php echo form_input(array('name'=>'npwp','value'=>get_data($_POST,'npwp'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">TelePhone</td>
                    <td>
                        <?php echo form_input(array('name'=>'npwp','value'=>get_data($_POST,'npwp'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">HandPhone</td>
                    <td>
                        <?php echo form_input(array('name'=>'npwp','value'=>get_data($_POST,'npwp'),'class'=>'form-field'));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Agama</td>
                    <td>
                        <?php echo $htmlAgama;?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Pendidikan</td>
                    <td>
                        <?php echo $htmlPendidikan;?>
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