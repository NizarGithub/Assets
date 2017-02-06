<?php
$cekid  =   $_POST['cek_data'];
for($i=0;$i<count($cekid);$i++) {
    $data = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$cekid[$i]'");
    $dp = mysql_fetch_array($data);
    if($dp['foto']!='') {
        unlink("../Foto/pengajar/$dp[foto]");
        mysql_query("DELETE FROM pengajar WHERE id_pengajar='$cekid[$i]'");
    }
    else {
        mysql_query("DELETE FROM pengajar WHERE id_pengajar='$cekid[$i]'");
    }
    header('location:index.php?app=guru');
}
