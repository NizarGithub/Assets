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
    case 'view_onstream':
        require_once ('view_onstream.php');
        break;
    case 'edit_onstream':
        require_once ('edit_onstream.php');
        break;
    case 'aksi_onstream':
        require_once ('aksi_onstream.php');
        break;
    case 'hapus_onstream':
        require_once ('hapus_onstream.php');
        break;
    case 'add_onstream':
        require_once ('upload_onstream.php');
        break;
    default:
        require_once ('view_onstream.php');
        break;
}
?>
