<?php
$act = $_GET['act'];
switch ($act) {
    case 'add':
        require ('add_tujian.php');
        break;
    case 'multi':
        require ('hapus_multi_tujian.php');
        break;
    case 'aksi':
        require ('aksi_tujian.php');
        break;
    case 'edit':
        require ('edit_tujian.php');
        break;
    default:
        require ('view_tujian.php');
        break;
}