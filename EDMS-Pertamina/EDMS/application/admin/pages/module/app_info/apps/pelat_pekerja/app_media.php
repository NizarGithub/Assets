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
    case 'pelat_pekerja':
        require_once ('view_pelat_pekerja.php');
        break;
    case 'edit_pelat_pekerja':
        require_once ('edit_pelat_pekerja.php');
        break;
    case 'aksi_pelat_pekerja':
        require_once ('aksi_pelat_pekerja.php');
        break;
    case 'hapus_pelat_pekerja':
        require_once ('hapus_pelat_pekerja.php');
        break;
    case 'upload_pelat_pekerja':
        require_once ('upload_pelat_pekerja.php');
        break;
    default:
        require_once ('view_pelat_pekerja.php');
        break;
}
