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
    case 'anggaran':
        require_once ('apps/anggaran/app_media.php');
        break;
    case 'log_book':
        require_once ('apps/log_book/app_media.php');
        break;
    case 'atk':
        require_once ('apps/atk/app_media.php');
        break;
    case 'cleaning_tangki':
        require_once ('apps/cleaning_tanki/app_media.php');
        break;
    case 'turn_around':
        require_once ('apps/turn_around/app_media.php');
        break;
    case 'lap_bulanan':
        require_once ('apps/laporan_bulanan/app_media.php');
        break;
    case 'onstream':
        require_once ('apps/onstream/app_media.php');
        break;
    case 'coc':
        require_once ('apps/coc/app_media.php');
        break;

    default:
        require_once ('app_home.php');
        break;
}
?>
