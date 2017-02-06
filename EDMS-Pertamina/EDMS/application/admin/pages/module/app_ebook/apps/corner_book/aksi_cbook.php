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
    $pengarang  = validasi($_POST['pengarang'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "CB_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/corner_book/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'judul' => $judul,
        'tahun' => $tahun,
        'pengarang' => $pengarang,
        'ket' => $ket,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('corner_book', $data);
    header('location: admin.php?mod_apps=e-book&media_app=corner_book');
}
else if(isset($submit_edit)) {
    $id_eb      = validasi($_POST['id_eb'], 'xss');
    $judul      = validasi($_POST['judul'], 'xss');
    $pengarang  = validasi($_POST['pengarang'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "CB_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/corner_book/";
    
    
     if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('corner_book','id_eb',$id_eb);
    if($data->filename!='') {
    unlink("uploaded/corner_book/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data       = array(
        'judul' => $judul,
        'tahun' => $tahun,
        'pengarang' => $pengarang,
        'ket' => $ket,
        'filename' => $f_name
    );
    $insert = $ARSql->update('corner_book', 'id_eb',$id_eb, $data);
    header('location: admin.php?mod_apps=e-book&media_app=corner_book');
}else{
    $data1       = array(
        'judul' => $judul,
        'tahun' => $tahun,
        'pengarang' => $pengarang,
        'ket' => $ket
    );
    $insert = $ARSql->update('corner_book', 'id_eb',$id_eb, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=corner_book');
}
}
