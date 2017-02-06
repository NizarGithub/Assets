<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('wps','id_wps',$id);
if($data->filename!='') {
    unlink("uploaded/wps/$data->filename");
    $delete = $ARSql->delOne('wps','id_wps',$id);
} else {
    $delete = $ARSql->delOne('wps','id_wps',$id);
}
header('location: admin.php?mod_apps=engine-docs&media_app=wps');

