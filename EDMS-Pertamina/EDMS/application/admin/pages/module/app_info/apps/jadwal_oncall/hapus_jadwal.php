<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_jadwal = $_GET['id_jadwal'];
$delete = $ARSql->delOne('jadwal_oncall','id_jadwal',$id_jadwal);
if($delete) {
header('location: admin.php?mod_apps=info&media_app=jadwal_oncall');
}

