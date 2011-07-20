<?php $this->load->view('header') ?>

  <!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header">Detail Pengguna</div>
		<div class="box-content">
      <?php echo anchor('myuser/user/view', $this->lang->line ( 'myuser_user_view_title' ), 'class="white button"'); ?>
       <br /><br />

        <?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <?php if (! (isset($isSuccess) && $isSuccess)) : ?>
    

        
            <?php echo form_open('myuser/user/edit/id/'.$dataEdit->userId.'/time/' . time(),array('name'=>'userEdit','id'=>'userEdit','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','kirim');?>
            <div class="width10 fl">
            	<label class="form-label"><?php echo $this->lang->line('myuser_user_username');?></label>
            </div>
            <div class="width90 fr">
	            <?php echo form_input(array('name'=>'username','id'=>'username','value'=>$dataEdit->userLogin, 'class'=> 'form-field half small')); ?>
            </div>
            <div class="clear"></div>
            <!-- NEw Line -->
            
            <div class="width10 fl">
            	<label class="form-label"><?php echo $this->lang->line('myuser_user_name');?></label>
            </div>
            <div class="width90 fr">
	            <?php echo form_input(array('name'=>'name','id'=>'name','value'=>$dataEdit->userName,  'class'=> 'form-field half small')); ?>
            </div>
            <div class="clear"></div>
            <!-- NEw Line -->   

            <div class="width10 fl">
            	<label class="form-label"><?php echo $this->lang->line('global_status');?></label>
            </div>
            <div class="width90 fr">
	            <div class="radiocheck">
	            <?php echo form_radio(array('name'=>'status','id'=>'status_1','value'=>'1','checked'=>$dataEdit->userStatus ==  1));?>
	            <label for='status_1' ><?php echo $this->lang->line('global_active')?></label>
				<?php echo form_radio(array('name'=>'status','id'=>'status_0','value'=>'0','checked'=>$dataEdit->userStatus ==  0));?>
				<label for='status_0' ><?php echo $this->lang->line('global_pending')?></label>
				</div>
            </div>
            <div class="clear"></div>
            <!-- NEw Line -->            
            <p></p>
            <div class="width10 fl">
            	
            </div>
            <div class="width90 fr">
	            <input type="submit" name="submit_save" value="<?php echo $this->lang->line('global_submit');?>" class="button themed" /> 
            </div>
            <div class="clear"></div>
            <!-- NEw Line -->   

        <?php endif ;?>
        		</div>
		</div>
	
	</div>


<?php $this->load->view('footer') ?>