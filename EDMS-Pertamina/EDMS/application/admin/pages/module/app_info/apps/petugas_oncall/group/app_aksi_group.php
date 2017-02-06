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
    $nama_level = validasi($_POST['nama_level'], 'xss');
    $data       = array(
                  'level' => $nama_level
                  );
    $insert = $ARSql->insert('user_level', $data);
    if($insert) {
        header('location: admin.php?mod_apps=user&media_app=user_level');
    }
} 
else if(isset($submit_edit)) {
    $id_level   = validasi($_POST['id_level'], 'xss');
    $nama_level = validasi($_POST['nama_level'], 'xss');
    $data       = array(
                  'level' => $nama_level
                  );
    $update = $ARSql->update('user_level', 'id_level', $id_level, $data);
    header('location: admin.php?mod_apps=user&media_app=user_level');
}