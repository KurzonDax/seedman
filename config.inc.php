<?php
/**
 * Project: SeedMan
 * User: Randy
 * Date: 7/18/14
 * Time: 4:22 PM
 * File: config.inc.php
 * 
 */

$www_top = str_replace("\\", "/", dirname($_SERVER['PHP_SELF']));
if (strlen($www_top) == 1)
    $www_top = "";

//
// used everywhere an href is output
//
define('WWW_TOP', $www_top);

//
// used to refer to the /www/lib class files
//
define('WWW_DIR', realpath(dirname(__FILE__)) . '/');

//
// path to Twig files
//
define('TWIG_DIR', WWW_DIR . 'lib/Twig/');

//
// path to templates directory
//
define('TEMPLATES_DIR', WWW_DIR . 'templates');

//
// number of results per page
//
define("ITEMS_PER_PAGE", "50");

