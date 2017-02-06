<?php
if(isset($_POST['sbaru'])) {
$pelajaran = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran = '$_POST[id_matapelajaran]'");
    $data = mysql_fetch_array($pelajaran);
    $pengajar = mysql_query("SELECT * FROM pengajar WHERE id_pengajar = '$data[id_pengajar]'");
    $cek_pengajar_pelajaran = mysql_num_rows($pengajar);
    $kelas = $_POST['kelas'];
    $id_kelas = multipleSelect($kelas);
    if (!empty($cek_pengajar_pelajaran)){
    $wpengerjaan = $_POST['waktu'] * 60;
    mysql_query("INSERT INTO topik_quiz(
                                    judul,
                                    id_kelas,
                                    id_matapelajaran,
                                    tgl_buat,
                                    pembuat,
                                    waktu_pengerjaan,
                                    info,
                                    terbit)
                            VALUES('$_POST[judul]',
                                   '$id_kelas',
                                   '$_POST[id_matapelajaran]',
                                   '$tgl_sekarang',
                                   '$data[id_pengajar]',
                                   '$wpengerjaan',
                                   '$_POST[info]',
                                   '$_POST[terbit]')");
    }else{
        $wpengerjaan = $_POST['waktu'] * 60;
        mysql_query("INSERT INTO topik_quiz(
                                    judul,
                                    id_kelas,
                                    id_matapelajaran,
                                    tgl_buat,
                                    pembuat,
                                    waktu_pengerjaan,
                                    info,
                                    terbit)
                            VALUES('$_POST[judul]',
                                   '$id_kelas',
                                   '$_POST[id_matapelajaran]',
                                   '$tgl_sekarang',
                                   '$_SESSION[leveluser]',
                                   '$wpengerjaan',
                                   '$_POST[info]',
                                   '$_POST[terbit]')");
    }
  header('location:index.php?app=tujian&act=add&id_mapel='.$_POST['id_matapelajaran']);
}

if(isset($_POST['skeluar'])) {
$pelajaran = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran = '$_POST[id_matapelajaran]'");
    $data = mysql_fetch_array($pelajaran);
    $pengajar = mysql_query("SELECT * FROM pengajar WHERE id_pengajar = '$data[id_pengajar]'");
    $cek_pengajar_pelajaran = mysql_num_rows($pengajar);
    $kelas = $_POST['kelas'];
	$id_kelas = multipleSelect($kelas);
    if (!empty($cek_pengajar_pelajaran)){
    
    $wpengerjaan = $_POST['waktu'] * 60;
    mysql_query("INSERT INTO topik_quiz(
                                    judul,
                                    id_kelas,
                                    id_matapelajaran,
                                    tgl_buat,
                                    pembuat,
                                    waktu_pengerjaan,
                                    info,
                                    terbit)
                            VALUES('$_POST[judul]',
                                   '$id_kelas',
                                   '$_POST[id_matapelajaran]',
                                   '$tgl_sekarang',
                                   '$data[id_pengajar]',
                                   '$wpengerjaan',
                                   '$_POST[info]',
                                   '$_POST[terbit]')");
    }else{
        $wpengerjaan = $_POST['waktu'] * 60;
        mysql_query("INSERT INTO topik_quiz(
                                    judul,
                                    id_kelas,
                                    id_matapelajaran,
                                    tgl_buat,
                                    pembuat,
                                    waktu_pengerjaan,
                                    info,
                                    terbit)
                            VALUES('$_POST[judul]',
                                   '$id_kelas',
                                   '$_POST[id_matapelajaran]',
                                   '$tgl_sekarang',
                                   '$_SESSION[leveluser]',
                                   '$wpengerjaan',
                                   '$_POST[info]',
                                   '$_POST[terbit]')");
    }
  header('location:index.php?app=tujian&id='.$_POST['id_matapelajaran']);
}



else if(isset($_POST['update'])) {
    $id     = $_POST['id'];
    $judul  = $_POST['judul'];
    $mapel   = $_POST['id_mapel'];
    $waktu = $_POST['waktu'] * 60;
    $kelas = $_POST['kelas'];
    $info  = $_POST['info'];
    $terbit = $_POST['terbit'];
	$id_kelas = multipleSelect($kelas);
    
    $query = mysql_query("UPDATE topik_quiz  SET judul='$judul', id_kelas='$id_kelas', waktu_pengerjaan='$waktu', info='$info', terbit='$terbit' WHERE id_tq='$id'");
    header('location: index.php?app=tujian&act=edit&id_mapel='.$mapel.'&id='.$id);
}

else if(isset($_POST['update_exit'])) {
    $id    	  = $_POST['id'];
    $judul 	  = $_POST['judul'];
    $mapel    = $_POST['id_mapel'];
    $waktu 	  = $_POST['waktu'] * 60;
    $kelas    = $_POST['kelas'];
    $info     = $_POST['info'];
    $terbit   = $_POST['terbit'];
	$id_kelas = multipleSelect($kelas);
    
    $query = mysql_query("UPDATE topik_quiz  SET judul='$judul', id_kelas='$id_kelas', waktu_pengerjaan='$waktu', info='$info', terbit='$terbit' WHERE id_tq='$id'");
    header('location: index.php?app=tujian&id='.$mapel);
}

