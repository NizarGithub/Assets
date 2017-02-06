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
    $f_name 	= "Laporan-bulanan_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/laporan_bulanan/";
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'description'          => $a,
        'bulan'          => $b,
        'tahun'            => $c,
        'filename'        => $f_name
    );
    $insert = $ARSql->insert('laporan_bulanan', $data);
    header('location: admin.php?mod_apps=report&media_app=lap_bulanan');
}
else if(isset($submit_edit)) {
    $id         = validasi($_POST['id_lap'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $b          = validasi($_POST['b'], 'xss');
    $c          = validasi($_POST['c'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Laporan-bulanan_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/laporan_bulanan/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('laporan_bulanan','id_lap',$id);
    if($data->filename!='') {
    unlink("uploaded/laporan_bulanan/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
         'description'          => $a,
        'bulan'          => $b,
        'tahun'            => $c,
        'filename'        => $f_name
    );
    $update = $ARSql->update('laporan_bulanan', 'id_lap',$id, $data);
     header('location: admin.php?mod_apps=report&media_app=lap_bulanan');
}else{
    $data1    = array(
        'description'       => $a,
        'bulan'          => $b,
        'tahun'            => $c
    );
   $update = $ARSql->update('laporan_bulanan', 'id_lap',$id, $data1);
     header('location: admin.php?mod_apps=report&media_app=lap_bulanan');
}
}
