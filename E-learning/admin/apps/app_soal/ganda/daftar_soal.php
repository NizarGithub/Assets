<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=soal&act=hapus_multi_essay" id="form">
    <div id="app_header">
        <div class="warp_app_header">
            <div class="app_title">Pengelolaan Soal Pilihan Ganda</div>
            <div class="app_link">
                <a class="add btn btn-primary btn-sm btn-grad" href="index.php?app=soal&act=add_soal_ganda&id_topik=<?php echo $_GET['id_topik'].'&token='.md5($_GET['id_topik']);?>" title="Tambahkan soal baru"><i class="icon-plus"></i> Soal Baru</a>
                <a class="btn btn-default" href="index.php?app=soal&id_topik=<?php echo $_GET['id_topik'] ;?>" title="Batal"><i class="icon-reply"></i> Kembali</a>
            </div>
        </div>
    </div>
    <br />
    <?php
    $alfa = array("","A","B","C","D","E","F","G");
    $id_tq = $_GET['id_topik'];
    $batas = 10;
    $halaman = $_GET['page'];
    if(empty($_GET['page'])){
            $posisi=0;
            $_GET['page']=1;
    }
    else{
            $posisi = ($_GET['page']-1) * $batas;
    }
    $cek_num = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='".$id_tq."'");
    $cek_num1 = mysql_num_rows($cek_num);
    $jml_page = ceil($cek_num1 / $batas);
    $linkhalaman .= "<ul class='pagination'>";
    $linkhalaman .= "<li><a>Halaman </a></li>";
    for($i=1;$i<=$jml_page;$i++) {
        if($i==$halaman) {
            $active =   "class='active'";
        }
        else if(empty($halaman) && $i=='1') {
            $cek = "class='active'";
        }
        else {
            $active="";
        }
        if($i!=$jml_page) {
            $linkhalaman .= "<li $active ".$cek."><a href='$_SERVER[PHP_SELF]?app=soal&act=daftar_soal_ganda&id_topik=$_GET[id_topik]&page=$i'>$i</a></li>";
        }
        else {
            $linkhalaman .= "<li $active><a href='$_SERVER[PHP_SELF]?app=soal&act=daftar_soal_ganda&id_topik=$_GET[id_topik]&page=$i'>$i</a></li>";
        }
    }
    $linkhalaman .= "</ul>";
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
    $qsoal_pg = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='".$id_tq."' LIMIT $posisi,$batas");
    $no = $posisi + 1;
    while($dsoal_pg = mysql_fetch_object($qsoal_pg)){
    ?>
    <div class="box row" style="padding-bottom: 10px">
    <br>
    
    <div class="col-md-6">
    <table class="table table-striped table-bordered"  style="float: left">
        <tr>
            <th>Pertanyaan Nomor <span class="badge badge-info" style='background-color: #3a87ad;'><?php echo $no;?></span></th><th width="4%">Aksi</th>
        </tr>
        <tr>
            <td align="left" style="text-align: left">
                <?php echo html_entity_decode($dsoal_pg->pertanyaan);?>
            </td>
            <td>
                <a class="btn btn-mini btn-info" href="index.php?app=soal&act=edit_soal_ganda&id_soal=<?php echo $dsoal_pg->id_quiz.'&id_topik='.$_GET['id_topik'];?>"><i class="icon-pencil"></i></a>
                <a class="btn btn-mini btn-danger" href="index.php?app=soal&act=hapus_soal_ganda&id_soal=<?php echo $dsoal_pg->id_quiz.'&id_topik='.$_GET['id_topik'];?>" onclick="return confirm('Hapus data soal ini ?');"><i class="icon-trash"></i></a>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;">
                <i class="icon-info"></i>&nbsp;&nbsp;Untuk mengubah kunci jawaban pada soal silahkan klik tombol &nbsp;<i class="icon-pencil"></i>.
            </td>
    </table>
    </div>
    <div class="col-md-6">
    <table class="table table-bordered">
        <tr class="success">
            <th>Jawaban</th><th width="9%">Status</th>
	</tr>
	<?php
	$qjawaban_pg = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_quiz='".$dsoal_pg->id_quiz."'");
        $jumlah = mysql_num_rows($qjawaban_pg);
        $i = 1;
	while($djawaban_pg = mysql_fetch_object($qjawaban_pg)) {
            
		if($djawaban_pg->status=='B') {
			$status = "<b><span class='info' style='color: blue'><i class='icon-ok-sign'></i> Benar</span></b>";
		}
		else {
			$status = "<b><span class='danger' style='color: red'><i class='icon-remove-sign'></i> Salah</span></b>";
		}
	?>
	<tr>
            <td align="left" style="text-align: left">
                    <?php echo $alfa[$i].'. &nbsp;'. html_entity_decode($djawaban_pg->jawaban);?>
            </td>
            <td><?php echo $alfa[$i].'. &nbsp;'. $status;?></td>
	</tr>
	<?php 
        $i++;
         }
        ?>
    </table>
    </div>
    <div style="width: 100%; height: 20px"></div>
    </div>
    <br>
    <?php
    $no++;
    }
    ?>

    <?php
    $cek_num2 = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='".$id_tq."'");
    $cek_num3 = mysql_num_rows($cek_num2);
    $jml_page1 = ceil($cek_num3 / $batas);
    $linkhalaman1 .= "<ul class='pagination'>";
    $linkhalaman1 .= "<li><a>Halaman </a></li>";
    for($i=1;$i<=$jml_page1;$i++) {

        if($i==$halaman) {
            $active =   "class='active'";
        }
        else if(empty($halaman) && $i=='1') {
            $cek = "class='active'";
        }
        else {
            $active="";
        }
        if($i!=$jml_page1) {
            $linkhalaman1 .= "<li $active ".$cek."><a href='$_SERVER[PHP_SELF]?app=soal&act=daftar_soal_ganda&id_topik=$_GET[id_topik]&page=$i'>$i</a></li>";
        }
        else {
            $linkhalaman1 .= "<li $active><a href='$_SERVER[PHP_SELF]?app=soal&act=daftar_soal_ganda&id_topik=$_GET[id_topik]&page=$i'>$i</a></li>";
        }
    }
    $linkhalaman1 .= "</ul>";
    echo $linkhalaman1;
    ?>
    </form>