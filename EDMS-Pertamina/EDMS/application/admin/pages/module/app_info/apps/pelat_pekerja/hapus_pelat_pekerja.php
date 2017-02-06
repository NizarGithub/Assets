<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('pelat_pekerja','id_pp',$id);
if($data->filename!='') {
    unlink("uploaded/pelatihan_pekerja/$data->filename");
    $delete = $ARSql->delOne('pelat_pekerja','id_pp',$id);
} else {
    $delete = $ARSql->delOne('pelat_pekerja','id_pp',$id);
}
header('location: admin.php?mod_apps=info&media_app=pelat_pekerja');

