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
header("content-disposition:attachment;filename=Metering-$tgl.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA METERING</h2></center>
<table style="padding:10px" border="1">
    <tr style="background: #ecb3de; color: #000; padding:10px;">
     <th width="4%">No.</th>
                              <th data-priority="1">SN</th>
                             <th data-priority="3">No. Ijin</th>
                             <th data-priority="1" width='10%'>Ijin Habis</th>
                             <th data-priority="3">TagNumber</th>
                             <th data-priority="3">Prover</th>
                             <th data-priority="6">Service</th>
                             <th data-priority="3">Type</th>
                             <th data-priority="6">Size</th>
                             <th data-priority="3">Volume</th>
                             <th data-priority="6">Manufacture</th>
                             <th data-priority="3">Remark</th>
                             <th data-priority="6">Test</th>
                             <th data-priority="6">Link SN</th>
                             <th data-priority="6">Ijin</th>
                             <th data-priority="6">Berita</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('metering');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
echo "<tr>
         <td>$no.</td>
        <td>$rSkpiList->sn</td>
        <td>$rSkpiList->no_ijin</td>
        <td>".tanggal($rSkpiList->ijin_habis)."</td>
        <td>$rSkpiList->tag_no</td>
        <td>$rSkpiList->prover</td>
        <td>$rSkpiList->service</td>
        <td>$rSkpiList->type</td>
        <td>$rSkpiList->size</td>
        <td>$rSkpiList->volume</td>
        <td>$rSkpiList->manufacture</td>
        <td>$rSkpiList->remark</td>
        <td>".tanggal($rSkpiList->test)."</td>
        <td>$rSkpiList->link_sn</td>
       <td>$rSkpiList->ijin</td>
        <td>$rSkpiList->berita</td>

</tr>";
$no++;
}
?>
</tbody>
</table>

  
                                      

