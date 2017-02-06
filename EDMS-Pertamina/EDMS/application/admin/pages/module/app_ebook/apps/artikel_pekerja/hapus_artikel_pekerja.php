<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('artikel_pekerja','id_art',$id);
if($data->filename!='') {
    unlink("uploaded/artikel_pekerja/$data->filename");
    $delete = $ARSql->delOne('artikel_pekerja','id_art',$id);
} else {
    $delete = $ARSql->delOne('artikel_pekerja','id_art',$id);
}
header('location: admin.php?mod_apps=e-book&media_app=artikel_pekerja');

