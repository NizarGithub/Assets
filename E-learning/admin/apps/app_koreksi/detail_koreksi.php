<?php
$id_tq = $_GET['idq'];
$qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
$dujian = mysql_fetch_object($qujian);
$qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dujian->id_matapelajaran'");
$dmapel = mysql_fetch_object($qmapel);
$id_kelas = explode(",",$dujian->id_kelas);
$cek_pilganda = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$id_tq'");
$jumlah_pilganda = mysql_num_rows($cek_pilganda);
$cek_soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$id_tq'");
$jumlah_soal_esay = mysql_num_rows($cek_soal_esay);
if($jumlah_pilganda > 0 && $jumlah_soal_esay > 0 ) {
?>
<div id="app_header">
            <div class="warp_app_header">
                <a class="btn btn-md btn-primary" href="system/download.php?act=excel&jenis=semua&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  Ms Excel</a>&nbsp;
                <a class="btn btn-md btn-primary" href="system/download.php?act=word&jenis=semua&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  Ms Word</a>&nbsp;
                <a class="btn btn-md btn-danger" href="system/download.php?act=pdf&jenis=semua&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  PDF</a>&nbsp;
                <a class="btn btn-md btn-default" href="index.php?app=koreksi&act=koreksi&id_topik=<?php echo $_GET['idq'];?>"><i class="icon-reply"></i>  Kembali</a>&nbsp;

                <div class="app_title">Data Peserta Ujian</div>
            </div>
</div>
<h3><i class="icon-info"></i> Informasi penting</h3>
<p>Reset peserta ujian berfungsi untuk menghapus data nilai berdsarkan data siswa yang dipilih <br>kemudian siswa bisa mengikuti kembali ujian pada modul ini.</p>

<form action="" method="post">
    <table class= "data table-condensed">
        <thead>
            <tr>								  
                <th style="width:5% !important;">No.
                </th>		
                <th style="width:10% !important;">Nama Siswa</th>
                <th style="width:10% !important;">Status</th>
                <th style="width:10% !important; text-align: center">Nilai PG</th>
                <th style="width:10% !important; text-align: center">Nilai Essay</th>
                <th style="width:20% !important;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $idk = $_GET['idk'];
            $idq = $_GET['idq'];
            $qkelas = mysql_query("SELECT * FROM siswa WHERE id_kelas='$idk' ORDER BY nama_lengkap ASC");
            $no = 1;
            while($dkelas = mysql_fetch_array($qkelas)) {
                $cek_pekerjaan = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $cek_jumlah = mysql_num_rows($cek_pekerjaan);
                $data_pekerjaan = mysql_fetch_object($cek_pekerjaan);
                $cek_nilai_pg = mysql_query("SELECT * FROM nilai WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $data_nilai_pg = mysql_fetch_object($cek_nilai_pg);
                $cek_nilai_esay = mysql_query("SELECT * FROM nilai_soal_esay WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $data_nilai_esay = mysql_fetch_object($cek_nilai_esay);
                
                if($cek_jumlah > 0 ) { 
                    $status = "<b class='text-success'>Sudah mengerjakan</b>";
                    $nilai_pg = $data_nilai_pg->persentase;
                    if($nilai_pg>=$dmapel->kkm) {
                        $nilai_pg = "<b class='text-success'>$nilai_pg</b>";
                    }
                    else {
                        $nilai_pg = "<b class='text-danger'>$nilai_pg</b>";
                    }
                    if($data_pekerjaan->koreksi=='B') {
                        $aksi = "<a onclick=\"return confirm('Yakin ingin mereset peserta ujian ini ?');\" href=?app=koreksi&act=mulai_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."' class='btn'><i class='icon-ok'></i> Koreksi jawaban</a>";
                        $nilai_esay = "<b class='text-danger'>Belum dikoreksi</b>";
                    } else {
                        //$aksi = "<a href=?app=koreksi&act=edit_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."' class='btn'><i class='icon-pencil'></i> Edit koreksi</a>";
                        $aksi = "";
                        $nilai_esay = $data_nilai_esay->nilai;
                    }

                } else {
                    $status = "<b class='text-danger'>Belum mengerjakan</b>";
                    $nilai_pg = "-";
                    $nilai_esay = "-";
                }
                echo"<tr><td>$no.</td><td>$dkelas[nama_lengkap]</td><td>$status</td><td><center>$nilai_pg</center></td><td><center>$nilai_esay</center></td><td>$aksi&nbsp;&nbsp;<a class='btn btn-default' href='?app=koreksi&act=reset&id_siswa=$dkelas[id_siswa]&id_ujian=$idq'>Reset peserta ujian</a></td></tr>";
            $no++;
            } ?>
        </tbody>			
    </table>
</form>
<?php }
else if($jumlah_pilganda > 0 && $jumlah_soal_esay < 1) {
?>
<div id="app_header">
            <div class="warp_app_header">
                <a class="btn btn-md btn-primary" href="system/download.php?act=excel&jenis=pil_ganda&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  Ms Excel</a>&nbsp;
                <a class="btn btn-md btn-primary" href="system/download.php?act=word&jenis=pil_ganda&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  Ms Word</a>&nbsp;
                <a class="btn btn-md btn-danger" href="system/download.php?act=pdf&jenis=pil_ganda&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  PDF</a>&nbsp;
                <a class="btn btn-md btn-default" href="index.php?app=koreksi&act=koreksi&id_topik=<?php echo $_GET['idq'];?>"><i class="icon-reply"></i>  Kembali</a>&nbsp;
                <div class="app_title">Data Peserta Ujian</div>
            </div>
</div><br><br>
<h3><i class="icon-info"></i> Informasi penting</h3>
<p>Reset peserta ujian berfungsi untuk menghapus data nilai berdsarkan data siswa yang dipilih <br>kemudian siswa bisa mengikuti kembali ujian pada modul ini.</p>

<form action="" method="post">
    <table class= "data table-condensed">
        <thead>
            <tr>
                <th style="width:5% !important;">No.
                </th>
                <th style="width:6% !important;">NIS</th>
                <th style="width:10% !important;">Nama Siswa</th>
                <th style="width:10% !important;">Status</th>
                <th style="width:5% !important; ">Nilai</th>
                <th style="width:10% !important; ">Keterangan</th>
                <th style="width:10% !important;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $idk = $_GET['idk'];
            $idq = $_GET['idq'];
            $qkelas = mysql_query("SELECT * FROM siswa WHERE id_kelas='$idk' ORDER BY nama_lengkap ASC");
            $no = 1;
            while($dkelas = mysql_fetch_array($qkelas)) {
                $cek_pekerjaan = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $cek_jumlah = mysql_num_rows($cek_pekerjaan);
                $data_pekerjaan = mysql_fetch_object($cek_pekerjaan);
                $cek_nilai_pg = mysql_query("SELECT * FROM nilai WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $data_nilai_pg = mysql_fetch_object($cek_nilai_pg);
                $cek_nilai_esay = mysql_query("SELECT * FROM nilai_soal_esay WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $data_nilai_esay = mysql_fetch_object($cek_nilai_esay);

                if($cek_jumlah > 0 ) {
                    $status = "<b class='text-success'>Sudah mengerjakan</b>";
                    $nilai_pg = $data_nilai_pg->persentase;
                    $reset = "<a onclick=\"return confirm('Yakin ingin mereset peserta ujian ini ?');\" class='btn btn-default' href='?app=koreksi&act=reset&id_siswa=$dkelas[id_siswa]&id_ujian=$idq'>Reset peserta ujian</a>";

                    if($nilai_pg>=$dmapel->kkm) {
                        $nilai_pg = $nilai_pg;
                        $keterangan = "<b class='text-success'>Lulus</b>";
                    }
                    else {
                        $nilai_pg = $nilai_pg;
                        $keterangan = "<b class='text-danger'>Tidak lulus</b>";
                    }
                    

                } else {
                    $status = "<b class='text-danger'>Belum mengerjakan</b>";
                    $nilai_pg = "....";
                    $reset = "....";
                    $keterangan = "....";
                }
                echo"<tr><td>$no.</td><td>$dkelas[nis]</td><td>$dkelas[nama_lengkap]</td><td>$status</td><td>$nilai_pg</td><td>".$keterangan."</td><td>&nbsp;&nbsp;".$reset."</td></tr>";
            $no++;
            } ?>
        </tbody>
    </table>
</form>
<?php }
else if($jumlah_pilganda < 1 && $jumlah_soal_esay > 0) { ?>
<div id="app_header">
            <div class="warp_app_header">
                <a class="btn btn-md btn-primary" href="system/download.php?act=excel&jenis=essay&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  Ms Excel</a>&nbsp;
                <a class="btn btn-md btn-primary" href="system/download.php?act=word&jenis=essay&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  Ms Word</a>&nbsp;
                <a class="btn btn-md btn-danger" href="system/download.php?act=pdf&jenis=essay&id_kelas=<?php echo $_GET['idk'].'&id_ujian='.$_GET['idq'];?>"><i class="icon-download"></i>  PDF</a>&nbsp;
                <a class="btn btn-md btn-default" href="index.php?app=koreksi&act=koreksi&id_topik=<?php echo $_GET['idq'];?>"><i class="icon-reply"></i>  Kembali</a>&nbsp;
                <div class="app_title">Data Peserta Ujian</div>
            </div>
</div>
<h3><i class="icon-info"></i> Informasi penting</h3>
<p>Reset peserta ujian berfungsi untuk menghapus data nilai berdsarkan data siswa yang dipilih <br>kemudian siswa bisa mengikuti kembali ujian pada modul ini.</p>
<form action="" method="post">
    <table class= "data table-condensed">
        <thead>
            <tr>
                <th style="width:5% !important;">No.
                </th>
                <th style="width:10% !important;">Nama Siswa</th>
                <th style="width:10% !important;" class='hidden-xs'>Status</th>
                <th style="width:10% !important; text-align: center">Nilai Essay</th>
                <th style="width:20% !important;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $idk = $_GET['idk'];
            $idq = $_GET['idq'];
            $qkelas = mysql_query("SELECT * FROM siswa WHERE id_kelas='$idk' ORDER BY nama_lengkap ASC");
            $no = 1;
            while($dkelas = mysql_fetch_array($qkelas)) {
                $cek_pekerjaan = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $cek_jumlah = mysql_num_rows($cek_pekerjaan);
                $data_pekerjaan = mysql_fetch_object($cek_pekerjaan);
                $cek_nilai_pg = mysql_query("SELECT * FROM nilai WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $data_nilai_pg = mysql_fetch_object($cek_nilai_pg);
                $cek_nilai_esay = mysql_query("SELECT * FROM nilai_soal_esay WHERE id_siswa='$dkelas[id_siswa]' && id_tq='$idq'");
                $data_nilai_esay = mysql_fetch_object($cek_nilai_esay);

                if($cek_jumlah > 0 ) {
                    $status = "<b class='text-success'>Sudah mengerjakan</b>";
                    $reset = "<a onclick=\"return confirm('Yakin ingin mereset peserta ujian ini ?');\"  class='btn btn-default' href='?app=koreksi&act=reset&id_siswa=$dkelas[id_siswa]&id_ujian=$idq'>Reset peserta ujian</a>";
                    $nilai_pg = $data_nilai_pg->persentase;
                    if($nilai_pg>=$dmapel->kkm) {
                        $nilai_pg = $nilai_pg." - <b class='text-success'>Lulus</b>";
                    }
                    else {
                        $nilai_pg = $nilai_pg." - <b class='text-danger'>Tidak Lulus</b>";
                    }
                    if($data_pekerjaan->koreksi=='B') {
                        $aksi = "<a onclick=\"return confirm('Yakin ingin mereset peserta ujian ini ?');\" href=?app=koreksi&act=mulai_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."' class='btn'><i class='icon-ok'></i> Koreksi jawaban</a>";
                        $nilai_esay = "<b class='text-danger'>Belum dikoreksi</b>";
                    } else {
                        //$aksi = "<a href=?app=koreksi&act=edit_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."'><i class='icon-pencil'></i> Edit koreksi</a>";
                        $aksi = "";
                        $nilai_esay = $data_nilai_esay->nilai;
                    }

                } else {
                    $status = "<b class='text-danger'>Belum mengerjakan</b>";
                    $nilai_esay = "-";
                    $reset = "....";
                }
                echo"<tr><td>$no.</td><td>$dkelas[nama_lengkap]</td><td>$status</td><td>$nilai_esay</center></td><td>$aksi&nbsp;&nbsp;".$reset."</td></tr>";
            $no++;
            } ?>
        </tbody>
    </table>
</form>
<?php } ?>
<script src="assets/js/bootstrap-editable.js"></script>
