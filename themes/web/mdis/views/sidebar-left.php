<?php if (userRegistered() && !(isset($isLogout) && $isLogout)) : ?>
		<div id="sidebar">
			<ul id="pagesnav">
			        <li><a href="<?php echo site_url('personal/user/dashboard'); ?>" class="icn_manage_pages">Dashboard</a></li>
			        <li><a href="<?php echo site_url('wbs/ticket/listUser'); ?>" class="icn_edit_pages">Listing</a></li>
			        <li><a href="<?php echo site_url('wbs/ticket/submitUser'); ?>" class="icn_edit_comments">Submit Report</a></li>
                    <li><a href="<?php echo site_url('personal/user/chPasswd'); ?>" class="icn_chpasswd"><?php echo $this->lang->line('user_chpasswd'); ?></a></li>
			        <li><a href="<?php echo site_url('personal/user/logout'); ?>" class="icn_logout"><?php echo $this->lang->line('user_logout'); ?></a></li>
			</ul>
		</div>
<?php else : ?>
			<!-- Sidebar Start -->
            <div id="sidebar">
	            <div class="grid_3 widget"> <a href="<?php echo base_url(); ?>">Indonesia</a> | <a href="<?php echo base_url() . 'en'; ?>">English</a> </div>
	            <div class="grid_3 widget">
	                <a href="<?php echo site_url('wbs/ticket/confirm');?>"  class="button red medium" style="color:#FFFFFF;"><?php echo $this->lang->line('report_submit');?></a>
	            </div>
            
            	<div class="grid_3 widget" style="width:220px;">
                	<div class="box-header">Ticket Id</div>
                    <div class="box">
	                    <form id="ticketAnonymouse" method="post" action="<?php echo site_url('wbs/ticket/viewAnonymous/time/' . time()); ?>">
	                        <input type="text" name="identifier" class="login" size=14 />
	                        <br />
	                        <br />
	                        <input type="submit" value="Simpan" class="button medium"  />
	                    </form>
                    </div>
                </div>
                
                <div class="grid_3 widget">
                	<div class="notification tip">
						Pelapor dapat mengirim laporan dengan melakukan pendaftaran terlebih dahulu 
						atau tidak (anonymous)
                    	
                        <ul class="list" style="margin-left:-35px;">
                        	<li><a href="<?php echo site_url('pages/about-us#perlindunganpelapor'); ?>">Perlindungan Pelapor</a></li>
                        	<li><a href="<?php echo site_url('pages/about-us#pelaporan'); ?>">Pelaporan</a></li>
                        	<li><a href="<?php echo site_url('pages/about-us#investigasi'); ?>">Investigasi</a></li>
                        	<li><a href=#>Sanksi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Sidebar end -->
<?php /* 
        <div id="sidebar">
            <div class="widget"> <a href="<?php echo base_url(); ?>">Indonesia</a> | <a href="<?php echo base_url() . 'en'; ?>">English</a> </div>
            <div class="widget">
                <a href="<?php echo site_url('wbs/ticket/confirm');?>"  class="button red medium" style="color:#FFFFFF;"><?php echo $this->lang->line('report_submit');?></a>
            </div>
            <div class="grid_2 widget">
                <div class="box-header">View Report</div>
                <div class="box">
                    <form id="ticketAnonymouse" method="post" action="<?php echo site_url('wbs/ticket/viewAnonymous/time/' . time()); ?>">
                        <label>Ticket ID</label>
                        <input type="text" name="identifier" class="login" size=14 />
                        <br />
                        <br />
                        <input type="submit" value="Simpan" />
                    </form>
                </div>
            </div>
            <div class="grid_2 widget">
                    <div class="notification tip">User can be anonymous or register first in submit report </div>
            </div>
        </div>
*/
?>

<?php endif; ?>
