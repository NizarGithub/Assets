<?php
$act = $_GET['act'];
switch ($act) {
    case 'add':
        require ('add_kelas.php');
        break;
    case 'multi':
        require ('hapus_multi_kelas.php');
        break;
    case 'aksi':
        require ('aksi_kelas.php');
        break;
    case 'edit':
        require ('edit_kelas.php');
        break;
     case 'wali':
        require ('view_wali.php');
        break;
     case 'ketua':
        require ('detail_ketua.php');
        break;
    default:
        require ('view_kelas.php');
        break;
}