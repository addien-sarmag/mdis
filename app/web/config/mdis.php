<?php
$config['jquery_mod'] = array('ditajaya.js');

$config['jquery_plugin'][] = 'fancybox/1.3.1/jquery.mousewheel-3.0.2.pack.js';
$config['jquery_plugin'][] = 'fancybox/1.3.1/jquery.fancybox-1.3.1.pack.js';
$config['jquery_plugin_css'][] = 'fancybox/1.3.1/jquery.fancybox-1.3.1.css';

$config['jquery_plugin'][] = 'jquery.hoverIntent.minified.js';
$config['jquery_plugin'][] = 'superfish/1.4.8/superfish.js';
$config['jquery_plugin_css'][] = 'superfish/1.4.8/css/superfish.css';
$config['jquery_plugin_css'][] = 'superfish/1.4.8/css/superfish-navbar.css';



$config['themes'] = 'mdis';

$config['file_upload']['upload_path'] = FCPATH . 'media' . DS . 'private' . DS . 'WBS' . DS ;
$config['file_upload']['allowed_types'] = "doc|docx|pdf|avi|mp3|xls|xlsx|txt|jpeg|bmp|gif|jpg|png";
$config['file_upload']['max_size']  = '2048';
$config['file_upload']['max_width']  = '1024';
$config['file_upload']['max_height']  = '1024';

if (file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ditajaya.local.php'))
    include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ditajaya.local.php');

    
$config['paging'] = array();
$config['paging'] ['full_tag_open'] = '<ul class="pagination">';
$config['paging'] ['full_tag_close'] = '</ul>';
$config['paging'] ['first_link'] = 'First';
$config['paging'] ['first_tag_open'] = '<li class=" " style="margin-right:10px;">';
$config['paging'] ['first_tag_close'] = '</li>';
$config['paging'] ['last_link'] = 'Last';
$config['paging'] ['last_tag_open'] = '<li class=" " style="margin-left:10px;">';
$config['paging'] ['last_tag_close'] = '</li>';
$config['paging'] ['next_link'] = 'Next »';
$config['paging'] ['next_tag_open'] = '<li class=" next">';
$config['paging'] ['next_tag_close'] = '</li>';
$config['paging'] ['prev_link'] = '« Previous';
$config['paging'] ['prev_tag_open'] = '<li class="previous-off" style="margin-right:10px;">';
$config['paging'] ['prev_tag_close'] = '</li>';
$config['paging'] ['cur_tag_open'] = '<li class="button white active" style="margin-right:10px;">';
$config['paging'] ['cur_tag_close'] = '</li>';
$config['paging'] ['num_tag_open'] = '<li style="margin-right:10px;">';
$config['paging'] ['num_tag_close'] = '</li>';


$config['gender'] = array('L'=>"Laki-laki",'P'=>"Perempuan");
$config['spirit'] = array('islam'=>"Islam",'katolik'=>"Katolik","kristen"=>"Kristen","hindu"=>"Hindu","budha"=>"Budha","konghucu"=>"Kong Hu Cu");
$config['levelPendidikan'] = array("S2",'S1','D3','D1','SMA','SLTP','SD');
$config['status_pribadi'] = array('single'=>"Belum Menikah",'maried'=>"Menikah");
$config['status_pelamar'] = array('accept'=>"Di Terima",'pending'=>"Menunggu");
$config['tipe_jabatan'] = array('private'=>"Private",'public'=>"Public");

