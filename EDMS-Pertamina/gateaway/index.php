<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
error_reporting(0);
require_once ('Apps__Definer.php');
# Function general
require_once (APP_SYSTEM_FUNCTION . 'General_function.php');
# Function tanggal
require_once (APP_SYSTEM_FUNCTION . 'Tanggal_function.php');
# Path Configuration
require_once (APP_PATH . 'Apps__Config.php');
# New Object Class Connect To MySQL
$DB = New ConnectDB();
# Path Function Query
require_once (APP_PATH . APP_SYSTEM_CLASS . 'Active_record_class.php');
# New Object Class To Active Query
$ARSql = New Active_record();
# Path application Admin
require_once (APP_PATH . 'Apps/index.php');