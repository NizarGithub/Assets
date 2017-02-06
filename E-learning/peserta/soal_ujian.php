<?php
session_start();
error_reporting(E_NOTICE || E_WARNING);
if (empty($_SESSION['id_siswa']) AND empty($_SESSION['akses'])){
    header('location: ../login.php?error=no_akses');
}
else{
    require "../system/minify_html.php";
    ob_start("minify_html");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description"  content=""/>
<meta name="keywords" content=""/>
<meta name="robots" content="ALL,FOLLOW"/>
<meta name="Author" content="IBeESNay"/>
<meta http-equiv="imagetoolbar" content="no"/>
<title>Halaman Lembar Ujian</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css"/>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/nicescroll.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
        	$("html").niceScroll();
        	});
    </script>
<style>
label {
    font-weight: normal;
    cursor: pointer;
}
table tr td {
    font-size: 15px;
    border: none;
    border: none;
}
td h3 {
    font-size: 16px;
}
td h4 {
    font-size: 16px;
}
</style>
<script>
var waktunya;
waktunya = <?php echo "$_POST[waktu]"; ?>;
var waktu;
var jalan = 0;
var habis = 0;
function init(){
    checkCookie()
    mulai();
}
function keluar(){
    if(habis==0){
        setCookie('waktux',waktu,365);
    } else {
        setCookie('waktux',0,-1);
    }
}
function mulai(){
    jam = Math.floor(waktu/3600);
    sisa = waktu%3600;
    menit = Math.floor(sisa/60);
    sisa2 = sisa%60;
    detik = sisa2%60;
    if(detik<10){
        detikx = "0"+detik;
    }else{
        detikx = detik;
    }
    if(menit<10){
        menitx = "0"+menit;
    }else{
        menitx = menit;
    }
    if(jam<10){
        jamx = "0"+jam;
    }else{
        jamx = jam;
    }
    document.getElementById("divwaktu").innerHTML = jamx+" : "+menitx+" : "+detikx;
    waktu --;
    if(waktu>0){
        t = setTimeout("mulai()",1000);
        jalan = 1;
    }else{
        if(jalan==1){
            clearTimeout(t);
        }
        habis = 1;
        document.getElementById("formulir").submit();
    }
}
function selesai(){    
    if(jalan==1){
            clearTimeout(t);
        }
        habis = 1;
    document.getElementById("formulir").submit();
}
function getCookie(c_name){
    if (document.cookie.length>0){
        c_start=document.cookie.indexOf(c_name + "=");
        if (c_start!=-1){
            c_start=c_start + c_name.length+1;
            c_end=document.cookie.indexOf(";",c_start);
            if (c_end==-1) c_end=document.cookie.length;
            return unescape(document.cookie.substring(c_start,c_end));
        }
    }
    return "";
}

function setCookie(c_name,value,expiredays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+expiredays);
    document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}

function checkCookie(){
    waktuy=getCookie('waktux');
    if (waktuy!=null && waktuy!=""){
        waktu = waktuy;
    }else{
        waktu = waktunya;
        setCookie('waktux',waktunya,7);
    }
}

</script>
<script type="text/javascript">
    window.history.forward();
    function noBack(){ window.history.forward(); }
</script>
<script type="text/javascript">
function tombol() {
    document.getElementById("tombol").innerHTML= "<input type=button class='btn btn-md btn-success' value='Simpan sekarang' onclick=selesai()>";
}
</script>
<body onload="init(),noBack();" onpageshow="if (event.persisted) noBack();" onunload="keluar()">
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navigasi</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Selamat mengerjakan</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br><br><br>
<div class="container">
    <div class="col-md-3">
    	
    	
    	<div class="row" style="position: fixed;">
    	<div class="col-md-12" >
                                        <div class="well">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-desktop"></i> Waktu tersisa : </div>
                        <div class="panel-body">
                          
                            <h2><i class="fa fa-desktop"></i> <div id="divwaktu"></div></h2>
                                            
                         </div>
                    </div>
                    </div>
                </div>
    	</div>
    	
    	
    	
    	
    	
    	
    </div>
<div class="col-md-9">
<div class="well">
<div class="main"> <!-- *** mainpage layout *** -->
<div class="main-wrap">
<div class="header clear">
</div>
<div class="page clear">
<div class="notification note-success">
<form action="trans_ujian.php" method="post" id="formulir">
<?php
include "../config.php";
$db = new Connection();
$cek_siswa = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_tq='$_POST[id]' AND id_siswa='$_SESSION[idsiswa]'");
$info_siswa = mysql_fetch_array($cek_siswa);
if ($info_siswa[hits]<= 0){
    mysql_query("INSERT INTO siswa_sudah_mengerjakan (id_tq,id_siswa,hits)
                                        VALUES ('$_POST[id]','$_SESSION[id_siswa]',hits+1)");
}
require "form_ujian.php";
?>
    <div class="alert alert-success">
        <h4>Sudah yakin dengan jawaban anda dan ingin menyimpannya ?
        <br><br><button type=button class="btn btn-md btn-info" onclick="tombol()">Ya</button></h4>
        <h4 id="tombol"></h4>
    </div>
</form>
</div>

</div>
</div>
</div>
</div></div>
</div>
</body>

<meta http-equiv="content-type" content="text/html;charset=UTF-8">
  </body>
</html>

<?php
ob_end_flush();
}
?>

