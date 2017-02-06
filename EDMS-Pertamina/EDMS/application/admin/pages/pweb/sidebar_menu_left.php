<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
if(MOD_APP!='' AND MOD_APP!='home' AND MOD_APP!='utama' AND MOD_APP!='webcam') {
?>
<div id="sidebar-left" class="body-nav body-nav-vertical body-nav-fixed wow fadeInDown" data-wow-delay="1.3s">
    <div id="con-sid-left" class="container">
        <ul>
            <li>
                <a href="javascript:;" class="open-sidebar-left">
                    <img src="assets/images/logo.jpg" style="margin-top: -15px; width: 43px; margin-bottom: 4px"> 
                    <br>Shorcut <strong><i class="icon-caret-down"></i></strong>
                </a>
            </li>
            <li class="hide-left">
                <a href="admin.php?mod_apps=home">
                    <i class="icon-home icon-large"></i> Beranda
                </a>
            </li>
            <li class="hide-left">
                <a href="admin.php?mod_apps=utama">
                    <i class="icon-globe icon-large"></i> Utama
                </a>
            </li>
        <!--<li class="hide-left">
                <a href="admin.php?mod_apps=webcam">
                    <i class="icon-camera icon-large"></i> Camera
                </a>
            </li>-->
            
<!--          <li>
<a style="height: 15px; padding-top: 0px; padding-bottom: 8px;" href="javascript:;" onclick="self.history.back()">
<i class="icon-arrow-left"></i>
                    Kembali
                </a>
            </li>
            <li>
                <a style="height: 15px; padding-top: 0px; padding-bottom: 8px;" href="javascript:;" onclick="self.history.forward()">
                    <i class="icon-arrow-right"></i> 
                    Forward
                </a>
            </li>-->
            <li>
                <a href="javascript:;" class="close-sidebar-left">
                    <i class="icon-remove-sign icon-large"></i>
                    Close
                </a>
            </li>
        </ul>
    </div>
</div>
<?php } ?>