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


    $data = array(
        'nama '               => $a,
        'jumlah'              => $b,
        'keterangan'          => $c
    );
    $insert = $ARSql->insert('atk', $data);
    if($insert) {
        header('location: admin.php?mod_apps=report&media_app=atk');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_atk'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');


    $data = array(
        'nama '               => $a,
        'jumlah'              => $b,
        'keterangan'          => $c
    );
    $update = $ARSql->update('atk', 'id_atk',$id, $data);
         header('location: admin.php?mod_apps=report&media_app=atk');
    }
