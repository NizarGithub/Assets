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
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Quality-plan_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/quality_plan/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    =  array(
        'unit'            => $a,
        'equipment'       => $b,
        'ket'             => $c,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('quality_plan', $data);
    header('location: admin.php?mod_apps=e-book&media_app=quality_plan');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_qp'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Quality-plan_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/quality_plan/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('quality_plan','id_qp',$id);
    if($data->filename!='') {
    unlink("uploaded/quality_plan/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'unit'            => $a,
        'equipment'       => $b,
        'ket'             => $c,
        'filename'        => $f_name
    );
    $update = $ARSql->update('quality_plan', 'id_qp',$id, $data);
     header('location: admin.php?mod_apps=e-book&media_app=quality_plan');
}else{
    $data1    = array(
        'unit'            => $a,
        'equipment'       => $b,
        'ket'             => $c
    );
    $update = $ARSql->update('quality_plan', 'id_qp',$id, $data1);
     header('location: admin.php?mod_apps=e-book&media_app=quality_plan');
}
}
