<?php $this->load->view('header') ?>

  <!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content">

      <?php echo anchor('myuser/user/view', $this->lang->line ( 'myuser_user_view_title' ), 'class="button white"'); ?>
       <br /><br />

        <?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
        <?php endif; ?>


			<div class="width10 fl">
				<label class="form-label">ID</label>
			</div>
			
			<div class="width90 fr">
				: <?php echo $userDetail->userId;?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->
			
			<div class="width10 fl">
				<label class="form-label">Username</label>
			</div>
			
			<div class="width90 fr">
				:  <?php echo $userDetail->userLogin;?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->
			
			<div class="width10 fl">
				<label class="form-label">Nama</label>
			</div>
			
			<div class="width90 fr">
				:  <?php echo $userDetail->userName;?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->
			
			<div class="width10 fl">
				<label class="form-label">Status</label>
			</div>
			
			<div class="width90 fr">
				:	<?php if ($userDetail->userStatus) : ?>
                    <?php echo $this->lang->line('global_active');?>
                    <?php else : ?>
                    <?php echo $this->lang->line('global_pending');?>
                    <?php endif; ?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->


            <?php if (isAccess('myuser','user','access')) : ?>
            <?php echo form_open('myuser/user/detail/id/'.$userDetail->userId.'/time/' . time(),array('name'=>'userDetailAccessLocation','id'=>'userDetailAccessLocation','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','userDetailAccess');?>

            <div class="width10 fl">
                <label class="form-label">Hak Akses</label>
            </div>
            
            <div class="width90 fr">
            
            	<ul id='tree'>
                <?php $module = $this->myindo_user->getListAccess();?>
                <?php foreach($module as $row) : ?>
                    <?php $controller = $this->myindo_user->getListAccess($row['accessId']); ?>
                    <?php if (!$controller) : ?>
                        <li><b><?php echo $row['accessDesc']?></b><br />
                        <?php $checked = in_array($row['accessId'],$listUserAccess) ? true : false;?>
                        &nbsp;&nbsp;<?php echo form_checkbox(array('name'=>'access[]','id'=>'access_' . $row['accessId'],'value'=>$row['accessId'],'checked' => $checked))?>
                        <?php echo $row['accessDesc']?>
                        </li>
                    <?php else : ?>
                        
						<li>
		            	<b><?php echo $row['accessDesc']?></b>

						<ul>
                        <?php if ($controller) foreach($controller as $row2) : ?>
                            <?php $action = $this->myindo_user->getListAccess($row2['accessId']); ?>
                            <?php $checked = in_array($row2['accessId'],$listUserAccess) ? true : false;?>

                            <?php if (!$action) : ?>
                                <li>&nbsp;&nbsp;<?php echo form_checkbox(array('name'=>'access[]','id'=>'access_' . $row2['accessId'],'value'=>$row2['accessId'],'checked' => $checked))?>
                                <?php echo $row2['accessDesc']?>
                                </li>
                            <?php else : ?>
                                <li><b><?php echo $row2['accessDesc']?></b><br />
                                
                                <ul>
                                <?php foreach($action as $row3): ?>
                                    <?php $checked = in_array($row3['accessId'],$listUserAccess) ? true : false;?>
                                    
                                    <li>
                                        <?php echo form_checkbox(array('name'=>'access[]','id'=>'access_' . $row3['accessId'],'value'=>$row3['accessId'],'checked' => $checked))?>
                                        <?php echo $row3['accessDesc']?>
                                    </li>
                                <?php endforeach;?>
                                </ul>
                                </li>
                            <?php endif;?>
                            
                        <?php endforeach; ?>
                        </ul>
                        </li>
                        
                    <?php endif;?>
                <?php endforeach;?>
                </ul>
            </div>

            <p>&nbsp;</p> 
            <div class="clear"></div>
            <div class="width10 fl"></div>
            <div class="width90 fr">
                &nbsp;&nbsp;<?php echo form_submit('submitAccess','Update Hak Access','class="button themed"');?>
            </div>          
            <!-- New line -->
            <div class="clear"></div>
            </form>
            <?php endif;?>            
            
		</div>
		</div>
	
	</div>
	</div>
		</div>

<link href="<?php echo base_url() ?>themes/web/ditajaya/css/jquery.treeview.css" type="text/css" rel="stylesheet" />
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/libs/jquery/mod/web/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript">
<!--
jQuery(document).ready(function($){
	kotamaChange = function() {
		$('#userDetailLocation').submit();
	};
	$('#userDetailLocation select[name=kotama]').bind('change',kotamaChange);
	$('#userDetailLocation select[name=satuan]').bind('change',kotamaChange);
	$('#userDetailLocation select[name=unit]').bind('change',kotamaChange);
	$('#userDetailLocation select[name=bagian]').bind('change',kotamaChange);
	
	kotamaAccessChange = function() {
		$('#userDetailAccessLocation').submit();
	};
	$('#userDetailAccessLocation select[name=kotamaAccess]').bind('change',kotamaAccessChange);
	$('#userDetailAccessLocation select[name=satuanAccess]').bind('change',kotamaAccessChange);
	$('#userDetailAccessLocation select[name=unitAccess]').bind('change',kotamaAccessChange);
	$('#userDetailAccessLocation select[name=bagianAccess]').bind('change',kotamaAccessChange);

	$("#tree").treeview({
		collapsed: true,
		animated: "fast",
		control:"#sidetreecontrol",
		persist: "location"
	});
});
//-->
</script>

<?php $this->load->view('footer') ?>