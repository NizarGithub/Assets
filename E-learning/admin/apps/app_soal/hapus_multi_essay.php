<?php
$id_tq  = $_POST['id_tq'];
$cekid  =   $_POST['cek_data'];
for($i=0;$i<count($cekid);$i++) {
    $data = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz='$cekid[$i]'");
    $dp = mysql_fetch_array($data);
    if($dp['gambar']!='') {
        unlink("../Foto/soal_essay/$dp[gambar]");
        mysql_query("DELETE FROM quiz_esay WHERE id_quiz='$cekid[$i]'");
    }
    else {
        mysql_query("DELETE FROM quiz_esay WHERE id_quiz='$cekid[$i]'");
    }
    header('location: index.php?app=soal&act=add_soal_essay&id_topik=61');
}
