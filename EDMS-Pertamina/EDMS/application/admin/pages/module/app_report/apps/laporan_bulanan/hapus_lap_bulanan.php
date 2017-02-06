<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('laporan_bulanan','id_lap',$id);
if($data->filename!='') {
    unlink("uploaded/laporan_bulanan/$data->filename");
    $delete = $ARSql->delOne('laporan_bulanan','id_lap',$id);
} else {
    $delete = $ARSql->delOne('laporan_bulanan','id_lap',$id);
}
header('location: admin.php?mod_apps=report&media_app=lap_bulanan');

