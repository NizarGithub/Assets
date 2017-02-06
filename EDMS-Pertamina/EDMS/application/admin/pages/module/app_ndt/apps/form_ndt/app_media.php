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
    case 'add_form':
        require_once ('app_add_form.php');
        break;
     case 'edit_form':
        require_once ('app_edit_form.php');
        break;
    case 'aksi_form':
        require_once ('app_aksi_form.php');
        break;
    case 'hapus_form':
        require_once ('app_hapus_form.php');
        break;
    default:
        require_once ('app_form.php');
        break;
}
