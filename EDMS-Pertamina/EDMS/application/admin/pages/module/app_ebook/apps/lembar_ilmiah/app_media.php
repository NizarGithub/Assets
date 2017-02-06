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
    case 'view_ilmiah':
        require_once ('view_ilmiah.php');
        break;
    case 'edit_ilmiah':
        require_once ('edit_ilmiah.php');
        break;
    case 'aksi_ilmiah':
        require_once ('aksi_ilmiah.php');
        break;
    case 'hapus_ilmiah':
        require_once ('hapus_ilmiah.php');
        break;
    case 'upload_ilmiah':
        require_once ('upload_ilmiah.php');
        break;
    default:
        require_once ('view_ilmiah.php');
        break;
}
?>
