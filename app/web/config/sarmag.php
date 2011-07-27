<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

if (defined('LANGUAGE_ID') && LANGUAGE_ID == 2) {
  $config['base_url']	= str_replace('en/index.php' , '',$_SERVER["SCRIPT_NAME"]);
  $config['index_page'] = "en/index.php";
  $config['language'] = 'english';
} else {
  $config['base_url']	= rtrim($_SERVER["SCRIPT_NAME"],'index.php');
  $config['index_page'] = "index.php";
  $config['language'] = 'indonesia';
}

$config['google_ajax_lib'] = false;
$config['jquery_mod'] = array('web.js');
//$config['jquery_plugin'] = array('jquery.string.1.0-min.js');
$config['jquery_version'] = '1.4.2';
$config['jqueryui_version'] = '1.8.2';
$config['prototype_version'] = '1.6.1.0';

$config['auth_check'] = true;
$config['auth_expire_login'] = 60;

$config['log_threshold'] = 0;
$config['log_path'] = FCPATH . DS . 'data' . DS . 'var' . DS . 'logs' . DS;


$config['web_type'] = 'web';

$config['paging'] = array();
$config['paging'] ['full_tag_open'] = '<ul class="pagination">';
$config['paging'] ['full_tag_close'] = '</ul>';
$config['paging'] ['first_link'] = 'First';
$config['paging'] ['first_tag_open'] = '<li class="button white" style="margin-right:10px;">';
$config['paging'] ['first_tag_close'] = '</li>';
$config['paging'] ['last_link'] = 'Last';
$config['paging'] ['last_tag_open'] = '<li class="button white" style="margin-left:10px;">';
$config['paging'] ['last_tag_close'] = '</li>';
$config['paging'] ['next_link'] = 'Next »';
$config['paging'] ['next_tag_open'] = '<li class="button white next">';
$config['paging'] ['next_tag_close'] = '</li>';
$config['paging'] ['prev_link'] = '« Previous';
$config['paging'] ['prev_tag_open'] = '<li class="button white previous-off" style="margin-right:10px;">';
$config['paging'] ['prev_tag_close'] = '</li>';
$config['paging'] ['cur_tag_open'] = '<li class="button white active" style="margin-right:10px;">';
$config['paging'] ['cur_tag_close'] = '</li>';
$config['paging'] ['num_tag_open'] = '<li class="button white" style="margin-right:10px;">';
$config['paging'] ['num_tag_close'] = '</li>';

$config['server_id'] = $_SERVER['SERVER_ADDR'];

$config['paging'] = array();
$config['paging'] ['full_tag_open'] = '<ul class="pagination">';
$config['paging'] ['full_tag_close'] = '</ul>';
$config['paging'] ['first_link'] = 'First';
$config['paging'] ['first_tag_open'] = '<li>';
$config['paging'] ['first_tag_close'] = '</li>';
$config['paging'] ['last_link'] = 'Last';
$config['paging'] ['last_tag_open'] = '<li>';
$config['paging'] ['last_tag_close'] = '</li>';
$config['paging'] ['next_link'] = 'Next »';
$config['paging'] ['next_tag_open'] = '<li>';
$config['paging'] ['next_tag_close'] = '</li>';
$config['paging'] ['prev_link'] = '« Previous';
$config['paging'] ['prev_tag_open'] = '<li>';
$config['paging'] ['prev_tag_close'] = '</li>';
$config['paging'] ['cur_tag_open'] = '<li class="button white active" style="margin-right:10px;">';
$config['paging'] ['cur_tag_close'] = '</li>';
$config['paging'] ['num_tag_open'] = '<li>';
$config['paging'] ['num_tag_close'] = '</li>';
$config['paging'] ['num_links'] = 5;

$config['ditajaya_limit'] = 10;
$config['ditajaya2_limit'] = 2;