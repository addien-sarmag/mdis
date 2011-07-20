<?php $this->load->view('header'); ?>
<div id="content">
<div class="column full">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content">

        <?php if ($uri_to_assoc['tipe'] == 'inbox') : ?>
        <?php echo isAccess('myuser','message','message') ? anchor('myuser/message/view/tipe/outbox', '<span class="icon_text pack _40"></span>Outbox', 'class="button white fl" style="margin-left:10px;"') : ''; ?>
        <?php endif;?>
        <?php if ($uri_to_assoc['tipe'] == 'outbox') : ?>
        <?php echo isAccess('myuser','message','message') ? anchor('myuser/message/view/tipe/inbox', '<span class="icon_text pack _41"></span>Inbox', 'class="button white fl" style="margin-left:10px;"') : ''; ?>
        <?php endif;?>
        &nbsp;
		<div class="clear"></div>

			<?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>

			<?php echo form_open('myuser/message/add/tipe/'.$uri_to_assoc['tipe'].'/time/' . time(),array('name'=>'userAdd','id'=>'userAdd','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','kirim');?>


			<div class="width10 fl">
			<label class="form-label">Kepada</label>
			</div>
			<div class="width90 fr">
				<?php echo form_input(array('name'=>'username','id'=>'username','value'=>get_data($_POST,'username'), 'class'=> 'form-field half small', 'size' => '20')); ?>
			</div>
			<p>&nbsp;</p> 
			<div class="clear"></div>
			<!-- New line -->

			<div class="width10 fl">
			<label class="form-label">Judul</label>
			</div>
			<div class="width90 fr">
                <?php echo form_input(array('name'=>'title','id'=>'title','value'=>get_data($_POST,'title'), 'class'=> 'form-field half small', 'size' => '20')); ?>
			</div>
			<div class="clear"></div>

			<!-- New line -->

            <div class="width10 fl">
            <label class="form-label">Message</label>
            </div>
            <div class="width90 fr">
                <?php echo form_textarea(array('name'=>'message','id'=>'message','value'=>get_data($_POST,'message'), 'rows'=>'10','cols'=>90)); ?>
            </div>
            <div class="clear"></div>

            <!-- New line -->

			
			<div class="clear"></div>
			<input type="submit" name="submit_save" value="<?php echo $this->lang->line('global_submit');?>" class="button themed" />
			</form>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer'); ?>