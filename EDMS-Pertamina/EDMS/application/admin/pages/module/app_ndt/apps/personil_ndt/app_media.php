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
    case 'personil':
        require_once ('app_personil.php');
        break;
    case 'edit_personil':
        require_once ('edit_personil.php');
        break;
    case 'aksi_personil':
        require_once ('aksi_personil.php');
        break;
    case 'hapus_personil':
        require_once ('hapus_personil.php');
        break;
    case 'add_personil':
        require_once ('add_personil.php');
        break;
    default:
        require_once ('app_personil.php');
        break;
}
?>
