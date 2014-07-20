<?php
/**
 * Project: SeedMan
 * User: Randy
 * Date: 7/18/14
 * Time: 8:18 PM
 * File: dashboard.php
 * 
 */

require_once(WWW_DIR . 'lib/page.php');

$dashboard = new page();

$dashboard->setContent($dashboard->renderContent('dashboard'));
$dashboard->setPageTitle('SeedMan Dashboard');
$dashboard->addScript('plugins/highcharts');
$dashboard->addScript('plugins/highcharts-theme');
$dashboard->addScript('dashboard');

$dashboard->renderPage();

