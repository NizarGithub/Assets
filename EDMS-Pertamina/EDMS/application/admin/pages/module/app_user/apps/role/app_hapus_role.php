<?php

/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$id = validasi($_GET['id'], 'xss');
$delete = $ARSql->delOne('user_role','id_role',$id);
if($delete) {
    header('location: admin.php?mod_apps=user&media_app=user_role');
}
