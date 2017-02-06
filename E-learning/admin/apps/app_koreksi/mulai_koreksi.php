<?php
$qdsiswa = mysql_query("SELECT * FROM siswa WHERE id_siswa='$_GET[id_siswa]'");
$ddsiswa = mysql_fetch_object($qdsiswa);
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=koreksi&act=simpan_koreksi" id="form">
    <div id="app_header">
        <div class="warp_app_header">
            <div class="app_title">Daftar Jawaban Essay : <?php echo $ddsiswa->nama_lengkap;?></div>
            <div class="app_link">
                <a class="btn btn-default" href="index.php?app=koreksi&act=detail&idq=<?php echo $_GET['id_ujian'].'&idk='.$ddsiswa->id_kelas;?>" title="Batal"><i class="icon-reply"></i> Kembali</a>
            </div>
        </div>
    </div>
    <br />
    <?php
    $alfa = array("","A","B","C","D","E","F","G");
    $id_tq = $_GET['id_ujian'];
    $qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
    $dujian = mysql_fetch_object($qujian);
    $qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dujian->id_matapelajaran'");
    $dmapel = mysql_fetch_object($qmapel);
    $id_kelas = explode(",",$dujian->id_kelas);
    ?>
    <table class="table table-striped">
        <thead>
        <tr  class="success" width="20%">
            <td>Nama Mata Pelajaran</td><td>:</td><td><?php echo $dmapel->nama;?></td>
        </tr>
        <tr>
            <td class="row-title">Nama Ujian</td><td>:</td><td><?php echo $dujian->judul;?></td>
        </tr>
        <tr>
            <td>Kelas yang mengikuti ujian</td><td>:</td><td>
            <?php
            foreach($id_kelas as $dkelas) {
                $nkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$dkelas'");
                $nkelas1 = mysql_fetch_object($nkelas);
                echo "<span class='label label-success'>$nkelas1->nama</span>&nbsp;&nbsp;";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td class="row-title">Durasi ujian</td><td>:</td><td><?php echo $dujian->waktu_pengerjaan / 60; ;?> menit</td>
        </tr>
        <tr >
            <td>Keterangan ujian</td><td>:</td><td><?php echo $dujian->info ;?></td>
        </tr>

        </thead>
    </table>
    <?php
    echo $linkhalaman;
    $qsoal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='".$id_tq."'");
    $no = 1;
    while($dsoal_esay = mysql_fetch_object($qsoal_esay)){
    ?>
    <div class="box row" style="padding-bottom: 10px">
    <br>
    <input type="hidden" name="id_siswa" value="<?php echo $_GET['id_siswa'];?>">
    <input type="hidden" name="id_ujian" value="<?php echo $_GET['id_ujian'];?>">

    <div class="col-md-6">
    <table class="table table-striped table-bordered"  style="float: left">
        <tr>
            <th>Pertanyaan Nomor <span class="badge badge-info" style='background-color: #3a87ad;'><?php echo $no;?></span></th>
        </tr>
        <tr>
            <td align="left" style="text-align: left">
                <?php echo html_entity_decode($dsoal_esay->pertanyaan);?>
            </td>
            
        </tr>
        <tr>
            <td style="text-align: left;">
                <i class="icon-info"></i>&nbsp;&nbsp; Silahkan beri nilai atau poin pada jawaban &nbsp;.
            </td>
    </table>
    </div>
    <div class="col-md-6">
    <table class="table table-bordered">
        <tr class="success">
            <th width="9%">Jawaban</th>
	</tr>
	<?php
	$qjawaban_siswa = mysql_query("SELECT * FROM jawaban WHERE id_quiz='".$dsoal_esay->id_quiz."' && id_siswa='$_GET[id_siswa]'");
        $djawaban_siswa = mysql_fetch_object($qjawaban_siswa);
	?>
	<tr>
            <td style="text-align: left"><?php echo $djawaban_siswa->jawaban;?></td>
	</tr>
        <tr>
            <td style="text-align: left">
                <input type="hidden" name="jawaban[]" value="<?php echo $djawaban_siswa->jawaban;?>">
                <input maxlength="3" value="0" type="text" name="poin[]" class="form-control" size="5"> &nbsp;&nbsp;<span style="pdding-top: 10px;">Masukan nilai angka (misal 20 dsb)</span>
            </td>
	</tr>
    </table>
    </div>

    <div style="width: 100%; height: 20px"></div>
    </div>
    <br>
    <?php
    $no++;
    }
    ?>
    <br>
    <input type="submit" value="Simpan" class="btn btn-md btn-success">
    </form>