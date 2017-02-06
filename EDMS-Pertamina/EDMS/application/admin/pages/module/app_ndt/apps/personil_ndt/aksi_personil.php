<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');


    $data = array(
        'nama '               => $a,
        'qualifikasi'         => $b,
        'alamat'              => $c,
        'ket'                 => $d,
        'no_telp'             => $e
    );
    $insert = $ARSql->insert('ndt_personil', $data);
    if($insert) {
        header('location: admin.php?mod_apps=ndt&media_app=personil_ndt');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_personil'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');


    $data = array(
        'nama '               => $a,
        'qualifikasi'         => $b,
        'alamat'              => $c,
        'ket'                 => $d,
        'no_telp'             => $e
    );
    $update = $ARSql->update('ndt_personil', 'id_personil',$id, $data);
         header('location: admin.php?mod_apps=ndt&media_app=personil_ndt');
    }
