<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_bejana'];
$submit_edit    = $_POST['submit_edit_bejana'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Bejana_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/bejana/";
    uploadFile($f_tmp, $f_name, $folder);

    $data = array(
        'sn '                       => $a,
        'no_ijin'                   => $b,
        'ijin_habis'                => $c,
        'merk'                      => $d,
        'kapasitas'                 => $e,
        'filename'                  => $f_name
    );
    $insert = $ARSql->insert('bejana', $data);
    if($insert) {
        header('location: admin.php?mod_apps=regulasi&media_app=app_bejana');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_bejana'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Bejana".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/bejana/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('bejana','id_bejana',$id);
    if($data->filename!='') {
    unlink("uploaded/bejana/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);

    $data = array(
        'sn '                       => $a,
        'no_ijin'                   => $b,
        'ijin_habis'                => $c,
        'merk'                      => $d,
        'kapasitas'                 => $e,
        'filename'                  => $f_name
    );
    $update = $ARSql->update('bejana', 'id_bejana',$id, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_bejana');
    }else{
       $data = array(
        'sn '                       => $a,
        'no_ijin'                   => $b,
        'ijin_habis'                => $c,
        'merk'                      => $d,
        'kapasitas'                 => $e
    );
    $update = $ARSql->update('bejana', 'id_bejana',$id, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_bejana');  
    }
}
