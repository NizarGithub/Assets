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
    case 'welder':
        require_once ('apps/welder/app_media.php');
        break;
    case 'equipment':
        require_once ('apps/equipment/app_media.php');
        break;
     case 'pipe_list':
        require_once ('apps/pipe_list/app_media.php');
        break;
    case 'term':
        require_once ('apps/thermo/app_media.php');
        break;
    case 'css':
        require_once ('apps/css/app_media.php');
        break;
    case 'seig':
        require_once ('apps/seig/app_media.php');
        break;
    case 'cormon':
        require_once ('apps/cormon/app_media.php');
        break;
    case 'others_drawing':
        require_once ('apps/others_drawing/app_media.php');
        break;
    case 'wps':
        require_once ('apps/wps/app_media.php');
        break;
    default:
        require_once ('app_home.php');
        break;
}
?>
