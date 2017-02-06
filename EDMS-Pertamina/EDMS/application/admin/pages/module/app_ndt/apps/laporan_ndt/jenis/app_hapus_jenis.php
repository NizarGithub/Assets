<?php

/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$id            = validasi($_GET['id'], 'xss');
$delete        = $ARSql->delOne('jenis_ndt','id_jenis',$id);
if($delete) {
    header('location: admin.php?mod_apps=ndt&media_app=jenis_ndt');
}
