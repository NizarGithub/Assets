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
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Server Gateaway - Management SMS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo APP_CSS ;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_CSS ;?>bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo APP_CSS ;?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo APP_CSS ;?>/main.css">
    <link rel="shortcut icon" href="<?php echo APP_IMG.'logo.jpg';?>">
    <script src="<?php echo APP_JS ;?>vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<div id="loadingMask" class="blackMask" style="visibility: visible" onContextMenu="return false">
    <div class="popupVCenter">
        <div class="popup">
            <div class="spinner"></div>
            Loading ...
        </div>
    </div>
</div>
<div id="GammuSMS"></div>
<div class="navbar navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand" style="color: #e0e0e0"><img style="width: 20px;" src="<?php echo APP_IMG.'logo.jpg';?>">
                    <i>PERTAMINA</i></span>

                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li class="active"><a href="./"><i class="icon-home icon-black"></i> Home</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                Manage SMS</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="create.php5"><i class="icon-reply icon-black"></i>
                                        Tulis Pesan Baru
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.php5?processed=true"><i class="icon-ok icon-black"></i>
                                        Pesan Masuk Sudah diproses
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.php5?processed=false"><i class="icon-pause icon-black"></i>
                                        Pesan Masuk Belum diproses
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.php5"><i class="icon-inbox icon-black"></i>
                                        Semua pesan masuk
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="editor.php5"><i class="icon-pencil icon-black"></i>
                                        Code Editor
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="GammuSMS.php5"><i class="icon-cogs icon-black"></i> Gammu</a></li>

<!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope icon-black"></i>
                                SMS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="icon-reply icon-black"></i>
                                        Tulis Pesan
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-phone icon-black"></i>
                                        Buku Telepon
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-inbox icon-black"></i>
                                        Semua pesan masuk
                                    </a>
                                </li>
                            </ul>
                        </li>-->
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">System Settings</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li><a href="#" class="tip icon logout" data-original-title="Settings"
                               data-placement="bottom"><i class="icon-large icon-cog"></i></a></li>
                        
                        <li><a href="#" class="tip icon logout" data-original-title="Logout" data-placement="bottom"><i
                           class="icon-large icon-off"></i></a></li>
                    </ul>

                    &nbsp;&nbsp;&nbsp;
                    <p class="navbar-text pull-right">
                        Welcome <strong>IBeESNay</strong>
                    </p>

                    

                    <div class="pull-right">
                        <form class="form-search form-inline" style="margin:5px 20px 0 0;" method="post">
                            <div class="input-append">
                                <input type="text" name="keyword" class="span2 search-query" placeholder="Search">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <center><div class="pull-right"><div id="CekInbox"></div>
    <img src="<?php echo APP_IMG.'loader.gif';?>" align="left"> <small>Apps is checking SMS ...</small>
    </div></center>
    <?php require_once ('Pages/Apps__Media.php'); ?>
</div>
<!--/row-fluid-->

<hr>

<footer style="text-align:center">
    <p>Copyright &copy; 2015 IBeESNay. <strong>PERTAMINA</strong> RU VI Balongan - Indramayu.</p>
    <p></p>
</footer>

<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo APP_JS ;?>vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="<?php echo APP_JS ;?>vendor/bootstrap.min.js"></script>
<script>
    function confirmDelete() {
        return confirm('Yakin menghapus data ini ?');
    }
    // enable tooltips
    $(".tip").tooltip();
</script>
<script src="Apps__main.js"></script>
</body>
</html>

