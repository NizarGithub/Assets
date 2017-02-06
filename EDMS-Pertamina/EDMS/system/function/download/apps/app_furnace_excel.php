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
header("content-disposition:attachment;filename=Furnace-$tgl.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA FURNACE</h2></center>
<table style="padding:10px" border="1">
    <tr style="background: #4df55d; color: #000; padding:10px;">
     <th>No</th>
                    <th data-priority="3">Tag No</th>
                    <th data-priority="3">SN</th>
                    <th data-priority="1">Size</th>
                    <th data-priority="1">Thickness</th>
                    <th data-priority="1">Material</th>
                    <th data-priority="3">Service</th>
                    <th data-priority="1">Press</th>
                    <th data-priority="3">Temp</th>
                    <th data-priority="3">Date</th>
                    <th data-priority="6">SKPP</th>
                    <th data-priority="6">Expired</th>
                    <th data-priority="6">Area</th>
                    <th data-priority="6">Keterangan</th>
                    <th data-priority="6">Used</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('furnace');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
echo "<tr>
         <td>$no.</td>
        <td>$rSkpiList->tag_no</td>
        <td>$rSkpiList->sn</td>
        <td>$rSkpiList->size</td>
        <td>$rSkpiList->thickness</td>
        <td>$rSkpiList->material</td>
        <td>$rSkpiList->service</td>
        <td>$rSkpiList->press</td>
        <td>$rSkpiList->temp</td>
        <td>".tanggal($rSkpiList->date)."</td>
        <td>$rSkpiList->skkp</td>
        <td>".tanggal($rSkpiList->expired)."</td>
        <td>$rSkpiList->area</td>
       <td>$rSkpiList->keterangan</td>
        <td>$rSkpiList->digunakan</td>

</tr>";
$no++;
}
?>
</tbody>
</table>

  
                                      

