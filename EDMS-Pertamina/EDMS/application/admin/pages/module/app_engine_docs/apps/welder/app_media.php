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
    case 'add_welder':
        require_once ('app_add_welder.php');
        break;
     case 'edit_welder':
        require_once ('app_edit_welder.php');
        break;
    case 'aksi_welder':
        require_once ('app_aksi_welder.php');
        break;
    case 'hapus_welder':
        require_once ('app_hapus_welder.php');
        break;
    default:
        require_once ('app_welder.php');
        break;
}
