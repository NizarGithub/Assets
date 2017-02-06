<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('corro_mapp','id_cm',$id);
if($data->filename!='') {
    unlink("uploaded/corrosion_mapping/$data->filename");
    $delete = $ARSql->delOne('corro_mapp','id_cm',$id);
} else {
    $delete = $ARSql->delOne('corro_mapp','id_cm',$id);
}
header('location: admin.php?mod_apps=e-book&media_app=corrosion_mapping');

