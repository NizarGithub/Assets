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
    case 'aksi_php':
        require_once ('aksi_php.php');
        break;
    default:
        require_once ('app_home.php');
        break;
}
?>
