<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
date_default_timezone_set('Asia/jakarta');
// Hide error
error_reporting(E_NOTICE || E_WARNING);
require_once ("../../../definer.php");
require_once ("../../../config.php");
require_once ("../../../".APP_SYSTEM_CLASS."Active_record_class.php");

$conn_db = New ConnectDB();
$ARSql   = New Active_record();
function anti_injection($data){
    $filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
    return $filter;
}
$mod = $_POST['mod'];
$act = $_POST['act'];
if ($mod=='login' AND $act=='searchlocktype'){
    $username       = anti_injection($_POST['username']);
    $queryUser1     = $ARSql->query("SELECT * FROM users WHERE username='$username' AND blokir='N'");
    $currentUser1   = $ARSql->mf_object($queryUser1);
    
    echo $currentUser1->locktype;
    
} elseif ($mod=='login' AND $act=='proclogin') {
    $username   = anti_injection($_POST['username']);
    $pass       = anti_injection(md5($_POST['password']));
    if (!ctype_alnum($username) OR !ctype_alnum($pass)){
        header('location:../../../admin.php?pesan_error=1&token='.md5('error1'));
    } else {
        $queryUser      = $ARSql->query("SELECT * FROM users WHERE username='$username' && password='$pass' AND blokir='N'");
        $currentUser    = $ARSql->mf_object($queryUser);
        $countUser      = $ARSql->numRows($queryUser);
        if ($countUser > 0){
            session_start();
            $_SESSION['id_user']    = $currentUser->id_user;
            $_SESSION['level_user'] = $currentUser->level;
            $_SESSION['tanggal']    = date('Y-m-d');
            $_SESSION['waktu']      = date('H:i:s');
            $_SESSION['login']      = 1;
            $sid_lama               = session_id();
            // Regenerate session ID
            session_regenerate_id();
            $sid_baru               = session_id();
            $data_update            = array('id_session' => $sid_baru);
            $update                 = $ARSql->update('users', 'id_user', $currentUser->id_user, $data_update);
            header('location:../../../admin.php?mod_apps=home&token='.md5('home'));
        } else {
            header('location:../../../admin.php?pesan_error=2&token='.md5('error2'));
        }
    }
}