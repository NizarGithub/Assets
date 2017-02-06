<?php
if(isset($_POST['sbaru'])) {
    $id_soal = $_POST['id_soal'];
    $id_topik = $_POST['id_topik'];
    $data = $_POST['pertanyaan'];
    $data = stripslashes($data);
    $pertanyaan = htmlspecialchars($data,ENT_QUOTES);
    $jawaban = $_POST['jawaban'];
    $tgl = date("Y-m-d");
    mysql_query("INSERT INTO quiz_pilganda VALUES('$id_soal','$id_topik','$pertanyaan','','$tgl','pilganda')");
    $jumlah_pg = $_POST['jumlah_pilganda'];
    for($i=1;$i<=$jumlah_pg;$i++) {
        $a = $i - 1;
        $key1 = $_POST['key_an'];
        $key2 = $_POST['key'];
        if($key2==$key1[$a]) {
            $key = "B";
        }
        else {
            $key = "S";
        }
            mysql_query("INSERT INTO jawaban_pilganda VALUES ('','$id_soal','$jawaban[$a]','$key')");
        }
    header('location: index.php?app=soal&act=add_soal_ganda&id_topik='.$id_topik);
}
else if(isset($_POST['skeluar'])) {
    $id_soal = $_POST['id_soal'];
    $id_topik = $_POST['id_topik'];
    $data = $_POST['pertanyaan'];
    $data = stripslashes($data);
    $pertanyaan = htmlspecialchars($data,ENT_QUOTES);
    $jawaban = $_POST['jawaban'];
    $tgl = date("Y-m-d");
    mysql_query("INSERT INTO quiz_pilganda VALUES('$id_soal','$id_topik','$pertanyaan','','$tgl','pilganda')");
    $jumlah_pg = $_POST['jumlah_pilganda'];
    for($i=1;$i<=$jumlah_pg;$i++) {
        $a = $i - 1;
        $key1 = $_POST['key_an'];
        $key2 = $_POST['key'];
        if($key2==$key1[$a]) {
            $key = "B";
        }
        else {
            $key = "S";
        }
        mysql_query("INSERT INTO jawaban_pilganda VALUES ('','$id_soal','$jawaban[$a]','$key')");
        }
    header('location: index.php?app=soal&&id_topik='.$id_topik);
}
?>