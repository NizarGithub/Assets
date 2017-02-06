<?php
/*
 * Informasi tentang file dan lisensi pembuatan :
 * Creator    : IBeESNay
 * Created on : 24 Feb 15, 21:39:07
 * Author     : Admin
 * © Copyright and Powered by IBeESNay.
 */
header("Content-type: application/octet-stream");
header("Content-type=appalication/vnd.ms-word");
header("content-disposition:attachment;filename=laporantransaksi.doc");

require '../../config.php';
require 'terbilang.php';

$dbconn = new Connection();
$idk = $_GET['id_kelas'];
$idq = $_GET['id_ujian'];
$id_tq = $_GET['idq'];
$qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$idq'");
$dujian = mysql_fetch_object($qujian);
$qnkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$idk'");
$dnkelas = mysql_fetch_object($qnkelas);
$qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dujian->id_matapelajaran'");
$dmapel = mysql_fetch_object($qmapel);
$id_kelas = explode(",",$dujian->id_kelas);
$cek_pilganda = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$idq'");
$jumlah_pilganda = mysql_num_rows($cek_pilganda);
$cek_soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$idq'");
$jumlah_soal_esay = mysql_num_rows($cek_soal_esay);
$jenis = $_GET['jenis'];
?>
<h3 style="text-align: center; font-family: arial; text-transform: uppercase">Laporan nilai hasil ujian
</h3>
<table align="center" border="0" style="text-align: left; font-size: 16px; font-family: arial; padding: 5px; text-transform: capitalize">
    <tr>
        <td>Mata Pelaajaran</td><td>:</td><td><?php echo $dmapel->nama;?></td>
    </tr>
    <tr>
        <td>Nama ujian</td><td>:</td><td><?php echo $dujian->judul;?></td>
    </tr>
    <tr>
        <td>Kelas</td><td>:</td><td><?php echo $dnkelas->nama;?></td>
    </tr>
</table>
<br>
<?php
if($jenis=='semua') {
?>
<form action="" method="post">
    <table align="center" style="padding: 10px; font-family: arial" border="1" cellspacing="0" cellpadding="0" class= "data table-condensed">
        <thead>
            <tr style="background: #ccc; color: #333">
                <th style="width:5% !important;">No.
                </th>
                <th style="width:10% !important;">Nama Siswa</th>
                <th style="width:10% !important;">Status</th>
                <th style="width:10% !important; text-align: center">Nilai PG</th>
                <th style="width:10% !important; text-align: center">Nilai Essay</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                        $aksi = "<a href=?app=koreksi&act=mulai_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."' class='btn'><i class='icon-ok'></i> Koreksi jawaban</a>";
                        $nilai_esay = "<b class='text-danger'>Belum dikoreksi</b>";
                    } else {
                        $aksi = "<a href=?app=koreksi&act=edit_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."' class='btn'><i class='icon-pencil'></i> Edit koreksi</a>";
                        $nilai_esay = $data_nilai_esay->nilai;
                    }

                } else {
                    $status = "<b class='text-danger'>Belum mengerjakan</b>";
                    $nilai_pg = "-";
                    $nilai_esay = "-";
                }
                echo"<tr><td>$no.</td><td>$dkelas[nama_lengkap]</td><td>$status</td><td><center>$nilai_pg</center></td><td><center>$nilai_esay</center></td></tr>";
            $no++;
            } ?>
        </tbody>
    </table>
</form>
<?php }
else if($jenis=='pil_ganda') {
?>
    <table align="center" style="padding: 10px; font-family: arial" border="1" cellspacing="0" cellpadding="0" class= "data table-condensed">
        <thead>
            <tr style="background: #ccc; color: #333">
                <th style="width:5% !important;">No.
                </th>
                <th style="width:6% !important;">NIS</th>
                <th style="width:10% !important;">Nama Siswa</th>
                <th style="width:10% !important;">Status</th>
                <th style="width:5% !important; ">Nilai Angka</th>
                <th style="width:25% !important; ">Bilangan</th>
                <th style="width:10% !important; ">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                    $reset = "<a href='?app=koreksi&act=reset&id_siswa=$dkelas[id_siswa]&id_ujian=$idq'>Reset peserta ujian</a>";

                    if($nilai_pg>=$dmapel->kkm) {
                        $nilai_pg = $nilai_pg;
                        $bilangan = Terbilang($nilai_pg);
                        $keterangan = "<b class='text-success' style='color: blue'>Lulus</b>";
                    }
                    else {
                        $nilai_pg = $nilai_pg;
                        $bilangan = Terbilang($nilai_pg);
                        $keterangan = "<b class='text-danger' style='color: red'>Tidak lulus</b>";
                    }


                } else {
                    $status = "<b class='text-danger'>Belum mengerjakan</b>";
                    $nilai_pg = "-";
                    $bilangan ="-";
                    $reset = "-";
                    $keterangan = "-";
                }
                echo"<tr><td>$no.</td><td>$dkelas[nis]</td><td>$dkelas[nama_lengkap]</td><td>$status</td><td>$nilai_pg</td><td>$bilangan</td><td>".$keterangan."</td></tr>";
            $no++;
            } ?>
        </tbody>
    </table>
<?php }
else if($jenis=='essay') { ?>
    <table align="center" style="padding: 10px; font-family: arial" border="1" cellspacing="0" cellpadding="0" class= "data table-condensed">
        <thead>
            <tr style="background: #ccc; color: #333">
                <th style="width:5% !important;">No.
                </th>
                <th style="width:10% !important;">Nama Siswa</th>
                <th style="width:10% !important;" class='hidden-xs'>Status</th>
                <th style="width:10% !important; text-align: center">Nilai Essay</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                        $nilai_pg = $nilai_pg." - <b class='text-success'>Lulus</b>";
                    }
                    else {
                        $nilai_pg = $nilai_pg." - <b class='text-danger'>Tidak Lulus</b>";
                    }
                    if($data_pekerjaan->koreksi=='B') {
                        $aksi = "<a href=?app=koreksi&act=mulai_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."' class='btn'><i class='icon-ok'></i> Koreksi jawaban</a>";
                        $nilai_esay = "<b class='text-danger'>Belum dikoreksi</b>";
                    } else {
                        $aksi = "<a href=?app=koreksi&act=edit_koreksi&id_siswa=$dkelas[id_siswa]&id_ujian=$idq&token=".md5('koreksi')."'><i class='icon-pencil'></i> Edit koreksi</a>";
                        $nilai_esay = $data_nilai_esay->nilai;
                    }

                } else {
                    $status = "<b class='text-danger'>Belum mengerjakan</b>";
                    $nilai_pg = "-";
                    $nilai_esay = "-";
                }
                echo"<tr><td>$no.</td><td>$dkelas[nama_lengkap]</td><td>$status</td><td>$nilai_esay</center></td></tr>";
            $no++;
            } ?>
        </tbody>
    </table>
<?php } ?>
<script src="assets/js/bootstrap-editable.js"></script>