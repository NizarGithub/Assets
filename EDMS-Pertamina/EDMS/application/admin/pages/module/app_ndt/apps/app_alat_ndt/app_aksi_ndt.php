<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_ndt'];
$submit_edit    = $_POST['submit_edit_ndt'];
if(isset($submit_add)) {
    $description      = validasi($_POST['a'], 'xss');
    $merk             = validasi($_POST['b'], 'xss');
    $serial           = validasi($_POST['c'], 'xss');
    $jumlah           = validasi($_POST['d'], 'xss');
    $ket              = validasi($_POST['e'], 'xss');
    $pminjam          = validasi($_POST['f'], 'xss');
    $data = array(
        'description '  => $description,
        'merk'          => $merk,
        'serial'        => $serial,
        'jumlah'        => $jumlah,
        'ket'           => $ket,
        'peminjam'      => $pminjam

    );
    $insert = $ARSql->insert('alat_ndt', $data);
    if($insert) {
        header('location: admin.php?mod_apps=ndt&media_app=alat_ndt');
    }
} 
else if(isset($submit_edit)) {
    $id_alat          = validasi($_POST['id_alat'], 'xss');
    $description      = validasi($_POST['a'], 'xss');
    $merk             = validasi($_POST['b'], 'xss');
    $serial           = validasi($_POST['c'], 'xss');
    $jumlah           = validasi($_POST['d'], 'xss');
    $ket              = validasi($_POST['e'], 'xss');
    $pminjam          = validasi($_POST['f'], 'xss');
    $data = array(
        'description '  => $description,
        'merk'          => $merk,
        'serial'        => $serial,
        'jumlah'        => $jumlah,
        'ket'           => $ket,
        'peminjam'      => $pminjam

    );
    $update = $ARSql->update('alat_ndt', 'id_alat',$id_alat, $data);
        header('location:  admin.php?mod_apps=ndt&media_app=alat_ndt');
    }
