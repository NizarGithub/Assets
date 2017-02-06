<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                   
$id   = validasi($_GET['id'], 'xss');
$data  = $ARSql->getOne('pipe','id_pipe',$id);
if($data->filename!='') {
    unlink("uploaded/pipe_list/$data->filename");
    $delete     = $ARSql->delOne('pipe','id_pipe',$id);
} else {
    $delete     = $ARSql->delOne('pipe','id_pipe',$id);
}
 header('location: admin.php?mod_apps=engine-docs&media_app=pipe_list');
