<?php
session_start();
if(empty($_SESSION['level'])) {
require "system/functions.php";
ob_start("minify_html");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Ujian Online</title>
<link rel="shortcut icon" href="assets/Images/favicon.png" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css"></link>
<link rel="stylesheet" href="assets/css/style_login.css"></link>
<link rel="stylesheet" href="../plugins/plg_anime/animate.css"></link>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../plugins/plg_anime/wow.min.js" type="text/javascript"></script>
<script>new WOW().init();</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.open-menu').on('click',function() {
  	$(this).html('LOADING APPS...');
  });
  $('.open-menu').on('click', function(e){
    e.preventDefault();
    $('.menu').addClass('open'); 
  });
  $('.close').click(function(){
  	$('.open-menu').html('AKSES APLIKASI');
    $(this)
      .parent().addClass("closing")
      .delay(1000)
      .queue(function() {
         $('.menu').removeClass('closing');
         $('.menu').removeClass('open');
         $(this).dequeue();
     });
  });
  
});
</script>
</head>

<body>
<a class="open-menu wow bounceInDown" data-wow-delay='0.5s' href="#">AKSES APLIKASI</a>
<div class="menu">
  <div class="overlay"></div>
  <div class="close" title="Tutup Aplikasi">&times;</div>
  <div class="menu-container">
      <div class="left">
          <div class="">
              <div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
                                    <h2 style="font-size: 23px">LOG IN</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
                  <form action="system/auth.php" method="POST">
                      <ul style="margin-left: -40px;">
                            <li>
                                <input type="text" required name="username" class="text" placeholder="Username" /><a href="#" class=" icon user"></a>
                            </li>
                            <li>
                                <input type="password" required name="password" placeholder="Password"/><a href="#" class=" icon lock"></a>
                            </li>
                        </ul>
			
			<div class="submit">
				<input type="submit" value="MASUK" >
			</div>
		</div>

          </div>
          
      </div>
      <div class="right">
        <nav role='navigation'>
          <ul>
              <li><a href="javascript:;">LEVEL AKSES</a></li>
              <li><a href="javascript:;"><label style="cursor: pointer"><input class="rbutton"  type="radio" value="admin" name="level"/> Admin</label></a></li>
              <li><a href="javascript:;"><label style="cursor: pointer"><input class="rbutton"  type="radio" value="pengajar" name="level"/> Guru</label></a></li>
              <li><a href="javascript:;"><label style="cursor: pointer"><input class="rbutton"  type="radio" value="siswa" checked name="level"/> Siswa</label></a></li>
              
          </ul>
            </form>
        </nav>  
      </div>
  </div>
</div>

<footer class="wow zoomIn" data-wow-delay='1.3s'>
    <p class="wow zoomInLeft" style="margin-top: 5px" data-wow-delay='1.7s'>2015 &copy; <b>IBeESNay</b>. <a href="">Sistem Informasi Ujian Online</a></p>
</footer>
</body>
</html>
<?php 
} else {
	header('location: index.php?');
}
