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
    case 'add_anggaran':
        require_once ('app_add_anggaran.php');
        break;
     case 'edit_anggaran':
        require_once ('app_edit_anggaran.php');
        break;
    case 'aksi_anggaran':
        require_once ('app_aksi_anggaran.php');
        break;
    case 'hapus_anggaran':
        require_once ('app_hapus_anggaran.php');
        break;
    default:
        require_once ('app_anggaran.php');
        break;
}
