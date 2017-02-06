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
    case 'add_bejana':
        require_once ('app_add_bejana.php');
        break;
     case 'edit_bejana':
        require_once ('app_edit_bejana.php');
        break;
    case 'aksi_bejana':
        require_once ('app_aksi_bejana.php');
        break;
    case 'hapus_bejana':
        require_once ('app_hapus_bejana.php');
        break;
    case 'view_bejana':
        require_once ('app_bejana.php');
        break;
    default:
        require_once ('app_bejana.php');
        break;
}
