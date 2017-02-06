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
    case 'view_cormon':
        require_once ('view_cormon.php');
        break;
    case 'edit_cormon':
        require_once ('edit_cormon.php');
        break;
    case 'aksi_cormon':
        require_once ('aksi_cormon.php');
        break;
    case 'hapus_cormon':
        require_once ('hapus_cormon.php');
        break;
    case 'add_cormon':
        require_once ('upload_cormon.php');
        break;
    default:
        require_once ('view_cormon.php');
        break;
}
?>
