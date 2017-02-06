<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

error_reporting(E_NOTICE || E_WARNING);

define('APP_PATH', dirname(__FILE__).'/');

define('MOD_APP', $_GET['mod_apps']);

define('MEDIA_APP', $_GET['media_app']);

define('APP_ACT', $_GET['action']);

define('APP_ASSETS', 'assets/');

define('APP_CSS', APP_ASSETS. 'css/');

define('APP_JS', APP_ASSETS. 'JS/');

define('APP_ICON', APP_ASSETS. 'Icon/');


define('APP_IMG', APP_ASSETS. 'images/');

define('APP_IKON', APP_IMG. 'Icon/');

define('APP_FOTO_OC', 'uploaded/foto_petugas_oncall/');

define('APP_PLUGINS', APP_ASSETS. 'plugins/');

define('APP_APPLICATION', 'application/');

define('APP_ADMIN', APP_APPLICATION. 'admin/');

define('APP_PAGES', APP_ADMIN . 'pages/');

define('APP_MODULE', APP_PAGES . 'module/');

define('APP_EBOOK', APP_MODULE . 'app_ebook/');

define('APP_ENGDOC', APP_MODULE . 'app_engine_docs/');

define('APP_FOTO', APP_MODULE . 'app_foto/');

define('APP_HOME', APP_MODULE . 'app_home/');

define('APP_INFO', APP_MODULE . 'app_info/');

define('APP_NDT', APP_MODULE . 'app_ndt/');

define('APP_REGULASI', APP_MODULE . 'app_regulasi/');

define('APP_REPORT', APP_MODULE . 'app_report/');

define('APP_SMS', APP_MODULE . 'app_sms/');

define('APP_THEMES', APP_MODULE . 'app_themes/');


define('APP_USER', APP_MODULE . 'app_user/');

define('APP_UTAMA', APP_MODULE . 'app_utama/');

define('APP_HOMEPAGE', APP_APPLICATION. 'homepage/');

define('APP_HP_PAGES', APP_HOMEPAGE .'pages/');

define('APP_HP_PAGES_INC', APP_HP_PAGES .'Included/');

define('APP_LANGUAGE', APP_APPLICATION .'language/');

define('APP_SYSTEM', 'system/');

define('APP_SYSTEM_CLASS', APP_SYSTEM .'class/');

define('APP_SYSTEM_CORE', APP_SYSTEM .'core/');

define('APP_SYSTEM_PLUGINS', APP_SYSTEM .'plugins/');

define('APP_SYSTEM_FUNCTION', APP_SYSTEM .'function/');

/*
 * End of definer
 */



