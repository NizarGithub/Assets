<?php
/*
 * Web Application
 * Creator by Agis Laksamana
 * Copyright Â© 2015; Licensed
 * Software Engineer
 */

date_default_timezone_set('Asia/jakarta');
// masukan file functions
require_once("../system/functions.php");
// masukan file timeout
require_once("timeout.php");
// membuat fungsi baru
$query = new Functions();
//membuat koneksi
$db = new Connection();


ob_start();
session_start();
 //permession upload
    $_SESSION['KCFINDER']=array();
    $_SESSION['KCFINDER']['disabled'] = false;
    $_SESSION['KCFINDER']['uploadURL'] = "../images/"; //sesuaikan dengan direkory kalian
    $_SESSION['KCFINDER']['uploadDir'] = "";
    
if ($_SESSION[login] == 1) {
    if (!cek_login()) {
        $_SESSION[login] = 0;
    }
}
if ($_SESSION[login] == 0) {
    header('location: ../home.html');
} else {
    if (empty($_SESSION['id_user']) AND empty($_SESSION['level_user']) AND $_SESSION['login'] == 0) {
        require 'index.php';
    } else {

        require_once("core/header.php");
        $profil = $query->get_user($_SESSION['id_user']);
        ?>




        <body>
            <div class="navbar navbar-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid">

                        <a class="brand" href="?page=dashboard">Panel Admin</a>

                        <!-- the new toggle buttons -->

                        <ul class="nav pull-right">

                            <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>

                            <li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>

                        </ul>




                        <div class="nav-collapse nav-collapse-top collapse">

                            <ul class="nav full pull-right">
                                <li class="dropdown user-avatar">

                                    <!-- the dropdown has a custom user-avatar class, this is the small avatar with the badge -->

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span>
                                            <img class="menu-avatar" src="<?php echo "../picture/users/$profil[user_image]"; ?>" /> <span><?php echo "$profil[nama_lengkap]"; ?> <i class="icon-caret-down"></i></span>
                                            <span class="badge badge-dark-red">5</span>
                                        </span>
                                    </a>

                                    <ul class="dropdown-menu">

                                        <!-- the first element is the one with the big avatar, add a with-image class to it -->

                                        <li class="with-image">
                                            <div class="avatar">
                                                <img src="<?php echo "../picture/users/$profil[user_image]"; ?>" />
                                            </div>
                                            <span><?php echo "$profil[nama_lengkap]"; ?></span>
                                        </li>

                                        <li class="divider"></li>

                                        <li><a href="?page=profile"><i class="icon-user"></i> <span>Profil</span></a></li>
                                        <li><a href="ganti_password.php" target="_blank"><i class="icon-lock"></i> <span>Ganti Password</span></a></li>
                                        <li><a href="#"><i class="icon-envelope"></i> <span>Messages</span> <span class="label label-dark-red pull-right">5</span></a></li>
                                        <li><a href="logout.php"><i class="icon-off"></i> <span>Logout</span></a></li>
                                    </ul>
                                </li>
                            </ul>

                            <form class="navbar-search pull-right" />
                            <input type="text" class="search-query animated" placeholder="Search..." />
                            <i class="icon-search"></i>
                            </form>
                             <ul class="nav pull-right">
                              <li class="active"><a href="../home.html" target="_blank" title="Go home"><i class="icon-globe"></i> Go to Website</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div><div class="sidebar-background">
                <div class="primary-sidebar-background"></div>
            </div>

            <div class="primary-sidebar">
                <?php require_once ("core/main_nav.php"); ?>
            </div>

            <div class="main-content">
                <div class="container-fluid padded">
                    <div class="row-fluid">

                        <!-- Breadcrumb line -->

                        <div id="breadcrumbs">
                            <?php require_once("core/breadcrumbs.php"); ?> 
                        </div>
                    </div>
                </div>
                <?php require_once("content.php"); ?>
            </div>
        </body>
        </html>

        <?php
    }
}
