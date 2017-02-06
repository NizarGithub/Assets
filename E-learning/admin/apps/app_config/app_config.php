<?php
/**
* @version		2.0
* @package		Fiyo CMS
* @copyright	Copyright (C) 2014 Fiyo CMS.
* @license		GNU/GPL, see LICENSE.
**/



$act = $_GET['act'];

switch($act) {
        case 'apps':
         require('manages/apps.php');
        break;
        case 'plugins':
         require('manages/plugins.php');
        break;
        case 'themes':
         require('manages/themes.php');
        break;
        case 'modules':
         require('manages/modules.php');
        break;
        case 'backup':
         require('backup.php');
        break;
        case 'install':
         require('installer.php');
        break;
        default :
         require('general.php');
        break;
}	
?>	