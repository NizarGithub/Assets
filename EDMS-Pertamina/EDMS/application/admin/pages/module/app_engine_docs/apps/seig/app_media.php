<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$action = $_GET['action'];
switch ($action) {
    case 'view_seig':
        require_once ('view_seig.php');
        break;
    case 'edit_seig':
        require_once ('edit_seig.php');
        break;
    case 'aksi_seig':
        require_once ('aksi_seig.php');
        break;
    case 'hapus_seig':
        require_once ('hapus_seig.php');
        break;
    case 'upload_seig':
        require_once ('upload_seig.php');
        break;
    default:
        require_once ('view_seig.php');
        break;
}
