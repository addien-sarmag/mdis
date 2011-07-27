<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Referensi </div>
		<div class="box-content box-table">
		<br />
		
		<div class="clear"></div>
		<ul  style="margin-bottom: 10px;margin-left: 10px; height: 200px;"> 
					<li style="float:left; "><?php echo  isAccess('pegawai','mitraKerja','view') ? anchor('pegawai/mitraKerja/view', '<span class="icon_text preview"></span>Mitra kerja', 'class="button  themed"') : "" ;?></li>
					<li style="float:left; "><?php echo  isAccess('pegawai','jabatan','view') ? anchor('pegawai/jabatan/view', '<span class="icon_text preview"></span>Jabatan', 'class="button  themed"') : "" ;?></li>
					<li style="float:left; "><?php echo  isAccess('pegawai','unit','view') ? anchor('pegawai/unit/view', '<span class="icon_text preview"></span>Unit', 'class="button  themed"') : "" ;?></li>
					<li style="float:left; "><?php echo  isAccess('pegawai','ring','view') ? anchor('pegawai/ring/view', '<span class="icon_text preview"></span>Ring', 'class="button  themed"') : "" ;?></li> 
					<li style="float:left; "><?php echo  isAccess('pegawai','vacancy','view') ? anchor('pegawai/vacancy/view', '<span class="icon_text preview"></span>Lowongan', 'class="button  themed"') : "" ;?></li> 
		 
			 
		</ul style="clear:both;">
        	
		</div>
		</div>
	
	</div>

<?php $this->load->view('footer') ?>