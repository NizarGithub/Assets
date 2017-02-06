<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add  = $_POST['submit_add'];
$submit_edit = $_POST['submit_edit'];
if(isset($submit_add)) {
    $u          = validasi($_POST['u'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Onstream-inspection_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/onstream_inspection/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_ons'        => $u,
        'description'     => $a,
        'fact'            => $b,
        'rekomendasi'     => $c,
        'ket'             => $d,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('onstream', $data);
    header('location: admin.php?mod_apps=report&media_app=onstream');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_ons'], 'xss');
    $u          = validasi($_POST['u'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Onstream-inspection_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/onstream_inspection/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('onstream','id_ons',$id);
    if($data->filename!='') {
    unlink("uploaded/onstream_inspection/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_ons'        => $u,
        'description'     => $a,
        'fact'            => $b,
        'rekomendasi'     => $c,
        'ket'             => $d,
        'filename'        => $f_name
    );
    $update = $ARSql->update('onstream', 'id_ons',$id, $data);
     header('location: admin.php?mod_apps=report&media_app=onstream');
}else{
    $data1    = array(
        'unit_ons'        => $u,
        'description'     => $a,
        'fact'            => $b,
        'rekomendasi'     => $c,
        'ket'             => $d
    );
    $update = $ARSql->update('onstream', 'id_ons',$id, $data1);
     header('location: admin.php?mod_apps=report&media_app=onstream');
}
}
