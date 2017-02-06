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
    case 'app_furnace':
        require_once ('apps/furnace/app_media.php');
        break;
    case 'app_tanki':
        require_once ('apps/tanki/app_media.php');
        break;
    case 'app_skpi':
        require_once ('apps/skpi/app_media.php');
        break;
    case 'app_skpp':
        require_once ('apps/skpp/app_furnace.php');
        break;
    case 'app_psv':
        require_once ('apps/psv/app_tanki.php');
        break;
    case 'app_metering':
        require_once ('apps/metering/app_media.php');
        break;
    case 'app_bejana':
        require_once ('apps/bejana/app_media.php');
        break;
    case 'app_termo':
        require_once ('apps/termo/app_media.php');
        break;
    default:
        require_once ('app_home.php');
        break;
}
?>
