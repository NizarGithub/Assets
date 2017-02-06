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
    case 'view_wps':
        require_once ('view_wps.php');
        break;
    case 'edit_wps':
        require_once ('edit_wps.php');
        break;
    case 'aksi_wps':
        require_once ('aksi_wps.php');
        break;
    case 'hapus_wps':
        require_once ('hapus_wps.php');
        break;
    case 'add_wps':
        require_once ('upload_wps.php');
        break;
    default:
        require_once ('view_wps.php');
        break;
}
?>
