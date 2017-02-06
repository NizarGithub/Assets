<?php
$act = $_GET['act'];
switch ($act) {
    case 'add':
        require ('add_guru.php');
        break;
    case 'multi':
        require ('hapus_multi_guru.php');
        break;
    case 'aksi':
        require ('aksi_guru.php');
        break;
	case 'view':
        require ('detail_guru.php');
        break;
    case 'edit':
        require ('edit_guru.php');
        break;
    default:
        require ('view_guru.php');
        break;
}