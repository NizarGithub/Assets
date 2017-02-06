<?php
/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id_petugas    = validasi($_GET['id'], 'xss');
$data       = $ARSql->getOne('petugas_oncall','id_petugas',$id_petugas);
if($data->foto!='') {
    unlink("uploaded/foto_petugas_oncall/$data->foto");
    unlink("uploaded/foto_petugas_oncall/medium_$data->foto");
    $delete = $ARSql->delOne('petugas_oncall','id_petugas',$id_petugas);
} else {
    $delete = $ARSql->delOne('petugas_oncall','id_petugas',$id_petugas);
}  
header('location: admin.php?mod_apps=info&media_app=petugas_oncall');