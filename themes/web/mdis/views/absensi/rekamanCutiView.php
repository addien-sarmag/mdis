<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Rekaman Cuti</div>
		<div class="box-content box-table">
		<br />
		
		<?php echo isAccess('absensi','rekamanCuti','add') ? anchor('absensi/rekamanCuti/add', '<span class="icon_text addnew"></span>Tambah Cuti', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                    <th width="100">NIP</th>
                    <th>Tanggal Cuti</th>
                    <th>Jumlah Cuti</th>
					<th>Keterangan</th>
				</tr>
            </thead>
            <tbody>
            	<?php $no = 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                    <td><?php echo $row['nip']?></td>
                    <td><?php echo $row['tgl_cuti']?></td>
					<td><?php echo $row['jml_cuti']?></td>
					<td><?php echo $row['keterangan']?></td>
					<td>
                        <?php echo isAccess('absensi','rekamanCuti','edit') ? anchor('absensi/rekamanCuti/edit/id/' . $row['id_cuti'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('absensi','rekamanCuti','delete') ? anchor('absensi/rekamanCuti/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_cuti'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
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