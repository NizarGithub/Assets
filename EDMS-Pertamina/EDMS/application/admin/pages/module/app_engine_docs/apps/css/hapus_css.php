<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id   = validasi($_GET['id_css'], 'xss');
$data  = $ARSql->getOne('css','id_css',$id);
if($data->filename!='') {
    unlink("uploaded/CSS/$data->filename");
    $delete     = $ARSql->delOne('css','id_css',$id);
} else {
    $delete     = $ARSql->delOne('css','id_css',$id);
}
header('location: admin.php?mod_apps=engine-docs&media_app=css');
