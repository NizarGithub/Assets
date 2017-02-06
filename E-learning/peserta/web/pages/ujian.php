<?php
$act = $_GET['act'];
switch ($act) {
    case '':
        require "ujian/daftar_mapel.php";
        break;
    case 'view_ujian':
        require "ujian/daftar_ujian.php";
        break;
     case 'mulai_ujian':
        require "ujian/mulai_ujian.php";
        break;
    default:
        require "ujian/daftar_mapel.php";
        break;
}