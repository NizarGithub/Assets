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
    case 'view_draw':
        require_once ('view_draw.php');
        break;
    case 'edit_draw':
        require_once ('edit_draw.php');
        break;
    case 'aksi_draw':
        require_once ('aksi_draw.php');
        break;
    case 'hapus_draw':
        require_once ('hapus_draw.php');
        break;
    case 'add_draw':
        require_once ('upload_draw.php');
        break;
    default:
        require_once ('view_draw.php');
        break;
}
?>
