<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
                                  
$id = $_GET['id'];
$data  = $ARSql->getOne('termo_trend','id_thermo',$id);
if($data->filename!='') {
    unlink("uploaded/termo/$data->filename");
    $delete        = $ARSql->delOne('termo_trend','id_thermo',$id);
} else {
    $delete        = $ARSql->delOne('termo_trend','id_thermo',$id);
}
header('location: admin.php?mod_apps=regulasi&media_app=app_termo');

  
