<?php $this->load->view('header'); ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script>
$(function() {
	$("#name").autocomplete({
		source: function(request, response) {
			$.ajax({
				url: site_url('myuser/user/userJSON'),
				type: 'post',
				dataType: "json",
				data: {
					dtype: 'json',
						search: $('input[name=name]').val(),
					limit: 20
				},

				success: function(data) {
				response($.map(data.data, function(item) {
					return {
						label: item.nama_lengkap,
						value: item.nama_lengkap,
						sj_nama_lengkap: item.nama_lengkap,
						sj_nip: item.nip
				   	}
			    }))
			}
			})
		},
		
		minLength: 2,
		select: function(event, ui) {
			$('input[name=name]').val(ui.item.sj_nama_lengkap);
			$('input[name=nip]').val(ui.item.sj_nip);
			//log(ui.item ? ("Selected: " + ui.item.label) : "Nothing selected, input was " + this.value);
		},
		open: function() {
			$('input[name=name]').val('');
			$(this).removeClass("ui-corner-all").addClass("ui-corner-top");
		},
		close: function() {
			$(this).removeClass("ui-corner-top").addClass("ui-corner-all");
		}
  	});
});
</script>
<div id="content">
<div class="column full">
		
	<div class="box">
	<div class="box-header"><?php echo get_title();?></div>
	<div class="box-content">

	<?php echo anchor('myuser/user/view', $this->lang->line ( 'myuser_user_view_title' ), 'class="button white fl"'); ?>
	<div class="clear"></div>


	<a name="top"></a>
	<div id="cms_status" style="display:none"></div>
	<?php if (isset($errorMessage)) : ?>
	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	<?php endif; #'myuser/user/add/time/' . time()?>

	<?php echo form_open('myuser/user/add/time/'.time(), array('name'=>'userAdd','id'=>'userAdd','method'=>'post','class'=>'frModalLoad')); ?>
	<?php echo form_hidden('kirim','kirim');?>


	<div class="width10 fl">
	<label class="form-label"><?php echo $this->lang->line('myuser_user_username');?></label>
	</div>
	<div class="width90 fr">
	<?php echo form_input(array('name'=>'username','id'=>'username','value'=>get_data($_POST,'username'), 'class'=> 'form-field half small', 'size' => '20')); ?>
	<?php //echo get_help('myuser_username')?>
	</div>
	<p>&nbsp;</p> 
	<div class="clear"></div>
	<!-- New line -->

	<div class="width10 fl">
	<label class="form-label"><?php echo $this->lang->line('myuser_user_passwd');?></label>
	</div>
	<div class="width90 fr">
	<?php echo form_input(array('name'=>'password','id'=>'password','value'=>'',/*'readonly'=>'readonly'*/ 'class'=> 'form-field half small', 'size' => '20' )); ?>
	<input type="button" name="genPasswd" class="button themed" id="genPasswd" value="Generate Password" />
	<?php //echo get_help('myuser_password')?>

	</div>
	<div class="clear"></div>

	<!-- New line -->

	<div class="width10 fl">
	<label class="form-label"><?php echo $this->lang->line('myuser_user_name');?></label>
	</div>
	<div class="width90 fr">
	<?php echo form_input(array('name'=>'name','id'=>'name','value'=>get_data($_POST,'name'), 'class'=> 'form-field half small', 'size' => '20' )); ?>
	<input type="hidden" name="nip" value="<?echo get_data($_POST,'nip')?>">
	</div>

	<div class="clear"></div>
	<div class="width10 fl">
	<label class="form-label"><?php echo $this->lang->line('user_work');?></label>
	</div>

	<div class="width90 fr">
		<?$options = array(
			''  => '-Select-',
			'mdis'    => 'MDIS',
			'nkb'   => 'NKB'
			);
		echo form_dropdown('kantor', $options, 'large');?>
	</div>
	<div class="clear"></div>

	<div class="clear"></div>
	<div class="width10 fl">
	<label class="form-label"><?php echo $this->lang->line('global_grup');?></label>
	</div>

	<div class="width90 fr">
	<select name="group" >
		<option value="" selected="selected">-Select-</option>
		<?foreach($listGroup as $vals){
			echo '<option value='.$vals->groupId.'>'.$vals->groupName.'</option>';
		}?>
	</select>
	</div>
	<div class="clear"></div>
	
	<div class="width10 fl">
	<label class="form-label"><?php echo $this->lang->line('global_status');?></label>
	</div>
	<div class="width90 fr">
	<div class="radiocheck">
	<?php echo form_radio(array('name'=>'status','id'=>'status_1', 'value'=>'1','checked'=>get_data($_POST,'status') ==  1));?>
	<label for='status_1'><?php echo $this->lang->line('global_active')?></label>
	<?php echo form_radio(array('name'=>'status','id'=>'status_0','value'=>'0','checked'=>get_data($_POST,'status') ==  0));?>
	<label for='status_0'><?php echo $this->lang->line('global_pending')?></label>

			</div>
			 </div>
			
			<div class="clear"></div>
			<input type="submit" name="submit_save" value="<?php echo $this->lang->line('global_submit');?>" class="button themed" />
			</form>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer'); ?>