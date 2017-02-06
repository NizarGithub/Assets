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
    case 'add_termo':
        require_once ('app_add_termo.php');
        break;
     case 'edit_termo':
        require_once ('app_edit_termo.php');
        break;
    case 'aksi_termo':
        require_once ('app_aksi_termo.php');
        break;
    case 'hapus_termo':
        require_once ('app_hapus_termo.php');
        break;
    case 'view_termo':
        require_once ('app_termo.php');
        break;
    default:
        require_once ('app_termo.php');
        break;
}
