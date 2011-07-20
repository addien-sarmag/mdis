<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MyIndoCMS
 *
 * MyIndoCMS is Product for PT MyIndo Cyber Media
 *
 * @package		MyIndoCMS
 * @author		PT MyIndo Cyber Media
 * @copyright	Copyright (c) 2007, PT MyIndo Cyber Media
 * @license     http://www.myindo.co.id/license.html
 * @link        http://www.myindo.co.id
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * MyIndoCMS Template Helpers
 *
 * @package		MyIndoCMS
 * @subpackage	Helpers
 * @category	Helpers
 * @author      PT MyIndo Cyber Media
 * @link        http://www.myindo.co.id/cms/helpers/mytemplate_helper.html
 */

// ------------------------------------------------------------------------

function mydatetime($timestamp)
{
    return date("Y-m-d H:i:s", $timestamp);
}

function mydate($timestamp)
{
    return date("Y-m-d", $timestamp);
}

function mytime($timestamp)
{
    return date("H:i:s", $timestamp);
}

function mymktime($year,$month,$day,$hour=0,$minute=0,$second=0)
{
    if (! checkdate($month,$day,$year)) return now();
    return mktime($hour,$minute,$second,$month,$day,$year);
}


function myGToJD($year,$month,$day)
{
    $t = GregorianToJD($month,$day,$year);
    $n = GregorianToJD(date('m'),date('d'),date('Y'));
    $result = $n - $t;
    if ($result < 0)
        $result *= -1;
    return $result;
}

function SQLTimeToMKTime($string) {
        $string = trim($string);
        if(empty($string)) {
                $time = time();
        } elseif (preg_match('/^\d{14}$/', $string)) {
                // it is mysql timestamp format of YYYYMMDDHHMMSS?
                $time = mktime(substr($string, 8, 2),substr($string, 10, 2),substr($string, 12, 2),
                                substr($string, 4, 2),substr($string, 6, 2),substr($string, 0, 4));
        } elseif (is_numeric($string)) {
                // it is a numeric string, we handle it as timestamp
                $time = (int)$string;
        } else {
                // strtotime should handle it
                $time = strtotime($string);
                if ($time == -1 || $time === false) {
                        // strtotime() was not able to parse $string, use "now":
                        $time = time();
                }
        }
        return $time;
}

function SQLTimeToString($string,$format="%Y")
{
    return strftime($format, SQLTimeToMKTime($string));
}




