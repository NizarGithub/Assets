<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
//error_reporting(0);
session_start();
require_once ('../../../definer.php');
require_once ('../../../config.php');
require_once ('../../../'.APP_SYSTEM_CLASS.'Active_record_class.php');
# Function Gnereal
require_once ('../../../'.APP_SYSTEM_FUNCTION.'General_function.php');
# Path Configuration
$dbconn = new ConnectDB(); 
$ARSql = New Active_record();
$currentUser = $ARSql->getOne('users', 'id_user', $_SESSION['id_user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Change Password</title>
<link rel="shortcut icon" type="image/jpg" href="<?php echo '../../../'.APP_IMG .'logo.jpg'; ?>" />
<link rel="stylesheet" href="../../../assets/css/main.css"/>
<link rel="stylesheet" href="../../../assets/plugins/plugins.css"/>
<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css"/>
<script type="text/javascript" src="../../../assets/JS/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../../../assets/JS/plugins.js"></script>
</head>
<body>
    <div class="container">   
        <div class="col-md-12">
            <?php
        if($_GET['status']=='error') { ?>
            
        <div class="alert alert-danger">
            <h2>Password lama salah</h2>
            <p>Maaf password yang anda masukan saat ini salah...</p>
        </div>
        
        <?php } else if($_GET['status']=='sukses') { ?>
        <div class="alert alert-success">
            <h2>Password changed</h2>
            <p>Password berhasil diupdate...</p>
        </div>
        <?php } else {
            echo "";
        }
        ?>
    <div class="block">
        
        <div class="block-title"><h2>Edit Password</h2></div>
        <form id="form-validation" class="form-bordered" method="post" action="" enctype="multipart/form-data" autocomplete="off">
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><span class="badge badge-info" style="padding: 10px"> Password  Anda Saat Ini : </span></label>
                            <?php
                                if ($currentUser->locktype == "0") {
                            ?>
                                <div class="input-group">
                                    <input class="form-control" type="password" name="oldpassword">
                                </div>
                                <span class="help-block">Saat ini password anda menggunkan teks biasa.</span>
                            <?php } else { ?>
                                <input id="oldpassword" type="hidden" name="oldpassword">
                                <div id="patternHolder"></div>
                                <span class="help-block">Saat ini password anda menggunkan pola.</span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password Baru</label>
                            <div class="box-password">
                                <div class="input-group">
                                    <input class="form-control" type="text" required id="newpassword" placeholder="Password teks..." name="newpassword">
                                    <span class="input-group-btn">
                                        <button id="change-lock-type" class="btn btn-success" type="button"><i class="fa fa-gear"></i> Ubah Tipe Password</button>
                                    </span>
                                </div>
                                <span class="help-block"></span>
                            </div>
                            <div class="box-password-lock" style="display:none;">
                                <div class="input-group">
                                    <span class="btn-group">
                                        <button id="change-pattern" class="btn btn-warning" type="button"><i class="fa fa-barcode"></i> Gunakan Pola</button>
                                        <button id="change-lock-type-2" class="btn btn-success" type="button"><i class="fa fa-gear"></i> Ubah Tipe Password</button>
                                    </span>
                                </div>
                                <div id="patternHolder1"></div>
                                <span class="help-block"></span>
                            </div>
                     </div>
                        <div class="form-group">
                            <label>Lock Type</label>
                            <input type="text" class="form-control" style="width: 50px" name="locktype" readonly id="locktype" value="0">
                        </div>
                        </div>
                </div>
                <div class="form-group form-actions">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Simpan</button>
                </div>
            </fieldset>
        </form>
    </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $("#change-lock-type").click(function(){
        $("#locktype").val('1');
        $("#newpassword").val('');
        $(".box-password").hide();
        $(".box-password-lock").show();
    });

    $("#change-lock-type-2").click(function(){
        $("#locktype").val('0');
        $("#newpassword").val('');
        $(".box-password").show();
        $(".box-password-lock").hide();
    });
    $("#change-pattern").click(function(){
        var lock = new PatternLock('#patternHolder1',{
            margin:18,
            onDraw:function(pattern){
                var patternval = lock.getPattern();
                $("#newpassword").val(patternval);
            }
        });
    });
    var lock = new PatternLock('#patternHolder',{
            margin:18,
            onDraw:function(pattern){
                var patternval = lock.getPattern();
                $("#oldpassword").val(patternval);
            }
        });
    </script>

<?php 
if(isset($_POST['submit'])) {
    $old_password   = validasi($_POST['oldpassword'], 'xss');
    $new_password   = validasi($_POST['newpassword'], 'xss');
    $lock_type_pass = validasi($_POST['locktype'], 'xss');
    // Cek data
    $cek = $ARSql->query("SELECT * FROM users WHERE id_user='$_SESSION[id_user]' && password='".md5($old_password)."' and blokir='N'");
    $jumlah = $ARSql->numRows($cek);
    if($jumlah > 0) {
        $data_update    = array(
            'password'=>md5($new_password),
            'locktype'=>$lock_type_pass
        );
        
        $update = $ARSql->update('users', 'id_user', $_SESSION['id_user'], $data_update);
        header('location: change_password.php?status=sukses');
    }
    else {
        header('location: change_password.php?status=error');
    }
}