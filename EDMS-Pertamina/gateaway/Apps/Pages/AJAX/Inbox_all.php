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
$query = "SELECT * FROM inbox ORDER BY ID DESC LIMIT 5";
$data  = $ARSql->query($query);
$jumlah= $ARSql->numRows($data);
$nomor = 1;
$width = date("s")+40;
if($jumlah > 0 ) {
    while($rows = $ARSql->mf_object($data)) {
        if($rows->Processed=='false') {
            $class  = "class='error'";
            $Processed = "<span class='badge badge-important'><i class='icon-remove'></i> Belum diproses . . .</span>
                          <br><div style='height: 10px; margin-top: 10px;' class=\"progress progress-danger progress-striped\">
                          <div class=\"bar\" style=\"width: ".$width."%\"></div>
                          </div>";
        } else {
            $class  = "class='success'";
            $Processed = "<span class='badge badge-success'><i class='icon-ok'></i> Sudah diproses . . .</span>
                          <br><div style='height: 5px; margin-top: 10px;' class=\"progress progress-success progress-striped active\">
                          <div class=\"bar\" style=\"width: 100%\"></div>
                          </div>";
        }
        
            echo "<tr ".$class."><td>$nomor.</td>";
            echo "<td>$rows->SenderNumber</td>";
            echo "<td>".$rows->TextDecoded."</td>";
            echo "<td>".timeAgo(strtotime($rows->ReceivingDateTime))."</td>";
            echo "<td>$Processed</td>";
            echo "<td><a id='".$rows->ID."' class='hapusSms btn btn-danger btn-mini'>
                  <i class='icon-remove'></i> Hapus</a>
                  <a href='#balasSms' data-toggle='modal' id='".$rows->ID."' class='balasSms btn btn-default btn-mini'>
                  <i class='icon-reply'></i> Balas</a>
                  </td>";
            echo "</tr>";
            $nomor++;
    }
} else {
     echo "<tr class='warning' rowspan=2>
           <td colspan='6' style='text-align: center'><h2>Belum ada pesan masuk...</h2></td>";
     echo "</tr>";
}
?>
