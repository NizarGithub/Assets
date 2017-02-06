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
    $f_name 	= "Artikel-pekerja_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/artikel_pekerja/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'judul'           => $a,
        'tahun'           => $b,
        'pengarang'       => $c,
        'ket'             => $d,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('artikel_pekerja', $data);
    header('location: admin.php?mod_apps=e-book&media_app=artikel_pekerja');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_art'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Artikel-pekerja_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/artikel_pekerja/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('artikel_pekerja','id_art',$id);
    if($data->filename!='') {
    unlink("uploaded/artikel_pekerja/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'judul'           => $a,
        'tahun'           => $b,
        'pengarang'       => $c,
        'ket'             => $d,
        'filename'        => $f_name
    );
    $update = $ARSql->update('artikel_pekerja', 'id_art',$id, $data);
     header('location: admin.php?mod_apps=e-book&media_app=artikel_pekerja');
}else{
    $data1    = array(
         'judul'           => $a,
        'tahun'           => $b,
        'pengarang'       => $c,
        'ket'             => $d
    );
    $update = $ARSql->update('artikel_pekerja', 'id_art',$id, $data1);
     header('location: admin.php?mod_apps=e-book&media_app=artikel_pekerja');
}
}
