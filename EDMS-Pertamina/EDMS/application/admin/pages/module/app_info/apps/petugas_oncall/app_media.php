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
    case 'list_petugas':
        require_once ('app_list_petugas.php');
        break;
    case 'edit_petugas':
        require_once ('app_edit_petugas.php');
        break;
    case 'aksi_petugas':
        require_once ('app_aksi_petugas.php');
        break;
    case 'aktif_petugas':
        require_once ('app_aktif_petugas.php');
        break;
    case 'hapus_petugas':
        require_once ('app_hapus_petugas.php');
        break;
    case 'add_petugas':
        require_once ('app_add_petugas.php');
        break;
    case 'detail_petugas':
        require_once ('app_detail_petugas.php');
        break;
    default:
        require_once ('app_list_petugas.php');
        break;
}
