<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id    = validasi($_GET['id'], 'xss');
$data  = $ARSql->getOne('laporan_ndt','id_ndt',$id);
if($data->filename!='') {
    unlink("uploaded/laporan_ndt/$data->filename");
    $delete = $ARSql->delOne('laporan_ndt','id_ndt',$id);
} else {
    $delete = $ARSql->delOne('laporan_ndt','id_ndt',$id);
}  
header('location: admin.php?mod_apps=ndt&media_app=laporan_ndt');

