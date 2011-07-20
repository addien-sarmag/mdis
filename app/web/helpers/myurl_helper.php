<?php


function js_url($url,$script = false)
{
    if ($script)
        return '<script type="text/javascript" src="' . base_url() . 'js/' . $url . '"></script>';
    else
        return base_url() . 'js/' . $url;
}
function css_url($url='style.css',$options = array())
{
	$CI = get_instance();
    return '<link rel="stylesheet" href="'.base_url() . 'themes/' .$CI->config->item('web_type'). '/'.$CI->config->item('themes').'/css/' . $url . '" type="text/css" media="all" />';
}
function media_url($url='')
{
    return base_url() . 'media/' . $url;
}
function favicon_url($url='favicon.ico',$options = array())
{
	$CI = get_instance();
	return '<link rel="shortcut icon" href="'.base_url() . 'themes/' .$CI->config->item('web_type'). '/'.$CI->config->item('themes').'/images/' . $url . '" type="image/x-icon" />';
}
function theme_image_url($url)
{
	$CI = get_instance();
	return base_url() . 'themes/' .$CI->config->item('web_type'). '/' .$CI->config->item('themes'). '/images/' . $url;
}

function anchor_sort($url,$assoc,$sort,$title = false) {
    $CI =& get_instance();
    $order = 'asc';
    $class = '';
    if ($assoc['sort'] == $sort) {
        if ($assoc['order'] == 'asc') {
                $order = 'desc';
                $class = 'fr ui-icon ui-icon-carat-1-n';
        } else {
                $class = 'fr ui-icon ui-icon-carat-1-s';
        }
    }
    $assoc['sort'] = $sort;
    $assoc['order'] = $order;
    if (isset($assoc['page'])) unset($assoc['page']);
    //return 'bbbb';
    if ($title === false)
        return site_url($url .'/'. $CI->uri->assoc_to_uri($assoc));
    else
        return '<span class="'.$class.'"></span>'.anchor($url .'/'.
$CI->uri->assoc_to_uri($assoc),$title);
}
