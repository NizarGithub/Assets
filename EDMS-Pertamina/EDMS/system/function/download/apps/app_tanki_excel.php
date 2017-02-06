<?php
/*
 * Informasi tentang file dan lisensi pembuatan :
 * Creator    : IBeESNay
 * Created on : 24 Feb 15, 21:39:07
 * Author     : Admin
 * © Copyright and Powered by IBeESNay.
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
header("content-disposition:attachment;filename=Tangki-$tgl.xls");
?>
<style>
body {
    font-family: 'arial';
}
</style>
<center><h2>DATA TANGKI</h2></center>
<table style="padding:10px; border-color: #000;" border="1" align="center">
    <tr style="background: #76c1f6; color: #000; padding:10px;">
       <th width="4%">No.</th>
                             <th data-priority="1">TagNumber</th>
                             <th data-priority="3">TestDate</th>
                             <th data-priority="1">Type</th>
                             <th data-priority="3">Diameter</th>
                             <th data-priority="3">High</th>
                             <th data-priority="6">Capacity</th>
                             <th data-priority="3">Izin Kalibrasi</th>
                             <th data-priority="6">Kalibrasi Habis</th>
                             <th data-priority="3">Dibuat</th>
                             <th data-priority="6">Penggunaan Kal</th>
                             <th data-priority="3">Penggunaan Habis</th>
                             <th data-priority="6">Izin SKPP</th>
                             <th data-priority="6">SKPP Habis</th>
                             <th data-priority="6">User</th>


   </tr>
</thead>
<tbody>
  <?php
$no = 1;
$aSkpiList = $ARSql->getAll('tanki');
while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
echo "<tr>
        <td>$no.</td>
        <td>$rSkpiList->tag_no</td>
        <td>".tanggal($rSkpiList->test_date)."</td>
        <td>$rSkpiList->type</td>
        <td>$rSkpiList->diameter</td>
        <td>$rSkpiList->tinggi</td>
        <td>$rSkpiList->kapasitas</td>
        <td>$rSkpiList->ijin_kalibrasi</td>
        <td>".tanggal($rSkpiList->kalibrasi_habis)."</td>
        <td>$rSkpiList->dibuat</td>
        <td>$rSkpiList->penggunaan_kal</td>
        <td>".tanggal($rSkpiList->penggunaan_habis)."</td>
        <td>$rSkpiList->ijin_skkp</td>
        <td>".tanggal($rSkpiList->skkp_habis)."</td>
        <td>$rSkpiList->user</td>

</tr>";
$no++;
}
?>
</tbody>
</table>