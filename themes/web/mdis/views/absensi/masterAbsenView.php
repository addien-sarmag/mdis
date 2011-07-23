<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Master Absensi</div>
		<div class="box-content box-table">
		<br />
		
		<?php echo isAccess('absensi','masterAbsen','add') ? anchor('absensi/masterAbsen/add', '<span class="icon_text addnew"></span>Tambah Absen', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                    <th width="100">NIP</th>
                    <th>Absen</th>
                    <th>Tgl Absen</th>
					<th>Jam Masuk</th>
					<th>Jam Keluar</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no = 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                    <td><?php echo $row['nip']?></td>
                    <td><?php echo $row['absen']?></td>
					<td><?php echo $row['tgl_absensi']?></td>
					<td><?php echo $row['jam_masuk']?></td>
					<td><?php echo $row['jam_keluar']?></td>
                    <td>
                        <?php echo isAccess('absensi','masterAbsen','edit') ? anchor('absensi/masterAbsen/edit/id/' . $row['id_absensi'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('absensi','masterAbsen','delete') ? anchor('absensi/masterAbsen/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_absensi'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
                    </td>
                </tr>
                <?php $no++?>
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