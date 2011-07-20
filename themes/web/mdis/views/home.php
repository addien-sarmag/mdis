<?php $this->load->view('header'); ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<?php /*
<script>
	$(function() {
		$( "#dialog" ).dialog();
	});
	</script>



          <div class="demo">

            <?php  if(!empty($listCustomer)) {?>
<div id="dialog" title="Tanggal Jatuh Tempo Piutang">
	
	
<table>
<tr>
	<td width="150">Invoice Customer  </td>
	<td width="150"> Jatuh Tempo <?php foreach ($listCustomer as $row) { ?>  </td>
</tr>

<tr>
	<td> <?php echo $row['invoiceKode'];?> </td>
	<td> <?php echo $row['settingAgingPiutangUsiaEnd'];?> <?php } ?></td>
</tr>



</table>	

<?php } ?>
</div>

*/?>

	<div id="content">
	<?php if (isAccess('myuser','message','view')) : ?>
	<?php $newMessage = getCountNewMessage();?>
	<?php if ($newMessage) : ?>
	<a href="<?php echo site_url('myuser/message/view/tipe/inbox');?>">
	<span class="notification new-mail"><strong><?php echo $newMessage;?> Pesan Baru Diterima</strong></span>
    </a>
	<?php endif;?>
	<?php endif;?>
	
	
	<div class="column full ui-sortable">
		<div class="width30 fr">
			<div class="box-header">Informasi User</div>
			<div class="box-content">
			 <label class="form-label">User Name : <?php echo getUserLogin()?></label>
			 <label class="form-label">Nama : <?php echo getUserName()?></label>
             <label class="form-label">IP Address : <?php echo $this->input->ip_address();?></label>
			 <?php $lastLogin = getUserLastLogin(); ?>
			 <?php if ($lastLogin) : ?>
			 <label class="form-label">Last Login : <?php echo date('d, M Y H:i:s',SQLTimeToMKTime($lastLogin['userLoginCreateTime']));?></label>
             <label class="form-label">Last Login IP : <?php echo $lastLogin['userLoginIp'];?></label>
			 <?php endif;?>
			</div>
			<br />
            <div class="box-header"><?php echo anchor('myuser/user/online','Online User');?></div>
            <div class="box-content box-table">
                 <table width="100%">
                    <thead class="table-header">
                        <tr>
                            <th>User Name</th>
                            <th>IP Address</th>
                        </tr>
                    </thead>
                    <?php $i = true;?>
                    <?php if ($listOnline) : ?>
                    <tbody>
                    <?php foreach ($listOnline as $row): ?>
                    <?php $i = $i ? false : true;?>
                        <tr class="<?php echo $i ? 'even' : 'odd'?>">
                            <td><?php echo $row['userLogin']?></td>
                            <td><?php echo $row['userIP']?></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                    <?php endif;?>
                 </table>
            </div>	
            
        </div>
	</div>
            	
			<!-- 
			<h2 class="box-header">Quick Links</h2>
			<div class="box-content">
			<div class="clear"></div>
				<div class="shadowpar">
					<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_1.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_2.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_3.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_4.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_5.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_6.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_7.jpg');?>"></a></div>
						<div class="pixshadow"><a href="#"><img width="36" height="36" alt="picture" src="<?php echo theme_image_url('icon_8.jpg');?>"></a></div>
						<div class="clear"></div>
				</div>
			</div>
			
		-->	

			
	<!-- 		
			<br />
			<div class="box-header">Event</div>
			<div class="box-content">
			<div id="datepicker"></div>
			</div>
			
			<br />
			<h2 class="box-header">Time</h2>
			<div class="box-content"></div>
			
		</div>

		<div class="width70 fl">
			<h2 class="box-header">Seleksi Calon Perwira 2010</h2>
			<div class="box-content box-table">
				<table class="tablebox">
					<thead class="table-header">
					<tr>
					
					<th>Komando Utama</th>
					<th>Peserta</th>
					<th>Lulus</th>
					<th>Tidak Lulus</th>
					</tr>
					</thead>
					<tbody>
					<tr class="odd">
						<td>Kodam I/BB</td>
						<td>120</td>
						<td>100</td>
						<td>20</td>
					</tr>
					
					<tr class="even">
						<td>Kodam II/Swj</td>
						<td>135</td>
						<td>130</td>
						<td>5</td>
					</tr>

                    <tr class="odd">
                        <td>Kodam III/Slw</td>
                        <td>147</td>
                        <td>132</td>
                        <td>15</td>
                    </tr>

                    <tr class="even">
                        <td>Kodam IV/Dip</td>
                        <td>151</td>
                        <td>121</td>
                        <td>30</td>
                    </tr>

                    <tr class="odd">
                        <td>Kodam V/Brw</td>
                        <td>121</td>
                        <td>110</td>
                        <td>11</td>
                    </tr>

                    <tr class="even">
                        <td>Kodam VI/Tpr</td>
                        <td>135</td>
                        <td>107</td>
                        <td>28</td>
                    </tr>

                    <tr class="odd">
                        <td>Kodam VII/Wrb</td>
                        <td>123</td>
                        <td>98</td>
                        <td>25</td>
                    </tr>

                    <tr class="even">
                        <td>Kodam IX/Udy</td>
                        <td>134</td>
                        <td>121</td>
                        <td>13</td>
                    </tr>
                    <tr class="odd">
                        <td>Kodam Iskandar Muda</td>
                        <td>132</td>
                        <td>103</td>
                        <td>29</td>
                    </tr>
                    <tr class="even">
                        <td>Kodam Jaya</td>
                        <td>140</td>
                        <td>131</td>
                        <td>9</td>
                    </tr>
                    <tr class="odd">
                        <td>Kodam XVI/Ptm</td>
                        <td>134</td>
                        <td>103</td>
                        <td>31</td>
                    </tr>
                    <tr class="even">
                        <td>Kodam XVII/Cen</td>
                        <td>132</td>
                        <td>107</td>
                        <td>25</td>
                    </tr>
					</tbody>
				</table>
			</div>
			<br />
			
			<h2 class="box-header">Personel</h2>
			<div class="box-content box-table">
				<table class="tablebox">
					<thead class="table-header">
					<tr>
						
						<th>Komando Utama</th>
						<th>Laki - Laki</th>
						<th>Perempuan</th>
					</tr>
					</thead>
					<tbody>
                    <tr class="odd">
                        <td>Kodam I/BB</td>
                        <td>1234</td>
                        <td>234</td>
                    </tr>
                    
                    <tr class="even">
                        <td>Kodam II/Swj</td>
                        <td>1345</td>
                        <td>324</td>
                    </tr>	
					</tbody>
				</table>
			</div>
			
			
			<br />
			
			
		</div>
		
	</div>
	-->

<?php $this->load->view('footer'); ?>