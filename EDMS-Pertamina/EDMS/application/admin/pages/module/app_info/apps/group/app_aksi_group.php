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
    $nama = validasi($_POST['nama'], 'xss');
    $ket  = validasi($_POST['keterangan'], 'xss');

    $data    = array(
        'nama' => $nama,
        'ket' => $ket
    );
    $insert = $ARSql->insert('group_pegawai', $data);
    if($insert) {
        header('location: admin.php?mod_apps=info&media_app=group');
    }
} 
else if(isset($submit_edit)) {
    $id_level   = validasi($_POST['id_group'], 'xss');
    $nama = validasi($_POST['nama'], 'xss');
    $ket  = validasi($_POST['keterangan'], 'xss');

    $data    = array(
        'nama' => $nama,
        'ket' => $ket
    );
    $update = $ARSql->update('group_pegawai', 'id_group', $id_level, $data);
    header('location: admin.php?mod_apps=info&media_app=group');
}