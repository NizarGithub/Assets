<?php 
//set session start
session_start();

$start_time = microtime(TRUE);
define('_START_TIME_', $start_time );

ob_start();

//flag for main file
define( '_FINDEX_', 1 );

//define root directory
define('_PATH_BASE_', dirname(__FILE__) );

//set auto construc html
define('_AUTO_HTML_CONSTRUCT_', false);

//check file configuration
if(!file_exists('config.php'))
{
	require_once ('system/installer.php');
	die();
}
else
{	
	header('location:admin/login.php');
}