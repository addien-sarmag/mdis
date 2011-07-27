<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#dateTo , #dateFrom").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});

}); 
</script>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">  laporan Pegawai</div>
		<div class="box-content box-table">
		<br />  
		 <?php  echo form_open('pegawai/laporanPegawai/view/' ,array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
			<table>
			 	<tr>
                    <td width="100">Tanggal </td>
                    <td>
                    	  <?php echo $htmlDateFrom?> &nbsp; Sampai <?php echo $htmlDateTo?> 
                    </td> 
                </tr> 
                <tr>
                    <td width="100">Status Karyawan </td>
                    <td>
                    	<div class="radiocheck" style="margin-bottom:10px; float : left;" >
                        <?php echo $htmlstatusKaryawan;?>
                        </div>
                       
                    </td> 
                </tr>   
                <tr>
                    <td width="100">&nbsp;</td>
                    <td>
                    	 <?php echo form_submit('submit','Cari', 'class="button themed"');?>
                    </td> 
                </tr> 
			</table>
			</form>
		<br/>
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <div class="box">
			<div class="box-header">  laporan Pegawai</div>
			<div class="box-content box-table">
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th>
                	<th width="100">NIP</th> 
                    <th width="100">Nama</th> 
                    <th width="100">Jenis Kelamin</th>  
                     <th width="100">TTL</th>
                    <th width="100">Pendidikan</th>
                    <th width="100">Agama</th>
                    <th width="100">Usia</th> 
                    <th width="100">Tanggal Masuk</th>  
                </tr>
            </thead>
            <tbody>
            	<?php $no = $uri_to_assoc['page'] + 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no++ ?></td>
                	<td><?php echo $row['nip_karyawan']?></td> 
                    <td><?php echo $row['namaLengkap_karyawan']?></td> 
                    <td><?php echo $row['gender_karyawan'] == "L" ?  "Laki-laki" : "Perempuan" ?></td>  
                     <td><?php echo $row['tempatLahir_karyawan'].", ".ina_date($row['tanggalLahir_karyawan'])?></td> 
                      <td><?php echo $row['pendidikan_karyawan']?></td> 
                     <td><?php echo $row['agama_karyawan']?></td> 
                     <td><?php echo $row['usia_karyawan']?></td>
                     <td><?php echo ina_date( $row['tanggalMasuk_karyawan'] )?></td> 
                </tr> 
                <?php endforeach;?>
            </tbody>
            </table>
            </div> </div>
            <div id="paging">
            <?php echo $paging?>
            </div>
            
            <div style='height: 40px; padding-top: 10px;'><?php echo $htmlLinkEksport?></div>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer') ?>