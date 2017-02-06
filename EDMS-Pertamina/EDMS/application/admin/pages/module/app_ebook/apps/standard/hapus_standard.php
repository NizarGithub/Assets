<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_std = $_GET['id_std'];
$data  = $ARSql->getOne('standard','id_std',$id_std);
if($data->filename!='') {
    unlink("uploaded/standard/$data->filename");
    $delete = $ARSql->delOne('standard','id_std',$id_std);
} else {
    $delete = $ARSql->delOne('standard','id_std',$id_std);
}
header('location: admin.php?mod_apps=e-book&media_app=standard');

