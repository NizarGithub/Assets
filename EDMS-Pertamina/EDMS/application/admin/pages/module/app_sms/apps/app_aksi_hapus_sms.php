<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$get_id      = $_GET['id'];
$delete = $ARSql->delOne('inbox','ID',$get_id);
if($delete) {
    header('location: admin.php?mod_apps=sms_gateaway&media_app=app_inbox_sms');
}