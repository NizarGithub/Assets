<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$action = $_GET['action'];
switch ($action) {
    case 'view_agenda':
        require_once ('view_agenda.php');
        break;
    case 'edit_agenda':
        require_once ('edit_agenda.php');
        break;
    case 'aksi_agenda':
        require_once ('aksi_agenda.php');
        break;
    case 'hapus_agenda':
        require_once ('hapus_agenda.php');
        break;
    case 'add_agenda':
        require_once ('add_agenda.php');
        break;
    default:
        require_once ('view_agenda.php');
        break;
}
