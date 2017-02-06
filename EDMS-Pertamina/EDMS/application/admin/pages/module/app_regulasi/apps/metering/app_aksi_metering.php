<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_metering'];
$submit_edit    = $_POST['submit_edit_metering'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f           = validasi($_POST['f'], 'xss');
    $g           = validasi($_POST['g'], 'xss');
    $h           = validasi($_POST['h'], 'xss');
    $i           = validasi($_POST['i'], 'xss');
    $j           = validasi($_POST['j'], 'xss');
    $k           = validasi($_POST['k'], 'xss');
    $l           = validasi($_POST['l'], 'xss');
    $m           = validasi($_POST['m'], 'xss');
    $n           = validasi($_POST['n'], 'xss');
    $o           = validasi($_POST['o'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Metering-".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/metering/";
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'sn '                       => $a,
        'no_ijin'                   => $b,
        'ijin_habis'                => $c,
        'tag_no'                    => $d,
        'prover'                    => $e,
        'service'                   => $f,
        'type'                      => $g,
        'size'                      => $h,
        'volume'                    => $i,
        'manufacture'               => $j,
        'remark'                    => $k,
        'test'                      => $l,
        'link_sn'                   => $m,
        'ijin'                      => $n,
        'berita'                    => $o,
        'filename'                  => $f_name
    );
    $insert = $ARSql->insert('metering', $data);
    if($insert) {
        header('location: admin.php?mod_apps=regulasi&media_app=app_metering');
    }
} 
else if(isset($submit_edit)) {
    $id          = validasi($_POST['id_metering'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $c           = validasi($_POST['c'], 'xss');
    $d           = validasi($_POST['d'], 'xss');
    $e           = validasi($_POST['e'], 'xss');
    $f           = validasi($_POST['f'], 'xss');
    $g           = validasi($_POST['g'], 'xss');
    $h           = validasi($_POST['h'], 'xss');
    $i           = validasi($_POST['i'], 'xss');
    $j           = validasi($_POST['j'], 'xss');
    $k           = validasi($_POST['k'], 'xss');
    $l           = validasi($_POST['l'], 'xss');
    $m           = validasi($_POST['m'], 'xss');
    $n           = validasi($_POST['n'], 'xss');
    $o           = validasi($_POST['o'], 'xss');
    $f_tmp      = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $f_name 	= "Metering-".$acak.'_'.str_replace(" ","_",$f_name);
    $folder     = "uploaded/metering/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('metering','id_met',$id);
    if($data->filename!='') {
    unlink("uploaded/metering/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'sn '                       => $a,
        'no_ijin'                   => $b,
        'ijin_habis'                => $c,
        'tag_no'                    => $d,
        'prover'                    => $e,
        'service'                   => $f,
        'type'                      => $g,
        'size'                      => $h,
        'volume'                    => $i,
        'manufacture'               => $j,
        'remark'                    => $k,
        'test'                      => $l,
        'link_sn'                   => $m,
        'ijin'                      => $n,
        'berita'                    => $o,
        'filename'                  => $f_name
    );
    $update = $ARSql->update('metering', 'id_met',$id, $data);
        header('location: admin.php?mod_apps=regulasi&media_app=app_metering');
    }else{
      $data1 = array(
        'sn '                       => $a,
        'no_ijin'                   => $b,
        'ijin_habis'                => $c,
        'tag_no'                    => $d,
        'prover'                    => $e,
        'service'                   => $f,
        'type'                      => $g,
        'size'                      => $h,
        'volume'                    => $i,
        'manufacture'               => $j,
        'remark'                    => $k,
        'test'                      => $l,
        'link_sn'                   => $m,
        'ijin'                      => $n,
        'berita'                    => $o
    );
    $update = $ARSql->update('metering', 'id_met',$id, $data1);
        header('location: admin.php?mod_apps=regulasi&media_app=app_metering');   
    }
}
