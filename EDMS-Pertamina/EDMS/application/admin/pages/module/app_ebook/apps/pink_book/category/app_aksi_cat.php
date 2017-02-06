<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add  = $_POST['submit_add'];
$submit_edit = $_POST['submit_edit'];
if(isset($submit_add)) {
    $nama = validasi($_POST['nama_cat'], 'xss');
    $data       = array(
                  'name' => $nama
                  );
    $insert = $ARSql->insert('cat_book', $data);
    if($insert) {
        header('location: admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook');
    }
} 
else if(isset($submit_edit)) {
    $id_cat   = validasi($_POST['id_cat'], 'xss');
    $nama = validasi($_POST['nama_cat'], 'xss');
    $data       = array(
                  'name' => $nama
                  );
    $update = $ARSql->update('cat_book', 'id_cat', $id_cat, $data);
    header('location: admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook');
}