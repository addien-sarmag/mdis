<?php $this->load->view('header'); ?>

<?php echo get_title(); ?>
<br /><br />
<?php if (isset($errorFull) && $errorFull) :?>
<?php echo $errorMessage; ?>
<?php else : ?>
<div class="notification warning"><?php echo $errorMessage; ?></div>
<?php endif; ?>

<?php $this->load->view('footer'); ?>