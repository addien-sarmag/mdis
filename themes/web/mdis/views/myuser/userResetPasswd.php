<?php $this->load->view('header') ?>

  <!-- CONTENT -->
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content">
      <?php echo anchor('myuser/user/view', $this->lang->line ( 'myuser_user_view_title' ), 'class="white button"'); ?>
       <br /><br />

        <?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <?php if (! (isset($isSuccess) && $isSuccess)) : ?>
    

        
            <?php echo form_open('myuser/user/resetPasswd/id/'.$userDetail->userId.'/time/' . time(),array('name'=>'userAdd','id'=>'userAdd','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','kirim');?>
            <div class="width10 fl">
            	<label class="form-label"><?php echo $this->lang->line('myuser_user_username');?></label>
            </div>
            <div class="width90 fr">
	            <?php echo $userDetail->userLogin;?>
            </div>
            <div class="clear"></div>
            <!-- NEw Line -->
            
            <div class="width10 fl">
            	<label class="form-label"><?php echo $this->lang->line('myuser_user_passwd');?></label>
            	
            </div>
            <div class="width90 fr">
	           <?php echo form_input(array('name'=>'password','id'=>'password','value'=>'','class'=>'form-field half small', 'style'=> 'background:#ccc')); ?>
	           <input class="button themed" type="button" name="genPasswd" id="genPasswd" value="Generate Password" />
            </div>
            <div class="clear"></div>
            <!-- NEw Line -->   

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