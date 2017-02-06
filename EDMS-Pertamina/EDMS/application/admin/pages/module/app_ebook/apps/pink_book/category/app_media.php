<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$action = $_GET['sub_act'];
switch ($action) {
    case 'add_cat':
        require_once ('app_add_cat.php');
        break;
    case 'aksi_cat':
        require_once ('app_aksi_cat.php');
        break;
    case 'hapus_cat':
        require_once ('app_hapus_cat.php');
        break;
    case 'view_cat':
        require_once ('app_view_cat.php');
        break;
    default:
        require_once ('app_view_cat.php');
        break;
}
