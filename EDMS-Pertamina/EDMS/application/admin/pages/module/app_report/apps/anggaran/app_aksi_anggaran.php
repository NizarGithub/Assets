<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_anggaran'];
$submit_edit    = $_POST['submit_edit_anggaran'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');

    $data = array(
        'description '              => $a,
        'anggaran'                  => $b,
        'tahun'                     => $c,
        'pic'                       => $d,
        'status'                 => $e
    );
    $insert = $ARSql->insert('anggaran', $data);
    if($insert) {
        header('location: admin.php?mod_apps=report&media_app=anggaran');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_anggaran'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');

        $data = array(
        'description '              => $a,
        'anggaran'                  => $b,
        'tahun'                     => $c,
        'pic'                       => $d,
        'status'                 => $e
    );
    $update = $ARSql->update('anggaran', 'id_angg',$id, $data);
        header('location: admin.php?mod_apps=report&media_app=anggaran');
    }
