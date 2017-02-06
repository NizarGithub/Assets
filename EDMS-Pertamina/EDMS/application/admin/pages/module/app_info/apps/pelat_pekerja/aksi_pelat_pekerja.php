<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $a          = validasi($_POST['a'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Pelatihan-pekerja_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder  = "uploaded/pelatihan_pekerja/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'keterangan' => $a,
        'filename' => $f_name
    );
    $insert = $ARSql->insert('pelat_pekerja', $data);
    header('location: admin.php?mod_apps=info&media_app=pelat_pekerja');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_pelat'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Pelatihan-pekerja_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder  = "uploaded/pelatihan_pekerja/";
    
     if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('pelat_pekerja','id_pp',$id);
    if($data->filename!='') {
    unlink("uploaded/pelatihan_pekerja/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'keterangan' => $a,
        'filename' =>$f_name
    );
    $update = $ARSql->update('pelat_pekerja', 'id_pp',$id, $data);
    header('location: admin.php?mod_apps=info&media_app=pelat_pekerja');
}else{
    $data1    = array(
        'keterangan' => $a
    );
    $update = $ARSql->update('pelat_pekerja', 'id_pp',$id, $data1);
    header('location: admin.php?mod_apps=info&media_app=pelat_pekerja');
}
}

