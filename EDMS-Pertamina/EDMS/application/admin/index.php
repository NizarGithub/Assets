<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
session_start();
define('ID_USER', $_SESSION['id_user']);
define('LEVEL_USER', $_SESSION['level_user']);
define('LOGIN', $_SESSION['login']);

# Informasi detail akun user admin
$d_userAdmin = $ARSql->getOne('users','id_user', $_SESSION['id_user']);

// Cek session untuk akses halaman administrasi
if(empty($_SESSION['id_user']) AND empty($_SESSION['level_user'])) {
    require 'pages/login.php';
}
else {
    if(MOD_APP=='themes' OR MEDIA_APP=='gateaway_editor' OR MEDIA_APP=='pink_book' OR MOD_APP=='calendar') {
        // Halaman Administrator
        require 'pages/admin.php';
    } else {
        require (APP_SYSTEM_FUNCTION.'Minify_function.php');
        // OB Start untuk minify HTML
        ob_start('minify_html');
        // Halaman Administrator
        require 'pages/admin.php';
        // OB end flush
        ob_end_flush();
    }
    
}
