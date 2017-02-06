<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_seig = $_GET['id_seig'];
$data  = $ARSql->getOne('seig','id_seig',$id_seig);
if($data->filename!='') {
    unlink("uploaded/SEIG/$data->filename");
    $delete = $ARSql->delOne('seig','id_seig',$id_seig);
} else {
    $delete = $ARSql->delOne('seig','id_seig',$id_seig);
}
header('location: admin.php?mod_apps=engine-docs&media_app=seig');

