<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['USER_LEVEL']) AND $_SESSION['USER_LEVEL'] > 2) die ();
define('_FINDEX_','BACK');

require_once ('../../../../config.php');
require_once ('../../../../system/database.php');
require_once ('../../../../system/function.php');

$dbconn = new Connection(); 
$db = New FQuery();
if(isset($_POST['username'])) {
$data = mysql_query("SELECT * FROM pengajar WHERE username_login='$_POST[username]'");
	if(mysql_num_rows($data) > 0 ) {
		echo 1;
	}
	else {
		echo 0;
	}
}
if(isset($_POST['email'])) {
$data = mysql_query("SELECT * FROM pengajar WHERE email='$_POST[email]'");
	if(mysql_num_rows($data) > 0 ) {
		echo 1;
	}
	else {
		echo 0;
	}
}