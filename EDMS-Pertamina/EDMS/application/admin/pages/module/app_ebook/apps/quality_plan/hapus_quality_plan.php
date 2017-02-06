<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('quality_plan','id_qp',$id);
if($data->filename!='') {
    unlink("uploaded/quality_plan/$data->filename");
    $delete = $ARSql->delOne('quality_plan','id_qp',$id);
} else {
    $delete = $ARSql->delOne('quality_plan','id_qp',$id);
}
header('location: admin.php?mod_apps=e-book&media_app=quality_plan');

