<?php

function validUsername($username) {
    return preg_match("/^([a-zA-Z0-9])+$/",$username) ? true : false;
}
function validEmail($email) {
    return preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email) ? true : false;
}

function getStatusTicket($status) {
    $status = (string) $status;
    switch($status) {
        case '0' :
            return 'New Ticket';
        case '1' :
        case '3' :
        case '4' :
        case '5' :
        case '7' :
        case '1' :
        	return 'Open';
        default :
            return 'Close';
    }
}
function isOpen($status) {
    $status = (string) $status;
    if (in_array($status,array('0','1','3','4','5','6','7'),true))
        return true;
    return false;
}

function isReply($ticket,$members) {
    if (($ticket && $members && $ticket['membersid'] == $members->members_id) || ($ticket && !$ticket['membersid']))
        return true;
    return false;
}
function getStatusTicketAdmin($status) {
    $CI = get_instance();
    $ticketStatus = $CI->config->item('ticketStatus');
    return $ticketStatus[$status];
}

function wbs_download($file) {
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