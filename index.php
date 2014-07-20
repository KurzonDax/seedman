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
    if ((function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc()) || ini_get('magic_quotes_sybase'))
    {
        foreach ($_GET as $k => $v) $_GET[$k] = (is_array($v)) ? array_map("stripslashes", $v) : stripslashes($v);
        foreach ($_POST as $k => $v) $_POST[$k] = (is_array($v)) ? array_map("stripslashes", $v) : stripslashes($v);
        foreach ($_REQUEST as $k => $v) $_REQUEST[$k] = (is_array($v)) ? array_map("stripslashes", $v) : stripslashes($v);
        foreach ($_COOKIE as $k => $v) $_COOKIE[$k] = (is_array($v)) ? array_map("stripslashes", $v) : stripslashes($v);
    }

    $page=(isset($_GET['page']) && !empty($_GET['page'])) ? $_GET['page'] : 'dashboard';

    switch ($page)
    {
        case 'dashboard':
        case 'ajax':
        case 'files':
        case 'torrents':
            include(WWW_DIR . 'pages/' . $page . '.php');
            break;
        default:
            header("HTTP/1.1 404 Not Found");
            die();
            break;
    }

}