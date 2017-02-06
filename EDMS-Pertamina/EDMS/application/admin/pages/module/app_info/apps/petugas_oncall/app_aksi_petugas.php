<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add_petugas'];
$submit_edit    = $_POST['submit_edit_petugas'];
if(isset($submit_add)) {
    $nama       = validasi($_POST['nama'], 'xss');
    $email      = validasi($_POST['email'], 'xss');
    $no_telp    = validasi($_POST['no_telp'], 'xss');
    $alamat     = $_POST['alamat'];
    $alamat1    = stripslashes($alamat);
    $alamat2    = htmlspecialchars($alamat1,ENT_QUOTES);
    $kantor     = validasi($_POST['kantor'], 'xss');
    $id_group   = validasi($_POST['id_group'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $ftmp       = $_FILES['fupload']['tmp_name'];
    $acak       = rand(11111, 99999);
    $fname      = $_FILES['fupload']['name'];
    $fname      = "Petugas_OnCall_".$acak."_".str_replace(" ", "_", $fname);
    $folder     = "uploaded/foto_petugas_oncall/";
    if(!empty($ftmp)) {
        UploadImage($ftmp, $fname, $folder);
        $data = array(
            'nama'      => $nama,
            'email'     => $email,
            'alamat'    => $alamat2,
            'kantor'    => $kantor,
            'foto'      => $fname,
            'no_telp'   => $no_telp,
            'aktif'     => $aktif,
            'id_group'  => $id_group
        );

        $insert = $ARSql->insert('petugas_oncall', $data);
        if($insert) {
            header('location: admin.php?mod_apps=info&media_app=petugas_oncall');
        }
    } else {
        $data = array(
            'nama'      => $nama,
            'email'     => $email,
            'alamat'    => $alamat2,
            'kantor'    => $kantor,
            'no_telp'   => $no_telp,
            'aktif'     => $aktif,
            'id_group'  => $id_group
        );

        $insert = $ARSql->insert('petugas_oncall', $data);
        if($insert) {
            header('location: admin.php?mod_apps=info&media_app=petugas_oncall');
        }
    }
} 
else if(isset($submit_edit)) {
    $id_petugas = validasi($_POST['id_petugas'], 'xss');
    $nama       = validasi($_POST['nama'], 'xss');
    $email      = validasi($_POST['email'], 'xss');
    $no_telp    = validasi($_POST['no_telp'], 'xss');
    $alamat     = $_POST['alamat'];
    $alamat1    = stripslashes($alamat);
    $alamat2    = htmlspecialchars($alamat1,ENT_QUOTES);
    $kantor     = validasi($_POST['kantor'], 'xss');
    $id_group   = validasi($_POST['id_group'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $ftmp       = $_FILES['fupload']['tmp_name'];
    $acak       = rand(11111, 99999);
    $fname      = $_FILES['fupload']['name'];
    $fname      = "Petugas_OnCall_".$acak."_".str_replace(" ", "_", $fname);
    $folder     = "uploaded/foto_petugas_oncall/";
    if(!empty($ftmp)) {
        $getPetugas = $ARSql->getOne('petugas_oncall','id_petugas',$id_petugas);
        if($getPetugas->foto!='') {
            unlink("uploaded/foto_petugas_oncall/$getPetugas->foto");
            unlink("uploaded/foto_petugas_oncall/medium_$getPetugas->foto");
        }
        UploadImage($ftmp, $fname, $folder);
        $data = array(
            'nama'      => $nama,
            'email'     => $email,
            'alamat'    => $alamat2,
            'kantor'    => $kantor,
            'foto'      => $fname,
            'no_telp'   => $no_telp,
            'aktif'     => $aktif,
            'id_group'  => $id_group
        );

        $update = $ARSql->update('petugas_oncall', 'id_petugas', $id_petugas, $data);
        header('location: admin.php?mod_apps=info&media_app=petugas_oncall');
        
    } else {
        $data = array(
            'nama'      => $nama,
            'email'     => $email,
            'alamat'    => $alamat2,
            'kantor'    => $kantor,
            'no_telp'   => $no_telp,
            'aktif'     => $aktif,
            'id_group'  => $id_group
        );

        $update = $ARSql->update('petugas_oncall', 'id_petugas', $id_petugas, $data);
        header('location: admin.php?mod_apps=info&media_app=petugas_oncall');
    }
}