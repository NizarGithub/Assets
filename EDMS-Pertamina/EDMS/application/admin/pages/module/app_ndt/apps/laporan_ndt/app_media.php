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
    case 'add_laporan':
        require_once ('app_add_laporan.php');
        break;
     case 'edit_laporan':
        require_once ('app_edit_laporan.php');
        break;
    case 'aksi_laporan':
        require_once ('app_aksi_laporan.php');
        break;
    case 'hapus_laporan':
        require_once ('app_hapus_laporan.php');
        break;
    default:
        require_once ('app_laporan.php');
        break;
}
