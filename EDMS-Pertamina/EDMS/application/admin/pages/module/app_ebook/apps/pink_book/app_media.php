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
    case 'view_pbook':
        require_once ('view_pbook.php');
        break;
    case 'edit_pbook':
        require_once ('edit_pbook.php');
        break;
    case 'aksi_pbook':
        require_once ('aksi_pbook.php');
        break;
    case 'hapus_pbook':
        require_once ('hapus_pbook.php');
        break;
    case 'upload_pbook':
        require_once ('upload_pbook.php');
        break;
    case 'category_pbook':
        require_once ('category/app_media.php');
        break;
    default:
        require_once ('view_pbook.php');
        break;
}
?>
