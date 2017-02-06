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
    $file_tmp    = $_FILES['fupload']['tmp_name'];
    $acak        =  rand(000000,999999);
    $f_name      = $_FILES['fupload']['name'];
    $f_name 	 = "Laporan_NDT_".$acak;
    $folder      ="uploaded/laporan_ndt/";
    uploadFile($file_tmp, $f_name, $folder);

    $data = array(
        'tgl '                      => $a,
        'requestor'                 => $b,
        'id_jenis'                  => $c,
        'permintaan'                => $d,
        'tag_no'                    => $e,
        'filename'                  => $f_name
    );
    $insert = $ARSql->insert('laporan_ndt', $data);
    if($insert) {
        header('location: admin.php?mod_apps=ndt&media_app=laporan_ndt');
    }
} 

else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_ndt'], 'xss');
    $a           = validasi($_POST['tgl'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $file_tmp    = $_FILES['fupload']['tmp_name'];
    $acak        =  rand(000000,999999);
    $f_name      = $_FILES['fupload']['name'];
    $f_name 	 = "Laporan_NDT_".$acak;
    $folder      ="uploaded/laporan_ndt/";
    if(!empty($file_tmp)) {
        $fl  = $ARSql->getOne('laporan_ndt','id_ndt',$id);
        if($fl->filename!='') {
        unlink("uploaded/laporan_ndt/$fl->filename");
        }
        uploadFile($file_tmp, $f_name, $folder);

   $data = array(
        'tgl'                      => $a,
        'requestor'                 => $b,
        'id_jenis'                  => $c,
        'permintaan'                => $d,
        'tag_no'                    => $e,
        'filename'                  => $f_name
    );
        $update = $ARSql->update('laporan_ndt', 'id_ndt',$id, $data);
        header('location: admin.php?mod_apps=ndt&media_app=laporan_ndt');
        
    }
    else {
        $data1 = array(
        'tgl'                      => $a,
        'requestor'                 => $b,
        'id_jenis'                  => $c,
        'permintaan'                => $d,
        'tag_no'                    => $e
        );
        $update = $ARSql->update('laporan_ndt', 'id_ndt',$id, $data1);
        header('location: admin.php?mod_apps=ndt&media_app=laporan_ndt');
        
    }
}
