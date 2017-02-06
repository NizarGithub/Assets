<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add_user'];
$submit_edit    = $_POST['submit_edit_user'];
if(isset($submit_add)) {
    $nama       = validasi($_POST['nama'], 'xss');
    $email      = validasi($_POST['email'], 'xss');
    $no_telp    = validasi($_POST['no_telp'], 'xss');
    $bio        = $_POST['bio'];
    $bio1       = stripslashes($bio);
    $bio2       = htmlspecialchars($bio1,ENT_QUOTES);
    $username   = validasi($_POST['username'], 'xss');
    $password   = validasi($_POST['password'], 'xss');
    $id_level   = validasi($_POST['id_level'], 'xss');
    $tgl_daftar = validasi(date("Y-m-d"), 'xss');
    $blokir     = validasi($_POST['blokir'], 'xss');
    $ftmp       = $_FILES['fupload']['tmp_name'];
    $acak       = rand(11111, 99999);
    $fname      = $_FILES['fupload']['name'];
    $fname      = "USER_".$acak."_".str_replace(" ", "_", $fname);
    $folder     = "uploaded/foto_user/";
    if(!empty($ftmp)) {
        UploadImage($ftmp, $fname, $folder);
        $data = array(
            'username'      => $username,
            'password'      => md5($password),
            'nama_lengkap'  => $nama,
            'email'         => $email,
            'bio'           => $bio2,
            'userpicture'   => $fname,
            'no_telp'       => $no_telp,
            'blokir'        => $blokir,
            'level'         => $id_level,
            'id_session'    => $username,
            'tgl_daftar'    => $tgl_daftar
        );

        $insert = $ARSql->insert('users', $data);
        if($insert) {
            header('location: admin.php?mod_apps=user&media_app=app_list_user');
        }
    } else {
        $data = array(
            'username'      => $username,
            'password'      => md5($password),
            'nama_lengkap'  => $nama,
            'email'         => $email,
            'bio'           => $bio2,
            'no_telp'       => $no_telp,
            'blokir'        => $blokir,
            'level'         => $id_level,
            'id_session'    => $username,
            'tgl_daftar'    => $tgl_daftar
        );

        $insert = $ARSql->insert('users', $data);
        if($insert) {
            header('location: admin.php?mod_apps=user&media_app=app_list_user');
        }
    }
} 
else if(isset($submit_edit)) {
    $id_user    = validasi($_POST['id_user'], 'xss');
    $nama       = validasi($_POST['nama'], 'xss');
    $email      = validasi($_POST['email'], 'xss');
    $no_telp    = validasi($_POST['no_telp'], 'xss');
    $bio        = $_POST['bio'];
    $bio1       = stripslashes($bio);
    $bio2       = htmlspecialchars($bio1,ENT_QUOTES);
    $username   = validasi($_POST['username'], 'xss');
    $id_level   = validasi($_POST['id_level'], 'xss');
    $blokir     = validasi($_POST['blokir'], 'xss');
    $ftmp       = $_FILES['fupload']['tmp_name'];
    $acak       = rand(11111, 99999);
    $fname      = $_FILES['fupload']['name'];
    $fname      = "USER_".$acak."_".str_replace(" ", "_", $fname);
    $folder     = "uploaded/foto_user/";
    if(!empty($ftmp)) {
        $cek_user   = $ARSql->getOne('users','id_user',$id_user);
        if($cek_user->userpicture!='') {
            unlink("uploaded/foto_user/$cek_user->userpicture");
        }
        uploadFile($ftmp, $fname, $folder);
        $data = array(
            'username'      => $username,
            'nama_lengkap'  => $nama,
            'email'         => $email,
            'bio'           => $bio2,
            'no_telp'       => $no_telp,
            'blokir'        => $blokir,
            'userpicture'   => $fname,
            'level'         => $id_level
        );
        $update = $ARSql->update('users', 'id_user',$id_user, $data);
        header('location: admin.php?mod_apps=user&media_app=app_list_user');
    } else {
        $data = array(
            'username'      => $username,
            'nama_lengkap'  => $nama,
            'email'         => $email,
            'bio'           => $bio2,
            'no_telp'       => $no_telp,
            'blokir'        => $blokir,
            'level'         => $id_level
        );
        $update = $ARSql->update('users', 'id_user',$id_user, $data);
        $ARSql->addLog(ID_USER,'Mengubah data profil pengguna');
        if(LEVEL_USER=='1') {
            header('location: admin.php?mod_apps=user&media_app=app_list_user');
        } else {
            header('location: admin.php?mod_apps=user&media_app=profile');
        }
    }
}


