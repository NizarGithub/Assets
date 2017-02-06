<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $a      = validasi($_POST['a'], 'xss');
    $b      = validasi($_POST['b'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $data    = array(
        'module'     => $a,
        'ket'        => $b,
        'aktif'     => $aktif
    );
    $insert = $ARSql->insert('module', $data);
    header('location: admin.php?mod_apps=user&media_app=app_user_modul');
}
else if(isset($submit_edit)) {
    $id     = validasi($_POST['id_module'], 'xss');
    $a      = validasi($_POST['a'], 'xss');
    $b      = validasi($_POST['b'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $data    = array(
        'module'     => $a,
        'ket'        => $b,
        'aktif'     => $aktif
    );
    $update = $ARSql->update('module', 'id_module',$id, $data);
    header('location: admin.php?mod_apps=user&media_app=app_user_modul');
}

