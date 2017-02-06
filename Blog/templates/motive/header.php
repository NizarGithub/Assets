<!DOCTYPE HTML>
<html>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow">
        <meta name="description" content="<?php include "atribute/meta/meta_description.php" ?>">
        <meta name="keywords" content="<?php include "atribute/meta/meta_keywords.php" ?>">
        <meta name="revisit-after" content="7">
        <meta name="webcrawlers" content="all">
        <meta name="spiders" content="all">
        <meta http-equiv="Copyright" content="<?php echo $setting[nama_web]; ?>">
        <meta name="author" content="Agis Rahma Herdiana">
        <meta http-equiv="imagetoolbar" content="no">
        <meta name="language" content="Indonesia">
        <meta name="rating" content="general">

        <title><?php include "atribute/meta/title.php" ?></title>

        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />
        <!-- core CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $folder ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $folder ?>/assets/css/style.css" rel="stylesheet">
        <link href="<?php echo $folder ?>/assets/css/pageNavi.css" rel="stylesheet">
        <link href="<?php echo $folder ?>/assets/css/prism-atom-dark.css" rel="stylesheet">
        <!-- core JS -->
        <script src="<?php echo $folder ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo $folder ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $folder ?>/assets/js/move-top.js"></script>
        <script src="<?php echo $folder ?>/assets/js/prism.js"></script>
       
        <script type="application/x-javascript"> 
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
                });
            });
        </script>
    </head><!--/head-->


    <body>
        <div class="header" id="home">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo "$setting[domain]"; ?>"><h1><?php echo "$setting[nama_web]"; ?></h1> </a>
                    </div>
                    <!--/.navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        <?php   
                         // Query menu           
                        $mainmenu = mysql_query("SELECT * FROM mainmenu WHERE aktif = 'Y'");
                                    while($main = mysql_fetch_array($mainmenu)) {
                        $submenu = mysql_query("SELECT * FROM submenu, mainmenu WHERE submenu.id_main = mainmenu.id_main AND submenu.id_main  = $main[id_main] AND submenu.sub_aktif='Y'");

                        // apabila ada sub menu tampilkan toggle
                        $jml = mysql_num_rows($submenu);
                        if($jml > 0){  
                        echo "<li class='dropdown'>";
                        echo "<a href='$main[link]' class='dropdown-toggle' data-toggle='dropdown'>$main[nama_main] 
                        <b class='caret'></b></a>";    
                         }else{
                            echo "<li>";
                            echo "<a href='$main[link]'>$main[nama_main]</a>";
                        }
                    
                            // apabila sub menu ditemukan tampilkan drop down
                            if($jml > 0) {
                                    echo "<ul class='dropdown-menu'>";
                                while($sub=mysql_fetch_array($submenu)){
                                    echo "<li><a href='$sub[link_sub]'>$sub[nama_sub]</a></li>";
                                }           
                                echo "</ul>";
                                echo "</li>";
                            } else {
                                echo "</li>";
                            }
                        }
                        ?>
                        </ul>
                        <ul class="form_acess">
                                <form class="re-disgn1">
                                <input type="text" name="s" class="textbox" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
                                <input type="submit" value="">
                                </form>
                            </ul>
                    </div>
                    <!--/.navbar-collapse-->
                    <!--/.navbar-->
                </div>
            </nav>
        </div>