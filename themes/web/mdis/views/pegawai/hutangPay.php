<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
 
	$("#tanggal").datepicker({
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});
 

}); 
</script>
<style type="text/css">
<!--
	.trdetail{ width : 200px; height : 30px;  }
	.trdetail_nominal{ text-align : right;  }
	.trdetail_2{ width : 200px; height : 40px;  }
-->
</style>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Pembayaran Hutang</div>
		<div class="box-content box-table">
		<br />
		
		<?php echo isAccess('pegawai','hutang','view') ? anchor('pegawai/hutang/view/nip/'.$uri_to_assoc['nip'], '<span class="icon_text addnew"></span>Daftar hutang', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>
			<?php  echo form_open('pegawai/hutang/pay/nip/'.$uri_to_assoc['nip'] ,array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim')); ?>
			<table>
			 	<tr>
                    <td class="trdetail">NIP </td>
                    <td>
                        <?php echo get_data($uri_to_assoc,'nip');?> 
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail">Terhutang </td>
                    <td class="trdetail_nominal" >
                        <?php echo get_data($dataHutang,'nilai_hutang');?> 
                    </td>
                </tr>  
                <tr>
                    <td class="trdetail">Terbayar </td>
                    <td class="trdetail_nominal">
                        <?php echo $payAll;?> 
                    </td>
                </tr>
                <tr>
                    <td class="trdetail">Sisa Pembayaran </td>
                    <td class="trdetail_nominal">
                        <?php echo $payLeave;?> 
                    </td>
                </tr>
			</table>
			</form>
		 
	    	<div class="box" style="margin-top: 20px;">
			<div class="box-header">Rinci Pembayaran</div>
			<div class="box-content">
			
			<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?> 
	        
			<?php  echo form_open('pegawai/hutang/pay/pid/'.$uri_to_assoc['pid'].'/nip/'.$uri_to_assoc['nip'] ,array('name'=>'formAddpegawai','id'=>'formAddpegawai'),array('kirim'=>'kirim','pid'=>$uri_to_assoc['pid'])); ?>
			<table style="margin-bottom : 20px;">
			 	<tr>
                    <td width="100">Bayar </td>
                    <td>
                        <?php echo form_input(array('name'=>'nilai','value'=>get_data($_POST,'nilai'),'class'=>'form-field'));?>
                        
                    </td>
                </tr>  
                <tr>
                    <td width="100">Tanggal </td>
                    <td>
                        <?php echo form_input(array('name'=>'tanggal','id'=>"tanggal",'value'=>get_data($_POST,'tanggal'),'class'=>'form-field'));?> 
                    </td>
                </tr> 
                <tr>
                    <td width="100">&nbsp; </td>
                    <td>
                       <?php echo form_submit('submit','Simpan', 'class="button themed"');?>
                    </td>
                </tr>  
			</table>
			</form>
			
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                	<th width="50">No</th> 
                     <th width="100">Nilai Nominal</th> 
                     <th width="100">Tanggal</th>   
                    <th width="600">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no = $uri_to_assoc['page'] + 1;?>
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no++ ?></td>
                    <td><?php echo $row['nilai_hutang']?></td> 
                      <td><?php echo $row['tanggal_hutang'] ?></td>  
                    <td> 
                        <?php echo isAccess('pegawai','hutang','delete') ? anchor('pegawai/hutang/pay/page/'.$uri_to_assoc['page'].'/action/delete/id/' . $row['id_hutang'].'/nip/'.$uri_to_assoc['nip'].'/pid/'.$uri_to_assoc['pid'],'<span class="icon_text cancel"></span>Hapus', array('onClick' => "return confirm('".$this->lang->line('global_confirm_delete')."')" , 'class' => "button white")) : ''?>
                    </td>
                </tr> 
                <?php endforeach;?>
            </tbody>
            </table> 
            </div></div>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer') ?>