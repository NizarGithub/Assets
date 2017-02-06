<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

//error_reporting(E_NOTICE || E_WARNING);

define('APP_PATH', dirname(__FILE__).'/');

define('MOD_APP', @$_GET['mod_apps']);

define('MEDIA_APP', @$_GET['media_app']);

define('APP_ASSETS', 'Assets/');

define('APP_CSS', APP_ASSETS. 'css/');

define('APP_JS', APP_ASSETS. 'js/');

define('APP_IMG', APP_ASSETS. 'img/');

define('APP_PLUGINS', APP_ASSETS. 'plugins/');


define('APP_SYSTEM', 'system/');

define('APP_SYSTEM_CLASS', APP_SYSTEM .'class/');

define('APP_SYSTEM_CORE', APP_SYSTEM .'core/');

define('APP_SYSTEM_PLUGINS', APP_SYSTEM .'plugins/');

define('APP_SYSTEM_FUNCTION', APP_SYSTEM .'function/');

/*
 * End of definer
 */