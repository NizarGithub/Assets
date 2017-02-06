<?php

/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$id_level = validasi($_GET['id'], 'xss');
$delete = $ARSql->delOne('group_pegawai','id_group',$id_level);
if($delete) {
    header('location: admin.php?mod_apps=info&media_app=group');
}
