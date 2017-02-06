<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('onstream','id_ons',$id);
if($data->filename!='') {
    unlink("uploaded/onstream_inspection/$data->filename");
    $delete = $ARSql->delOne('onstream','id_ons',$id);
} else {
    $delete = $ARSql->delOne('onstream','id_ons',$id);
}
header('location: admin.php?mod_apps=report&media_app=onstream');

