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
    case 'cleaning_tanki':
        require_once ('cleaning_tanki.php');
        break;
    case 'edit_tanki':
        require_once ('edit_tanki.php');
        break;
    case 'aksi_tanki':
        require_once ('aksi_tanki.php');
        break;
    case 'hapus_tanki':
        require_once ('hapus_tanki.php');
        break;
    case 'add_tanki':
        require_once ('add_tanki.php');
        break;
    default:
        require_once ('cleaning_tanki.php');
        break;
}
?>
