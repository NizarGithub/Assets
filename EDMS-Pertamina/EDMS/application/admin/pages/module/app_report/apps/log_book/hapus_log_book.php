<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_log = $_GET['id'];
$data  = $ARSql->getOne('log_book','id_log',$id_log);
if($data->filename!='') {
    unlink("uploaded/log_book/$data->filename");
    $delete = $ARSql->delOne('log_book','id_log',$id_log);
} else {
    $delete = $ARSql->delOne('log_book','id_log',$id_log);
}
header('location: admin.php?mod_apps=report&media_app=log_book');

