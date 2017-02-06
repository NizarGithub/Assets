<?php
$act = $_GET['act'];
switch ($act) {
    case 'add':
        require ('add_mapel.php');
        break;
    case 'multi':
        require ('hapus_multi_mapel.php');
        break;
    case 'aksi':
        require ('aksi_mapel.php');
        break;
    case 'edit':
        require ('edit_mapel.php');
        break;
    default:
        require ('view_mapel.php');
        break;
}