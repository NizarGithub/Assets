<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
                                      
$submit_add     = $_POST['submit_add_furnace'];
$submit_edit    = $_POST['submit_edit_furnace'];
if(isset($submit_add)) {
    $tag_no       = $_POST['tag_no'];
    $material     = $_POST['material'];
    $thickness    = $_POST['thickness'];
    $sn           = validasi($_POST['sn'], 'xss');
    $size         = validasi($_POST['size'], 'xss');
    $service      = validasi($_POST['service'], 'xss');
    $press        = validasi($_POST['press'], 'xss');
    $temp         = validasi($_POST['temp'], 'xss');
    $date         = validasi($_POST['date'], 'xss');
    $skkp         = validasi($_POST['skkp'], 'xss');
    $expired      = validasi($_POST['expired'], 'xss');
    $area         = validasi($_POST['area'], 'xss');
    $keterangan   = validasi($_POST['ket'], 'xss');
    $used         = validasi($_POST['used'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Furnace_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/furnace/";
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'tag_no'         => $tag_no,
        'material'       => $material,
        'thickness'      => $thickness,
        'sn '            => $sn,
        'size'           => $size,
        'service'        => $service,
        'date'           => $date,
        'temp'           => $temp,
        'skkp'           => $skkp,
        'press'          => $press,
        'expired'        => $expired,
        'area'           => $area,
        'keterangan'     => $keterangan,
        'digunakan'      => $used,
        'filename'       => $f_name
    );
    $insert = $ARSql->insert('furnace', $data);
    if($insert) {
        header('location: admin.php?mod_apps=regulasi&media_app=app_furnace');
    }
} 
else if(isset($submit_edit)) {
    $id_furnace   = validasi($_POST['id_furnace'], 'xss');
    $tag_no       = $_POST['tag_no'];
    $material     = $_POST['material'];
    $thickness    = $_POST['thickness'];
    $sn           = validasi($_POST['sn'], 'xss');
    $size         = validasi($_POST['size'], 'xss');
    $service      = validasi($_POST['service'], 'xss');
    $press        = validasi($_POST['press'], 'xss');
    $temp         = validasi($_POST['temp'], 'xss');
    $date         = validasi($_POST['date'], 'xss');
    $skkp         = validasi($_POST['skkp'], 'xss');
    $expired      = validasi($_POST['expired'], 'xss');
    $area         = validasi($_POST['area'], 'xss');
    $keterangan   = validasi($_POST['ket'], 'xss');
    $used         = validasi($_POST['used'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Furnace_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/furnace/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('furnace','id_furnace',$id_furnace);
    if($data->filename!='') {
    unlink("uploaded/furnace/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'sn '            => $sn,
        'tag_no'         => $tag_no,
        'material'       => $material,
        'thickness'      => $thickness,
        'size'           => $size,
        'service'        => $service,
        'date'           => $date,
        'temp'           => $temp,
        'skkp'           => $skkp,
        'press'          => $press,
        'expired'        => $expired,
        'area'           => $area,
        'keterangan'     => $keterangan,
        'digunakan'      => $used,
        'filename'       => $f_name
    );
    $update = $ARSql->update('furnace', 'id_furnace',$id_furnace, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_furnace');
}else{
 $data1 = array(
        'sn '            => $sn,
        'tag_no'         => $tag_no,
        'material'       => $material,
        'thickness'      => $thickness,
        'size'           => $size,
        'service'        => $service,
        'date'           => $date,
        'temp'           => $temp,
        'skkp'           => $skkp,
        'press'          => $press,
        'expired'        => $expired,
        'area'           => $area,
        'keterangan'     => $keterangan,
        'digunakan'      => $used
    );
    $update = $ARSql->update('furnace', 'id_furnace',$id_furnace, $data1);
        header('location: admin.php?mod_apps=regulasi&media_app=app_furnace');    
    
}
}
