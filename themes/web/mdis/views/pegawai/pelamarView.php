<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Pelamar</div>
		<div class="box-content box-table">
		<br /> 
		<?php echo isAccess('pegawai','pelamar','add') ? anchor('pegawai/pelamar/add', '<span class="icon_text addnew"></span>Tambah pelamar', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th>
                	 <th width="100">No. KTP</th> 
                    <th width="200">Nama</th> 
                     <th width="100">Jenis Kelamin</th> 
                      <th width="100">Pendidikan</th> 
                       <th width="100">Keahlian</th> 
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no = $uri_to_assoc['page'] + 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no++ ?></td>
                	<td><?php echo $row['noKtp_pelamar']  ?></td> 
                    <td><?php echo $row['nama_pelamar']?></td>  
                    
                    <td><?php echo $row['gender_pelamar'] ? $gender[$row['gender_pelamar']] : ""?></td> 
                    <td><?php echo $row['pendidikan_pelamar']  ?></td> 
                    
                      <td><?php echo $row['skill_pelamar']  ?></td> 
                    <td>
                        <?php echo isAccess('pegawai','pelamar','edit') ? anchor('pegawai/pelamar/edit/id/' . $row['id_pelamar'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('pegawai','pelamar','delete') ? anchor('pegawai/pelamar/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_pelamar'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
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