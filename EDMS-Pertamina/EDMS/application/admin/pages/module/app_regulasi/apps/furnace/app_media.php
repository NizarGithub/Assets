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
    case 'add_furnace':
        require_once ('app_add_furnace.php');
        break;
     case 'edit_furnace':
        require_once ('app_edit_furnace.php');
        break;
    case 'aksi_furnace':
        require_once ('app_aksi_furnace.php');
        break;
    case 'hapus_furnace':
        require_once ('app_hapus_furnace.php');
        break;
    default:
        require_once ('app_furnace.php');
        break;
}
