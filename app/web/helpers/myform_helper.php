<?php

function get_data($var,$name,$default = '',$boolean = false)
{
    if (empty($var)) {
        if ($boolean) return false;
        return $default;
    }
    if (isset($var[$name])) {
        if ($boolean)
            return $var[$name] === $default ? true : false;
        return $var[$name];
    }
    if ($boolean)
        return false;
    return $default;
}
function form_date()
{
}

function form_radios($name='',$options=array(),$selected='',$extra='')
{
    if ($selected === '') {
        $selected = (isset($_POST[$name])) ? $_POST[$name] : '';
    }
    if ($extra != '') $extra = ' '.$extra;
    if (!$options)
        return;
    $form = '';
    foreach($options as $k=>$v) {
        $data = array(
            'name'=>$name,
            'id' => $name . '_' . $k,
            'value' => $k,
            'checked' => ($selected == $k && $selected != '') ? true : false

        );
        $form .= form_radio($data,'','',$extra);
        $form .= '<label for="' . $name . '_' . $k . '"> ';
        $form .= $v;
        $form .= '</label>';
    }
    return $form;

}


function get_help($key) {
    $CI = get_instance();
    $lang = $CI->lang->line($key);
    if (!$lang)
        return '';
    $title = $lang['title'];
    $desc = $lang['desc'];
    $html =<<<EOL
<label>
    <a href="#${key}-help" class="field-help-link" title="${title}">
        <span class="ui-icon ui-icon-help">${title}</span>
    </a>
</label>
<div id="${key}-help" class="field-help-content">
{$desc}
</div>
EOL;
    return $html;
}