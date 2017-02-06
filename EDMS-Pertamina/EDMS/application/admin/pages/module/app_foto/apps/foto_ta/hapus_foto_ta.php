<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('foto_ta','id_fta',$id);
if($data->foto!='') {
    unlink("uploaded/foto_TA/$data->foto");
    unlink("uploaded/foto_TA/medium_$data->foto");
    $delete = $ARSql->delOne('foto_ta','id_fta',$id);
} else {
    $delete = $ARSql->delOne('foto_ta','id_fta',$id);
}
header('location: admin.php?mod_apps=foto&media_app=foto_ta');

