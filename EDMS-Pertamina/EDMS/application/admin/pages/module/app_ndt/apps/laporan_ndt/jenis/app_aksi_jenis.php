<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add  = $_POST['submit_add'];
$submit_edit = $_POST['submit_edit'];
if(isset($submit_add)) {
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $data       = array(
                  'nama' => $a,
                  'ket'  => $b
                  );
    $insert = $ARSql->insert('jenis_ndt', $data);
    if($insert) {
        header('location: admin.php?mod_apps=ndt&media_app=jenis_ndt');
    }
} 
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_jenis'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $data       = array(
                  'nama' => $a,
                  'ket'  => $b
                  );
    $update = $ARSql->update('jenis_ndt', 'id_jenis', $id, $data);
    header('location: admin.php?mod_apps=ndt&media_app=jenis_ndt');
}