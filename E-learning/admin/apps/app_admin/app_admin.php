<?php
$act = $_GET['act'];
switch ($act) {
    case 'add':
        require ('add_admin.php');
        break;
    case 'multi':
        require ('hapus_multi_admin.php');
        break;
    case 'aksi':
        require ('aksi_admin.php');
        break;
	case 'view':
        require ('detail_admin.php');
        break;
    case 'edit':
        require ('edit_admin.php');
        break;
    default:
        require ('view_admin.php');
        break;
}