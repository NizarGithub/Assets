<?php
/* 
 * To Creator   : IBeESNay
 * To  © Copyright and Powered by IBeESNay
 */
$id_soal = $_GET['id_soal'];
$id_topil = $_GET['id_topik'];
mysql_query("DELETE FROM quiz_pilganda WHERE id_quiz='$id_soal'");
header('location: index.php?app=soal&act=daftar_soal_ganda&id_topik='.$id_topil);

