<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
   
$id = $_GET['id'];
$data  = $ARSql->getOne('furnace','id_furnace',$id);
if($data->filename!='') {
    unlink("uploaded/furnace/$data->filename");
    $delete = $ARSql->delOne('furnace','id_furnace',$id);
} else {
    $delete = $ARSql->delOne('furnace','id_furnace',$id);
}
 header('location: admin.php?mod_apps=regulasi&media_app=app_furnace');


