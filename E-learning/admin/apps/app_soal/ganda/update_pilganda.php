<?php
/* 
 * Creator   : IBeESNay
 * © Copyright and Powered by IBeESNay
 */

if(isset($_POST['uhere'])) {
    $id_soal = $_POST['id_soal'];
    $id_topik = $_POST['id_topik'];
    $data = $_POST['pertanyaan'];
    $data = stripslashes($data);
    $pertanyaan = htmlspecialchars($data,ENT_QUOTES);
    $jawaban = $_POST['jawaban'];
    $tgl = date("Y-m-d");
    $key = $_POST['key'];
    $id_jawab = $_POST['id_jawaban'];
    mysql_query("UPDATE quiz_pilganda SET pertanyaan='$pertanyaan' WHERE id_quiz='$id_soal'");
    
    $jumlah = count($jawaban);
    for($i=1;$i<=$jumlah;$i++) {
        $a = $i - 1;
        mysql_query("UPDATE jawaban_pilganda SET jawaban='$jawaban[$a]' WHERE id_jawaban='$id_jawab[$a]'");
        
        mysql_query("UPDATE jawaban_pilganda SET status='B' where id_jawaban='$key'");
        mysql_query("UPDATE jawaban_pilganda SET status='S' where id_quiz='$id_soal' && id_jawaban!='$key'");
        
    }
    
    header('location: index.php?app=soal&act=edit_soal_ganda&id_soal='.$id_soal.'&id_topik='.$id_topik);
}

else if(isset($_POST['uout'])) {
    $id_soal = $_POST['id_soal'];
    $id_topik = $_POST['id_topik'];
    $data = $_POST['pertanyaan'];
    $data = stripslashes($data);
    $pertanyaan = htmlspecialchars($data,ENT_QUOTES);
    $jawaban = $_POST['jawaban'];
    $tgl = date("Y-m-d");
    $key = $_POST['key'];
    $id_jawab = $_POST['id_jawaban'];
    mysql_query("UPDATE quiz_pilganda SET pertanyaan='$pertanyaan' WHERE id_quiz='$id_soal'");
    
    $jumlah = count($jawaban);
    for($i=1;$i<=$jumlah;$i++) {
        $a = $i - 1;
        mysql_query("UPDATE jawaban_pilganda SET jawaban='$jawaban[$a]' WHERE id_jawaban='$id_jawab[$a]'");
        
        mysql_query("UPDATE jawaban_pilganda SET status='B' where id_jawaban='$key'");
        mysql_query("UPDATE jawaban_pilganda SET status='S' where id_jawaban!='$key' && id_quiz='$id_soal'");
        
    }
    
    header('location: index.php?app=soal&act=daftar_soal_ganda&id_topik='.$id_topik);
}