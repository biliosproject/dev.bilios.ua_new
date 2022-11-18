<?php
// Version
define('VERSION', '3.0.3.7');
define('VERSION_CORE', 'ocStore');
define('VERSION_BUILD', '0001');
error_reporting(0);

$period_cookie = 2592000; // 30 дней (2592000 секунд)

if($_GET['utm_source'] || $_GET['utm_medium'] || $_GET['utm_term'] || $_GET['utm_content'] || $_GET['utm_campaign']){
	setcookie("utm_source",($_GET['utm_source']? $_GET['utm_source']: '' ), time() +$period_cookie);
	setcookie("utm_medium",($_GET['utm_medium']? $_GET['utm_medium']: '' ), time() +$period_cookie);
	setcookie("utm_term",($_GET['utm_term']? $_GET['utm_term']: '' ), time() +$period_cookie);
	setcookie("utm_content",($_GET['utm_content']? $_GET['utm_content']: '' ), time() +$period_cookie);
	setcookie("utm_campaign", ($_GET['utm_campaign']? $_GET['utm_campaign']: ''), time() +$period_cookie);
}

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');
