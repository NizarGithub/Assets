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
    $judul      = validasi($_POST['judul'], 'xss');
    $desc       = validasi($_POST['desc'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Standard_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/standard/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'standard' => $judul,
        'tahun' => $tahun,
        'description' => $desc,
        'ket' => $ket,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('standard', $data);
    header('location: admin.php?mod_apps=e-book&media_app=standard');
}
else if(isset($submit_edit)) {
    $id_std     = validasi($_POST['id_std'], 'xss');
    $judul      = validasi($_POST['judul'], 'xss');
    $desc       = validasi($_POST['desc'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Standard_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/standard/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('standard','id_std',$id_std);
    if($data->filename!='') {
    unlink("uploaded/standard/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data       = array(
        'standard' => $judul,
        'tahun' => $tahun,
        'description' => $desc,
        'ket' => $ket,
        'filename' => $f_name
    );
    $insert = $ARSql->update('standard', 'id_std',$id_std, $data);
    header('location: admin.php?mod_apps=e-book&media_app=standard');
}else{
   $data1      = array(
        'standard' => $judul,
        'tahun' => $tahun,
        'description' => $desc,
        'ket' => $ket
    );
    $insert = $ARSql->update('standard', 'id_std',$id_std, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=standard'); 
}
}
