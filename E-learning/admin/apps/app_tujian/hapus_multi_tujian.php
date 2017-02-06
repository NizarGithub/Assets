<?php
$cekid  =   $_POST['cek_data'];
for($i=0;$i<count($cekid);$i++) {
    mysql_query("DELETE FROM topik_quiz WHERE id_tq='$cekid[$i]'");
	$qpil_ganda  = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$cekid[$i]'");
	while($dpil_ganda  = mysql_fetch_object($qpil_ganda)) {
		$del_jawaban = mysql_query("DELETE FROM jawaban_pilganda WHERE id_quiz='$dpil_ganda->id_quiz'");
	}
    mysql_query("DELETE FROM quiz_pilganda WHERE id_tq='$cekid[$i]'");
    mysql_query("DELETE FROM quiz_esay WHERE id_tq='$cekid[$i]'");
    
}

header('location:index.php?app=tujian&id='.$_POST['id_mapel']);
