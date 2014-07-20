<?php
/**
 * Project: SeedMan
 * User: Randy
 * Date: 7/19/14
 * Time: 9:39 PM
 * File: 404.php
 * 
 */

require_once(WWW_DIR . 'lib/page.php');

$pageNotFound = new page();

$pageNotFound->setContent($pageNotFound->renderContent('pageNotFound'));
$pageNotFound->setPageTitle('SeedMan Page Not Found');

$pageNotFound->renderPage();