<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */

require_once ('../../../definer.php');
require_once ('../../../'.'config.php');
require_once ('../../../'.APP_SYSTEM_CLASS . 'Active_record_class.php');
require_once ('../../../'.APP_SYSTEM_FUNCTION . 'General_function.php');
// New Object From Classes
$DBCon  = New ConnectDB();
$ARSql  = New Active_record();
$now    = date("Y-m-d");
$tgl    = tanggal($now);
header("Cache-control: no-cache, no-store,must-revalidate");
header("Content-type: application/octet-stream");
header("Content-type=appalication/vnd.ms-excel");
header("content-disposition:attachment;filename=Alat Tulis Kantor-$tgl.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA ALAT TULIS KANTOR</h2></center>
<table style="padding:10px" border="1">
    <tr style="background: #ecb3de; color: #000; padding:10px;">
     <th width="4%">No.</th>
     <th data-priority="1">Nama Alat</th>
     <th data-priority="3">Jumlah</th>
     <th data-priority="1">Keterangan</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('atk');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
echo "<tr>
        <td>$no.</td>
        <td>$rSkpiList->nama</td>
        <td>$rSkpiList->jumlah</td>
        <td>$rSkpiList->keterangan</td>

</tr>";
$no++;
}
?>
</tbody>
</table>

  
                                      

