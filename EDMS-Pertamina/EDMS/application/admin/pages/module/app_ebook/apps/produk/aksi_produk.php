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
    $merk       = validasi($_POST['merk'], 'xss');
    $fungsi     = validasi($_POST['fungsi'], 'xss');
    $negara     = validasi($_POST['negara'], 'xss');
    $agent      = validasi($_POST['agent'], 'xss');
    $kontak     = validasi($_POST['contact'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Produk_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/produk/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'merk' => $merk,
        'fungsi' => $fungsi,
        'asal' => $negara,
        'agent' => $agent,
        'kontak' => $kontak,
        'ket' => $ket,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('produk', $data);
    header('location: admin.php?mod_apps=e-book&media_app=produk');
}
else if(isset($submit_edit)) {
    $id_prod     = validasi($_POST['id_prod'], 'xss');
    $merk       = validasi($_POST['merk'], 'xss');
    $fungsi     = validasi($_POST['fungsi'], 'xss');
    $negara     = validasi($_POST['negara'], 'xss');
    $agent      = validasi($_POST['agent'], 'xss');
    $kontak     = validasi($_POST['contact'], 'xss');
    $ket        = validasi($_POST['ket'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Produk_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/produk/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('produk','id_prod',$id_prod);
    if($data->filename!='') {
    unlink("uploaded/produk/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'merk' => $merk,
        'fungsi' => $fungsi,
        'asal' => $negara,
        'agent' => $agent,
        'kontak' => $kontak,
        'ket' => $ket,
        'filename' =>$f_name
    );
    $update = $ARSql->update('produk', 'id_prod',$id_prod, $data);
    header('location: admin.php?mod_apps=e-book&media_app=produk');
}else{
    $data1    = array(
        'merk' => $merk,
        'fungsi' => $fungsi,
        'asal' => $negara,
        'agent' => $agent,
        'kontak' => $kontak,
        'ket' => $ket
    );
    $update = $ARSql->update('produk', 'id_prod',$id_prod, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=produk');
}
}
