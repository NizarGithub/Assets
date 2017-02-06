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
    case 'view_foto_ta':
        require_once ('view_foto_ta.php');
        break;
    case 'edit_foto_ta':
        require_once ('edit_foto_ta.php');
        break;
    case 'aksi_foto_ta':
        require_once ('aksi_foto_ta.php');
        break;
    case 'hapus_foto_ta':
        require_once ('hapus_foto_ta.php');
        break;
    case 'add_foto_ta':
        require_once ('upload_foto_ta.php');
        break;
    default:
        require_once ('view_foto_ta.php');
        break;
}
?>
