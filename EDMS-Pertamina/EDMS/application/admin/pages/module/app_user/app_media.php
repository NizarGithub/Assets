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
    case 'app_edit_user':
        require_once ('apps/app_edit_user.php');
        break;
    case 'app_detail_user':
        require_once ('apps/app_detail_user.php');
        break;
    case 'app_edit_password':
        require_once ('apps/app_edit_password.php');
        break;
    case 'app_add_user':
        require_once ('apps/app_add_user.php');
        break;
    case 'app_hapus_user':
        require_once ('apps/app_hapus_user.php');
        break;
    
    case 'app_aksi_user':
        require_once ('apps/app_aksi_user.php');
        break;
    case 'app_list_user':
        require_once ('apps/app_list_user.php');
        break;
     case 'profile':
        require_once ('apps/my_profile.php');
        break;
    
    case 'user_level':
        require_once ('apps/level/app_media.php');
        break;
    case 'user_role':
        require_once ('apps/role/app_media.php');
        break;
    case 'app_user_log':
        require_once ('apps/log/app_media.php');
        break;
    case 'app_user_modul':
        require_once ('apps/akses_module/app_media.php');
        break;
    
    default:
        require_once ('apps/app_list_user.php');
        break;
}
