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
    case 'add_level':
        require_once ('app_add_level.php');
        break;
    case 'aksi_level':
        require_once ('app_aksi_level.php');
        break;
    case 'hapus_level':
        require_once ('app_hapus_level.php');
        break;
    case 'view_level':
        require_once ('app_view_level.php');
        break;
    default:
        require_once ('app_view_level.php');
        break;
}
