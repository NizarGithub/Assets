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
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Corrosion-mapp_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/corrosion_mapping/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit'            => $a,
        'cm'              => $b,
        'tahun'           => $c,
        'ket'             => $d,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('corro_mapp', $data);
    header('location: admin.php?mod_apps=e-book&media_app=corrosion_mapping');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_cm'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Corrosion-mapp_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/corrosion_mapping/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('corro_mapp','id_cm',$id);
    if($data->filename!='') {
    unlink("uploaded/corrosion_mapping/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit'            => $a,
        'cm'              => $b,
        'tahun'           => $c,
        'ket'             => $d,
        'filename'        => $f_name
    );
    $update = $ARSql->update('corro_mapp', 'id_cm',$id, $data);
     header('location: admin.php?mod_apps=e-book&media_app=corrosion_mapping');
}else{
    $data1    = array(
        'unit'            => $a,
        'cm'              => $b,
        'tahun'           => $c,
        'ket'             => $d
    );
    $update = $ARSql->update('corro_mapp', 'id_cm',$id, $data1);
     header('location: admin.php?mod_apps=e-book&media_app=corrosion_mapping');
}
}
