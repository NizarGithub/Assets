<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $edisi   = validasi($_POST['edisi'], 'xss');
    $tahun   = validasi($_POST['tahun'], 'xss');
    $f_tmp         = $_FILES['fupload']['tmp_name'];
    $f_name        = $_FILES['fupload']['name'];
    $folder        = "uploaded/css/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'edisi' => $edisi,
        'tahun' => $tahun,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('css', $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=css');
}
else if(isset($submit_edit)) {
    $id_css   = validasi($_POST['id_css'], 'xss');
    $edisi    = validasi($_POST['edisi'], 'xss');
    $tahun    = validasi($_POST['tahun'], 'xss');
    $f_tmp         = $_FILES['fupload']['tmp_name'];
    $f_name        = $_FILES['fupload']['name'];
    $folder        = "uploaded/css/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('css','id_css',$id_css);
    if($data->filename!='') {
    unlink("uploaded/css/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder); 
    $data     = array(
        'edisi' => $edisi,
        'tahun' => $tahun,
        'filename' =>$f_name
    );
    $update = $ARSql->update('css', 'id_css',$id_css, $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=css');
}else{
   $data1     = array(
        'edisi' => $edisi,
        'tahun' => $tahun
    );
    $update = $ARSql->update('css', 'id_css',$id_css, $data1);
    header('location: admin.php?mod_apps=engine-docs&media_app=css');  
}
}
