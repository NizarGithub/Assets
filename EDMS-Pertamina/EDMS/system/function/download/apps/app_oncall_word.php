<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
header("Content-type: application/octet-stream");
header("Content-type=appalication/vnd.ms-excel");
header("content-disposition:attachment;filename=laporantransaksi.xls");

require_once ('../../../../definer.php');
require_once ('../../../../'.'config.php');
require_once ('../../../../'.APP_SYSTEM_CLASS . 'Active_record_class.php');
require_once ('../../../../'.APP_SYSTEM_FUNCTION . 'General_function.php');
// New Object From Classes
$DBCon  = New ConnectDB();
$ARSql  = New Active_record();

header("Cache-control: no-cache, no-store,must-revalidate");
header("Content-type: application/octet-stream");
header("Content-type=appalication/vnd.ms-excel");
header("content-disposition:attachment;filename=laporantransaksi.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>PIPE LIST</h2></center>
<table border="1">
    <tr style="background: #555; color: #fff;">
     <th width="4%">No.</th>
     <th data-priority="1">Line No</th>
     <th data-priority="3">Ins</th>
     <th data-priority="1">NPS Dia</th>
     <th data-priority="3">NPS sch</th>
     <th data-priority="3">From</th>
     <th data-priority="6">Service</th>
     <th data-priority="3">VL</th>
     <th data-priority="6">To</th>
     <th data-priority="3">Press Desg</th>
     <th data-priority="6">Press Opr</th>
     <th data-priority="3">Temp Desg</th>
     <th data-priority="6">Temp Opr</th>
     <th data-priority="6">Remarks</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('pipe');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
echo "<tr>
        <td>$no.</td>
        <td>$rSkpiList->line_no</td>
        <td>$rSkpiList->ins</td>
        <td>$rSkpiList->nps</td>
        <td>$rSkpiList->nps_sch</td>
        <td>$rSkpiList->dari</td>
        <td>$rSkpiList->service</td>
        <td>$rSkpiList->vl</td>
        <td>$rSkpiList->untuk</td>
        <td>$rSkpiList->press_desg</td>
        <td>$rSkpiList->press_opr</td>
        <td>$rSkpiList->temp_desg</td>
        <td>$rSkpiList->temp_opr</td>
        <td>$rSkpiList->remarks</td>

</tr>";
$no++;
}
?>
</tbody>
</table>