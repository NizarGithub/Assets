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
    $aktif      = validasi($_POST['aktif'], 'xss');
    $ftmp       = $_FILES['fupload']['tmp_name'];
    $acak       = rand(11111, 99999);
    $fname      = $_FILES['fupload']['name'];
    $fname      = "Foto_Rutin_".$acak."_".str_replace(" ", "_", $fname);
    $folder     = "uploaded/foto_rutin/";
    if(!empty($ftmp)) {
        UploadImage($ftmp, $fname, $folder);
        $data = array(
            'ket'      => $a,
            'foto'     => $fname,
            'aktif'    => $aktif
        );

        $insert = $ARSql->insert('foto_rutin', $data);
        if($insert) {
            header('location: admin.php?mod_apps=foto&media_app=foto_rutin');
        }
    } else {
        $data = array(
            'ket'      => $a,
            'aktif'    => $aktif
        );

         $insert = $ARSql->insert('foto_rutin', $data);
        if($insert) {
            header('location: admin.php?mod_apps=foto&media_app=foto_rutin');
        }
    }
} 
else if(isset($submit_edit)) {
    $id_fr     = validasi($_POST['id_fr'], 'xss');
    $a          = validasi($_POST['a'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $ftmp       = $_FILES['fupload']['tmp_name'];
    $acak       = rand(11111, 99999);
    $fname      = $_FILES['fupload']['name'];
    $fname      = "Foto_Rutin_".$acak."_".str_replace(" ", "_", $fname);
    $folder     = "uploaded/foto_rutin/";
    if(!empty($ftmp)) {
        $get = $ARSql->getOne('foto_rutin','id_fr',$id_fr);
        if($get->foto!='') {
            unlink("uploaded/foto_rutin/$get->foto");
            unlink("uploaded/foto_rutin/medium_$get->foto");
        }
        UploadImage($ftmp, $fname, $folder);
        $data = array(
            'ket'      => $a,
            'foto'     => $fname,
            'aktif'    => $aktif
        );

        $update = $ARSql->update('foto_rutin', 'id_fr', $id_fr, $data);
        header('location: admin.php?mod_apps=foto&media_app=foto_rutin');
        
    } else {
        $data = array(
           'ket'      => $a,
           'aktif'    => $aktif
        );

         $update = $ARSql->update('foto_rutin', 'id_fr', $id_fr, $data);
        header('location: admin.php?mod_apps=foto&media_app=foto_rutin');
    }
}