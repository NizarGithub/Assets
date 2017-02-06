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
    case 'app_pipe_list':
        require_once ('apps/pipe/app_pipe_list.php');
        break;
    default:
        require_once ('app_home.php');
        break;
}
?>
