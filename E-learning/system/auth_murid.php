<?php
//error_reporting(0);
require_once ('../config.php');
$dbconn = new Connection(); 
function anti_injeksi($data){
    $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter;
}
$username = anti_injeksi($_POST['username']);
$password = md5($_POST['password']);
$cek_siswa = mysql_query("SELECT * FROM siswa WHERE username_login='$username' AND password_login='$password' AND blokir='N'");
$data_siswa = mysql_fetch_array($cek_siswa);
$jumlah = mysql_num_rows($cek_siswa);
if($jumlah > 0) {
    session_start();
    $_SESSION['id_siswa'] = $data_siswa['id_siswa'];
    $_SESSION['level'] = $data_siswa['jabatan'];
    $_SESSION['akses'] = "ya";
    header('location: ../murid.php?log_hash='.sha1($data_siswa['id_siswa']).'&token='.md5('siswa'));
}
else {
    header('location: ../login.php?error='.md5(2).'&level_akses=siswa');
}

