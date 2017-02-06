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
    case 'add_role':
        require_once ('app_add_role.php');
        break;
    case 'edit_role':
        require_once ('app_edit_role.php');
        break;
    case 'aksi_role':
        require_once ('app_aksi_role.php');
        break;
    case 'hapus_role':
        require_once ('app_hapus_role.php');
        break;
    case 'view_role':
        require_once ('app_view_role.php');
        break;
    default:
        require_once ('app_view_role.php');
        break;
}
