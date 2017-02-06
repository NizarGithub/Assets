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
    $g           = validasi($_POST['g'], 'xss');

    $data = array(
        'tag_no '             => $a,
        'problems'            => $b,
        'critic_consq'        => $c,
        'rtl_target'          => $d,
        'status'              => $e,
        'trafic'              => $f,
        'pic'                 => $g
    );
    $insert = $ARSql->insert('top_issue', $data);
    if($insert) {
        header('location: admin.php?mod_apps=info&media_app=top_issue');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_issue'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f           = validasi($_POST['f'], 'xss');
    $g           = validasi($_POST['g'], 'xss');

    $data = array(
        'tag_no '             => $a,
        'problems'            => $b,
        'critic_consq'        => $c,
        'rtl_target'          => $d,
        'status'              => $e,
        'trafic'              => $f,
        'pic'                 => $g
    );
    $update = $ARSql->update('top_issue', 'id_issue',$id, $data);
        header('location: admin.php?mod_apps=info&media_app=top_issue');
    }
