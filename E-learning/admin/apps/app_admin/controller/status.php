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
/****************************************/
/*	    Enable and Disbale Modules		*/
/****************************************/
if(isset($_GET['stat'])) {
	if($_GET['stat']=='1'){
		mysql_query("UPDATE KELAS SET aktif='Y' WHERE id='$_GET[id]'");
		alert('success',"Perubahan telah disimpan",1);
	}
	if($_GET['stat']=='0'){
		mysql_query("UPDATE KELAS SET aktif='N' WHERE id='$_GET[id]'");
		alert('success',"Perubahan telah disimpan",1);
	}
}
