<?php

/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$id_level = validasi($_GET['id'], 'xss');
$delete = $ARSql->delOne('user_level','id_level',$id_level);
if($delete) {
    header('location: admin.php?mod_apps=user&media_app=user_level');
}
