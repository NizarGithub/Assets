<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_pb = $_GET['id_pb'];
$data  = $ARSql->getOne('pink_book','id_pb',$id_pb);
if($data->filename!='') {
    unlink("uploaded/pink_book/$data->filename");
    $delete = $ARSql->delOne('pink_book','id_pb',$id_pb);
} else {
    $delete = $ARSql->delOne('pink_book','id_pb',$id_pb);
}
header('location: admin.php?mod_apps=e-book&media_app=pink_book');

