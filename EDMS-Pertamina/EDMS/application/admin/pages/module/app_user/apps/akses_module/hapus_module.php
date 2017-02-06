<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$delete = $ARSql->delOne('module','id_module',$id);
if($delete) {
header('location: admin.php?mod_apps=user&media_app=app_user_modul');
}

