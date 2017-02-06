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
    $f_name 	= "Ilmiah_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/lembar_ilmiah/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'judul' => $judul,
        'tahun' => $tahun,
        'pengarang' => $pengarang,
        'ket' => $ket,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('ilmiah', $data);
    header('location: admin.php?mod_apps=e-book&media_app=lembar_ilmiah');
}
else if(isset($submit_edit)) {
    $id_ilm     = validasi($_POST['id_ilm'], 'xss');
    $judul      = validasi($_POST['judul'], 'xss');
    $pengarang  = validasi($_POST['pengarang'], 'xss');
    $tahun      = validasi($_POST['tahun'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Ilmiah_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/lembar_ilmiah/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('ilmiah','id_ilm',$id_ilm);
    if($data->filename!='') {
    unlink("uploaded/lembar_ilmiah/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data       = array(
        'judul' => $judul,
        'tahun' => $tahun,
        'pengarang' => $pengarang,
        'ket' => $ket,
        'filename' => $f_name
    );
    $update = $ARSql->update('ilmiah', 'id_ilm',$id_ilm, $data);
    header('location: admin.php?mod_apps=e-book&media_app=lembar_ilmiah');
}
else{
    $data1       = array(
        'judul' => $judul,
        'tahun' => $tahun,
        'pengarang' => $pengarang,
        'ket' => $ket
    );
    $update = $ARSql->update('ilmiah', 'id_ilm',$id_ilm, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=lembar_ilmiah');
}
}