<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar KTP</div>
		<div class="box-content box-table">
		<br />
		
		<?php echo isAccess('pegawai','ktp','add') ? anchor('pegawai/ktp/add/nip/'.$uri_to_assoc['nip'], '<span class="icon_text addnew"></span>Tambah KTP', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>
			<?php  echo form_open('pegawai/ktp/view/nip/'.$uri_to_assoc['nip'] ,array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
			<table>
			 	<tr>
                    <td width="100">Nip </td>
                    <td>
                        <?php echo form_input(array('name'=>'nip','value'=>get_data($uri_to_assoc,'nip'),'class'=>'form-field'));?>
                        <?php echo form_submit('submit','Cari', 'class="button themed"');?>
                    </td>
                </tr>  
			</table>
			</form>
		
        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th>
                	<th width="100">NIP</th> 
                    <th width="200">Nomor</th> 
                     <th width="400">Alamat</th> 
                     <th width="100">Kelurahan</th> 
                     <th width="100">Kecamatan</th> 
                     <th width="100">Kota</th> 
                     <th width="100">Provinsi</th> 
                      <th width="200">Tanggal Berlaku</th> 
                    <th width="600">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no = $uri_to_assoc['page'] + 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no++ ?></td>
                    <td><?php echo $row['nip_karyawan']?></td> 
                    <td><?php echo $row['no_ktp']?></td> 
                      <td><?php echo $row['alamat_ktp'] ?></td> 
                       <td><?php echo $row['kelurahan_ktp'] ?></td> 
                        <td><?php echo $row['kecamatan_ktp'] ?></td> 
                         <td><?php echo $row['kota_ktp'] ?></td> 
                          <td><?php echo $row['provinsi_ktp'] ?></td> 
                          <td><?php echo $row['tglAkhir_ktp'] ?></td> 
                    <td>
                        <?php echo isAccess('pegawai','ktp','edit') ? anchor('pegawai/ktp/edit/id/' . $row['id_ktp'].'/nip/'.$uri_to_assoc['nip'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('pegawai','ktp','delete') ? anchor('pegawai/ktp/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_ktp'].'/nip/'.$uri_to_assoc['nip'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
                    </td>
                </tr> 
                <?php endforeach;?>
            </tbody>
            </table>
            <div id="paging">
            <?php echo $paging?>
            </div>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer') ?>