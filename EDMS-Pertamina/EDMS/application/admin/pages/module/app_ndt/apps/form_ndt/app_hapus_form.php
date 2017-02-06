<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id_form    = validasi($_GET['id'], 'xss');
$data  = $ARSql->getOne('form_ndt','id_form',$id_form);
if($data->filename!='') {
    unlink("uploaded/form_ndt/$data->filename");
    $delete = $ARSql->delOne('form_ndt','id_form',$id_form);
} else {
    $delete = $ARSql->delOne('form_ndt','id_form',$id_form);
}  
header('location: admin.php?mod_apps=ndt&media_app=form_ndt');

