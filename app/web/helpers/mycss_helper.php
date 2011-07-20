<?php
function add_css_mod($url,$type='web')
{
    global $css_mod;
    if (!isset($css_mod[$type]))
        $css_mod[$type] = array();
    $css_mod[$type][] = $url;
}
function get_css_mod($type='web')
{
    global $css_mod;
    $ci = get_instance();
    $_mod = $ci->config->item('css_mod');
    if ($_mod && is_array($_mod))
        $_mod = array_unique($_mod);
    if ($_mod && is_array($_mod))
    foreach($_mod as $row)
        echo css_url($row) . PHP_EOL; 
    if (isset($css_mod[$type]) && $css_mod[$type]) {
        $css_mod_temp = array_unique($css_mod[$type]);
        foreach($css_mod_temp as $row)
            echo css_url($row) . PHP_EOL; 
    }

}

