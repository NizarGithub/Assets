<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_add_cat = $_POST['submit_add_cat'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $judul  = validasi($_POST['judul'], 'xss');
    $f_tmp   = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Materi_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder  = "uploaded/materi_kursus/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'materi' => $judul,
        'filename' => $f_name,
        'uploader' => ID_USER
    );
    $insert = $ARSql->insert('kursus', $data);
    header('location: admin.php?mod_apps=e-book&media_app=materi_kursus');
}
else if(isset($submit_edit)) {
    $id_kurs   = validasi($_POST['id_kurs'], 'xss');
    $judul   = validasi($_POST['judul'], 'xss');
    $f_tmp   = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Materi_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder  = "uploaded/materi_kursus/";
    
     if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('kursus','id_kurs',$id_kurs);
    if($data->filename!='') {
    unlink("uploaded/materi_kursus/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'materi' => $judul,
        'filename' =>$f_name
    );
    $update = $ARSql->update('kursus', 'id_kurs',$id_kurs, $data);
    header('location: admin.php?mod_apps=e-book&media_app=materi_kursus');
}else{
    $data1    = array(
        'materi' => $judul
    );
    $update = $ARSql->update('kursus', 'id_kurs',$id_kurs, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=materi_kursus');
}
}

