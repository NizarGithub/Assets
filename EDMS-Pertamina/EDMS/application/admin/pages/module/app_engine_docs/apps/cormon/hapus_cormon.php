<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('cormon','id_cormon',$id);
if($data->filename!='') {
    unlink("uploaded/cormon/$data->filename");
    $delete = $ARSql->delOne('cormon','id_cormon',$id);
} else {
    $delete = $ARSql->delOne('cormon','id_cormon',$id);
}
header('location: admin.php?mod_apps=engine-docs&media_app=cormon');

