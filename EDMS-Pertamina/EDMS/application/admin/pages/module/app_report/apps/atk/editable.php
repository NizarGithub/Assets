<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
error_reporting(0);
session_start();
if(empty($_SESSION['id_user'])) die ();

require_once ('../../../../../../../config.php');
require_once ('../../../../../../../system/class/Active_record_class.php');

$dbconn = new ConnectDB(); 
$ARSql = New Active_record();

if($_GET['id'] AND $_GET['data']) {
    $field = $_GET['field'];
    $id = $_GET['id'];
    $data = $_GET['data'];
    
    $update = $ARSql->query("update atk set $field='$data' where id_atk='$id'");
    if($update==1) {
        echo 'success';
    } 
    else {
        echo 'error';
    }
}

