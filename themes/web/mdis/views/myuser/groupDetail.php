<?php $this->load->view('header') ?>

  <!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content">

      <?php echo anchor('myuser/group/view', $this->lang->line ( 'myuser_group_view' ), 'class="button white"'); ?>
       <br /><br />

        <?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
        <?php endif; ?>


			<div class="width10 fl">
				<label class="form-label">ID</label>
			</div>
			
			<div class="width90 fr">
				: <?php echo $groupDetail['groupId'];?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->
			
			<div class="width10 fl">
				<label class="form-label"><?php echo $this->lang->line('myuser_group_title');?></label>
			</div>
			
			<div class="width90 fr">
                : <?php echo $groupDetail['groupName'];?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->
			
			<div class="width10 fl">
				<label class="form-label"><?php echo $this->lang->line('myuser_group_desc');?></label>
			</div>
			
			<div class="width90 fr">
                : <?php echo $groupDetail['groupDesc'];?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->
			
			


            <?php if (isAccess('myuser','group','access')) : ?>
            <?php echo form_open('myuser/group/detail/id/'.$groupDetail['groupId'].'/time/' . time(),array('name'=>'userDetailAccessLocation','id'=>'userDetailAccessLocation','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','groupDetailAccess');?>

            <div class="width10 fl">
                <label class="form-label">Hak Akses</label>
            </div>
            
            <div class="width90 fr">
                <?php $module = $this->myindo_user->getListAccess();?>
                <?php foreach($module as $row) : ?>
                    <?php $controller = $this->myindo_user->getListAccess($row['accessId']); ?>
                    <?php if (!$controller) : ?>
                        <div><?php echo $row['accessDesc']?></div>
                        <?php $checked = in_array($row['accessId'],$listGroupAccess) ? true : false;?>
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_checkbox(array('name'=>'access[]','id'=>'access_' . $row['accessId'],'value'=>$row['accessId'],'checked' => $checked))?>
                        <label for="access_<?php echo $row['accessId']?>"><?php echo $row['accessDesc']?></label>
                        </div>
                    <?php else : ?>
                        <div><?php echo $row['accessDesc']?></div>
                        <?php if ($controller) foreach($controller as $row2) : ?>
                            <?php $action = $this->myindo_user->getListAccess($row2['accessId']); ?>
                            <?php $checked = in_array($row2['accessId'],$listGroupAccess) ? true : false;?>

                            <?php if (!$action) : ?>
                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_checkbox(array('name'=>'access[]','id'=>'access_' . $row2['accessId'],'value'=>$row2['accessId'],'checked' => $checked))?>
                                <label for="access_<?php echo $row2['accessId']?>"><?php echo $row2['accessDesc']?></label>
                                </div>
                            <?php else : ?>
                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['accessDesc']?></div>
                                <?php foreach($action as $row3): ?>
                                    <?php $checked = in_array($row3['accessId'],$listGroupAccess) ? true : false;?>
                                    
                                    <div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo form_checkbox(array('name'=>'access[]','id'=>'access_' . $row3['accessId'],'value'=>$row3['accessId'],'checked' => $checked))?>
                                        <label for="access_<?php echo $row3['accessId']?>"><?php echo $row3['accessDesc']?></label>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>
                            
                            
                        <?php endforeach; ?>
                    <?php endif;?>
                <?php endforeach;?>
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

            <?php echo form_open('myuser/group/detail/id/'.$groupDetail['groupId'].'/time/' . time(),array('name'=>'groupDetailUser','id'=>'groupDetailUser','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','groupDetailUser');?>
            <div class="width10 fl">
                <label class="form-label">Tambah User</label>
            </div>
            
            <div class="width90 fr">
                : 
                <?php echo form_input(array('name'=>'user','id'=>'user','value'=>'', 'class'=> 'form-field half small', 'size' => '20' )); ?>
                &nbsp;&nbsp;<?php echo form_submit('submitUser','Tambah','class="button themed"');?>
                
            </div>
            <p>&nbsp;</p> 
            <div class="clear"></div>
            </form>
            <!-- New line -->
            
            <br />
            <div class="box width40 fl">
                <div class="box-header">List User</div>
                <div class="box-content box-table">
                     <table width="100%">
                    <thead class="table-header">
                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php if ($listUser) : ?>
                    <?php $i = false ;?>
                    <tbody>
                        <?php foreach($listUser as $row) : ?>
                        <?php $i = $i ? false : true ;?>
                        <tr class="<?php echo $i ? 'odd' : 'even' ?>">
                            <td><?php echo $row['userId']?></td>
                            <td><?php echo $row['userLogin']?></td>
                            <td><?php echo $row['userName']?></td>
                            <td><?php echo anchor('myuser/group/detail/id/' . $groupDetail['groupId'] .'/action/delete/userId/' . $row['userId'] . '/time/' . time(),'delete');?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    <?php endif;?>
                </table>
                </div>
            </div>
            
            <p>&nbsp;</p> 
            <div class="clear"></div>
		</div>
		</div>
	
	</div>
	</div>
		</div>


<?php $this->load->view('footer') ?>