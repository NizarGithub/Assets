<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
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
header("Content-type=appalication/vnd.ms-word");
header("content-disposition:attachment;filename=Pipe List-$tgl.doc");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA PIPE LIST</h2></center>
<table style="padding: 10px" cellpadding="0" cellspacing="0" border="1" align="center">
    <tr style="background: #ecb3de; color: #000;">
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
    if($no%2=='0') {
        $bg= "style='background:#f5f5f5'";
    }else{
     $bg= "style='background:#fff'";    
    }
echo "<tr $bg>
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