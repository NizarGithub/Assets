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
    case 'view_lap_bulanan':
        require_once ('view_lap_bulanan.php');
        break;
    case 'edit_lap_bulanan':
        require_once ('edit_lap_bulanan.php');
        break;
    case 'aksi_lap_bulanan':
        require_once ('aksi_lap_bulanan.php');
        break;
    case 'hapus_lap_bulanan':
        require_once ('hapus_lap_bulanan.php');
        break;
    case 'add_lap_bulanan':
        require_once ('upload_lap_bulanan.php');
        break;
    default:
        require_once ('view_lap_bulanan.php');
        break;
}
?>
