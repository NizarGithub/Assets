<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$id_cat = validasi($_GET['id'], 'xss');
$delete = $ARSql->delOne('cat_book','id_cat',$id_cat);
if($delete) {
    header('location: admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook');
}
