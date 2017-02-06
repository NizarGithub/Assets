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
    $f           = validasi($_POST['f'], 'xss');


    $data = array(
        'no'                  => $a,
        'tgl'                 => $b,
        'kepada'              => $c,
        'tembusan'            => $d,
        'perihal'             => $e,
        't_lanjut'            => $f
    );
    $insert = $ARSql->insert('around', $data);
    if($insert) {
        header('location: admin.php?mod_apps=report&media_app=turn_around');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_around'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f           = validasi($_POST['f'], 'xss');


    $data = array(
        'no'                  => $a,
        'tgl'                 => $b,
        'kepada'              => $c,
        'tembusan'            => $d,
        'perihal'             => $e,
        't_lanjut'            => $f
    );
    $update = $ARSql->update('around', 'id_ar',$id, $data);
         header('location: admin.php?mod_apps=report&media_app=turn_around');
    }
