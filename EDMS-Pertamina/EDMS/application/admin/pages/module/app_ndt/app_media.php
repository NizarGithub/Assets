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
    case 'alat_ndt':
        require_once ('apps/app_alat_ndt/app_media.php');
        break;
    case 'form_ndt':
        require_once ('apps/form_ndt/app_media.php');
        break;
    case 'personil_ndt':
        require_once ('apps/personil_ndt/app_media.php');
        break;
    case 'laporan_ndt':
        require_once ('apps/laporan_ndt/app_media.php');
        break;
    case 'jenis_ndt':
        require_once ('apps/laporan_ndt/jenis/app_media.php');
        break;

    default:
        require_once ('app_home.php');
        break;
}
?>
