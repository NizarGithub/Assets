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
    case 'add_metering':
        require_once ('app_add_metering.php');
        break;
     case 'edit_metering':
        require_once ('app_edit_metering.php');
        break;
    case 'aksi_metering':
        require_once ('app_aksi_metering.php');
        break;
    case 'hapus_metering':
        require_once ('app_hapus_metering.php');
        break;
    default:
        require_once ('app_metering.php');
        break;
}
