<?php
if(isset($_POST['sbaru'])) {
    $id     = $_POST['idmapel'];
    $nama   = $_POST['nama'];
    $guru   = $_POST['guru'];
    $kkm    = $_POST['kkm'];

    $data = $_POST['keterangan'];
    $data = stripslashes($data);
    $ket = htmlspecialchars($data,ENT_QUOTES);
    $kelas = $_POST['kelas'];
    $id_kelas = multipleSelect($kelas);
    $query = mysql_query("INSERT INTO mata_pelajaran VALUES('','$id','$nama','$id_kelas','$guru','$ket','$kkm')");
    header('location: index.php?app=mapel&act=add');
}
else if(isset($_POST['skeluar'])) {
    $id     = $_POST['idmapel'];
    $nama   = $_POST['nama'];
    $guru   = $_POST['guru'];
    $kkm    = $_POST['kkm'];
    $data = $_POST['keterangan'];
    $data = stripslashes($data);
    $ket = htmlspecialchars($data,ENT_QUOTES);
    $kelas = $_POST['kelas'];
    $id_kelas = multipleSelect($kelas);
    $query = mysql_query("INSERT INTO mata_pelajaran VALUES('','$id','$nama','$id_kelas','$guru','$ket','$kkm')");
    header('location: index.php?app=mapel');
}
else if(isset($_POST['update'])) {
    $id     = $_POST['idmapel'];
    $nama   = $_POST['nama'];
    $guru   = $_POST['guru'];
    $kkm    = $_POST['kkm'];
    $data = $_POST['keterangan'];
    $data = stripslashes($data);
    $ket = htmlspecialchars($data,ENT_QUOTES);
    $kelas = $_POST['kelas'];
    $id_kelas = multipleSelect($kelas);
    $query = mysql_query("UPDATE mata_pelajaran SET id_matapelajaran='$id', kkm='$kkm', nama='$nama', id_kelas='$id_kelas', id_pengajar='$guru', deskripsi='$ket' WHERE id='$_POST[id]'");
    header('location: index.php?app=mapel&act=edit&id='.$_POST['id']);
}
else if(isset($_POST['update_exit'])) {
    $id     = $_POST['idmapel'];
    $nama   = $_POST['nama'];
    $guru   = $_POST['guru'];
    $kkm    = $_POST['kkm'];
    $kelas = $_POST['kelas'];
    $id_kelas = multipleSelect($kelas);
    $data = $_POST['keterangan'];
    $data = stripslashes($data);
    $ket = htmlspecialchars($data,ENT_QUOTES);
    $query = mysql_query("UPDATE mata_pelajaran SET id_matapelajaran='$id', nama='$nama', kkm='$kkm', id_kelas='$id_kelas', id_pengajar='$guru', deskripsi='$ket' WHERE id='$_POST[id]'");
    header('location: index.php?app=mapel');
}