<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add  = $_POST['submit_add'];
$submit_edit = $_POST['submit_edit'];
if(isset($submit_add)) {
    $desc       = validasi($_POST['desc'], 'xss');
    $perihal    = validasi($_POST['perihal'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "UU-PP_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/uu_pp/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'description' => $desc,
        'tahun' => $tahun,
        'perihal' => $perihal,
        'ket' => $ket,
        'filename' => $f_name,
        'uploader' => ID_USER
    );
    $insert = $ARSql->insert('uu', $data);
    header('location: admin.php?mod_apps=e-book&media_app=uu_pp');
}
else if(isset($submit_edit)) {
    $id_uu     = validasi($_POST['id_uu'], 'xss');
    $desc       = validasi($_POST['desc'], 'xss');
    $perihal    = validasi($_POST['perihal'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "UU-PP_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/uu_pp/";
    
 
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('uu','id_uu',$id_uu);
    if($data->filename!='') {
    unlink("uploaded/uu_pp/$data->filename");
    }
    
    $data    = array(
        'description' => $desc,
        'tahun' => $tahun,
        'perihal' => $perihal,
        'ket' => $ket,
        'filename' => $f_name
    );
    $update = $ARSql->update('uu', 'id_uu',$id_uu, $data);
    header('location: admin.php?mod_apps=e-book&media_app=uu_pp');
     
    
    
}else{
    $data1    = array(
        'description' => $desc,
        'tahun' => $tahun,
        'perihal' => $perihal,
        'ket' => $ket
    );  
   $update = $ARSql->update('uu', 'id_uu',$id_uu, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=uu_pp');
}
}


