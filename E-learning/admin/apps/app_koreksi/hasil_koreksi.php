<?php
echo "<form method=POST action='$aksi?module=quiz&act=inputnilai'><fieldset>
 <legend>Koreksi Nilai</legend>
 <dl class='inline'>";
$jum_soal = $_POST['jumlah_soal'];

        echo "<table id='table1' class='gtable sortable'><thead>
              <input type=hidden name=id_tq value='$_POST[id_topik]'>
              <input type=hidden name=id_siswa value='$_POST[id_siswa]'>";
        echo "<tr><th>No Soal</th><th>Jawaban</th><th>Nilai</th></tr></thead>";
        for ($i=1; $i<=$jum_soal; $i++){
            $nilai = $_POST['poin'];
            $jawaban = $_POST['jawab'.$i];
            if (!empty($jawaban)){
            echo "<tr><td>$i.</td><td>$jawaban</td><td>$nilai</td></tr>";
            }else{
                echo "<tr><td>$i.</td><td></td><td>$nilai</td></tr>";
            }

        }
        echo "</table>";

        $jumlah = 0;
        for ($i=1; $i<=$jum_soal; $i++){
            $bil = array($_POST['nilai'.$i]);
            for ($j=0; $j<=count($bil)-1; $j++){
            $jumlah = $jumlah + $bil[$j];
            }
        }
        $nilai = $jumlah / 100;
        $nilai2 = $nilai / $jum_soal;
        $nilai3 = $nilai2 * 100;
    echo "<h2>Nilai Keseluruhan = $nilai3</h2>";
    echo "<input type=hidden name=nilai value='$nilai3'>";
    echo "
          <input class='button blue' type=submit value=Simpan>
          <input class='button blue' type=button value=Kembali onclick=self.history.back()>
          ";
        echo "</dl></div>
              </fieldset></form>";

?>
