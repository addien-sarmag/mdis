<?php $this->load->view('header-login') ?>

 <div id="content-login">
	<div class="logo-login"></div>
	<h2 align="center" class="header-login">
		<span class="fr"><a href="<?php echo base_url()?>">&nbsp;</a></span>Login	</h2>
  <?php if ($is_success) : ?>
    <div id="box-login">
        <?php echo $errors?>
    </div>
    <?php else : ?>
    <div id="box-login">
    
	<form method="post" action="<?php echo site_url('myuser/login/index/time/' . time()) ?>" class="login frModalLoad">
	<?php echo form_hidden('kirim2','kirim2')?>
		<p>
			<label class="req"> username </label>
			<br/>
			<input type="text" name="username" value="<?php echo $isiUser?>" id="username" class="usernamelogin" readonly="true"/>
		</p>
		<p>
			<label class="req"> password </label>
			<br/>
			<input type="password" name="password" value="<?php echo $isiPass?>" id="password"  class="passwordlogin" readonly="true"/>
		</p>
		<?php $rand_keys = array_rand($listPertanyaan, 1);?>
		<p>
			<label class="req"> <?php echo $listPertanyaan[$rand_keys];?></label>
			<br/>
			<?php echo form_hidden('Pertanyaan', $rand_keys);?>
			<input type="password" name="passwordkedua" value="" id="password"  class="passwordlogin"/>
			<?php $tes = 'ini';?>
		</p>
		<!-- <p class="fl">
			<input type="checkbox" name="remember" value="1" id="remember"/>
			<label class="rem"> Remember me </label>
		</p> -->
		<!--p class="fl"><a class="forgot" href="#"> Forgot password? </a> </p>-->
		<p class="fr">
			<input type="submit" value="Login" class="button themed" id="login"/>
		</p>
		
		<div class="clear"></div>
	</form>
	</div>
    <br />
	<?php if (isset($errors) && $errors): ?>
	<?php echo $errors?>
	<?php endif;?>
    <?php endif;?>
	</div>
	<div class="clear" style="clear:both;"></div>
	<br />
<?php $this->load->view('footer-login') ?>