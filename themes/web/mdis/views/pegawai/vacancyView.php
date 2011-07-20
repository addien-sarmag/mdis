<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Lowongan</div>
		<div class="box-content box-table">
		<br />
		<?php echo anchor('pegawai/master', '<span class="icon_text preview"></span>Data Referensi', 'class="button white fr"'); ?>
		<?php echo isAccess('pegawai','vacancy','add') ? anchor('pegawai/vacancy/add', '<span class="icon_text addnew"></span>Tambah Lowongan', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th>
                    <th width="200">Lowongan</th> 
                     <th width="100">Dari</th> 
                      <th width="100">Sampai</th> 
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no = $uri_to_assoc['page'] + 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_jabatan']?></td> 
                      <td><?php echo ina_date($row['tglAwal_lowongan']) ?></td> 
                       <td><?php echo ina_date($row['tglAkhir_lowongan']) ?></td> 
                    <td>
                    	<?php echo isAccess('pegawai','vacancy','edit') ? anchor('pegawai/vacancy/detail/id/' . $row['id_lowongan'],'<span class="icon_text pack _284"></span>Detail', 'class="button white"', 'class="button white"') : ''?>
                    
                        <?php echo isAccess('pegawai','vacancy','edit') ? anchor('pegawai/vacancy/edit/id/' . $row['id_lowongan'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('pegawai','vacancy','delete') ? anchor('pegawai/vacancy/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_lowongan'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
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