<?php $this->load->view('header'); ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content">

		<?php echo isAccess('myuser','group','view') ? anchor('myuser/group/view', $this->lang->line ( 'myuser_group_view' ), 'class="button white fl"') : ''; ?>
		<div class="clear"></div>

        	<a name="top"></a>
			<div id="cms_status" style="display:none"></div>
			<?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>

			<?php echo form_open('myuser/group/edit/id/'.$groupDetail['groupId'].'/time/' . time(),array('name'=>'groupEdit','id'=>'groupEdit','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','kirim');?>


			<div class="width10 fl">
			<label class="form-label"><?php echo $this->lang->line('myuser_group_title');?></label>
			</div>
			<div class="width90 fr">
				<?php echo form_input(array('name'=>'title','id'=>'title','value'=>get_data($groupDetail,'groupName'), 'class'=> 'form-field half small', 'size' => '20')); ?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->


			<div class="width10 fl">
			<label class="form-label"><?php echo $this->lang->line('myuser_group_desc');?></label>
			</div>
			<div class="width90 fr">
			 <?php echo form_input(array('name'=>'desc','id'=>'desc','value'=>get_data($groupDetail,'groupDesc'), 'class'=> 'form-field half small', 'size' => '20' )); ?>
			 </div>
			
			<div class="clear"></div>
			<input type="submit" name="submit_save" value="<?php echo $this->lang->line('global_submit');?>" class="button themed" />
			</form>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer'); ?>