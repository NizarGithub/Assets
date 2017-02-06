<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_prod = $_GET['id_prod'];
$data  = $ARSql->getOne('produk','id_prod',$id_prod);
if($data->filename!='') {
    unlink("uploaded/produk/$data->filename");
    $delete = $ARSql->delOne('produk','id_prod',$id_prod);
} else {
    $delete = $ARSql->delOne('produk','id_prod',$id_prod);
}
header('location: admin.php?mod_apps=e-book&media_app=produk');

