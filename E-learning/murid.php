<?php 
session_start();
if(!empty($_SESSION['akses']) || !empty($_SESSION['id_siswa'])) {
require 'config.php';
$newdb = new Connection();	
define(ID_SISWA,$_SESSION['id_siswa']);
define(LEVEL,$_SESSION['level']);
define(AKSES,$_SESSION['akses']);
$qsiswa = mysql_query("SELECT * FROM siswa WHERE id_siswa='".ID_SISWA."' AND blokir='N'");
$dsiswa = mysql_fetch_object($qsiswa);
define(_nama_lengkap_,$dsiswa->nama_lengkap);
require 'admin/system/functions.php';
ob_start('minify_html');

require 'peserta/media.php';

ob_end_flush();
}
else {
    header('location:index.php?type_error='.md5('no_akses'));
}
?>