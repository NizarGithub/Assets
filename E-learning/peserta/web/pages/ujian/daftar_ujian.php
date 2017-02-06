<?php
$id_mapel = $_GET['id_mapel'];
$qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_matapelajaran='$id_mapel'");
$jujian = mysql_num_rows($qujian);
if($jujian > 0 ) {
?>
<div class="container">
<div class="info-grid-main">
    <?php while($dujian = mysql_fetch_object($qujian)) {
        $qpg = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$dujian->id_tq'");
        $jpg = mysql_num_rows($qpg);
        $qe = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$dujian->id_tq'");
        $je = mysql_num_rows($qe);
		$cek = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_tq='$dujian->id_tq' AND id_siswa = '$_SESSION[id_siswa]'");
		$data = mysql_fetch_array($cek);
		if($data['hits'] < 1) {
			$button = "<a class='btn btn-info btn-md' href='?app=ujian&act=mulai_ujian&id_ujian=$dujian->id_tq'>KERJAKAN</a>";
		}
		else {
			$button = "<a class='btn btn-danger btn-md disabled' href='?app=ujian&act=mulai_ujian&id_ujian=$dujian->id_tq'>SUDAH DI KERJAKAN</a>";
		}
        ?>
            <div class="col-md-4 info-grids-cr wow bounceIn" data-wow-delay="0.4s">
                    <div class="info-top" style="background: #008FD5; color: #f8f8f8">
                            <h3 style="text-transform: uppercase">Ujian <span style="color: #f8f8f8"><?php echo $dujian->judul ;?></span> </h3>
                    </div>
                    <div class="info-bott">
                            <h3 style="color: #fff">Informasi tentang ujian :</h3>
                            <table class="table table-bordered" style="color: #fff">
                                <tr><td>Waktu pengerjaan</td><td><?php echo $dujian->waktu_pengerjaan / 60;?> menit</td></tr>
                                <tr><td>Pilihan ganda</td><td><?php echo $jpg;?> soal</td></tr>
                                <tr><td>Essay</td><td><?php echo $je;?> soal</td></tr>

                            </table>
                            </p>
                    </div>
                    <div class="infogrid-bwn">
                            <?php echo $button;?>
                    </div>
            </div>
    <?php } ?>
      <div class="clearfix"> </div>
      <br><br>
</div>
</div>
<?php } else { ?>
<div class="container">
    <div class="banner-main">
<div class="info-grid-main">
<center><h1>Beluma ada ujian pada mata pelajaran ini.</h1><br>
<a href="?app=ujian" class="btn btn-lg btn-info">Kembali ke halaman sebelumnya</a>
</center>
    <br><br>
<div class="clearfix"> </div>
</div>
        </div></div>
<?php } ?>