<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_add_cat = $_POST['submit_add_cat'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $jumlah = count($_POST['id_cat']);
    for($i=1; $i<=$jumlah;$i++) {
        $a       = $i - 1;
        $id_cat  = $_POST['id_cat'];
        $f_tmp   = $_FILES['fupload']['tmp_name'];
        $f_name  = $_FILES['fupload']['name'];
        $folder  = "uploaded/pink_book/";
        $fileoke = $folder.$f_name[$a];

        $data    = array(
            'filename' => $f_name[$a],
            'id_cat' => $id_cat[$a]
        );
        move_uploaded_file($f_tmp[$a], $fileoke);
        $insert = $ARSql->insert('pink_book', $data);
    }
    header('location: admin.php?mod_apps=e-book&media_app=pink_book');
}
else if(isset($submit_add_cat)) {
    $nama = validasi($_POST['nama'], 'xss');
    $data = array('name'=>$nama);
    $insert = $ARSql->insert('cat_book',$data);
    header('location: admin.php?mod_apps=e-book&media_app=pink_book');
}
else if(isset($submit_edit)) {
    $id_pb   = validasi($_POST['id_pb'], 'xss');
    $judul   = validasi($_POST['judul'], 'xss');
    $id_cat  = validasi($_POST['id_cat'], 'sql');
    $f_tmp   = $_FILES['fupload']['tmp_name'];
    $acak       =  rand(000000,999999);
    $f_name     = $_FILES['fupload']['name'];
    $folder  = "uploaded/pink_book/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('pink_book','id_pb',$id_pb);
    if($data->filename!='') {
    unlink("uploaded/pink_book/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data    = array(
        'id_cat' => $id_cat,
        'filename' => $f_name
    );
    $update = $ARSql->update('pink_book', 'id_pb',$id_pb, $data);
    header('location: admin.php?mod_apps=e-book&media_app=pink_book');
}else{
    $data1    = array(
        'id_cat' => $id_cat
    );
    $update = $ARSql->update('pink_book', 'id_pb',$id_pb, $data1);
    header('location: admin.php?mod_apps=e-book&media_app=pink_book');
}
}
