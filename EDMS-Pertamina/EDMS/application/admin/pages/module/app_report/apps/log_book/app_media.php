<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$action = $_GET['action'];
switch ($action) {
    case 'view_log_book':
        require_once ('view_log_book.php');
        break;
    case 'edit_log_book':
        require_once ('edit_log_book.php');
        break;
    case 'aksi_log_book':
        require_once ('aksi_log_book.php');
        break;
    case 'hapus_log_book':
        require_once ('hapus_log_book.php');
        break;
    case 'upload_log_book':
        require_once ('upload_log_book.php');
        break;
    default:
        require_once ('view_log_book.php');
        break;
}
?>
