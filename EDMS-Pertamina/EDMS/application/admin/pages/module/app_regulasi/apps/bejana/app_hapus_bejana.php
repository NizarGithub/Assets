<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
                                     

$id   = validasi($_GET['id'], 'xss');
$data  = $ARSql->getOne('bejana','id_bejana',$id);
if($data->filename!='') {
    unlink("uploaded/bejana/$data->filename");
    $delete     = $ARSql->delOne('bejana','id_bejana',$id);
} else {
    $delete     = $ARSql->delOne('bejana','id_bejana',$id);
}
 header('location: admin.php?mod_apps=regulasi&media_app=app_bejana');

