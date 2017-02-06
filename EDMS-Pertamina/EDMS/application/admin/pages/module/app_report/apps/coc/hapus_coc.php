<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id = $_GET['id'];
$data  = $ARSql->getOne('read_coc','id_rcoc',$id);
if($data->filename!='') {
    unlink("uploaded/coc/$data->filename");
    $delete = $ARSql->delOne('read_coc','id_rcoc',$id);
} else {
    $delete = $ARSql->delOne('read_coc','id_rcoc',$id);
}
header('location: admin.php?mod_apps=report&media_app=coc');

