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
    case 'add_group':
        require_once ('app_add_group.php');
        break;
    case 'aksi_group':
        require_once ('app_aksi_group.php');
        break;
    case 'hapus_group':
        require_once ('app_hapus_group.php');
        break;
    case 'view_group':
        require_once ('app_view_group.php');
        break;
    default:
        require_once ('app_view_group.php');
        break;
}
