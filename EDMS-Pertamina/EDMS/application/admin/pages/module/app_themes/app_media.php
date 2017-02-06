<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$media = $_GET['media_app'];
switch ($media) {
    case 'CSS':
        require_once ('CSS/app_media.php');
        break;
    case 'PHP':
        require_once ('PHP/app_media.php');
        break;
    case 'JS':
        require_once ('JS/app_media.php');
        break;
    case 'htaccess':
        require_once ('htaccess/app_media.php');
        break;
    case 'gateaway':
        require_once ('gateaway/app_media.php');
        break;

    default:
        require_once ('app_home.php');
        break;
}
?>
