<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$media = @$_GET['media_app'];
switch ($media) {
    case 'app_add_member_sms':
        require_once ('apps/app_add_member_sms.php');
        break;
    case 'app_aksi_member_sms':
        require_once ('apps/app_aksi_member_sms.php');
        break;
    case 'app_inbox_sms':
        require_once ('apps/app_inbox_sms.php');
        break;
    case 'app_aksi_hapus_sms':
        require_once ('apps/app_aksi_hapus_sms.php');
        break;
    case 'gateaway_editor':
        require_once ('apps/gateaway/app_media.php');
        break;

    default:
        require_once ('apps/app_list_member_sms.php');
        break;
}
?>
