<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('head'); ?>
<body>
<div id="wrapper">

		<ul id="topbar">
			<li class="logo"><a href="<?php echo site_url()?>"><img src="<?php echo theme_image_url('logomdis.png')?>" /></a></li>
			<li class="fr"><a class="button red fl" title="logout" href="<?php echo site_url('myuser/logout');?>"><span class="icon_text logout"></span>logout</a></li>
			<li class="s_1 fr"></li>
			<li class="fr"><?php echo anchor('myuser/user/profile/time/' . time(),getUserName(), 'class="button white fl"');?></li>
			<li class="fr"><a id="logged">Logged in as</a></li>
			<li class="clear"></li>
		</ul>
		<ul id="setting" class="sf-menu setting" style="position:absolute; top:100px;right:20px;z-index:999;">
		<?php if (isAccess('myuser','user') || isAccess('myuser','group')) : ?>
			<li class="current" style="margin-right:10px;"><a class="sf-with-ul" href="#"><span class="icon_text settings"></span>Administrasi</a>
				<ul>
                        <?php if (isAccess('myuser','user')) : ?>
						<li><?php echo anchor('myuser/user/view','Members','class="sf-with-ul"');?></li>
						<?php endif; ?>
						<?php if (isAccess('myuser','group')) : ?>
                        <li><?php echo anchor('myuser/group/view','Group','class="sf-with-ul"');?></li>
                        <?php endif;?>
                        <?php if (isAccess('myuser','userLog')) : ?>
                        <li><?php echo anchor('myuser/userLog/view','User Log','class="sf-with-ul"');?></li>
                        <?php endif;?>
					</ul>

			</li>
			<li>
				<a class="sf-with-ul" href="<?php echo site_url('help');?>"><span class="icon_text settings"></span>Bantuan</a>
			</li>
        <?php endif;?>	
		</ul>
		<ul id="navbar2" class="sf-menu sf-navbar sf-js-enabled">
			<?php $menu = $this->config->item('menu'); echo gen_menu($menu);?>
		</ul>

		<div class="clear"></div>	
		<div id="subnavbar">
	</div>
		
