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
        'tagno'               => $a,
        'schedule'            => $b,
        'ket'                 => $c
    );
    $insert = $ARSql->insert('cleaning', $data);
    if($insert) {
        header('location: admin.php?mod_apps=report&media_app=cleaning_tangki');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_tanki'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');


    $data = array(
        'tagno'               => $a,
        'schedule'            => $b,
        'ket'                 => $c
    );
    $update = $ARSql->update('cleaning', 'id_cl',$id, $data);
         header('location: admin.php?mod_apps=report&media_app=cleaning_tangki');
    }
