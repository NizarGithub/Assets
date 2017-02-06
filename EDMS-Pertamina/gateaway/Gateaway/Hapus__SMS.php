<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
include '../Apps__Config.php';
include '../System/class/Active_record_class.php';
$conn  = New ConnectDB();
$ARSql = New Active_record();

if(isset($_POST['hapus'])) {
    $hapus_sms = "DELETE FROM inbox WHERE ID='$_POST[hapus]'";
    $data_kirim_sms = $ARSql->query($hapus_sms);
}
?>