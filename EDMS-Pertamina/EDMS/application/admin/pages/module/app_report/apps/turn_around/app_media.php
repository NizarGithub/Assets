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
    case 'turn_around':
        require_once ('turn_around.php');
        break;
    case 'edit_around':
        require_once ('edit_around.php');
        break;
    case 'aksi_around':
        require_once ('aksi_around.php');
        break;
    case 'hapus_around':
        require_once ('hapus_around.php');
        break;
    case 'add_around':
        require_once ('add_around.php');
        break;
    default:
        require_once ('turn_around.php');
        break;
}
?>
