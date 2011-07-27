<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tglReg ,  #tglAwal ,#tglAkhir  ").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});

}); 
</script>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Edit Lowongan</div>
		<div class="box-content">
        <?php echo isAccess('pegawai','vacancy','view') ? anchor('pegawai/vacancy/view', '<span class="icon_text preview"></span>Daftar Lowongan', 'class="button white fr"') : ''; ?>
		<br /><br />

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
             
            <table>
                <tr>
                    <td width="200">Tipe Lowongan</td>
                    <td> 
                        <?php echo form_input(array('name'=>'tglAwal','id'=>'tglAwal','value'=>get_data($dataEdit,'nama_jabatan'),'class'=>'form-field','style'=>"width: 100px;","disabled"=>true));?>
                    </td>
                </tr> 
                 <tr>
                    <td width="200">Tanggal Awal</td>
                    <td>
                        <?php echo form_input(array('name'=>'tglAwal','id'=>'tglAwal','value'=>get_data($dataEdit,'tglAwal_lowongan'),'class'=>'form-field','style'=>"width: 100px;","disabled"=>true));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Tanggal Akhir</td>
                    <td>
                        <?php echo form_input(array('name'=>'tglAkhir','id'=>'tglAkhir','value'=>get_data($dataEdit,'tglAkhir_lowongan'),'class'=>'form-field','style'=>"width: 100px;","disabled"=>true));?>
                    </td>
                </tr> 
                <tr>
                    <td width="200">Keterangan</td>
                    <td> 
                        <?php echo form_textarea(array('name'=>'desc','value'=>get_data($dataEdit,'desc_lowongan'), 'class'=> 'form-field',"style"=>"width: 400px;height: 100px;","disabled"=>true));?>
                    </td>
                </tr>  
            </table>  
			
			<br /><br />
			<div class="box-header">Kandidat</div>
			<div class="box-content"> 
			<?php echo isAccess('pegawai','vacancy','kandidatAdd') ? anchor('pegawai/kandidat/kandidatAdd', '<span class="icon_text addnew"></span>Tambah Kandidat', 'class="button white fr"') : ''; ?>
			<br/>
				<table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th>
                    <th width="200">Kegunaan</th> 
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
                    	
                    
                        <?php echo isAccess('pegawai','vacancy','edit') ? anchor('pegawai/vacancy/edit/id/' . $row['id_lowongan'],'<span class="icon_text edit"></span>Edit', 'class="button white"', 'class="button white"') : ''?>
                        
                        <?php echo isAccess('pegawai','vacancy','delete') ? anchor('pegawai/vacancy/view/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_lowongan'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
                    </td>
                </tr> 
                <?php endforeach;?>
            </tbody>
            </table>
			</div>
			
          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>

<?php $this->load->view('footer') ?>