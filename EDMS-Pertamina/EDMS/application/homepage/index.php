<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
if(empty($_SESSION['id_user']) AND empty($_SESSION['level_user'])) {
    error_reporting(E_NOTICE || E_WARNING);
    require (APP_SYSTEM_FUNCTION.'Minify_function.php');
    ob_start('minify_html');
    $bs_min   = APP_CSS .'bootstrap.min.css';
    $plg_css  = APP_PLUGINS .'plugins.css';
    $main_css = APP_CSS .'main.css';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="Copyright" content="IBeESNay" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <title>Login Panel - Pertamina</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo APP_IMG .'logo.jpg'; ?>" />
    
    <?php 
    addCss($bs_min);
    addCss($plg_css);
    addCss($main_css);
    ?>
</head>
<body>
    <div class="top"><div class="colors"></div></div>
    <div id="login-container" class="animation-fadeIn">
		<div class="block remove-margin">
			<form action="<?php echo APP_ADMIN .'pages/cek_auth.php';?>" autocomplete="off" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
				<input type="hidden" name="mod" value="login" />
                <input type="hidden" name="act" value="proclogin" />
                <div class="form">
                    <hr/>
                    <center>
                        <b style="font-size: 27px" id="hitung_mundur_tampil"></b>
                    </center>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <hr/>
                            <p class="text-center">
                                <img src="<?php echo APP_IMG . 'logo.jpg' ;?>" class="img-logo"/> RU VI Balongan - Indramayu
                                <br/><small>Copyright &copy; 2015 <b>IBeESNay</b>. All Rights Reserved</small>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
			</form>
		</div>
	</div>
        <?php
        $js_min = APP_JS .'jquery-1.11.0.min.js';
        $js_bs  = APP_JS .'bootstrap.min.js';
        $js_plg = APP_JS .'countdown.js';
        $js_app = APP_JS .'app.js';
        $js_mdr = APP_JS .'modernizr-2.7.1-respond-1.4.2.min';
	addJs($js_min); 
        addJs($js_bs);
        addJs($js_plg); 
        addJs($js_mdr);
        ?>
    <script type="text/javascript">
        gradient();
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        hitung_mundur();
        setTimeout("location.href = 'admin.php?redirect=<?php echo md5('admin').md5('home');?>';",5000);
    });
    </script>
</body>
</html>
<?php
    ob_end_flush();
} else {
    header('location: admin.php?mod_apps=home');
}
