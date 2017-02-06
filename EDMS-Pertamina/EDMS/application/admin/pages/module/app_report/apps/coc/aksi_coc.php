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
    $f_name 	= "COC_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/coc/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'readness'       => $a,
        'tahun'          => $b,
        'ket'            => $c,
        'unit'           => $d,
        'filename'       => $f_name
    );
    $insert = $ARSql->insert('read_coc', $data);
    header('location: admin.php?mod_apps=report&media_app=coc');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_coc'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "COC_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/coc/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('read_coc','id_rcoc',$id);
    if($data->filename!='') {
    unlink("uploaded/coc/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'readness'       => $a,
        'tahun'          => $b,
        'ket'            => $c,
        'unit'           => $d,
        'filename'       => $f_name
    );
    $update = $ARSql->update('read_coc', 'id_rcoc',$id, $data);
     header('location: admin.php?mod_apps=report&media_app=coc');
}else{
    $data1    = array(
        'readness'       => $a,
        'tahun'          => $b,
        'ket'            => $c,
        'unit'           => $d
    );
    $update = $ARSql->update('read_coc', 'id_rcoc',$id, $data1);
     header('location: admin.php?mod_apps=report&media_app=coc');
}
}
