<?php
session_start();
error_reporting(0);
if (empty($_SESSION['id_siswa']) AND empty($_SESSION['akses'])){
    header('location: login.php?error=no_akses');
}
else{
include "../config.php";
$dbnew = new Connection();
require '../system/minify_html.php';
ob_start("minify_html");

$soal = mysql_query("SELECT * FROM quiz_pilganda where id_tq='$_POST[id_topik]'");
$pilganda = mysql_num_rows($soal);
$soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$_POST[id_topik]'");
$esay = mysql_num_rows($soal_esay);
//jika ada pilihan ganda dan ada esay
if (!empty($pilganda) AND !empty($esay)){

//jika ada inputan soal pilganda
if(!empty($_POST['jawaban_pilganda'])){
//    $benar = 0;
//    $salah = 0;
//    foreach($_POST['jawaban_pilganda'] as $key => $value){
//    $cek = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_quiz=$key");
//    while($c = mysql_fetch_array($cek)){
//        $jawaban = $c['status'];
//    }
//    if($value==$jawaban){
//        $benar++;
//    }else{
//        $salah++;
//    }
//}
//
//$jumlah = $_POST['jumlahsoalpilganda'];
//$tidakjawab = $jumlah - $benar - $salah;
//$persen = $benar / $jumlah;
//$hasil = $persen * 100;
$jawaban_pilganda = $_POST['jawaban_pilganda'];
$jumlah = count($jawaban_pilganda);
$no = 1;
echo "<table><thead><tr><th>No.</th><th>Jawaban</th><th>Status</th><th>Poin</th></tr></thead>";
echo "<tbody>";
foreach ($jawaban_pilganda as $key) {
    $jawaban = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_jawaban='$key'");
    $djawaban = mysql_fetch_array($jawaban);
    if($djawaban['status']=='B') {
        $status = "Benar";
        $poin = 20;
    }
    else {
        $status = "Salah";
        $poin = 0;
    }

echo "<tr><td>$no.</td><td>$key</td><td>$status</td><td>$poin</td></tr>";


//mysql_query("INSERT INTO nilai (id_tq, id_siswa, benar, salah, tidak_dikerjakan,persentase)
//             VALUES ('$_POST[id_topik]','$_SESSION[idsiswa]','$benar','$salah','$tidakjawab','$hasil')");
$no++;
$poin+=$poin;
$jumlahp = $poin;
}
echo "</tr><tfoot><tr><td colspan=3>Jumlah</td><td>".$jumlahp."</td></tr></tfoot>";

echo "</table>";
}
//elseif (empty($_POST['jawaban_pilganda'])){
////    $jumlah = $_POST['jumlahsoalpilganda'];
////    mysql_query("INSERT INTO nilai (id_tq, id_siswa, benar, salah, tidak_dikerjakan,persentase)
////                           VALUES ('$_POST[id_topik]','$_SESSION[idsiswa]','0','0','$jumlah','0')");
//}

//jika ada inputan soal esay
//if(!empty($_POST['soal_esay'])){
//    foreach($_POST['soal_esay'] as $key2 => $value){
//    $jawaban = $value;
//    $cek = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz=$key2");
//    while($data = mysql_fetch_array($cek)){
////        mysql_query("INSERT INTO jawaban(id_tq,id_quiz,id_siswa,jawaban)
////                                 VALUES('$_POST[id_topik]','$data[id_quiz]','$_SESSION[idsiswa]','$jawaban')");
//
//    }
//
//    }
//
//}
//elseif (empty($_POST['soal_esay'])){
////    mysql_query("INSERT INTO jawaban(id_tq,id_quiz,id_siswa,jawaban)
////                                 VALUES('$_POST[id_topik]','$data[id_quiz]','$_SESSION[idsiswa]','')");
//}



}

//jika soal hanya esay
//if (empty($pilganda) AND !empty($esay)){
//    //jika ada inputan soal esay
//if(!empty($_POST['soal_esay'])){
//    foreach($_POST['soal_esay'] as $key2 => $value){
//    $jawaban = $value;
//    $cek = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz=$key2");
//    while($data = mysql_fetch_array($cek)){
//        mysql_query("INSERT INTO jawaban(id_tq,id_quiz,id_siswa,jawaban)
//                                 VALUES('$_POST[id_topik]','$data[id_quiz]','$_SESSION[idsiswa]','$jawaban')");
//
//    }
//
//    }
//
//}
//elseif (empty($_POST['soal_esay'])){
//    mysql_query("INSERT INTO jawaban(id_tq,id_quiz,id_siswa,jawaban)
//                                 VALUES('$_POST[id_topik]','$data[id_quiz]','$_SESSION[idsiswa]','')");
//}
//header ('location:home');
//}
//
////jika soal hanya pilihan ganda
//if (!empty($pilganda) AND empty($esay)){
//    //jika ada inputan soal pilganda
//if(!empty($_POST['soal_pilganda'])){
//    $benar = 0;
//    $salah = 0;
//    foreach($_POST['soal_pilganda'] as $key => $value){
//    $cek = mysql_query("SELECT * FROM quiz_pilganda WHERE id_quiz=$key");
//    while($c = mysql_fetch_array($cek)){
//        $jawaban = $c['kunci'];
//    }
//    if($value==$jawaban){
//        $benar++;
//    }else{
//        $salah++;
//    }
//}
//
//$jumlah = $_POST['jumlahsoalpilganda'];
//$tidakjawab = $jumlah - $benar - $salah;
//$persen = $benar / $jumlah;
//$hasil = $persen * 100;
//
//mysql_query("INSERT INTO nilai (id_tq, id_siswa, benar, salah, tidak_dikerjakan,persentase)
//                           VALUES ('$_POST[id_topik]','$_SESSION[idsiswa]','$benar','$salah','$tidakjawab','$hasil')");
//
//}
//elseif (empty($_POST['soal_pilganda'])){
//    $jumlah = $_POST['jumlahsoalpilganda'];
//    mysql_query("INSERT INTO nilai (id_tq, id_siswa, benar, salah, tidak_dikerjakan,persentase)
//                           VALUES ('$_POST[id_topik]','$_SESSION[idsiswa]','0','0','$jumlah','0')");
//}
//header ('location:home');
//}
//
//}
}
?>
