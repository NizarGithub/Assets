<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_skpi'];
$submit_edit    = $_POST['submit_edit_skpi'];
if(isset($submit_add)) {
    $nomor      = validasi($_POST['no'], 'xss');
    $tanggal    = validasi($_POST['tgl'], 'xss');
    $plant      = validasi($_POST['plant'], 'xss');
    $expire     = validasi($_POST['expire'], 'xss');
    $dibuat     = validasi($_POST['dibuat'], 'xss');
    $pembuat    = validasi($_POST['pembuat'], 'xss');
    $digunakan  = validasi($_POST['digunakan'], 'xss');
    $untuk      = validasi($_POST['untuk'], 'xss');
    $data = array(
        'no_skpi '      => $nomor,
        'tgl'           => $tanggal,
        'plant'         => $plant,
        'expire'        => $expire,
        'dibuat'        => $dibuat,
        'pembuat'       => $pembuat,
        'digunakan'     => $digunakan,
        'untuk'         => $untuk
    );
    $insert = $ARSql->insert('skpi', $data);
    if($insert) {
        header('location: admin.php?mod_apps=regulasi&media_app=app_skpi');
    }
} 
else if(isset($submit_edit)) {
    $id_skpi    = validasi($_POST['id_skpi'], 'xss');
    $nomor      = validasi($_POST['no'], 'xss');
    $tanggal    = validasi($_POST['tgl'], 'xss');
    $plant      = validasi($_POST['plant'], 'xss');
    $expire     = validasi($_POST['expire'], 'xss');
    $dibuat     = validasi($_POST['dibuat'], 'xss');
    $pembuat    = validasi($_POST['pembuat'], 'xss');
    $digunakan  = validasi($_POST['digunakan'], 'xss');
    $untuk      = validasi($_POST['untuk'], 'xss');
    $data = array(
        'no_skpi '      => $nomor,
        'tgl'           => $tanggal,
        'plant'         => $plant,
        'expire'        => $expire,
        'dibuat'        => $dibuat,
        'pembuat'       => $pembuat,
        'digunakan'     => $digunakan,
        'untuk'         => $untuk
    );
    $update = $ARSql->update('skpi', 'id_skpi',$id_skpi, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_skpi');
    }

