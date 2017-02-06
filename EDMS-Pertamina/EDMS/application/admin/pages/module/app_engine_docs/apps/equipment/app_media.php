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
    case 'add_equipment':
        require_once ('app_add_equipment.php');
        break;
     case 'edit_equipment':
        require_once ('app_edit_equipment.php');
        break;
    case 'aksi_equipment':
        require_once ('app_aksi_equipment.php');
        break;
    case 'hapus_equipment':
        require_once ('app_hapus_equipment.php');
        break;
    default:
        require_once ('app_equipment.php');
        break;
}
