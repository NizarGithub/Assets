<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
                                      
$submit_add     = $_POST['submit_add_pipe'];
$submit_edit    = $_POST['submit_edit_pipe'];
if(isset($submit_add)) {
    $line          = validasi($_POST['a'], 'xss');
    $ins           = validasi($_POST['b'], 'xss');
    $npsD          = validasi($_POST['c'], 'xss');
    $npsS          = validasi($_POST['d'], 'xss');
    $from          = validasi($_POST['e'], 'xss');
    $service       = validasi($_POST['f'], 'xss');
    $vl            = validasi($_POST['g'], 'xss');
    $to            = validasi($_POST['h'], 'xss');
    $pressD        = validasi($_POST['i'], 'xss');
    $pressO        = validasi($_POST['j'], 'xss');
    $tempD         = validasi($_POST['k'], 'xss');
    $tempO         = validasi($_POST['l'], 'xss');
    $remarks       = validasi($_POST['m'], 'xss');
    $f_tmp         = $_FILES['fupload']['tmp_name'];
    $f_name        = $_FILES['fupload']['name'];
    $folder        = "uploaded/pipe_list/";
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'line_no'                   => $line,
        'ins'                       => $ins,
        'nps'                       => $npsD,
        'nps_sch'                   => $npsS,
        'dari'                      => $from,
        'service'                   => $service,
        'vl'                        => $vl,
        'untuk'                     => $to,
        'press_desg'                => $pressD,
        'press_opr'                 => $pressO,
        'temp_desg'                 => $tempD,
        'temp_opr'                  => $tempO,
        'remarks'                   => $remarks,
        'filename'                   => $f_name
    );
    $insert = $ARSql->insert('pipe', $data);
    if($insert) {
        header('location: admin.php?mod_apps=engine-docs&media_app=pipe_list');
    }
} 
else if(isset($submit_edit)) {
    $id            = validasi($_POST['id_pipe'], 'xss');
    $line          = validasi($_POST['a'], 'xss');
    $ins           = validasi($_POST['b'], 'xss');
    $npsD          = validasi($_POST['c'], 'xss');
    $npsS          = validasi($_POST['d'], 'xss');
    $from          = validasi($_POST['e'], 'xss');
    $service       = validasi($_POST['f'], 'xss');
    $vl            = validasi($_POST['g'], 'xss');
    $to            = validasi($_POST['h'], 'xss');
    $pressD        = validasi($_POST['i'], 'xss');
    $pressO        = validasi($_POST['j'], 'xss');
    $tempD         = validasi($_POST['k'], 'xss');
    $tempO         = validasi($_POST['l'], 'xss');
    $remarks       = validasi($_POST['m'], 'xss');
    $f_tmp         = $_FILES['fupload']['tmp_name'];
    $f_name        = $_FILES['fupload']['name'];
    $folder        = "uploaded/pipe_list/";
    
    if(!empty($f_tmp)){
    uploadFile($f_tmp, $f_name, $folder);
    $data  = $ARSql->getOne('pipe','id_pipe',$id);
    if($data->filename!='') {
    unlink("uploaded/pipe_list/$data->filename");
    }
    uploadFile($f_tmp, $f_name, $folder);
    $data = array(
        'line_no'                   => $line,
        'ins'                       => $ins,
        'nps'                       => $npsD,
        'nps_sch'                   => $npsS,
        'dari'                      => $from,
        'service'                   => $service,
        'vl'                        => $vl,
        'untuk'                     => $to,
        'press_desg'                => $pressD,
        'press_opr'                 => $pressO,
        'temp_desg'                 => $tempD,
        'temp_opr'                  => $tempO,
        'remarks'                   => $remarks,
        'filename'                  => $f_name
    );
    $update = $ARSql->update('pipe', 'id_pipe',$id, $data);
    header('location: admin.php?mod_apps=engine-docs&media_app=pipe_list');
}else{
$data1 = array(
        'line_no'                   => $line,
        'ins'                       => $ins,
        'nps'                       => $npsD,
        'nps_sch'                   => $npsS,
        'dari'                      => $from,
        'service'                   => $service,
        'vl'                        => $vl,
        'untuk'                     => $to,
        'press_desg'                => $pressD,
        'press_opr'                 => $pressO,
        'temp_desg'                 => $tempD,
        'temp_opr'                  => $tempO,
        'remarks'                   => $remarks
    );
    $update = $ARSql->update('pipe', 'id_pipe',$id, $data1);
    header('location: admin.php?mod_apps=engine-docs&media_app=pipe_list');    
}
}