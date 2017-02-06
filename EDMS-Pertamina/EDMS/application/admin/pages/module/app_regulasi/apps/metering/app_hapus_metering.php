<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */

$id_metering   = validasi($_GET['id'], 'xss');
$data  = $ARSql->getOne('metering','id_met',$id_metering);
if($data->filename!='') {
    unlink("uploaded/metering/$data->filename");
    $delete        = $ARSql->delOne('metering','id_met',$id_metering);
} else {
    $delete        = $ARSql->delOne('metering','id_met',$id_metering);
}
 header('location: admin.php?mod_apps=regulasi&media_app=app_metering');