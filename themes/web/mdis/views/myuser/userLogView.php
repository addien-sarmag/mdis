<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
  <script type="text/javascript">
	$(function() {
		var srcTgl 	= $("#srcTgl"),
			srcIp 	= $("#srcIp"),
			srcUser = $("#srcUser"),
			tglAll 	= $([]).add(srcTgl);
		var resIp 	= <?php echo $dataListIp?>;
		var resUser = <?php echo $dataListUserName?>;
		
		srcTgl.click(function 	(){		$( this ).check( srcTgl , 'Tanggal' ) ;		});

		srcTgl.blur(function 	(){ 	$( this ).returns ( srcTgl , 'Tanggal' ); 	});

		srcIp.click(function 	(){		$( this ).check( srcIp , 'Alamat IP' ) ;	});

		srcIp.blur(function 	(){		$( this ).returns ( srcIp , 'Alamat IP' );	});

		srcUser.click(function 	(){		$( this ).check( srcUser , 'Pengguna' ) ;	});

		srcUser.blur(function 	(){		$( this ).returns ( srcUser , 'Pengguna' );	});

		srcIp.autocomplete({ delay: 0 , source: resIp });

		srcUser.autocomplete({ delay: 0 , source: resUser });


		
jQuery.fn.check = function( classX , variabel ){

			if ( ! classX   )  
				return alert(' function retuns missing some arguments');
			
			if ( classX.val() == variabel ) { 
					classX.val('') ; 	
			}else {
				classX.select();
			}

}

		
jQuery.fn.returns = function( classX , variabel ){

	if ( ! classX || ! variabel  )  
		return alert(' function retuns missing some arguments');
	
	if ( classX.val() == '' || classX.val() == variabel ) { 
			classX.val( variabel ) ;
			classX.css({ 'color':'#bbb'});
	}else{
		classX.css({ 'color':'#3f20f9'});
		
	}

}

		$(tglAll).datepicker({
			   dateFormat: 'yy-mm-dd', 
			   changeMonth: true,
			   changeYear: true,
			   
					});
	});
</script>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Pengguna</div>
		<div class="box-content box-table">
		<br />
		<div style="margin-bottom:20px;margin-top:20px;">
			<table>
				<tr>
					<td>Pencarian Berdasarkan</td>
					<td>
					<?php echo form_open('myuser/userLog/view')?>
						<?php $date = ( get_data($_POST,'srcTgl') ) ? get_data($_POST,'srcTgl') : 'Tanggal'; ?>
						<?php $date = ( empty ( $dataSrcDate ) ) ? $date : $dataSrcDate; ?>
						<?php echo  form_input(array('name'=>'srcTgl','style'=>'color:#bbb;width:80px;','id'=>'srcTgl','value'=>$date, 'class'=> 'form-field'));?>
						
						<?php $ip = ( get_data($_POST,'srcIp') ) ? get_data($_POST,'srcIp') : 'Alamat IP'; ?>
						<?php $ip = ( empty ( $dataSrcIp ) ) ? $ip : $dataSrcIp; ?>
						<?php echo  form_input(array('name'=>'srcIp','style'=>'color:#bbb;','id'=>'srcIp','value'=>$ip, 'class'=> 'form-field'));?>
						
						<?php $user = ( get_data($_POST,'srcUser') ) ? get_data($_POST,'srcUser') : 'Pengguna'; ?>
						<?php $user = ( empty ( $dataUserName ) ) ? $user : $dataUserName; ?>
						<?php echo  form_input(array('name'=>'srcUser','style'=>'color:#bbb;','id'=>'srcUser','value'=>$user, 'class'=> 'form-field'));?>
						
						<?php echo form_submit(array('value'=>'Cari','name'=>'cari','class'=>'button themed'));?>
					</form>
					</td>
				</tr>
			</table>
		</div>
		<?php // echo anchor('personel/master', '<span class="icon_text preview"></span>Data Referensi', 'class="button white fr"'); ?>
		<?php //echo isAccess('personel','agama','add') ? anchor('personel/agama/add', '<span class="icon_text addnew"></span>Tambah Agama', 'class="button white fr"') : ''; ?> 
		<div class="clear"></div>

        	<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>    	
	        
            <?php echo $paging?>
            <table class="tablebox">
            <thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
                <tr>
                    <th width="10">No.</th>
                    <th width="140">Date</th>
                    <th width="100">User</th>
                    <th width="100">IP Address</th>
                    <th width="100">Module</th>
                    <th width="100">Sub Module</th>
                    <th width="100">Action</th>
<!--                    <th>Browser</th>-->
                    
                </tr>
            </thead>
            <tbody>
            	<?php $no = $start;?>
            	
                <?php if ($dataView) foreach($dataView as $row) : ?>
                <?php  //$split = (  $row['counterUserAgent'] ) ? explode("/",$row['counterUserAgent'],3) : '';	 ?>
             	<?php $about = (  $row['counterUrl'] ) ? explode("/",$row['counterUrl'],30) : '';?>
                <?php $class = $no % 2 == 0 ? 'even' : 'odd' ?>
                <tr class=<?php echo $class?>>
                	<td><?php echo $no + 1?></td>
                	<td><?php echo ina_dateSlash( $row['tanggal'] ).' '.$row['waktu']?></td>
                	<td><?php echo $row['userName']?></td>
                    <td><?php echo $row['counterIp']?></td>
                    <td><?php echo ( ! empty ( $about[3] ) )?$about[3]:'';?></td>
                    <td><?php echo ( ! empty ( $about[4] ) )?$about[4]:'';?></td>
                    <td><?php echo ( ! empty ( $about[5] ) )?$about[5]:'';?></td>
<!--                    <td><?php //echo $split[0]?></td>-->
        
<!--                    <td><?php //cho $row['counterUrl']?></td>-->
                   
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