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
    $h           = validasi($_POST['h'], 'xss');
    $i           = validasi($_POST['i'], 'xss');
    $j           = validasi($_POST['j'], 'xss');
    $k           = validasi($_POST['k'], 'xss');
    $l           = validasi($_POST['l'], 'xss');
    $m           = validasi($_POST['m'], 'xss');
    $n           = validasi($_POST['n'], 'xss');

    $data = array(
        'tag_no'                        => $a,
        'description'                   => $b,
        'material'                      => $c,
        'temp_design'                   => $d,
        'temp_operasi'                  => $e,
        'pre_design'                    => $f,
        'pre_operasi'                   => $g,
        'fluida_service'                => $h,
        'corrosion'                     => $i,
        'dimension'                     => $j,
        'jumlah_tube'                   => $k,
        'thickness_design'              => $l,
        'thickness_actual'              => $m,
        'thn_buat'                      => $n

    );
    $insert = $ARSql->insert('equipment', $data);
    if($insert) {
        header('location: admin.php?mod_apps=engine-docs&media_app=equipment');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_equipment'], 'xss');
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
    $m           = validasi($_POST['m'], 'xss');
    $n           = validasi($_POST['n'], 'xss');

    $data = array(
        'tag_no'                        => $a,
        'description'                   => $b,
        'material'                      => $c,
        'temp_design'                   => $d,
        'temp_operasi'                  => $e,
        'pre_design'                    => $f,
        'pre_operasi'                   => $g,
        'fluida_service'                => $h,
        'corrosion'                     => $i,
        'dimension'                     => $j,
        'jumlah_tube'                   => $k,
        'thickness_design'              => $l,
        'thickness_actual'              => $m,
        'thn_buat'                      => $n

    );
    $update = $ARSql->update('equipment', 'id_equipment',$id, $data);
        header('location: admin.php?mod_apps=engine-docs&media_app=equipment');
    }
