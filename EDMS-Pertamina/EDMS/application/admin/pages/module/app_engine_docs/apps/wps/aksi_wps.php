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
    $f_name 	= "WPS_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/wps/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'wps_no'          => $a,
        'from_p'          => $b,
        'to_p'            => $c,
        'keterangan'      => $d,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('wps', $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=wps');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_wps'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $d          = validasi($_POST['d'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "WPS_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/wps/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('wps','id_wps',$id);
    if($data->filename!='') {
    unlink("uploaded/wps/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
         'wps_no'          => $a,
         'from_p'          => $b,
         'to_p'            => $c,
         'keterangan'      => $d,
         'filename'        => $f_name
    );
    $update = $ARSql->update('wps', 'id_wps',$id, $data);
     header('location: admin.php?mod_apps=engine-docs&media_app=wps');
}else{
    $data1    = array(
        'wps_no'          => $a,
        'from_p'          => $b,
        'keterangan'      => $d,
        'to_p'            => $c
    );
    $update = $ARSql->update('wps', 'id_wps',$id, $data1);
     header('location: admin.php?mod_apps=engine-docs&media_app=wps');
}
}
