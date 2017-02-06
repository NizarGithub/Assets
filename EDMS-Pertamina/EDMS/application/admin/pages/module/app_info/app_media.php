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
    case 'jadwal_oncall':
        require_once ('apps/jadwal_oncall/app_media.php');
        break;
    case 'petugas_oncall':
        require_once ('apps/petugas_oncall/app_media.php');
        break;
    case 'pelat_pekerja':
        require_once ('apps/pelat_pekerja/app_media.php');
        break;
    case 'top_issue':
        require_once ('apps/top_issue/app_media.php');
        break;
    case 'agenda_rapat':
        require_once ('apps/agenda_rapat/app_media.php');
        break;
    case 'group':
        require_once ('apps/group/app_media.php');
        break;

    default:
        require_once ('app_home.php');
        break;
}
?>
