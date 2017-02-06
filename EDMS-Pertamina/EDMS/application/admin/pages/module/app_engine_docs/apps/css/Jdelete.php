<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
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

if(isset($_POST['delete'])) {
    $query      = $ARSql->query("DELETE FROM css WHERE id='$_POST[id_delete]'");

}