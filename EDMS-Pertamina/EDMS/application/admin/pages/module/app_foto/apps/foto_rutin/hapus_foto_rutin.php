<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('foto_rutin','id_fr',$id);
if($data->foto!='') {
    unlink("uploaded/foto_rutin/$data->foto");
    unlink("uploaded/foto_rutin/medium_$data->foto");
    $delete = $ARSql->delOne('foto_rutin','id_fr',$id);
} else {
    $delete = $ARSql->delOne('foto_rutin','id_fr',$id);
}
header('location: admin.php?mod_apps=foto&media_app=foto_rutin');

