<div class="clear"></div>
</div>
	<div id="footer">
      <p class="copy fl">Copyright &copy; 2011 - PT. Merah Delima Indah Sentosa</p>
      <div class="statistik fr">User Online (<?php echo getUserOnline()?> User) | Hit (<?php echo $this->counter->getHits();?> Hit)</div>
    </div>

<!-- <a href="javascript:modalLoader();">2010</a>  -->

<div style="display:none;">
    <div id="divFancyBox" class="loader">
        <div class="fancyBoxContent">
        <div class="logooverlay"><img src="<?php echo theme_image_url('logooverlay.png')?>" /></div>
        <div class="processbg">
        	<div class="imgoverlay">
        		<img src="<?php echo theme_image_url('loader-kesad.gif');?>" class="loading" title="Processing Data" />
        	</div>
        	<div class="overlaytext"><p>Mohon tunggu data sedang di proses...</p></div>
        </div>
        </div>
    </div>
</div>

</body>
</html>
<!-- <?php echo $this->input->server('SERVER_ADDR');?> <?php echo $this->config->item('server_id'); ?> {elapsed_time} {memory_usage} -->