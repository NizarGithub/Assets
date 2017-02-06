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
    case 'add_pipe':
        require_once ('app_add_pipe.php');
        break;
     case 'edit_pipe':
        require_once ('app_edit_pipe.php');
        break;
    case 'aksi_pipe':
        require_once ('app_aksi_pipe.php');
        break;
    case 'hapus_pipe':
        require_once ('app_hapus_pipe.php');
        break;
    default:
        require_once ('app_pipe_list.php');
        break;
}
