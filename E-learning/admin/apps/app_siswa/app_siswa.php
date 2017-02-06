<?php
$act = $_GET['act'];
switch ($act) {
    case 'add':
        require ('add_siswa.php');
        break;
    case 'multi':
        require ('hapus_multi_siswa.php');
        break;
    case 'aksi':
        require ('aksi_siswa.php');
        break;
	case 'view':
        require ('detail_siswa.php');
        break;
    case 'edit':
        require ('edit_siswa.php');
        break;
    default:
        require ('view_siswa.php');
        break;
}