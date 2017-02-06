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
$get_id      = $_GET['id'];
if(isset($submit_add)) {
    $nama       = validasi($_POST['nama'], 'xss');
    $nomor      = $_POST['no_telp'];
    $aktif      = validasi($_POST['aktif'], 'xss');
    $data       = array(
                  'nama' => $nama,
                  'no_telp' =>$nomor,
                  'aktif' => $aktif
                  );
    $insert = $ARSql->insert('member_sms', $data);
    if($insert) {
        header('location: admin.php?mod_apps=sms_gateaway');
    }
} 
else if(isset($submit_edit)) {
    $id_member  = validasi($_POST['id_member'], 'xss');
    $nama       = validasi($_POST['nama'], 'xss');
    $nomor      = $_POST['no_telp'];
    $aktif      = validasi($_POST['aktif'], 'xss');
    $data       = array(
                  'nama' => $nama,
                  'no_telp' =>$nomor,
                  'aktif' => $aktif
                  );
    $update = $ARSql->update('member_sms', 'id_member', $id_member, $data);
    header('location: admin.php?mod_apps=sms_gateaway');
}
else if(isset($get_id)) {
    $delete = $ARSql->delOne('member_sms','id_member',$get_id);
    if($delete) {
        header('location: admin.php?mod_apps=sms_gateaway');
    }
}