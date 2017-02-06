<?php
$app = $_GET['app'];
if($app=='kelas') {
	$kelas = "active";
}
else {
	$kelas = "";
}
if($app=='guru') {
	$guru = "active";
}
else {
	$guru = "";
}
if($app=='pengaturan') {
	$pengaturan = "active";
}
else {
	$pengaturan = "";
}
if($app=='mapel') {
	$mapel = "active";
}
else {
	$mapel = "";
}
if($app=='siswa') {
	$siswa = "active";
}
else {
	$siswa = "";
}
if($app=='materi') {
	$materi = "active";
}
else {
	$materi = "";
}
if($app=='tujian') {
	$ujian = "active";
}
else {
	$ujian = "";
}
if($app=='admin') {
	$admin = "active";
}
else {
	$admin = "";
}
?>