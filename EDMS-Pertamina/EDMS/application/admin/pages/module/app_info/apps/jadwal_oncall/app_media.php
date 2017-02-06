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
    case 'view_jadwal':
        require_once ('view_jadwal.php');
        break;
    case 'edit_jadwal':
        require_once ('edit_jadwal.php');
        break;
    case 'aksi_jadwal':
        require_once ('aksi_jadwal.php');
        break;
    case 'hapus_jadwal':
        require_once ('hapus_jadwal.php');
        break;
    case 'add_jadwal':
        require_once ('add_jadwal.php');
        break;
    default:
        require_once ('view_jadwal.php');
        break;
}
