<?php
function is_serialized( $data ) {
	// if it isn't a string, it isn't serialized
	if ( !is_string( $data ) )
		return false;
	$data = trim( $data );
	if ( 'N;' == $data )
		return true;
	if ( !preg_match( '/^([adObis]):/', $data, $badions ) )
		return false;
	switch ( $badions[1] ) {
		case 'a' :
		case 'O' :
		case 's' :
			if ( preg_match( "/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $data ) )
				return true;
			break;
		case 'b' :
		case 'i' :
		case 'd' :
			if ( preg_match( "/^{$badions[1]}:[0-9.E-]+;\$/", $data ) )
				return true;
			break;
	}
	return false;
}

function maybe_unserialize( $original ) {
	if ( is_serialized( $original ) ) // don't attempt to unserialize data that wasn't serialized going in
		return @unserialize( $original );
	return $original;
}

function is_serialized_string( $data ) {
	// if it isn't a string, it isn't a serialized string
	if ( !is_string( $data ) )
		return false;
	$data = trim( $data );
	if ( preg_match( '/^s:[0-9]+:.*;$/s', $data ) ) // this should fetch all serialized strings
		return true;
	return false;
}

function date_ui($d,$format="d/m/Y")
{
    $d = explode('-',$d);
    if (!checkdate($d[1],$d[2],$d[0]))
        return '';
    return date($format,mktime(0,0,0,$d[1],$d[2],$d[0]));
}

function myjson_encode($data,$header=true,$success = '',$failed= '')
{
    if ($header) {
        header('Content-type: application/json');
        $ci =& get_instance();
        $json = Zend_Json::encode($data);
        if ($ci->config->item('json_debug'))
        $json = Zend_Json::prettyPrint($json, array("indent" => " "));
        echo $json;
        die();
    } else {
        if ($data['status']) { 
            if (!empty($success)) redirect($success);
        } else {
            if (!empty($failed)) redirect($failed);
        }
    }
}

static $full_title = array();
function add_title($title) {
    global $full_title;
    $full_title[] = $title;
}

function get_title($isHead = true) {
    global $full_title;
    $title = '';
    if ($full_title) {
        $CI = get_instance();
        $title = $CI->lang->line('global_title');
        $head = '';
        foreach($full_title as $row) 
        if (!empty($row)) {
            $title = $row . ' - ' . $title;
            $head = $row;
        }
        if ($isHead && $head)
            return $head;
    }
    if (empty($title)) return false;
    return $title;
}


static $_content_ = array();
function add_content($name,$content, $force = false)
{
    global $_content_;
    if (!isset($_content_[$name]))
        $_content_[$name] = array();
    if ($force)
        $_content_[$name] = array();
    $_content_[$name][] = $content;
}
function get_content($name , $string = true)
{
    global $_content_;
    if (!isset($_content_[$name])) {
        if ($string) return '';
        else return array();
    }
    if (!$string)
        return $_content_[$name];
    $html =  '';
    foreach($_content_[$name] as $row) {
        $html .= (string) $row;
        $html .= PHP_EOL;
    }
    return $html;
}

function isAjax() {
    if (isset ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) && $_SERVER ['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
        return true;
    }
    return false;
}



function cmsModule($string, $modulename = "")
{
    if ($modulename == '') return $string;
    if ($string == $modulename) return $string;
    return str_replace($modulename.'_','',$string);
}

function gen_menu($menu, $level = 0) {
    $html = '';
    if (! $menu)
        return $html;
    if ($level)
        $html .= '<ul>';
    foreach ( $menu as $row ) {
        $isAccess = true;
        if (isset($row ['accessModule']) && $row ['accessModule'])
            foreach ( $row ['accessModule'] as $mod )
                if (! isAccess ( $mod )) {
                    $isAccess = false;
                    break;
                }
        if (! $isAccess)
            continue;
        $isAccess = true;
        if (isset($row ['accessController']) && $row ['accessController'])
            foreach ( $row ['accessController'] as $mod => $con )
                if (! isAccess ( $mod, $con )) {
                    $isAccess = false;
                    continue;
                }
        if (! $isAccess)
            continue;
        if (isset($row ['accessControllerList']) && $row ['accessControllerList']) {
            $isAccess = false;
            foreach ( $row ['accessControllerList'] as $row2 ) {
                if (isAccess ( $row2['module'], $row2['controller'] )) {
                    $isAccess = true;
                    break;
                }
            }
            if (! $isAccess)
                continue;
        }
        $isAccess = true;
        if (isset($row ['accessAction']) && $row ['accessAction'])
            foreach ( $row ['accessAction'] as $action )
                if (! isAccess ( $action ['module'], $action ['controller'], $action ['action'] )) {
                    $isAccess = false;
                    continue;
                }
        if (! $isAccess)
            continue;
        if (isset($row ['accessActionList']) && $row ['accessActionList']) {
            $isAccess = false;
            foreach ( $row ['accessActionList'] as $action )
                if (isAccess ( $action ['module'], $action ['controller'], $action ['action'] )) {
                    $isAccess = true;
                    break;
                }
            if (! $isAccess)
                continue;
        }
        $html .= '<li>';
        if ($row ['is_url']) {
            $html .= anchor ( $row ['url'], $row ['title'] );
        } else {
            $active = false;
            $html .= '<a href="#" '.($active ? 'class="active"' : '').'>' . $row ['title'] . '</a>';
        }
        if ($row ['is_child'] && $row ['child'])
            $html .= gen_menu ( $row ['child'], $level + 1 );
        $html .= '</li>';
    }
    if ($level)
        $html .= '</ul>';
    return $html;
}

function  file_properties( $array ){
		if ( ! $array )
			return '';
		
		$files = array();
		$files['filename'] 	= $array['userId'] . '-' . basename( $array['file']  );
		$files['filesize'] 	= filesize( $array['file'] );
		$files['filetype'] 	= $array['application'];
		$files['full_path'] = $array['file'];
		$files['action'] 	= 'view';
		
		return $files;
}

function file_download($file) {
	if ($file ['action'] == 'download') {
		header ( "Pragma: public" );
		header ( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
		header ( "Expires: 0" );
		header ( "Content-Type: " . $file ['filetype'] . "\n" );
		//header('Content-Type: application/force-download');
		header ( "Content-Transfer-Encoding: binary\n" );
		header ( 'Content-disposition: attachment; filename="' . $file ['filename'] . '"' . "\n" );
		header ( "Content-Length: " . $file['filesize'] . "\n" );
		echo file_get_contents ( $file['full_path'] );
		die();
	} elseif ($file ['action'] == 'view') {
		header ( "Pragma: public" );
		header ( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
		header ( "Expires: 0" );
		header ( "Content-Type: " . $file ['filetype'] . "\n" );
		//header('Content-Type: application/force-download');
		header ( "Content-Transfer-Encoding: binary\n" );
		header ( 'Content-disposition: attachment; filename="' . $file ['filename'] . '"' . "\n" );
		header ( "Content-Length: " . $file['filesize'] . "\n" );
		echo file_get_contents ( $file['full_path'] );
		die();
	}
}