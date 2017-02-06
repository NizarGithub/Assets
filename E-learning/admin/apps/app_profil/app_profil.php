<?php
$act = $_GET['act'];
switch ($act) {
    case 'view':
        require ('view_profil.php');
        break;
     case 'aksi':
        require ('aksi_pguru.php');
        break;
    case 'editg':
        require ('edit_pguru.php');
        break;
    default:
        require ('view_profil.php');
        break;
}