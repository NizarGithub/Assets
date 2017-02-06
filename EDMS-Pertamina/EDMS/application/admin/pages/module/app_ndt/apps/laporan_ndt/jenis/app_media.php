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
    case 'add_jenis':
        require_once ('app_add_jenis.php');
        break;
    case 'aksi_jenis':
        require_once ('app_aksi_jenis.php');
        break;
    case 'hapus_jenis':
        require_once ('app_hapus_jenis.php');
        break;
    case 'view_jenis':
        require_once ('app_view_jenis.php');
        break;
    default:
        require_once ('app_view_jenis.php');
        break;
}
