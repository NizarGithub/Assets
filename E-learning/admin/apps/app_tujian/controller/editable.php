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
if($_GET['id'] and $_GET['data'])
{
    $field = $_GET['field'];
    $data = $_GET['data'];
    if($field=='waktu_pengerjaan') {
		$rows = $data * 60;
	}
	else {
		$rows = $data;
	}
    
    $id = $_GET['id'];
    
    if(mysql_query("update topik_quiz set $field='$rows' where id_tq='$id'"))
    echo 'success';
}
