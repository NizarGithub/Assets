<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_ilm = $_GET['id_ilm'];
$data  = $ARSql->getOne('ilmiah','id_ilm',$id_ilm);
if($data->filename!='') {
    unlink("uploaded/lembar_ilmiah/$data->filename");
    $delete = $ARSql->delOne('ilmiah','id_ilm',$id_ilm);
} else {
    $delete = $ARSql->delOne('ilmiah','id_ilm',$id_ilm);
}
header('location: admin.php?mod_apps=e-book&media_app=lembar_ilmiah');

