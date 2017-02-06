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
    case 'view_coc':
        require_once ('view_coc.php');
        break;
    case 'edit_coc':
        require_once ('edit_coc.php');
        break;
    case 'aksi_coc':
        require_once ('aksi_coc.php');
        break;
    case 'hapus_coc':
        require_once ('hapus_coc.php');
        break;
    case 'add_coc':
        require_once ('upload_coc.php');
        break;
    default:
        require_once ('view_coc.php');
        break;
}
?>
