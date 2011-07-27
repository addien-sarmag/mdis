<?php
function  showHelp( $idClick = '' ,$idDiv = '' , $key = '') {
	
	$CI = get_instance();
    $lang = $CI->lang->line($key);
    if ( !$lang )
        return '';
        
    $title 	= $lang['title'];
    $desc 	= $lang['desc'];
	
	$html  =<<<EOL
	<label class="field-help-link" ><span class="ui-icon ui-icon-help" id="$idClick"></span></label>
		<div id="$idDiv" style="display:none;" title="$title">
			$desc
		</div>
EOL;
	
	return $html;
}