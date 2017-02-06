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
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Others-drawing_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/others_drawing/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit_draw'        => $a,
        'description'      => $b,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('drawing', $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=others_drawing');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_draw'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Others-drawing_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/others_drawing/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('drawing','id_draw',$id);
    if($data->filename!='') {
    unlink("uploaded/others_drawing/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
         'unit_draw'        => $a,
        'description'      => $b,
        'filename'        => $f_name
    );
    $update = $ARSql->update('drawing', 'id_draw',$id, $data);
     header('location: admin.php?mod_apps=engine-docs&media_app=others_drawing');
}else{
    $data1    = array(
        'unit_draw'        => $a,
        'description'      => $b
    );
    $update = $ARSql->update('drawing', 'id_draw',$id, $data1);
     header('location: admin.php?mod_apps=engine-docs&media_app=others_drawing');
}
}
