<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo get_title(false) ? get_title(false) : $this->lang->line('global_title'); ?></title>
    <?php //echo favicon_url(); ?>
    <?php echo get_content('head_meta');?>

    <link rel="stylesheet" href="<?php echo get_jqueryui_theme(); ?>" type="text/css" media="all" />
    <?php get_js('plugin_css'); ?>

    <?php //echo css_url('960.css'); ?>
    <?php //echo css_url('base.css'); ?>
    <?php echo css_url('style.css'); ?>
    <!--[if lt IE 8]>
    <?php echo css_url('style_IE.css'); ?>
    <![endif]-->
    <?php /* ?>
    <!--script type="text/javascript" src="js/jquery-1.4.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/js.js"></script-->
    */ ?>
    
    <script type="text/javascript" language="javascript">
    <!--
        var MyOptions = {
            base_url: '<?php echo base_url();?>',
            site_url: '<?php echo site_url();?>',
            index_page: '<?php echo $this->config->item("index_page");?>',
            media_url: '<?php echo base_url() ;?>media/',
            slash: '/',
            logs: true,
            messages: {
                digits: "Masukkan Nomor"
            }
        }
    //-->
    </script>
    <?php get_js('jquery'); ?>
    <?php get_js('jqueryui'); ?>
    <?php get_js_libs(); ?>
    <?php get_js('plugin'); ?>
    <?php get_js('mod_web'); ?>
    <?php get_js('prototype'); ?>
    
    <script type="text/javascript" src="js/libs/jquery/plugin/jquery.accordion.js"></script>
    <script type="text/javascript">
    <!--
    	jQuery().ready(function(){
    		jQuery('#accordion').accordion({
    			active: false,
    			alwaysOpen: false,
    			autoheight: false
    		});
    	});
    //-->
	</script>

	
	<?php echo get_content('head_end_before');?>
</head>
    
