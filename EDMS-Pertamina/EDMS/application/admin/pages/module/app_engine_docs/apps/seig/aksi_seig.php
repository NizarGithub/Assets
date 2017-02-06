<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $desc  = validasi($_POST['desc'], 'xss');
    $f_tmp   = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "SEIG_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder  = "uploaded/SEIG/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'description' => $desc,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('seig', $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=seig');
}
else if(isset($submit_edit)) {
    $id_seig   = validasi($_POST['id_seig'], 'xss');
    $desc   = validasi($_POST['desc'], 'xss');
    $f_tmp   = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "SEIG_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder  = "uploaded/SEIG/";
    
     if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('seig','id_seig',$id_seig);
    if($data->filename!='') {
    unlink("uploaded/SEIG/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'description' => $desc,
        'filename' =>$f_name
    );
    $update = $ARSql->update('seig', 'id_seig',$id_seig, $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=seig');
}else{
    $data1    = array(
        'description' => $desc
    );
    $update = $ARSql->update('seig', 'id_seig',$id_seig, $data1);
    header('location: admin.php?mod_apps=engine-docs&media_app=seig');
}
}

