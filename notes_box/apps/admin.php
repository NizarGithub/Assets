<?php
/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */

date_default_timezone_set('Asia/jakarta');
require_once("../system/functions.php"); // masukan file functions.php
require_once("../system/fungsi_indotgl.php"); // masukan file fungsi_indotgl.php
$query = new Functions();
$db = new koneksi();

ob_start();
session_start();
if(empty($_SESSION['id_user']) AND empty($_SESSION['level_user'])) {
    require 'login.php';
}
else {
    $profil = $query->profil($_SESSION[id_user]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require_once 'subweb/header.php';
   ?>
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Notes Box</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- Info Profile -->
    <div class="profile">
        <div class="media user-media">
          <div class="user-media-toggleHover">
          </div>
          <div class="user-wrapper">
                <?php
                if($profil[foto]==''){
              echo" <a class='user-link pull-left' href='?module=lengkapi_profil'>
                  <img class='media-object img-thumbnail user-img' width='65px' height='65px' alt='User Picture' src='../assets/images/user.png'>
              <span class='label label-danger user-label'>16</span>"; 
                }else{
                echo"<a class='user-link pull-left' href='?module=user_profil'>
                    <img class='media-object img-thumbnail user-img' width='65px' height='65px' alt='User Picture' src='../images/foto_users/$profil[foto]'>
              <span class='label label-danger user-label'>16</span>";     
                }
                      ?>
            </a> 
            <div class="media-body">
             <div class="profile_info">
                  <i class="fa fa-circle" style="color: greenyellow;"></i>
                      <span>Online</span>
                      <h2><?php echo "$_SESSION[nama_user]"; ?></h2>
             </div>
            </div>
          </div>
        </div>                     
    </div>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="?module=dashboard"><i class="fa fa-home"></i> Home</a></li>
                                
                                <li><a><i class="fa fa-wechat"></i> Quotes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="?module=puisi">Puisi</a>
                                        </li>
                                        <li><a href="?module=kategori_puisi">Kategori Puisi</a>
                                        </li>
                                        <li><a href="?module=kamut">Kata Mutiara</a>
                                        </li>
                                        <li><a href="?module=kamut_english">Kata Mutiara (english)</a>
                                        </li>
                                        <li><a href="?module=kategori_kamut">Kategori Kata Mutiara</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a><i class="fa fa-dropbox"></i> Box Account <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="?module=box_account">Account</a>
                                        </li>
                                        <li><a href="?module=kategori_account">Kategori Account</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-file-text-o"></i> Notes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="?module=">Catatan</a>
                                        </li>
                                        <li><a href="?module=persatuan">Persatuan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="#">E-commerce</a>
                                        </li>
                                        <li><a href="#">Projects</a>
                                        </li>    
                                    </ul>
                                </li>
                                
                                <li><a href="?module=wizard_security"><i class="fa fa-xing"></i> My ex</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    
                    
                    
                    
                    
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a href="" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            
            
            
            
            
            
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

        
                        
                        
                        
                        
                        <!---menu navbar right---->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                    <img src='../assets/images/theme.png' alt='' width="30px" height="30px"> &nbsp;
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <?php
                                    // untuk mengetahui kelengkapan profil
                                    $profil = mysql_query("SELECT * FROM profil WHERE id_user='$_SESSION[id_user]'");
                                    $count  = mysql_num_rows($profil);
                                    if($count < 1){
                                        echo "<li>
                                            <a href='?module=lengkapi_profil'><span class='badge bg-red pull-right'>20%</span>
                                            <span>Profil Saya</span></a>
                                    </li>";
                                    }else{
                                         echo "<li>
                                             <a href='?module=user_profil'><span class='badge bg-green pull-right'>70%</span>
                                            <span>Profil Saya</span></a>
                                    </li>";
                                    }
                                    ?>
                                    
                                    
                                    <li><a href="javascript:;" onclick="form_ganti_password();"><i class="fa fa-unlock-alt pull-right"></i> Ganti Password</a>
                                    </li>
                                    
                                    <li><a href="?module=log_aktifitas"><i class="fa fa-history pull-right"></i> Log Aktifitas</a>
                                    </li>
                                    
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            
            
            
            <!-- page content -->
            <div class="right_col" role="main">  
                <div class="row">
                  
                <?php require ('media.php'); ?>     
                    
                </div>
            </div>
        </div>
    </div>


  
        
    
</body>
</html>


<?php
require_once 'subweb/footer.php';
}