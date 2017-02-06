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
    case 'view_artikel_pekerja':
        require_once ('view_artikel_pekerja.php');
        break;
    case 'edit_artikel_pekerja':
        require_once ('edit_artikel_pekerja.php');
        break;
    case 'aksi_artikel_pekerja':
        require_once ('aksi_artikel_pekerja.php');
        break;
    case 'hapus_artikel_pekerja':
        require_once ('hapus_artikel_pekerja.php');
        break;
    case 'add_artikel_pekerja':
        require_once ('upload_artikel_pekerja.php');
        break;
    default:
        require_once ('view_artikel_pekerja.php');
        break;
}
?>
