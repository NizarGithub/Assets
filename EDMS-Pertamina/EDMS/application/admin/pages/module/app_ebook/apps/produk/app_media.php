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
    case 'view_produk':
        require_once ('view_produk.php');
        break;
    case 'edit_produk':
        require_once ('edit_produk.php');
        break;
    case 'aksi_produk':
        require_once ('aksi_produk.php');
        break;
    case 'hapus_produk':
        require_once ('hapus_produk.php');
        break;
    case 'upload_produk':
        require_once ('upload_produk.php');
        break;
    case 'category_produk':
        require_once ('category/app_media.php');
        break;
    default:
        require_once ('view_produk.php');
        break;
}
?>
