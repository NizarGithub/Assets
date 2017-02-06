<?php
$cekid  =   $_POST['cek_data'];
for($i=0;$i<count($cekid);$i++) {
    $data = mysql_query("SELECT * FROM admin WHERE id_admin='$cekid[$i]'");
    $dp = mysql_fetch_array($data);
    if($dp['foto']!='') {
        unlink("../Foto/admin/$dp[foto]");
        mysql_query("DELETE FROM admin WHERE id_admin='$cekid[$i]'");
    }
    else {
        mysql_query("DELETE FROM admin WHERE id_admin='$cekid[$i]'");
    }
    header('location:index.php?app=admin');
}
