<?php
$qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$_GET[id_ujian]'");
$jujian = mysql_num_rows($qujian);
$dujian = mysql_fetch_object($qujian);
$qpg = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$dujian->id_tq'");
$jpg = mysql_num_rows($qpg);
$qe = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$dujian->id_tq'");
$je = mysql_num_rows($qe);
$cek = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_tq='$_GET[id_ujian]' AND id_siswa = '$_SESSION[id_siswa]'");
$data = mysql_fetch_array($cek);

if ($data[hits]<=0){
$topik = mysql_query("SELECT * FROM topik_quiz WHERE id_tq = '$_GET[id_ujian]'");
$t = mysql_fetch_array($topik);

?>
<div class="container">
    <div class="banner-main">
<div class="col-md-5 banner-left">
                            <div class="name_peserta wow zoomInLeft" data-wow-delay="0.5s"><a href="#" style="color: #fff"><?php echo 'Selamat mengerjakan <b>soal</b>';?></a></div>
<!--                             <div class="keterangan"><a href="#" style="color: #fff">Di halaman akses ujian sekolah</a></div>-->
<div class="col-md-12 wow bounceIn" data-wow-delay="0.4s" style="margin-left: -18px">
                    <div class="info-top">
                            <h3 style="text-transform: uppercase">Ujian <span class="gd-clr"><?php echo $dujian->judul ;?></span> </h3>
                    </div>
                    <div class="info-bott">
                            <img src="assets/images/c2.jpg" alt=""/>
                            <p>Informasi tentang ujian :
                            <table class="table table-bordered" style="color: #fff">
                                <tr><td>Waktu pengerjaan</td><td><?php echo $dujian->waktu_pengerjaan / 60;?> menit</td></tr>
                                <tr><td>Pilihan ganda</td><td><?php echo $jpg;?> soal</td></tr>
                                <tr><td>Essay</td><td><?php echo $je;?> soal</td></tr>

                            </table>
                            </p>
                        <h5></h5>
                    </div>
            </div>
			</div>
    
<?php
echo"<div class='col-md-7 banner-right wow zoomIn' data-wow-delay='0.9s' style='background: none;'>
    <form method=POST action='peserta/soal_ujian.php?'>
    <input type=hidden name='waktu' value='$t[waktu_pengerjaan]'>
    <input type=hidden name='id' value='$_GET[id_ujian]'>
    <div class='alert alert-info'><h3>Informasi : </h3>Baca dengan seksama dan teliti sebelum mengerjakan Ujian / Tugas<p class='garisbawah'></p></div>
    <table class='table table-hover'><thead><tr class=''><th>#</th><th>Keterangan</th></tr></thead>
    <tbody>
    <tr><td>1.</td><td>Pastikan koneksi jaringan terjamin dan bagus.</td></tr>
    <tr><td>2.</td><td>Pilih browser yang mendukung dengan program aplikasi ini yaitu Google Chrome dan Mozilla Firefox.</td></tr>
    <tr><td>3.</td><td>Jika terjadi mati lampu hubungi Pengajar Mata Pelajaran terkait untuk bisa ujian kembali.</td></tr>";

echo "</tbody></table><br>";
echo "Centang dibagian ini sebelum mengerjakan ujian !<hr>
     <input type='checkbox' id='cek' required>&nbsp;&nbsp;Saya akan mengerjakan ujian ini dengan sungguh-sungguh dan jujur.<hr>";

echo"<p class='garisbawah'></p>
    <input type=submit class='btn btn-info btn-md disabled' value='Mulai Mengerjakan' onclick='window.location.reload()'>&nbsp;&nbsp;
    <button class='btn btn-default btn-md' onclick=self.history.back()><i class='icon icon-reply'></i> Kembali</button>";
echo "<br><hr></div></div></div>";

}
elseif ($data[hits] >= 1){ ?>
    <div class="container">
    <div class="banner-main">
<div class="info-grid-main">
<center><h1>Anda sudah mengerjakan ujian ini sebelumnya.</h1><br>
<a href="?app=ujian" class="btn btn-lg btn-info">Kembali ke halaman sebelumnya</a>
</center>
    <br><br>
<div class="clearfix"> </div>
</div>
        </div></div>
<?php
}
?>
<script>
$(document).ready(function() {
   $("#cek").live('click', function() {
       $(".btn-info").removeClass("disabled");
   });
});
</script>
        <br><br>