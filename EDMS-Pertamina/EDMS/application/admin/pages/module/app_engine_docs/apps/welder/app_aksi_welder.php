<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_welder'];
$submit_edit    = $_POST['submit_edit_welder'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f           = validasi($_POST['f'], 'xss');
    $g           = validasi($_POST['g'], 'xss');
    $h           = validasi($_POST['h'], 'xss');
    $i           = validasi($_POST['i'], 'xss');
    $j           = validasi($_POST['j'], 'xss');
    $k           = validasi($_POST['k'], 'xss');
    $l           = validasi($_POST['l'], 'xss');

    $data = array(
        'nama'                      => $a,
        'kualifikasi'               => $b,
        'posisi'                    => $c,
        'diameter'                  => $d,
        'thickness'                 => $e,
        'material'                  => $f,
        'berlaku'                   => $g,
        'pengalaman'                => $h,
        'project'                   => $i,
        'no_hp'                     => $j,
        'email'                     => $k,
        'no_sertifikat'             => $l

    );
    $insert = $ARSql->insert('welder', $data);
    if($insert) {
        header('location: admin.php?mod_apps=engine-docs&media_app=welder');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_welder'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f           = validasi($_POST['f'], 'xss');
    $g           = validasi($_POST['g'], 'xss');
    $h           = validasi($_POST['h'], 'xss');
    $i           = validasi($_POST['i'], 'xss');
    $j           = validasi($_POST['j'], 'xss');
    $k           = validasi($_POST['k'], 'xss');
    $l           = validasi($_POST['l'], 'xss');

    $data = array(
        'nama'                      => $a,
        'kualifikasi'               => $b,
        'posisi'                    => $c,
        'diameter'                  => $d,
        'thickness'                 => $e,
        'material'                  => $f,
        'berlaku'                   => $g,
        'pengalaman'                => $h,
        'project'                   => $i,
        'no_hp'                     => $j,
        'email'                     => $k,
        'no_sertifikat'             => $l

    );
    $update = $ARSql->update('welder', 'id_welder',$id, $data);
        header('location: admin.php?mod_apps=engine-docs&media_app=welder');
    }
