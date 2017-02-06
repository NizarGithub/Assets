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
    $id = $_GET['id'];
    $data = $_GET['data'];
    if(mysql_query("update pengajar set $field='$data' where id_pengajar='$id'"))
    echo 'success';
}
