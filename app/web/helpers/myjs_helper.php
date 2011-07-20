<?php

function get_js($type,$version='')
{
    $ci = get_instance();
    switch($type) {
        case 'jquery' :
            if ($version == '' || !$version)
                $version = $ci->config->item('jquery_version');
            if ($ci->config->item('google_ajax_lib')) {
                echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>' . PHP_EOL;
            } else {
                echo get_jquery($version). PHP_EOL;
            }
            break;
        case 'jqueryui' :
            if ($version == '' || !$version)
                $version = $ci->config->item('jqueryui_version');
            if ($ci->config->item('google_ajax_lib')) {
                echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js"></script>' . PHP_EOL;
            } else {
                echo get_jqueryui($version). PHP_EOL;
            }
            break;
        case 'prototype' :
            if ($version == '' || !$version)
                $version = $ci->config->item('prototype_version');
            if ($ci->config->item('google_ajax_lib')) {
                echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/'.$version.'/prototype.js"></script>' . PHP_EOL;
            } else {
                echo get_prototype($version). PHP_EOL;
            }

            break;
        case 'plugin' :
            get_js_plugin();
            break;
        case 'plugin_css' :
            get_js_plugin_css();
            break;
        case 'mod_web' :
            get_js_mod('web');
            break;
        case 'mod_cms' :
            get_js_mod('cms');
            break;

    }
}
function get_jquery($version = '1.4.2')
{
    return js_url('libs/jquery/' . $version . '/jquery.min.js', true); 
}
function get_jqueryui($version = '1.8.0')
{
    return js_url('libs/jqueryui/' . $version . '/jquery-ui.min.js', true); 
}
function get_jqueryui_theme($theme='smoothness',$version = '1.8.2')
{
    return js_url('libs/jqueryui/' . $version . '/css/' . $theme . '/jquery-ui-' . $version . '.custom.css');
}
function get_prototype($version = '1.6.1.0')
{
    return js_url('libs/prototype/' . $version . '/prototype.js', true); 
}

static $js_jquery_plugin = array();
static $js_jquery_plugin_css = array();
static $js_jquery_mod = array();
function add_js_plugin($url)
{
    global $js_jquery_plugin;
    $js_jquery_plugin[] = $url;
}
function get_js_plugin()
{
    global $js_jquery_plugin;
    $ci = get_instance();
    $js_plugin = $ci->config->item('jquery_plugin');
    if ($js_plugin)
        $js_plugin = array_unique($js_plugin);
    if ($js_plugin)
    foreach($js_plugin as $row)
        echo js_url('libs/jquery/plugin/' . $row, true) . PHP_EOL; 
    if ($js_jquery_plugin) {
        $js_jquery_plugin = array_unique($js_jquery_plugin);
        foreach($js_jquery_plugin as $row)
            echo js_url('libs/jquery/plugin/' . $row, true) . PHP_EOL; 
    }

}
function get_js_plugin_css()
{
    global $js_jquery_plugin_css;
    $ci = get_instance();
    $js_plugin = $ci->config->item('jquery_plugin_css');
    if ($js_plugin)
        $js_plugin = array_unique($js_plugin);
    if ($js_plugin)
    foreach($js_plugin as $row)
        echo '<link rel="stylesheet" href="' . js_url('libs/jquery/plugin/' . $row, false) . '" type="text/css" media="all" />' . PHP_EOL;
    if ($js_jquery_plugin_css) {
        $js_jquery_plugin_css = array_unique($js_jquery_plugin_css);
        foreach($js_jquery_plugin_css as $row)
            echo '<link rel="stylesheet" href="' . js_url('libs/jquery/plugin/' . $row, false) . '" type="text/css" media="all" />' . PHP_EOL;

    }

}
function add_js_mod($url,$type='web')
{
    global $js_jquery_mod;
    if (!isset($js_jquery_mod[$type]))
        $js_jquery_mod[$type] = array();
    $js_jquery_mod[$type][] = $url;
}
function get_js_mod($type='web')
{
    global $js_jquery_mod;
    $ci = get_instance();
    $js_mod = $ci->config->item('jquery_mod');
    if ($js_mod && is_array($js_mod))
        $js_mod = array_unique($js_mod);
    if ($js_mod && is_array($js_mod))
    foreach($js_mod as $row)
        echo js_url('libs/jquery/mod/' . $type . '/' . $row, true) . PHP_EOL; 
    if (isset($js_jquery_mod[$type]) && $js_jquery_mod[$type]) {
        $js_mod_temp = array_unique($js_jquery_mod[$type]);
        foreach($js_mod_temp as $row)
            echo js_url('libs/jquery/mod/' . $type . '/' . $row, true) . PHP_EOL; 
    }

}
static $js_jquery_mod = array();

function add_js_libs($url,$type='web')
{
    global $js_libs;
    if (!isset($js_libs[$type]))
        $js_libs[$type] = array();
    $js_libs[$type][] = $url;
}
function get_js_libs($type='web')
{
    global $js_libs;
    $ci = get_instance();
    $js_mod = $ci->config->item('js_libs');
    if ($js_mod && is_array($js_mod))
        $js_mod = array_unique($js_mod);
    if ($js_mod && is_array($js_mod))
    foreach($js_mod as $row)
        echo js_url('libs/' . $row, true) . PHP_EOL; 
    if (isset($js_libs[$type]) && $js_libs[$type]) {
        $js_mod_temp = array_unique($js_libs[$type]);
        foreach($js_mod_temp as $row)
            echo js_url('libs/' . $row, true) . PHP_EOL; 
    }

}

