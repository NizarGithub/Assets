<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
                                
$id = $_GET['id'];
$data  = $ARSql->getOne('tanki','id_tanki',$id);
if($data->filename!='') {
    unlink("uploaded/tangki/$data->filename");
    $delete     = $ARSql->delOne('tanki','id_tanki',$id);
} else {
    $delete     = $ARSql->delOne('tanki','id_tanki',$id);
}
 header('location: admin.php?mod_apps=regulasi&media_app=app_tanki');

