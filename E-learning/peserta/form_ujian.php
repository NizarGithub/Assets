<?php
$cek_siswa = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_tq='$_POST[id]' AND id_siswa='$_SESSION[id_siswa]'");
$info_siswa = mysql_fetch_array($cek_siswa);
if ($info_siswa[hits]<= 0){
    //mysql_query("INSERT INTO siswa_sudah_mengerjakan (id_tq,id_siswa,hits) VALUES ('$_POST[id]','$_SESSION[id_siswa]',hits+1)");
}
elseif ($info_siswa[hits] > 0){
}

$alfa = array("","A","B","C","D","E");
$soal = mysql_query("SELECT * FROM quiz_pilganda where id_tq='$_POST[id]' ORDER BY rand()");
$pilganda = mysql_num_rows($soal);
$soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$_POST[id]'");
$esay = mysql_num_rows($soal_esay);
if (!empty($pilganda) AND !empty($esay)){
echo "<div class='alert alert-info'><h3 class='text-info'>Daftar Soal Pilihan Ganda :</h3></div><br>
    <table class='table table-condensed table-hover' cellspacing='0' cellspacing='0' style='border: 0' border='0'>
    <input type=hidden name=id_topik value='$_POST[id]'>";

$nosoal = 1;
while($s = mysql_fetch_array($soal)){
    $qpilganda = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_quiz='$s[id_quiz]' ORDER BY rand()");
    $no = 1;
    if ($s[gambar]!=''){
        echo "<tr class='success'><td><h4>&nbsp;&nbsp;$nosoal.</h4></td><td><h4>".html_entity_decode($s['pertanyaan'])."</h4></td></tr>";
        echo "<tr><td></td><td><img src='foto_soal_pilganda/medium_$s[gambar]'></td></tr>";
        while($dpilganda = mysql_fetch_array($qpilganda)) {
            echo "<tr><td></td><td><label><input type=radio name=jawaban_pilganda[".$s['id_quiz']."] value='".$dpilganda['id_jawaban']."'>&nbsp;&nbsp;$alfa[$no]. &nbsp; ".$dpilganda['jawaban']."</label></td></tr>";

            $no++;
        }
    }
    else {
        echo "<tr class='success'><td><h4>&nbsp;&nbsp;$nosoal.</h4></td><td><h4>".html_entity_decode($s['pertanyaan'])."</h4></td></tr>";
        while($dpilganda = mysql_fetch_array($qpilganda)) {
            echo "<tr><td></td><td><label><input type=radio name=jawaban_pilganda[".$s['id_quiz']."] value='".$dpilganda['id_jawaban']."'>&nbsp;&nbsp;$alfa[$no]. &nbsp; ".$dpilganda['jawaban']."</label></td></tr>";

            $no++;
        }
    }
    $nosoal++;
}
echo "</table>";
echo "<div class='alert alert-info'><h3 class='text-info'>Daftar Soal Essay :</h3></div><br>
    <table class='table table-hover'>";
$no2=1;
while($e=  mysql_fetch_array($soal_esay)){
    if (!empty($e[gambar])){
    echo "<tr><td rowspan=4><h3>$no2.</h3></td><td><h3>".html_entity_decode($e['pertanyaan'])."</h3></td></tr>";
    echo "<tr><td><img src='foto_soal/medium_$e[gambar]'></td></tr>";
    echo "<tr><td>Jawab : </td></tr>";
    echo "<tr><td><textarea class='form-control' name=soal_esay[".$e['id_quiz']."] cols=95 rows=5></textarea></td></tr>";
    }else{
        echo "<tr><td rowspan=3><h3>$no2.</h3></td><td><h3>".html_entity_decode($e['pertanyaan'])."</h3></td></tr>";
        echo "<tr><td>Jawab : </td></tr>";
        echo "<tr><td><textarea class='form-control' name=soal_esay[".$e['id_quiz']."] cols=95 rows=4></textarea></td></tr>";
    }
    $no2++;
}
echo "</table>";

echo "<input type=hidden name='jumlah_pilganda' value=$pilganda>";
}

if (!empty($pilganda) AND empty($esay)){
echo "<div class='alert alert-info'><h3 class='text-info'>Daftar Soal Pilihan Ganda :</h3></div><br>
    <table class='table table-condensed table-hover' cellspacing='0' cellspacing='0' border='0'>
    <input type=hidden name=id_topik value='$_POST[id]'>";

$nosoal = 1;
while($s = mysql_fetch_array($soal)){
    $qpilganda = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_quiz='$s[id_quiz]' ORDER BY rand()");
    $no = 1;
    if ($s[gambar]!=''){
        echo "<tr><td><h4>$nosoal.</h4></td><td><h4>".html_entity_decode($s['pertanyaan'])."</h4></td></tr>";
        echo "<tr><td></td><td><img src='foto_soal_pilganda/medium_$s[gambar]'></td></tr>";
        while($dpilganda = mysql_fetch_array($qpilganda)) {
            echo "<tr><td></td><td><label><input type=radio name=jawaban_pilganda[".$s['id_quiz']."] value='".$dpilganda['id_jawaban']."'>&nbsp;&nbsp;$alfa[$no]. &nbsp; ".$dpilganda['jawaban']."</label></td></tr>";

            $no++;
        }
    }
    else {
        echo "<tr><td><h4>$nosoal.</h4></td><td><h4>".html_entity_decode($s['pertanyaan'])."</h4></td></tr>";
        while($dpilganda = mysql_fetch_array($qpilganda)) {
            echo "<tr><td></td><td><label><input type=radio name=jawaban_pilganda[".$s['id_quiz']."] value='".$dpilganda['id_jawaban']."'>&nbsp;&nbsp;$alfa[$no]. &nbsp; ".$dpilganda['jawaban']."</label></td></tr>";

            $no++;
        }
    }
    $nosoal++;
}
echo "</table>";
echo "<input type=hidden name='jumlah_pilganda' value=$pilganda>";
}

if (empty($pilganda) AND !empty($esay)){
echo "<div class='alert alert-info'><h3 class='text-info'>Daftar Soal Essay :</h3></div><br>
	<input type=hidden name=id_topik value='$_POST[id]'>
    <table class='table table-hover'>";
$no2=1;
while($e=  mysql_fetch_array($soal_esay)){
    if (!empty($e[gambar])){
    echo "<tr><td rowspan=4><h3>$no2.</h3></td><td><h3>".html_entity_decode($e['pertanyaan'])."</h3></td></tr>";
    echo "<tr><td><img src='foto_soal/medium_$e[gambar]'></td></tr>";
    echo "<tr><td>Jawab : </td></tr>";
    echo "<tr><td><textarea class='form-control' name=soal_esay[".$e['id_quiz']."] cols=95 rows=5></textarea></td></tr>";
    }else{
        echo "<tr><td rowspan=3><h3>$no2.</h3></td><td><h3>".html_entity_decode($e['pertanyaan'])."</h3></td></tr>";
        echo "<tr><td>Jawab : </td></tr>";
        echo "<tr><td><textarea class='form-control' name=soal_esay[".$e['id_quiz']."] cols=95 rows=4></textarea></td></tr>";
    }
    $no2++;
}
echo "</table>";

echo "<input type=hidden name='jumlah_pilganda' value=$pilganda>";
}

elseif (empty($pilganda) AND empty($esay)){
    echo "<script>window.alert('Maaf belum ada soal di Topik Ini.');
            window.location=(href='../murid.php?app=ujian')</script>";
}
?>
    <script src="http://localhost/apps/pos/assets/js/jquery.min.js"></script>
    <script src="http://localhost/apps/pos/assets/js/bootstrap.min.js"></script>
  </body>
</html>
