<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('drawing','id_draw',$id);
if($data->filename!='') {
    unlink("uploaded/others_drawing/$data->filename");
    $delete = $ARSql->delOne('drawing','id_draw',$id);
} else {
    $delete = $ARSql->delOne('drawing','id_draw',$id);
}
header('location: admin.php?mod_apps=engine-docs&media_app=others_drawing');

