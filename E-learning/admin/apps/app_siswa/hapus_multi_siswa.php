<?php
$cekid  =   $_POST['cek_data'];
for($i=0;$i<count($cekid);$i++) {
    $data = mysql_query("SELECT * FROM siswa WHERE id_siswa='$cekid[$i]'");
    $dp = mysql_fetch_array($data);
    if($dp['foto']!='') {
        unlink("../Foto/siswa/$dp[foto]");
        mysql_query("DELETE FROM siswa WHERE id_siswa='$cekid[$i]'");
    }
    else {
        mysql_query("DELETE FROM siswa WHERE id_siswa='$cekid[$i]'");
    }
    header('location:index.php?app=siswa');
}
