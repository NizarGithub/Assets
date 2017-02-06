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
header("content-disposition:attachment;filename=Welder-$tgl.doc");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA WELDER</h2></center>
<table style="padding: 10px" cellpadding="0" cellspacing="0" border="1" align="center">
    <tr style="background: #ecb3de; color: #000;">
     <th width="4%">No.</th>
     <th data-priority="1">Nama</th>
     <th data-priority="3">Kualifikasi</th>
     <th data-priority="1">Posisi</th>
     <th data-priority="3">Diameter</th>
     <th data-priority="3">Thickness</th>
     <th data-priority="6">Material</th>
     <th data-priority="3">Berlaku</th>
     <th data-priority="6">Pengalaman</th>
     <th data-priority="3">PressDesg</th>
     <th data-priority="6">Project</th>
     <th data-priority="3">No. Handphone</th>
     <th data-priority="6">Email</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('welder');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
    if($no%2=='0') {
        $bg= "style='background:#f5f5f5'";
    }else{
     $bg= "style='background:#fff'";    
    }
echo "<tr $bg>
        <td>$no.</td>
        <td>$rSkpiList->nama</td>
        <td>$rSkpiList->kualifikasi</td>
        <td>$rSkpiList->posisi</td>
        <td>$rSkpiList->diameter</td>
        <td>$rSkpiList->thickness</td>
        <td>$rSkpiList->material</td>
        <td>".tanggal($rSkpiList->berlaku)."</td>
        <td>$rSkpiList->pengalaman</td>
        <td>$rSkpiList->project</td>
        <td>$rSkpiList->no_hp</td>
        <td>$rSkpiList->email</td>
        <td>$rSkpiList->no_sertifikat</td>

</tr>";
$no++;
}
?>
</tbody>
</table>
                                      

