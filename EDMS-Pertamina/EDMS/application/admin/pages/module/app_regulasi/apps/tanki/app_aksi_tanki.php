<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_tanki'];
$submit_edit    = $_POST['submit_edit_tanki'];
if(isset($submit_add)) {
    $tag           = validasi($_POST['a'], 'xss');
    $test          = validasi($_POST['b'], 'xss');
    $type          = validasi($_POST['c'], 'xss');
    $diameter      = validasi($_POST['d'], 'xss');
    $high          = validasi($_POST['e'], 'xss');
    $capacity      = validasi($_POST['f'], 'xss');
    $ikal          = validasi($_POST['g'], 'xss');
    $kalha         = validasi($_POST['h'], 'xss');
    $dibuat        = validasi($_POST['i'], 'xss');
    $pekal         = validasi($_POST['j'], 'xss');
    $peha          = validasi($_POST['k'], 'xss');
    $is            = validasi($_POST['l'], 'xss');
    $sh            = validasi($_POST['m'], 'xss');
    $user          = validasi($_POST['n'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Tangki_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/tangki/";
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'tag_no '                   => $tag,
        'test_date'                 => $test,
        'type'                      => $type,
        'diameter'                  => $diameter,
        'tinggi'                    => $high,
        'kapasitas'                 => $capacity,
        'ijin_kalibrasi'            => $ikal,
        'kalibrasi_habis'           => $kalha,
        'dibuat'                    => $dibuat,
        'penggunaan_kal'            => $pekal,
        'penggunaan_habis'          => $peha,
        'ijin_skkp'                 => $is,
        'skkp_habis'                => $sh,
        'user'                      => $user,
        'filename'                  => $f_name
    );
    $insert = $ARSql->insert('tanki', $data);
    if($insert) {
        header('location: admin.php?mod_apps=regulasi&media_app=app_tanki');
    }
} 
else if(isset($submit_edit)) {
    $id            = validasi($_POST['id_tanki'], 'xss');
    $tag           = validasi($_POST['a'], 'xss');
    $test          = validasi($_POST['b'], 'xss');
    $type          = validasi($_POST['c'], 'xss');
    $diameter      = validasi($_POST['d'], 'xss');
    $high          = validasi($_POST['e'], 'xss');
    $capacity      = validasi($_POST['f'], 'xss');
    $ikal          = validasi($_POST['g'], 'xss');
    $kalha         = validasi($_POST['h'], 'xss');
    $dibuat        = validasi($_POST['i'], 'xss');
    $pekal         = validasi($_POST['j'], 'xss');
    $peha          = validasi($_POST['k'], 'xss');
    $is            = validasi($_POST['l'], 'xss');
    $sh            = validasi($_POST['m'], 'xss');
    $user          = validasi($_POST['n'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Tangki_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/tangki/";
   
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('tanki','id_tanki',$id);
    if($data->filename!='') {
    unlink("uploaded/tangki/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'tag_no '                   => $tag,
        'test_date'                 => $test,
        'type'                      => $type,
        'diameter'                  => $diameter,
        'tinggi'                    => $high,
        'kapasitas'                 => $capacity,
        'ijin_kalibrasi'            => $ikal,
        'kalibrasi_habis'           => $kalha,
        'dibuat'                    => $dibuat,
        'penggunaan_kal'            => $pekal,
        'penggunaan_habis'          => $peha,
        'ijin_skkp'                 => $is,
        'skkp_habis'                => $sh,
        'user'                      => $user,
        'filename'                  => $f_name
    );
    $update = $ARSql->update('tanki', 'id_tanki',$id, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_tanki');
    }else{
    $data1 = array(
        'tag_no '                   => $tag,
        'test_date'                 => $test,
        'type'                      => $type,
        'diameter'                  => $diameter,
        'tinggi'                    => $high,
        'kapasitas'                 => $capacity,
        'ijin_kalibrasi'            => $ikal,
        'kalibrasi_habis'           => $kalha,
        'dibuat'                    => $dibuat,
        'penggunaan_kal'            => $pekal,
        'penggunaan_habis'          => $peha,
        'ijin_skkp'                 => $is,
        'skkp_habis'                => $sh,
        'user'                      => $user
    );
    $update = $ARSql->update('tanki', 'id_tanki',$id, $data1);
        header('location: admin.php?mod_apps=regulasi&media_app=app_tanki');     
    }
}