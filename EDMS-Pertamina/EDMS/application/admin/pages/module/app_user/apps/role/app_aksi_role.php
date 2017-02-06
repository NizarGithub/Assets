<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add  = $_POST['submit_add'];
$submit_edit = $_POST['submit_edit'];
if(isset($submit_add)) {
    $id_level = validasi($_POST['id_level'], 'xss');
    $id_module = validasi($_POST['id_module'], 'xss');
    $a = validasi($_POST['read'], 'xss');
    $b = validasi($_POST['write'], 'xss');
    $c = validasi($_POST['modify'], 'xss');
    $d = validasi($_POST['delete'], 'xss');
    
    $data       = array(
                  'id_level'      => $id_level,
                  'id_module'     => $id_module,
                  'read_access'   => $a,
                  'write_access'  => $b,
                  'modify_access' => $c,
                  'delete_access' => $d
                  );
    $insert = $ARSql->insert('user_role', $data);
    if($insert) {
        header('location: admin.php?mod_apps=user&media_app=user_role');
    }
} 
else if(isset($submit_edit)) {
    $id_role = validasi($_POST['id_role'], 'xss');
    $id_level = validasi($_POST['id_level'], 'xss');
    $id_module = validasi($_POST['id_module'], 'xss');
    $a = validasi($_POST['read'], 'xss');
    $b = validasi($_POST['write'], 'xss');
    $c = validasi($_POST['modify'], 'xss');
    $d = validasi($_POST['delete'], 'xss');
    
    $data       = array(
                  'id_level'      => $id_level,
                  'id_module'     => $id_module,
                  'read_access'   => $a,
                  'write_access'  => $b,
                  'modify_access' => $c,
                  'delete_access' => $d
                  );
    $update = $ARSql->update('user_role', 'id_role', $id_role, $data);
    header('location: admin.php?mod_apps=user&media_app=user_role');
}