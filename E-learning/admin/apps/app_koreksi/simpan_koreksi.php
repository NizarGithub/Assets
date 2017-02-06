<form action="" method="post">
<div id="app_header">
    <div class="warp_app_header">
        <div class="app_title">Hasil Nilai Koreksi Jawaban</div>
        <div class="app_link">
            <input type="submit" name="submit" value="Simpan nilai" class="btn btn-md btn-success">
            <a class="btn btn-default" href="index.php?app=soal&id_topik=<?php echo $_GET['id_topik'] ;?>" title="Batal"><i class="icon-reply"></i> Kembali</a>
        </div>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr><th>No.</th><th>Jawaban</th><th>Nilai</th></tr>
    </thead>
    <tbody>
        <?php
        $jawaban = $_POST['jawaban'];
        $nilai = $_POST['poin'];
        $id_siswa = $_POST['id_siswa'];
        $id_ujian = $_POST['id_ujian'];
        $jumlah4 = count($nilai);
        $jumlah = 0;
        for($i=1;$i<=$jumlah4;$i++) {
            $a = $i - 1;
            $jumlah = $jumlah + $nilai[$a];
            echo "<tr><td>$i.</td><td>$jawaban[$a]</td><td>$nilai[$a]</td></tr>";
        }
        ?>
        <tr><td colspan="2">Jumlah nilai</td><td><?php echo $jumlah;?></td></tr>
        <input type="hidden" name="id_siswa" value="<?php echo $_POST['id_siswa'];?>">
        <input type="hidden" name="id_ujian" value="<?php echo $_POST['id_ujian'];?>">
        <input type="hidden" name="nilai_total" value="<?php echo $jumlah;?>">
    </tbody>
    <tfoot>
    </tfoot>
</table>
</form>
<?php
if(isset($_POST['submit'])) {
    $nilai = $_POST['nilai_total'];
    $id_siswa = $_POST['id_siswa'];
    $cek_kelas = mysql_query("SELECT * FROM siswa WHERE id_siswa=''");
    $data_kelas = mysql_fetch_array($cek_kelas);
    $id_ujian = $_POST['id_ujian'];
    mysql_query("INSERT INTO nilai_soal_esay VALUES('','$id_ujian','$id_siswa','$nilai')");
    mysql_query("UPDATE siswa_sudah_mengerjakan SET koreksi='S' WHERE id_siswa='$id_siswa' && id_tq='$id_ujian'");
    header('location: index.php?app=koreksi&act=detail&idq='.$id_ujian.'&idk='.$data_kelas[id_kelas]);
}