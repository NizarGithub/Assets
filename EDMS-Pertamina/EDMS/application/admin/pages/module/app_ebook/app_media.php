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
    case 'pink_book':
        require_once ('apps/pink_book/app_media.php');
        break;
    case 'corner_book':
        require_once ('apps/corner_book/app_media.php');
        break;
    case 'materi_kursus':
        require_once ('apps/materi_kursus/app_media.php');
        break;
    
    case 'lembar_ilmiah':
        require_once ('apps/lembar_ilmiah/app_media.php');
        break;
    case 'standard':
        require_once ('apps/standard/app_media.php');
        break;
    case 'uu_pp':
        require_once ('apps/uu_pp/app_media.php');
        break;
    case 'produk':
        require_once ('apps/produk/app_media.php');
        break;
    case 'artikel_pekerja':
        require_once ('apps/artikel_pekerja/app_media.php');
        break;
    case 'corrosion_mapping':
        require_once ('apps/corrosion_mapping/app_media.php');
        break;
    case 'quality_plan':
        require_once ('apps/quality_plan/app_media.php');
        break;

    default:
        require_once ('app_home.php');
        break;
}
?>
