<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$mod_app = @$_GET['mod_apps'];
$dir_app = "module/";
// DIrektori Module
define('DIR_MODULE', $dir_app);
// Module yang di pilih
define('MODULE', $mod_app);
switch (MODULE) {
    case 'home':
        require (DIR_MODULE.'app_home/app_home.php');
        break;
    case 'user':
        require (DIR_MODULE.'app_user/app_media.php');
        break;
    case 'utama':
        require (DIR_MODULE.'app_utama/app_media.php');
        break;
    case 'info':
        require (DIR_MODULE.'app_info/app_media.php');
        break;
    case 'engine-docs':
        require (DIR_MODULE.'app_engine_docs/app_media.php');
        break;
    case 'report':
        require (DIR_MODULE.'app_report/app_media.php');
        break;
    case 'ndt':
        require (DIR_MODULE.'app_ndt/app_media.php');
        break;
    case 'e-book':
        require (DIR_MODULE.'app_ebook/app_media.php');
        break;
    case 'regulasi':
        require (DIR_MODULE.'app_regulasi/app_media.php');
        break;
    case 'foto':
        require (DIR_MODULE.'app_foto/app_media.php');
        break;
    case 'sms_gateaway':
        require (DIR_MODULE.'app_sms/app_media.php');
        break;
    case 'webcam':
        require (DIR_MODULE.'app_webcam/app_media.php');
        break;
    case 'pengaturan':
        require (DIR_MODULE.'app_pengaturan/app_pengaturan.php');
        break;
    case 'themes':
        require (DIR_MODULE.'app_themes/app_media.php');
        break;
    case 'logout':
        require ('logout.php');
        break;
    case 'calendar':
        require (DIR_MODULE.'app_calendar/app_media.php');
        break;
    case '404':
        require ('pweb/404.php');
        break;
    default:
        require (DIR_MODULE.'app_home/app_home.php');
        break;
}
?>
