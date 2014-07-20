<?php
/**
 * Project: SeedMan
 * User: Randy
 * Date: 7/18/14
 * Time: 1:34 PM
 * File: index.php
 * 
 */

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

if (is_file("config.inc.php"))
{
    require_once("config.inc.php");
}
else
{
    if (is_dir("install"))
    {
        header("location: install");
    }
    exit();
}

if(@session_start())
{

    $_GET=cleanArray($_GET);
    $_POST=cleanArray($_POST);
    $_REQUEST=cleanArray($_REQUEST);
    $_COOKIE=cleanArray($_COOKIE);

    $getKeys = array_keys($_GET);
    $page=array_shift($getKeys) ?: 'dashboard';

    switch ($page)
    {
        case 'dashboard':
        case 'ajax':
        case 'files':
        case 'torrents':
            include(WWW_DIR . 'pages/' . $page . '.php');
            break;
        default:
            include(WWW_DIR . 'pages/404.php');
            break;
    }

}
function cleanArray($var)
{
    $return=array();

    foreach($var as $k => $v)
    {
        $return[$k] = filter_var($v, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    return $return;
}