<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$slide = APP_CSS.'flexisel.css';
addCss($slide);
?>
<link rel="stylesheet" href="<?php echo APP_CSS;?>swipebox.css">
<link rel="stylesheet" href="<?php echo APP_CSS;?>style.css">
<script src="<?php echo APP_JS;?>jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
            $(".swipebox").swipebox();
    });
</script>
<div class="row">
    <div class="span8">
        <div class="blockoff-left wow fadeInLeft" data-wow-delay="0.9s">
            <legend class="lead">
                Welcome : <?php echo $d_userAdmin->nama_lengkap;?>
            </legend>
            <div class="alert alert-success">
                <p>Selamat datang dihalaman sistem pengelolaan dokumen elektronik tahun <?php echo date("Y");?>.</p>
            </div>
                Anda berhasil login pada hari <?php echo date_now($_SESSION['tanggal']);?> pukul <?php echo $_SESSION['waktu'];?><br>
                <br>
                <a class="btn btn-sm btn-primary" onclick="form_change_password();"><i class="icon-lock"></i> Change password</a>&nbsp;&nbsp;
                <a class="btn btn-sm" href="admin.php?mod_apps=logout"><i class="icon-off"></i> Logout</a>
        </div>
    </div>
    <div class="span8">
        <div class="box wow fadeInRight" data-wow-delay="0.9s">
        <div class="box-header">
            <i class="icon-bookmark"></i>
            <h5>Shortcuts Apps</h5>
            <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-coll">
                <i class="icon-reorder"></i>
             </button>
        </div>
            <div class="box-coll">
        <div class="box-content bg-info">
            <div class="btn-group-box" style="margin-top: 5px;">
                <button class="btn"><i class="icon-user icon-large"></i><br/>Account</button>
                <button class="btn"><i class="icon-search icon-large"></i><br/>Pencarian</button>
                <button class="btn"><i class="icon-bar-chart icon-large"></i><br/>Module</button>
                <button class="btn"><i class="icon-signal icon-large"></i><br/>Grafik</button>
                <button class="btn"><i class="icon-wrench icon-large"></i><br/>Setelan</button>
            </div>
        </div>
            </div>
    </div>
    </div>
</div>