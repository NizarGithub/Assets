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
    case 'hapus_log':
        require_once ('app_hapus_log.php');
        break;
    case 'view_log':
        require_once ('app_view_log.php');
        break;
    default:
        require_once ('app_view_log.php');
        break;
}
