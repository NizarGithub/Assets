<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Thermography_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/termo/";
    uploadFile($f_tmp, $f_name, $folder);

    $data = array(
        'judul'                     => $a,
        'area'                      => $b,
        'tag_no'                    => $c,
        'tgl'                       => $d,
        'user'                      => $e,
        'filename'                  => $f_name
    );
    $insert = $ARSql->insert('termo_trend', $data);
    if($insert) {
        header('location: admin.php?mod_apps=regulasi&media_app=app_termo');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
     $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Thermography_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/termo/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('termo_trend','id_thermo',$id);
    if($data->filename!='') {
    unlink("uploaded/termo/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);

    $data = array(
       'judul'                     => $a,
        'area'                      => $b,
        'tag_no'                    => $c,
        'tgl'                       => $d,
        'user'                      => $e,
        'filename'                  => $f_name
    );
    $update = $ARSql->update('termo_trend', 'id_thermo',$id, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_termo');
    }else{
     $data1 = array(
       'judul'                     => $a,
        'area'                      => $b,
        'tag_no'                    => $c,
        'tgl'                       => $d,
        'user'                      => $e
    );
    $update = $ARSql->update('termo_trend', 'id_thermo',$id, $data1);
        header('location: admin.php?mod_apps=regulasi&media_app=app_termo');   
    }
}