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
    case 'view_css':
        require_once ('view_css.php');
        break;
    case 'edit_css':
        require_once ('edit_css.php');
        break;
    case 'aksi_css':
        require_once ('aksi_css.php');
        break;
    case 'hapus_css':
        require_once ('hapus_css.php');
        break;
    case 'add_css':
        require_once ('add_css.php');
        break;
    default:
        require_once ('view_css.php');
        break;
}
