<?php
//error_reporting(0);
require_once ('../../config.php');

$dbconn = new Connection(); 
function anti_injeksi($data){
    $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter;
}
$username = anti_injeksi($_POST['username']);
$password = md5($_POST['password']);
$level_akses = anti_injeksi($_POST['level']);
if($level_akses=='admin') {
    $cek_admin = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password' AND blokir='N'");
    $data_admin = mysql_fetch_array($cek_admin);
    $jumlah = mysql_num_rows($cek_admin);
    if($jumlah > 0) {
        session_start();
        $_SESSION['id_admin'] = $data_admin['id_admin'];
        $_SESSION['level'] = 'admin';
        header('location: ../index.php?log_hash='.sha1($data_admin['id_admin']).'&token='.md5('admin'));
    }
    else {
        header('location: ../login.php?error='.md5(2).'&level_akses=admin');
    }
}
else if($level_akses=='pengajar') {
    $cek_guru = mysql_query("SELECT * FROM pengajar WHERE username_login='$username' AND password_login='$password' AND blokir='N'");
    $data_guru = mysql_fetch_array($cek_guru);
    $jumlah = mysql_num_rows($cek_guru);
    if($jumlah > 0) {
        session_start();
        $_SESSION['id_guru'] = $data_guru['id_pengajar'];
        $_SESSION['level'] = 'guru';
        header('location: ../index.php?log_hash='.sha1($data_guru['id_pengajar']).'&token='.md5('guru'));
    }
    else {
        header('location: ../login.php?error='.md5(2).'&level_akses=guru');
    }
}
else if($level_akses=='siswa') {
    $cek_siswa = mysql_query("SELECT * FROM siswa WHERE username_login='$username' AND password_login='$password' AND blokir='N'");
    $data_siswa = mysql_fetch_array($cek_siswa);
    $jumlah = mysql_num_rows($cek_siswa);
    if($jumlah > 0) {
        session_start();
	    $_SESSION['id_siswa'] = $data_siswa['id_siswa'];
	    $_SESSION['level'] = $data_siswa['jabatan'];
	    $_SESSION['akses'] = "ya";
        header('location: ../../murid.php?log_hash='.sha1($datasiswa['id_siswa']).'&token='.md5('siswa'));
    }
    else {
        header('location: ../login.php?error='.md5(2).'&level_akses=guru');
    }
}