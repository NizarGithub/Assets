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
    case 'atk':
        require_once ('app_atk.php');
        break;
    case 'edit_atk':
        require_once ('edit_atk.php');
        break;
    case 'aksi_atk':
        require_once ('aksi_atk.php');
        break;
    case 'hapus_atk':
        require_once ('hapus_atk.php');
        break;
    case 'add_atk':
        require_once ('add_atk.php');
        break;
    default:
        require_once ('app_atk.php');
        break;
}
?>
