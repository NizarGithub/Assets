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
header("content-disposition:attachment;filename=Thermography-$tgl.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA THERMOGRAPHY</h2></center>
<table style="padding:10px" border="1">
    <tr style="background: #99cc99; color: #000; padding:10px;">
     <th width="4%">No.</th>
                            <th >Judul</th>
                             <th>Area</th>
                             <th>Tag Number</th>
                             <th>Tanggal</th>
                             <th>User</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('termo_trend');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
echo "<tr>
         <td>$no.</td>
        <td>$rSkpiList->judul</td>
        <td>$rSkpiList->area</td>
        <td>$rSkpiList->tag_no</td>
        <td>".tanggal($rSkpiList->tgl)."</td>
        <td>$rSkpiList->user</td>
    

</tr>";
$no++;
}
?>
</tbody>
</table>

  
                                      

