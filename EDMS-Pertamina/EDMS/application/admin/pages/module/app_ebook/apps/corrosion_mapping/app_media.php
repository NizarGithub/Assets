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
    case 'view_cm':
        require_once ('view_cm.php');
        break;
    case 'edit_cm':
        require_once ('edit_cm.php');
        break;
    case 'aksi_cm':
        require_once ('aksi_cm.php');
        break;
    case 'hapus_cm':
        require_once ('hapus_cm.php');
        break;
    case 'add_cm':
        require_once ('upload_cm.php');
        break;
    default:
        require_once ('view_cm.php');
        break;
}
?>
