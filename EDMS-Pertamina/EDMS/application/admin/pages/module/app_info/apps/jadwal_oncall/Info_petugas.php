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

if(isset($_POST['kd_petugas'])) {
    $query      = $ARSql->query("SELECT * FROM petugas_oncall WHERE id_petugas='$_POST[kd_petugas]' AND aktif='Y'");
    $petugas    = $ARSql->mf_object($query);
    $group      = $ARSql->getOne('group_pegawai','id_group',$petugas->id_group);
    $jumlah     = $ARSql->numRows($query);
    if($jumlah > 0 ) {
        //echo "<div class='row'>";
        echo "<img align='left' style='margin-right: 20px; width: 150px; height: 160px; border-radius: 15px; border: 4px solid #e9e9e9' src='uploaded/foto_petugas_oncall/medium_$petugas->foto'>";
        echo "<center><h3>$petugas->nama</h3></center>";
        echo "<p>Kantor : $petugas->kantor</p>";
        echo "<p>E-mail : $petugas->email</p>";
        echo "<p>No. HP : $petugas->no_telp</p>";
        echo "<p>Group : <span class='badge badge-info'>$group->nama</span></p><br><br>";

        //echo "</div>";
    } else {
        echo "<div class='alert alert-danger'>";
        echo "<h3>Some error</h3>";
        echo "<p>Pilih petugas On Call...</p>";
        echo "</div>";
    }
}

