<?php $this->load->view('header'); ?>
<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header"><?php echo get_title();?></div>
		<div class="box-content box-table">
		<br />

    	<a name="top"></a>
      	<div id="cms_status" style="display:none"></div>
		<table class="tablebox">
		<thead class="table-header" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
		<tr>

              <th>User</td>
              <th>IP Address</td>
		</tr>
		</thead>
		<tbody>
            <?php $i = true ;?>
			<?php if ($listOnline) : foreach($listOnline as $row) : ?>
                    <?php $i = $i ? false : true ; ?>
                    <tr class="<?php echo $i ? 'even' : 'odd' ; ?>">
                        <td><?php echo $row['userLogin']?></td>
                        <td><?php echo $row['userIP']?></td>
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