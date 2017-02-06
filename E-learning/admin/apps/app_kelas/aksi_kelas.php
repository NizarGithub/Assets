<?php
if(isset($_POST['sbaru'])) {
    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $wkelas = $_POST['wkelas'];
    $kkelas = $_POST['kkelas'];
    $status = $_POST['status'];
    
    $query = mysql_query("INSERT INTO kelas VALUES('','$id','$nama','$wkelas','$kkelas','$status')");
    header('location: index.php?app=kelas&act=add');
}
else if(isset($_POST['skeluar'])) {
    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $wkelas = $_POST['wkelas'];
    $kkelas = $_POST['kkelas'];
    $status = $_POST['status'];
    
    $query = mysql_query("INSERT INTO kelas VALUES('','$id','$nama','$wkelas','$kkelas','$status')");
    header('location: index.php?app=kelas');
}
else if(isset($_POST['update'])) {
    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $wkelas = $_POST['wkelas'];
    $kkelas = $_POST['kkelas'];
    $status = $_POST['status'];
    
    $query = mysql_query("UPDATE kelas  SET nama='$nama', id_pengajar='$wkelas', id_siswa='$kkelas', aktif='$status' WHERE id='$id'");
    header('location: index.php?app=kelas');
}

