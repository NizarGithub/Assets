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
    case 'view_foto_rutin':
        require_once ('view_foto_rutin.php');
        break;
    case 'edit_foto_rutin':
        require_once ('edit_foto_rutin.php');
        break;
    case 'aksi_foto_rutin':
        require_once ('aksi_foto_rutin.php');
        break;
    case 'hapus_foto_rutin':
        require_once ('hapus_foto_rutin.php');
        break;
    case 'add_foto_rutin':
        require_once ('upload_foto_rutin.php');
        break;
    default:
        require_once ('view_foto_rutin.php');
        break;
}
?>
