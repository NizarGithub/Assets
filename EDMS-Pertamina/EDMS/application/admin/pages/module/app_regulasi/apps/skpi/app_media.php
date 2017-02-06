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
    case 'add_skpi':
        require_once ('app_add_skpi.php');
        break;
     case 'edit_skpi':
        require_once ('app_edit_skpi.php');
        break;
    case 'aksi_skpi':
        require_once ('app_aksi_skpi.php');
        break;
    case 'hapus_skpi':
        require_once ('app_hapus_skpi.php');
        break;
    case 'view_skpi':
        require_once ('app_list_skpi.php');
        break;
    default:
        require_once ('app_list_skpi.php');
        break;
}
