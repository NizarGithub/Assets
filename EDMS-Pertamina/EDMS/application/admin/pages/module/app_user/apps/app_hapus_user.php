<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id_user    = validasi($_GET['id'], 'xss');
$data       = $ARSql->getOne('users','id_user',$id_user);
if($data->userpicture!='') {
    unlink("uploaded/foto_user/$data->userpicture");
    unlink("uploaded/foto_user/medium_$data->userpicture");
    $delete = $ARSql->delOne('users','id_user',$id_user);
} else {
    $delete = $ARSql->delOne('users','id_user',$id_user);
}  
header('location: admin.php?mod_apps=user&media_app=app_list_user');

