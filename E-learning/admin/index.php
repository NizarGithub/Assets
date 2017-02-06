<?php
session_start();
require_once ('system/tanggal.php');
require_once ('system/functions.php');
require_once ('../config.php');
$db = new Connection();
if(!empty($_SESSION['level'])) {
$qsetelan = mysql_query("SELECT * FROM pengaturan WHERE id_setelan='1'");
$apps = mysql_fetch_object($qsetelan);
define("_SEKOLAH_", $apps->nama_sekolah);
define("_KEPSEK_",$apps->kepala_sekolah);

define("_LEVEL_",$_SESSION['level']);

if(_LEVEL_=='admin') {
	$in_id_admin = $_SESSION['id_admin'];
	define('_ID_ADMIN_',$in_id_admin);
	$in_qadmin = mysql_query("SELECT * FROM admin WHERE id_admin='"._ID_ADMIN_."' AND blokir='N'");
	$in_dadmin = mysql_fetch_object($in_qadmin);
	define(_nama_lengkap_, $in_dadmin->nama_lengkap);
}
else {
	$in_id_guru = $_SESSION['id_guru'];
	define('_ID_GURU_',$in_id_guru);
	$in_qguru = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='"._ID_GURU_."' AND BLOKIR='N'");
	$in_dguru = mysql_fetch_object($in_qguru);
	define(_nama_lengkap_, $in_dguru->nama_lengkap);
}
ob_start("minify_html");
require ("web/header.php");
?>
<body>
<div class="loader">
    <span class="teks-loader">
        Memuat data ....
    </span> 
</div>
<div id="alert"></div>
<div id="wrap">
	<div id="top">
		<?php require ("web/top.php"); ?>
	</div>
    <!-- /#top -->
    <div id="left">
        <?php 
        require ("web/aktif.php");
        require ("web/menu.php");
        ?>
		<!-- /#menu -->
    </div>
	<div id="content">
        <div class="main">
			<div class="removeSidebar blocks"></div>
            <div class="inner">
				<div id="alert_top"></div>				
				<div class="crumbs"> 
					<?php
	                require ("web/crumbs.php");
	                ?>
				</div>
				<div id="mainApps">
				<?php 
				if($_GET['app']=='') {
					require ("apps/app_mapel/view_mapel.php");
				}
				else {
                	require ("apps/app_".$_GET['app']."/app_".$_GET['app'].".php");
                }
                ?>
				</div>
                <?php
                require ("web/footer.php");
                ?>
<script type="">
	$(document).c(function() {
		
	}
</script>
</body>
</html>
<?php
ob_end_flush();
}
else {
    header('location: login.php?log_hash=error&error='.md5('not_session'));
}