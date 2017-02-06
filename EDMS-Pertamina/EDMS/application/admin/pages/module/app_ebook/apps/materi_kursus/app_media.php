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
    case 'view_materi':
        require_once ('view_materi.php');
        break;
    case 'edit_materi':
        require_once ('edit_materi.php');
        break;
    case 'aksi_materi':
        require_once ('aksi_materi.php');
        break;
    case 'hapus_materi':
        require_once ('hapus_materi.php');
        break;
    case 'upload_materi':
        require_once ('upload_materi.php');
        break;
    default:
        require_once ('view_materi.php');
        break;
}
