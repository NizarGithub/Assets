<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_agenda = $_GET['id_agenda'];
$delete = $ARSql->delOne('agenda','id_agenda',$id_agenda);
if($delete) {
header('location: admin.php?mod_apps=info&media_app=agenda_rapat');
}

