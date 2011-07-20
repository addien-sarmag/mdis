<?php $this->load->view('header'); ?>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content box-table">
		<br />
		<?php echo isAccess('myuser','user','add') ? anchor('myuser/user/add', '<span class="icon_text addnew"></span>Tambah Pengguna', 'class="button white fr"') : ''; ?>
		<div class="clear"></div>

        &nbsp;&nbsp; Group : <?php echo form_dropdown('group',$group_list_myOptions,$uri_to_assoc['groupId'],'id="groupId" class="modalLoader"');?>
		&nbsp;&nbsp; Login Letter : <?php echo form_dropdown('letter',$listLetter,$uri_to_assoc['letter'],'id="letter" class="modalLoader"');?>
		&nbsp;&nbsp; Status : <?php echo form_dropdown('userStatus',$listStatus,$uri_to_assoc['userStatus'],'id="userStatus" class="modalLoader"');?>
        <br /><br />

        <?php echo $paging?>
		<table class="tablebox">
		<thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
		<tr>

	          <th><?php echo anchor_sort('myuser/user/view',$uri_to_assoc,'userId',$this->lang->line('myuser_user_id'))?></td>
              <th><?php echo anchor_sort('myuser/user/view',$uri_to_assoc,'userLogin',$this->lang->line('myuser_user_login'))?></td>
              <th><?php echo anchor_sort('myuser/user/view',$uri_to_assoc,'userName',$this->lang->line('myuser_user_name'))?></td>
              <th><?php echo anchor_sort('myuser/user/view',$uri_to_assoc,'userStatus',$this->lang->line('global_status'))?></td>
              <th width="270"><?php echo $this->lang->line('global_action')?></td>
		</tr>
		</thead>
		<tbody>
            <?php $i = true ;?>
			<?php if ($dataView) : foreach($dataView as $row) : ?>
                    <?php $i = $i ? false : true ; ?>
                    <tr class="<?php echo $i ? 'even' : 'odd' ; ?>">
                        <td><?php echo $row['userId']?></td>
                        <td><?php echo $row['userLogin']?></td>
                        <td><?php echo $row['userName']?></td>
                        <td><?php echo ($row['userStatus'] == 1 ) ? $this->lang->line('global_active') : (($row['userStatus'] == 2 ) ? $this->lang->line('global_delete') : $this->lang->line('global_pending') ) ; ?></td>
                        <td align="center">
                            <?php echo isAccess('myuser','user','detail')  ? anchor('myuser/user/detail/id/'. $row['userId'] .'/time/' . time(),$this->lang->line('global_detail'), 'class="button white"') : '';?>
                            <?php echo isAccess('myuser','user','pertanyaan')  ? anchor('myuser/user/pertanyaan/id/'. $row['userId'] .'/time/' . time(), 'pertanyaan', 'class="button white"') : '';?>
                            <?php echo isAccess('myuser','user','edit')  ? anchor('myuser/user/edit/id/'. $row['userId'] .'/time/' . time(),$this->lang->line('global_edit'), 'class="button white"') : '';?>
                            &nbsp;
                        </td>
                    </tr>
                    <?php endforeach; endif;?>
		</tbody>
		</table>

		<div id="paging">
                <?php echo $paging;?>
            </div>
		</div>
		</div>
	
	</div>
<script type="text/javascript">
<!--
jQuery(document).ready(function($){

    var groupId		= $('#groupId').val() 		? $('#groupId').val() : '0'; 
    var letter  	= $('#letter').val() 		? $('#letter').val() : '0';
    var userStatus	= $('#userStatus').val()    ? $('#userStatus').val() : '0';
 
    groupChange = function() {
        if (this.value)
            document.location.href = site_url('myuser/user/view/groupId/' + this.value + '/letter/' + letter + '/userStatus/' + userStatus + '/page/' + '0');
        else
        	document.location.href = site_url('myuser/user/view/groupId/' + groupId + '/letter/' + letter + '/userStatus/' + userStatus + '/page/' + '0');
    };
    $('#groupId').bind('change',groupChange);
    letterChange = function() {
        if (this.value)
            document.location.href = site_url('myuser/user/view/groupId/' + groupId + '/letter/'+ this.value +'/userStatus/' + userStatus + '/page/' + '0');
        else
            document.location.href = site_url('myuser/user/view/groupId/' + groupId + '/letter/' + letter + '/userStatus/' + userStatus + '/page/' + '0');
    };
    $('#letter').bind('change',letterChange);
    userStatusChange = function() {
        if (this.value)
            document.location.href = site_url('myuser/user/view/groupId/' + groupId + '/letter/' + letter + '/userStatus/'+ this.value +'/page/' + '0');
        else
            document.location.href = site_url('myuser/user/view/groupId/' + groupId + '/letter/' + letter + '/userStatus/' + userStatus + '/page/' + '0');
    };
    $('#userStatus').bind('change',userStatusChange);
});
//-->
</script>
<?php $this->load->view('footer'); ?>