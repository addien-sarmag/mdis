<?php $this->load->view('header'); ?>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content box-table">
		<br />
		<?php echo isAccess('myuser','group','add') ? anchor('myuser/group/add', '<span class="icon_text addnew"></span>Tambah Group', 'class="button white fr"') : ''; ?>
		<div class="clear"></div>

        <?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

		<table class="tablebox">
		<thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
		<tr>

	          <th><?php echo anchor_sort('myuser/group/view',$uri_to_assoc,'groupId','ID')?></td>
              <th><?php echo anchor_sort('myuser/group/view',$uri_to_assoc,'groupName',$this->lang->line('myuser_group_title'))?></td>
              <th><?php echo anchor_sort('myuser/group/view',$uri_to_assoc,'groupDesc',$this->lang->line('myuser_group_desc'))?></td>
              <th width="270"><?php echo $this->lang->line('global_action')?></td>
		</tr>
		</thead>
		<tbody>
            <?php $i = true ;?>
			<?php if ($listGroup) : foreach($listGroup as $row) : ?>
                    <?php $i = $i ? false : true ; ?>
                    <tr class="<?php echo $i ? 'even' : 'odd' ; ?>">
                        <td><?php echo $row['groupId']?></td>
                        <td><?php echo $row['groupName']?></td>
                        <td><?php echo $row['groupDesc']?></td>
                        <td align="center">
                            <?php echo isAccess('myuser','group','detail')  ? anchor('myuser/group/detail/id/'. $row['groupId'] .'/time/' . time(),$this->lang->line('global_detail'), 'class="button white"') : '';?>
                            <?php echo isAccess('myuser','group','edit')  ? anchor('myuser/group/edit/id/'. $row['groupId'] .'/time/' . time(),$this->lang->line('global_edit'), 'class="button white"') : '';?>
                            <?php echo isAccess('myuser','group','delete')  ? anchor('myuser/group/view/id/'. $row['groupId'] .'/action/delete/time/' . time(),$this->lang->line('global_delete'), 'class="button white"') : '';?>
                            &nbsp;
                        </td>
                    </tr>
                    <?php endforeach; endif;?>
		</tbody>
		</table>

		</div>
		</div>
	
	</div>

<?php $this->load->view('footer'); ?>