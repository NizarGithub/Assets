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
    case 'add_tanki':
        require_once ('app_add_tanki.php');
        break;
     case 'edit_tanki':
        require_once ('app_edit_tanki.php');
        break;
    case 'aksi_tanki':
        require_once ('app_aksi_tanki.php');
        break;
    case 'hapus_tanki':
        require_once ('app_hapus_tanki.php');
        break;
    default:
        require_once ('app_tanki.php');
        break;
}
