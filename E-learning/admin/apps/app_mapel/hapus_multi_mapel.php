<?php
$cekid  =   $_POST['cek_data'];
for($i=0;$i<count($cekid);$i++) {
    mysql_query("DELETE FROM mata_pelajaran WHERE id='$cekid[$i]'");
    header('location:index.php?app=mapel');
}
