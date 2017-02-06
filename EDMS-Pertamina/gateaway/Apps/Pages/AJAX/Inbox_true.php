<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
require_once ('../../../Apps__Config.php');
require_once ('../../../system/class/Active_record_class.php');
require_once ('../../../system/function/Time_function.php');

$ConnDB  = New ConnectDB();
$ARSql   = New Active_record();
// query untuk membaca SMS yang belum diproses
$query = "SELECT * FROM inbox WHERE Processed='true' ORDER BY ID DESC";
$data  = $ARSql->query($query);
$nomor = 1;
while($rows = $ARSql->mf_object($data)) {
    echo "<tr class='success'><td>$nomor.</td>";
    echo "<td>$rows->SenderNumber</td>";
    echo "<td>".$rows->TextDecoded."</td>";
    echo "<td>".timeAgo(strtotime($rows->ReceivingDateTime))."</td>";
    echo "<td><a id='".$rows->ID."' class='hapusSms btn btn-danger btn-mini'>
          <i class='icon-remove'></i> Hapus</a>
          <a href='#balasSms' data-toggle='modal' id='".$rows->ID."' class='balasSms btn btn-default btn-mini'>
          <i class='icon-reply'></i> Balas</a>
          </td>";
    echo "</tr>";
    $nomor++;
}
?>
