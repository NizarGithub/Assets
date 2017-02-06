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
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Cormon_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/cormon/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_cor'        => $a,
        'equipment'       => $b,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('cormon', $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=cormon');
}
else if(isset($submit_edit)) {
    $id_cormon     = validasi($_POST['id_cor'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Cormon_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/cormon/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('cormon','id_cormon',$id_cormon);
    if($data->filename!='') {
    unlink("uploaded/cormon/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_cor'        => $a,
        'equipment'       => $b,
        'filename'        => $f_name
    );
    $update = $ARSql->update('cormon', 'id_cormon',$id_cormon, $data);
     header('location: admin.php?mod_apps=engine-docs&media_app=cormon');
}else{
    $data1    = array(
        'unit_cor'        => $a,
        'equipment'       => $b
    );
    $update = $ARSql->update('cormon', 'id_cormon',$id_cormon, $data1);
     header('location: admin.php?mod_apps=engine-docs&media_app=cormon');
}
}
