<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$action = $_GET['action'];
switch ($action) {
    case 'view_uu_pp':
        require_once ('view_uu_pp.php');
        break;
    case 'edit_uu_pp':
        require_once ('edit_uu_pp.php');
        break;
    case 'aksi_uu_pp':
        require_once ('aksi_uu_pp.php');
        break;
    case 'hapus_uu_pp':
        require_once ('hapus_uu_pp.php');
        break;
    case 'upload_uu_pp':
        require_once ('upload_uu_pp.php');
        break;
    default:
        require_once ('view_uu_pp.php');
        break;
}
?>
