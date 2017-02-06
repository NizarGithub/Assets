<?php
$id_tq = $_GET['id_ujian'];
$id_siswa = $_GET['id_siswa'];
$kelas = mysql_query("SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
$dkelas = mysql_fetch_object($kelas);
mysql_query("DELETE FROM siswa_sudah_mengerjakan WHERE id_siswa='$id_siswa' && id_tq='$id_tq'");
mysql_query("DELETE FROM nilai_soal_esay WHERE id_siswa='$id_siswa' && id_tq='$id_tq'");
mysql_query("DELETE FROM nilai WHERE id_siswa='$id_siswa' && id_tq='$id_tq'");
header('location:index.php?app=koreksi&act=detail&idq='.$id_tq.'&idk='.$dkelas->id_kelas);
?>