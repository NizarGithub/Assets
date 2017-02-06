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
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $e          = validasi($_POST['e'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Log-book_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/log_book/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_log'      => $a,
        'equipment'     => $b,
        'fact'          => $c,
        'rekomendasi'   => $d,
        'ket'           => $e,
        'filename'      => $f_name
    );
    $insert = $ARSql->insert('log_book', $data);
    header('location: admin.php?mod_apps=report&media_app=log_book');
}
else if(isset($submit_edit)) {
    $id_log     = validasi($_POST['id_log'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $e          = validasi($_POST['e'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Log-book_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/log_book/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('log_book','id_log',$id_log);
    if($data->filename!='') {
    unlink("uploaded/log_book/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_log'      => $a,
        'equipment'     => $b,
        'fact'          => $c,
        'rekomendasi'   => $d,
        'ket'           => $e,
        'filename'      => $f_name
    );
    $update = $ARSql->update('log_book', 'id_log',$id_log, $data);
     header('location: admin.php?mod_apps=report&media_app=log_book');
}else{
    $data1    = array(
        'unit_log'      => $a,
        'equipment'     => $b,
        'fact'          => $c,
        'rekomendasi'   => $d,
        'ket'           => $e
    );
    $update = $ARSql->update('log_book', 'id_log',$id_log, $data1);
    header('location: admin.php?mod_apps=report&media_app=log_book');
}
}
