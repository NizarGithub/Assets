<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_eb = $_GET['id_eb'];
$data  = $ARSql->getOne('corner_book','id_eb',$id_eb);
if($data->filename!='') {
    unlink("uploaded/corner_book/$data->filename");
    $delete = $ARSql->delOne('corner_book','id_eb',$id_eb);
} else {
    $delete = $ARSql->delOne('corner_book','id_eb',$id_eb);
}
header('location: admin.php?mod_apps=e-book&media_app=corner_book');

