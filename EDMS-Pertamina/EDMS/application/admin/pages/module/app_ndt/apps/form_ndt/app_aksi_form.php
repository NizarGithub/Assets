<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_form'];
$submit_edit    = $_POST['submit_edit_form'];
if(isset($submit_add)) {
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $file_tmp    = $_FILES['fupload']['tmp_name'];
    $acak        =  rand(000000,999999);
    $f_name      = $_FILES['fupload']['name'];
    $f_name 	 = "FNDT_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder      ="uploaded/form_ndt/";
    uploadFile($file_tmp, $f_name, $folder);

    $data = array(
        'description '              => $a,
        'ket'                       => $b,
        'filename'                  => $f_name
    );
    $insert = $ARSql->insert('form_ndt', $data);
    if($insert) {
        header('location: admin.php?mod_apps=ndt&media_app=form_ndt');
    }
} 

else if(isset($submit_edit)) {
    $id_form     = validasi($_POST['id_form'], 'xss');
    $a           = validasi($_POST['a'], 'xss');
    $b           = validasi($_POST['b'], 'xss');
    $file_tmp    = $_FILES['fupload']['tmp_name'];
    $acak        =  rand(000000,999999);
    $f_name      = $_FILES['fupload']['name'];
    $f_name 	 = "FNDT_".$acak.'_'.str_replace(" ","_",$f_name);
    $folder      ="uploaded/form_ndt/";
    if(!empty($file_tmp)) {
        $data1  = $ARSql->getOne('form_ndt','id_form',$id_form);
        if($data1->filename!='') {
        unlink("uploaded/form_ndt/$data1->filename");
        }
        uploadFile($file_tmp, $f_name, $folder);

        $data = array(
            'description '              => $a,
            'ket'                       => $b,
            'filename'                  => $f_name
        );
        $update = $ARSql->update('form_ndt', 'id_form',$id_form, $data);
        header('location: admin.php?mod_apps=ndt&media_app=form_ndt');
        
    }
    else {
        $data = array(
            'description '              => $a,
            'ket'                       => $b
        );
        $update = $ARSql->update('form_ndt', 'id_form',$id_form, $data);
        header('location: admin.php?mod_apps=ndt&media_app=form_ndt');
        
    }
}
