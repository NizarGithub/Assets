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
    if(!empty($_GET['pesan_error']) || !empty($_GET['log_out'])){
        if($_GET['pesan_error'] == 1){
                $pesan = "<div class='alert alert-danger'>Silahkan isi semua field !"
                        . "<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a></div>";
        } elseif($_GET['pesan_error'] == 2){
                $pesan = "<div class='alert alert-danger'>Username and password isn't correct ... <b>Try again</b><a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a></div>";
        } elseif ($_GET['log_out']=='success') {
                $pesan = "<div class='alert alert-success'>Anda baru saja berhasil logout..."
                        . "<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a></div>";
        }
        else{
                $pesan = "";
        }
    } else {
        $pesan = "<div class='alert alert-info'><b>Selamat datang</b>.. Login untuk masuk ke kontrol panel."
                . "<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a></div>";
    }
    
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
    <div id="login-container" class="animation-fadeIn" style="margin-top: 0px">
		<div class="login-title text-center">
                    <h1><strong>&nbsp;</strong></h1>
		</div>
		<div class="block remove-margin">
			<div class="col-md-12">

                        <?php echo $pesan;?>

			</div>
			<form action="<?php echo APP_ADMIN .'pages/cek_auth.php';?>" autocomplete="off" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
				<input type="hidden" name="mod" value="login" />
                <input type="hidden" name="act" value="proclogin" />
                <div class="form">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group form-item">
                                <span class="input-group-addon"></span>
                                <input type="text" id="login-email" name="username" class="form-control input-lg" placeholder="Username" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group box-password" style="display:none;">
                        <div class="col-xs-12">
                            <div class="input-group form-item">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <div class="box-con-password"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group box-password-lock" style="display:none;">
                        <div id="patternHolder" style="margin:0 auto;"></div>
                        <div class="box-con-password-lock"></div>
                    </div>
                    <div class="form-group form-actions box-action" style="display:none;">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Login Panel</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <p class="text-center remove-margin">
                                <small>Lost your password ?</small> <a href="javascript:void(0)" id="link-login"><small> click here !</small></a>
                            </p><hr/>
                            <p class="text-center">
                                <img src="<?php echo APP_IMG . 'logo.jpg' ;?>" class="img-logo"/> RU VI Balongan - Indramayu
                                <br/><small>Copyright &copy; 2015 <b>IBeESNay</b>. All Rights Reserved</small>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
			</form>
			<form action="<?php echo APP_ADMIN .'pages/lost_password.php';?>" autocomplete="off" method="post" id="form-register" class="form-horizontal form-bordered form-control-borderless display-none">
				<div class="form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                                        <input required type="email" id="register-email" name="email" class="form-control input-lg" placeholder="Your e-mail account" />
						</div>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-xs-6"></div>
					<div class="col-xs-6 text-right">
						<button type="submit" class="btn btn-sm btn-success">Send Email</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<p class="text-center remove-margin">
							<small>Back to</small> <a href="javascript:void(0)" id="link-register"><small> Login panel !</small></a>
						</p>
					</div>
				</div>
                            <div class="form-group">
                        <div class="col-xs-12">
                            <p class="text-center">
                                <img src="<?php echo APP_IMG . 'logo.jpg' ;?>" class="img-logo"/> RU VI Balongan - Indramayu
                                <br/><small>Copyright &copy; 2015 <b>IBeESNay</b>. All Rights Reserved</small>
                                </small>
                            </p>
                        </div>
                    </div>
			</form>
		</div>
	</div>
        <?php
        $js_min = APP_JS .'jquery-1.11.0.min.js';
        $js_bs  = APP_JS .'bootstrap.min.js';
        $js_plg = APP_JS .'plugins.js';
        $js_app = APP_JS .'app.js';
        $js_mdr = APP_JS .'modernizr-2.7.1-respond-1.4.2.min';
	addJs($js_min); 
        addJs($js_bs);
        addJs($js_app);
        
        addJs($js_plg); 
        addJs($js_mdr);
        ?>
    <script type="text/javascript">
        gradient();
    </script>
    <script type="text/javascript">
        $("#login-email").on('keyup', function() {
            var username = $('#login-email').val();
            var mod = 'login';
            var act =  'searchlocktype';
            var dataString = 'username='+ username + '&mod='+ mod + '&act='+ act;
            $.ajax({
                type: "POST",
                url: "<?php echo APP_ADMIN.'pages/cek_auth.php';?>",
                data: dataString,
                cache: false,
                success: function(data){
                    if (data == "0") {
                        $('.box-password').show(300);
                        $('.box-action').show(10);
                        $('.box-password-lock').hide(200);
                        $('.box-con-password').html('<input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Password" />');
                        $('.box-con-password-lock').html('');
                    } else if (data == "1") {
                        $('.box-password').hide(200);
                        $('.box-action').hide(200);
                        $('.box-password-lock').show(500);
                        $('.box-con-password').html('');
                        $('.box-con-password-lock').html('<input type="hidden" id="login-password-lock" name="password" />');
                    } else {
                        $('.box-password').hide(200);
                        $('.box-action').hide(200);
                        $('.box-password-lock').hide(200);
                        $('.box-con-password').html('');
                        $('.box-con-password-lock').html('');
                    }
                }
            });
            return false;
        });
        var lock = new PatternLock('#patternHolder',{
            margin:15,
            onDraw:function(pattern){
                var patternval = lock.getPattern();
                $("#login-password-lock").val(patternval);
                $("#form-login").submit();
            }
        });
    </script>
</body>
</html>
<?php
    ob_end_flush();
} else {
    header('location: admin.php?mod_apps=home');
}
