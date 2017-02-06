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
header("content-disposition:attachment;filename=JADWAL_ON_CALL.xls");
$tujuh_hari = gmdate("Y-m-d", time()+(60*60*7) + (24*60*60*7));
$sekarang   = date("Y-m-d");
$bln        = @$_GET['bulan'];
$tahun      = @$_GET['tahun'];
$no = 1;
if(@$_GET['periode']=='this_week') {
    $title = "JADWAL ON CALL MINGGU INI";
    $query  = $ARSql->query("SELECT * FROM jadwal_oncall WHERE tanggal BETWEEN '$sekarang' AND '$tujuh_hari' ORDER BY tanggal ASC");
} else if(@$_GET['periode']=='this_month') {
    $title = "JADWAL ON CALL BULAN ".strtoupper(getBulan(@$_GET[bulan]))." TAHUN $_GET[tahun]";
    $query  = $ARSql->query("SELECT * FROM jadwal_oncall WHERE bulan='$bln' AND tahun='$tahun' ORDER BY tanggal ASC");
}
?>
<h2 style="text-align: center"><?php echo $title;?></h2>
<?php
$jumlah     = $ARSql->numRows($query);
if($jumlah > 0 ) { ?>
<table border="1">
    <tr style="background: #555; color: #fff;">
     <th width="4%">No.</th>
     <th>Tanggal Tugas</th>
     <th >Nama Lengkap</th>
     <th >Email</th>
     <th >Kantor</th>
   </tr>
<tbody>
<?php
while ($rowOC = $ARSql->mf_object($query)) {
$petugas = $ARSql->getOne('petugas_oncall','id_petugas',$rowOC->id_petugas);
echo "<tr>
        <td>$no.</td>
        <td>".tanggal($rowOC->tanggal)."</td>
        <td>".$petugas->nama."</td>
        <td>".$petugas->email."</td>
        <td>".$petugas->kantor."</td>
</tr>";
$no++;
}
?>
</tbody>
</table>
<?php } else {
    echo "<h2>Tidak ada data jadwal</h2>";
}