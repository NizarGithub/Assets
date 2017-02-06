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
header("Content-type=appalication/vnd.ms-word");
header("content-disposition:attachment;filename=Bejana-$tgl.doc");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA BEJANA</h2></center>
<table style="padding:10px" border="1">
    <tr style="background: #ecb3de; color: #000; padding:10px;">
     <th width="4%">No.</th>
     <th data-priority="1">SN</th>
     <th data-priority="3">No. Ijin</th>
     <th data-priority="1">Ijin Habis</th>
     <th data-priority="3">Merek</th>
     <th data-priority="3">Kapasitas</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('bejana');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
    if($no%2=='0') {
        $bg= "style='background:#f5f5f5'";
    }else{
     $bg= "style='background:#fff'";    
    }
echo "<tr $bg>
        <td>$no.</td>
        <td>$rSkpiList->sn</td>
        <td>$rSkpiList->no_ijin</td>
        <td>".tanggal($rSkpiList->ijin_habis)."</td>
        <td>$rSkpiList->merk</td>
        <td>$rSkpiList->kapasitas</td>

</tr>";
$no++;
}
?>
</tbody>
</table>
                                      

