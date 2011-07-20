<?php $this->load->view('header'); ?>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content box-table">
		<br />

        <?php if ($uri_to_assoc['tipe'] == 'inbox') : ?>
        <?php echo isAccess('myuser','message','message') ? anchor('myuser/message/view/tipe/outbox', '<span class="icon_text pack _40"></span>Outbox', 'class="button white fl" style="margin-left:10px;"') : ''; ?>
        <?php endif;?>
        <?php if ($uri_to_assoc['tipe'] == 'outbox') : ?>
        <?php echo isAccess('myuser','message','message') ? anchor('myuser/message/view/tipe/inbox', '<span class="icon_text pack _41"></span>Inbox', 'class="button white fl" style="margin-left:10px;"') : ''; ?>
        <?php endif;?>
        &nbsp;

        <?php echo isAccess('myuser','message','add') ? anchor('myuser/message/add/tipe/' . $uri_to_assoc['tipe'], '<span class="icon_text addnew"></span>Post Message', 'class="button white fr"') : ''; ?>
		<div class="clear"></div>

		<table class="tablebox">
		<thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
		<tr>

	          <th width="5%">&nbsp;</td>
              <th width="60%">Judul</td>
              <th width="20%">&nbsp;</td>
              <th width="15%">&nbsp;</td>
		</tr>
		</thead>
		<tbody>
            <?php $i = true ;?>
			<?php if ($listMessage) : foreach($listMessage as $row) : ?>
                    <?php $i = $i ? false : true ; ?>
                    <tr class="<?php echo $i ? 'even' : 'odd' ; ?>">
                        <td>
                            <?php if ($row['userMessageStatus']) : ?>
                            <span class="icons_pack"><span class="icon_ pack _37"></span></span>
                            <?php else : ?>
                            <span class="icons_pack"><span class="icon_ pack _38"></span></span>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if ($row['userMessageStatus']) : ?>
                            <strong><?php echo anchor('myuser/message/detail/tipe/'.$row['userMessageTipe'].'/id/' . $row['userMessageId'],$row['userMessageTitle']);?></strong>
                            <?php else : ?>
                            <?php echo anchor('myuser/message/detail/tipe/'.$row['userMessageTipe'].'/id/' . $row['userMessageId'],$row['userMessageTitle']);?>
                            <?php endif;?>
                            <br />
                            <?php if ($row['userMessageTipe'] == 'inbox') : ?>
                            <?php echo $row['userNameFrom']?>
                            <?php else : ?>
                            <?php echo $row['userNameTo']?>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php echo date('d-m-Y',SQLTimeToMKTime($row['userMessageCreateTime']));?>
                            <br />
                            <?php echo date('H:i:s',SQLTimeToMKTime($row['userMessageCreateTime']));?>
                        </td>
                        <td align="center">
                            <?php echo anchor('myuser/message/view/tipe/'.$row['userMessageTipe'].'/page/'.$uri_to_assoc['page'].'/action/delete/id/'. $row['userMessageId'] .'/time/' . time(), '<span class="icon_text cancel"></span>Hapus', 'class="button white fl" style="margin-left:10px;"') ?>
                            &nbsp;
                        </td>
                    </tr>
                    <?php endforeach; endif;?>
		</tbody>
		</table>
		<div id="paging">
                <?php echo $pages_html;?>
            </div>
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer'); ?>