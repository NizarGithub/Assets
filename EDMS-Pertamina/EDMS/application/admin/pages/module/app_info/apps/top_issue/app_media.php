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
    case 'top_issue':
        require_once ('top_issue.php');
        break;
    case 'edit_issue':
        require_once ('edit_issue.php');
        break;
    case 'aksi_issue':
        require_once ('aksi_issue.php');
        break;
    case 'hapus_issue':
        require_once ('hapus_issue.php');
        break;
    case 'add_issue':
        require_once ('add_issue.php');
        break;
    default:
        require_once ('top_issue.php');
        break;
}
?>
