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
    case 'view_cbook':
        require_once ('view_cbook.php');
        break;
    case 'edit_cbook':
        require_once ('edit_cbook.php');
        break;
    case 'aksi_cbook':
        require_once ('aksi_cbook.php');
        break;
    case 'hapus_cbook':
        require_once ('hapus_cbook.php');
        break;
    case 'upload_cbook':
        require_once ('upload_cbook.php');
        break;
    case 'category_cbook':
        require_once ('category/app_media.php');
        break;
    default:
        require_once ('view_cbook.php');
        break;
}
?>
