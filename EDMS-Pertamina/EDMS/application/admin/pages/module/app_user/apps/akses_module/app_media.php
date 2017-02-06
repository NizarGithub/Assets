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
    case 'view_module':
        require_once ('view_module.php');
        break;
    case 'edit_module':
        require_once ('edit_module.php');
        break;
    case 'aksi_module':
        require_once ('aksi_module.php');
        break;
    case 'hapus_module':
        require_once ('hapus_module.php');
        break;
    case 'add_module':
        require_once ('add_module.php');
        break;
    default:
        require_once ('view_module.php');
        break;
}
