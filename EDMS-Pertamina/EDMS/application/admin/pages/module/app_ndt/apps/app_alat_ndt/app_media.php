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
    case 'add_ndt':
        require_once ('app_add_ndt.php');
        break;
     case 'edit_ndt':
        require_once ('app_edit_ndt.php');
        break;
    case 'aksi_ndt':
        require_once ('app_aksi_ndt.php');
        break;
    case 'hapus_ndt':
        require_once ('app_hapus_ndt.php');
        break;
    default:
        require_once ('app_ndt.php');
        break;
}
