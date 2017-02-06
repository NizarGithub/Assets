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
    case 'view_quality_plan':
        require_once ('view_quality_plan.php');
        break;
    case 'edit_quality_plan':
        require_once ('edit_quality_plan.php');
        break;
    case 'aksi_quality_plan':
        require_once ('aksi_quality_plan.php');
        break;
    case 'hapus_quality_plan':
        require_once ('hapus_quality_plan.php');
        break;
    case 'add_quality_plan':
        require_once ('upload_quality_plan.php');
        break;
    default:
        require_once ('view_quality_plan.php');
        break;
}
?>
