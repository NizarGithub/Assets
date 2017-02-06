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
    case 'view_standard':
        require_once ('view_standard.php');
        break;
    case 'edit_standard':
        require_once ('edit_standard.php');
        break;
    case 'aksi_standard':
        require_once ('aksi_standard.php');
        break;
    case 'hapus_standard':
        require_once ('hapus_standard.php');
        break;
    case 'upload_standard':
        require_once ('upload_standard.php');
        break;
    case 'category_standard':
        require_once ('category/app_media.php');
        break;
    default:
        require_once ('view_standard.php');
        break;
}
?>
