<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$media = $_GET['media_app'];
switch ($media) {
    case 'foto_ta':
        require_once ('apps/foto_ta/app_media.php');
        break;
    case 'foto_rutin':
        require_once ('apps/foto_rutin/app_media.php');
        break;
    default:
        require_once ('app_home.php');
        break;
}
?>
