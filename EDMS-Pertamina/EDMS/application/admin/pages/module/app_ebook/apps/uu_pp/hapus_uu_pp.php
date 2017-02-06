<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_uu = $_GET['id_uu'];
$data  = $ARSql->getOne('uu','id_uu',$id_uu);
if($data->filename!='') {
    unlink("uploaded/uu_pp/$data->filename");
    $delete = $ARSql->delOne('uu','id_uu',$id_uu);
} else {
    $delete = $ARSql->delOne('uu','id_uu',$id_uu);
}
header('location: admin.php?mod_apps=e-book&media_app=uu_pp');

