<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Pegawai</div>
		<div class="box-content box-table">
		<br />
		<?php echo anchor('pegawai/master', '<span class="icon_text preview"></span>Data Referensi', 'class="button white fr"'); ?>
		<?php echo isAccess('pegawai','pegawai','add') ? anchor('pegawai/pegawai/add', '<span class="icon_text addnew"></span>Tambah pegawai', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th>
                    <th width="200">Nama Lengkap</th> 
                    <th width="200">Nama Panggil</th> 
                    <th width="300">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no = $uri_to_assoc['page'] + 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_lengkap']?></td> 
                    <td><?php echo $row['nama_panggil']?></td> 
                    <td>
                    	<?php echo isAccess('pegawai','pegawai','edit') ? anchor('pegawai/pegawai/detail/id/' . $row['nip'],'<span class="icon_text pack _284"></span>Detail', 'class="button white"', 'class="button white"') : ''?>
                    
                        <?php echo isAccess('pegawai','pegawai','edit') ? anchor('pegawai/pegawai/edit/id/' . $row['nip'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('pegawai','pegawai','delete') ? anchor('pegawai/pegawai/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['nip'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
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