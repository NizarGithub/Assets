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
header("content-disposition:attachment;filename=Top Issue-$tgl.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA TOP ISSUE</h2></center>
<table style="padding:10px; alignment-adjust: middle; alignment-baseline: middle;" border="1">
    <tr style="background: #ecb3de; color: #000; padding:10px;">
     <th width="4%">No.</th>
     <th width="10%" data-priority="1">Tag No</th>
     <th style='alignment-adjust: middle; alignment-baseline: middle;' width="15%" data-priority="1">Problems</th>
     <th width="15%" data-priority="1">Criticality & Consequency</th>
     <th width="15%" data-priority="1">Rtl & Target</th>
     <th width="17%" data-priority="1">Status</th>
      <th width="5%" data-priority="3">Trafic</th>
      <th  width="5%" data-priority="3">Pic</th>
   </tr>
<tbody>
<?php
$no = 1;
$aSkpiList = $ARSql->getAll('top_issue');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
     if($rSkpiList->trafic=='1') {
        $trafic = "<td style=' background: blue; border-radius: 5px; color: blue'>00</td>";
    } elseif($rSkpiList->trafic=='2') {
        
        $trafic = "<td style='  background: green; border-radius: 5px; color: green'>00</td>";
    } elseif($rSkpiList->trafic=='3'){
        $trafic = "<td style=' background: yellow; border-radius: 5px; color: yellow'>00</td>"; 
    }else{
        $trafic = "<td style=' background: red; border-radius: 5px; color: red'>00</td>"; 
    }
echo "<tr>
        <td>$no.</td>
        <td>$rSkpiList->tag_no</td>
        <td style='alignment-adjust: middle; alignment-baseline: middle;'>".html_entity_decode($rSkpiList->problems)."</td>
        <td>".html_entity_decode($rSkpiList->critic_consq)."</td>
        <td>$rSkpiList->rtl_target</td>
        <td>$rSkpiList->status</td>
        $trafic
        <td>$rSkpiList->pic</td>

</tr>";
$no++;
}
?>
</tbody>
</table>

  
                                      

