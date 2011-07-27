<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Rekening</div>
		<div class="box-content box-table">
		<br />
		
		<?php echo isAccess('pegawai','rekening','add') ? anchor('pegawai/rekening/add/nip/'.$uri_to_assoc['nip'], '<span class="icon_text addnew"></span>Tambah rekening', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>
			<?php  echo form_open('pegawai/rekening/view/nip/'.$uri_to_assoc['nip'] ,array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
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
                	<th width="200">Nomor Rekening</th> 
                    <th width="200">Nama Bank</th> 
                     <th width="400">Cabang Bank</th>  
                     <th width="400">Pemakaian</th>  
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
                	<td><?php echo $row['no_rekening']?></td> 
                    <td><?php echo $row['namaBank_rekening']?></td> 
                      <td><?php echo $row['cabangBank_rekening'] ?></td>   
                       <td><?php echo ucwords( $row['active_rekening'] )?></td> 
                    <td>
                        <?php echo isAccess('pegawai','rekening','edit') ? anchor('pegawai/rekening/edit/id/' . $row['id_rekening'].'/nip/'.$uri_to_assoc['nip'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('pegawai','rekening','delete') ? anchor('pegawai/rekening/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_rekening'].'/nip/'.$uri_to_assoc['nip'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
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