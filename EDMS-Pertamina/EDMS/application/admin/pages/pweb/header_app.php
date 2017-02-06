<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>EDMS - Pertamina RU VI Balongan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo APP_IMG .'logo.jpg'; ?>" />
    <?php
    $themes             = file_get_contents('Themes.txt');
    $js_jquery_plugin   = APP_JS . "jquery/jquery-1.8.2.min.js";
    $css_admin          = APP_CSS .$themes;
    $css_dialog         = APP_CSS .'jquery.dialogbox.css';
    $css_bs_min         = APP_CSS .'bootstrap.min.css';
    $css_main           = APP_CSS .'main.css';
    $css_fupload        = APP_CSS .'bootstrap-fileupload.min.css';
    $js_fupload         = APP_JS . "bootstrap/bootstrap-fileupload.js";
    $css_table          = APP_CSS .'table.min.css';
    $js_anime           = APP_ASSETS . "anime/animate.js";
    $css_anime          = APP_ASSETS . "anime/animate.css";
    //addCss($css_main,'screen, projection');
    addCss($css_admin,'screen, projection');
    //addCss($css_bs_min,'screen, projection');
    addCss($css_table,'screen, projection');
    addJs($js_jquery_plugin);
    if($config['general']['animate']==TRUE) {
    addJs($js_anime);
    addCss($css_anime);
    }
    addJs($js_fupload);
    addCss($css_fupload);
    ?>
    <script> new WOW().init();</script>
</head>
    <body>
        <div class="navbar navbar-fixed-top no-print" style="border-top: 3px solid #f0f0f0">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="admin.php" class="brand"><i class="icon-leaf">  <strong>PERTAMINA</strong></i></a>
                    <div id="app-nav-top-bar" class="nav-collapse collapse">
                        <ul class="nav" style="font-weight: 600">
                            <?php require_once ('menu_aktif.php');
                            if(LEVEL_USER=='1' OR LEVEL_USER=='2') {
                            ?>
                            <li <?php echo $info;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=info" class="dropdown-toggle">INFO
                                </a>
                            </li>
                            <li <?php echo $enginedocs ;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=engine-docs" class="dropdown-toggle">ENG DOCS
                                </a>
                            </li>
                            <li <?php echo $report;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=report" class="dropdown-toggle">REPORT
                                </a>
                            </li>
                            <li <?php echo $ndt;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=ndt" class="dropdown-toggle">NDT
                                </a>
                            </li>
                            <li <?php echo $ebook;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=e-book" class="dropdown-toggle">E-BOOK
                                </a>
                            </li>
                            <li <?php echo $regulasi;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=regulasi">STATUTORY
                                </a>
                            </li>
                            <li <?php echo $foto ;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=foto" class="dropdown-toggle">FOTO
                                </a>
                            </li>
                            <li <?php echo $user ;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=user" class="dropdown-toggle">USERS
                                </a>
                            </li>
                            <li <?php echo $sms_gateaway;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=sms_gateaway" class="dropdown-toggle">SMS
                                </a>
                            </li>
                            <?php } else { ?>
                            <li <?php echo $info;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=info" class="dropdown-toggle">INFO
                                </a>
                            </li>
                            <li <?php echo $enginedocs ;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=engine-docs" class="dropdown-toggle">ENG DOCS
                                </a>
                            </li>
                            <li <?php echo $report;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=report" class="dropdown-toggle">REPORT
                                </a>
                            </li>
                            <li <?php echo $ndt;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=ndt" class="dropdown-toggle">NDT
                                </a>
                            </li>
                            <li <?php echo $ebook;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=e-book" class="dropdown-toggle">E-BOOK
                                </a>
                            </li>
                            <li <?php echo $regulasi;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=regulasi">REGULASI
                                </a>
                            </li>
                            <li <?php echo $foto ;?>>
                                <a style="border-radius: 0 0 2px 2px" href="admin.php?mod_apps=foto" class="dropdown-toggle">FOTO
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <ul class="nav pull-right">
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="border-radius: 50%; background: #0b6bab; color: #fff"><i class="icon icon-wrench"></i></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    if(LEVEL_USER=='1' OR LEVEL_USER=='2') { ?>
                                    <li>
                                        <a href="./"><i class="icon-home"></i> Halaman Depan</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="form_change_password();"><i class="icon-lock"></i> Change Password</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?mod_apps=user&media_app=profile"><i class="icon-user"></i> Profil Saya</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="admin.php?mod_apps=pengaturan"><i class="icon-wrench"></i> Pengaturan Umum</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?mod_apps=calendar"><i class="icon-calendar"></i> Calendar <?php echo date("Y");?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="admin.php?mod_apps=logout"><i class="icon-off"></i> Logout</a>
                                    </li>
                                    <?php } else { ?>
                                    <li>
                                        <a href="./"><i class="icon-home"></i> Halaman Depan</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?mod_apps=user&media_app=profile"><i class="icon-user"></i> Profil Saya</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="form_change_password();"><i class="icon-lock"></i> Change Password</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?mod_apps=calendar"><i class="icon-calendar"></i> Calendar <?php echo date("Y");?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="admin.php?mod_apps=logout"><i class="icon-off"></i> Logout</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="body-container">
            <div id="body-content">
                <div class="no-print body-nav body-nav-horizontal body-nav-fixed" style="margin-top: 3px;">
                    <div class="container">
                        <ul>
                            <?php require_once ('submenu_app.php'); ?>
                        </ul>
                    </div>
                </div>
                <?php
                if($config['general']['shorcut']==TRUE) {
                    require_once ('sidebar_menu_left.php');
                }
                ?>
	<section  class="nav nav-page no-print" style="margin-top: 13px;">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <div class="logo-pertamina">
                            <a href="javascript:;" class="pertamina"><img src="<?php echo APP_IMG . 'logo.jpg';?>" class="img-logo-pertamina"></a>
                        </div>
                        <h4 style="color: #888; margin-top: 9px; padding-top:10px; border-top: 3.5px solid #d9d9d9"> ®
                        &nbsp;EDMS Pertamina RU VI Balongan<br/>
                            <small style="text-transform: capitalize; font-weight: 400; color: #ccc">
                                Aplikasi Sistem Pengelolaan Dokumen Elektronik
                            </small>
                        </h4>
                    </header>
                </div>
                <?php 
                if(LEVEL_USER=='1' OR LEVEL_USER=='2'){
                    require_once ('submenu_bottom_app.php');
                } else {
                    require_once ('search-form.php');
                }
                ?>
            </div>
        </div>
    </section>
