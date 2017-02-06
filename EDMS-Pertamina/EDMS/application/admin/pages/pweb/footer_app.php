<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<footer class="application-footer no-print">
    <div class="container">
        <p><center><img src="<?php echo APP_IMG . 'logo.jpg' ;?>" class="img-logo"> &nbsp;<strong>PERTAMINA</strong> RU VI Balongan - Indramayu</center></p>
        <div class="disclaimer">
            <p>Powered by <strong>IBeES Technology</strong>. All right reserved.</p>
            <p>Copyright  &copy; IBeESNay.</p>
        </div>
    </div>
</footer>
<?php
$js_bs_min          = APP_JS . "bootstrap.js";
$js_plg             = APP_JS . "plugins.js";
$js_dialog_box      = APP_JS . "jquery.dialogBox.js";
$js_bs_transition   = APP_JS . "bootstrap/bootstrap-transition.js";
$js_bs_alert        = APP_JS . "bootstrap/bootstrap-alert.js";
$js_bs_modal        = APP_JS . "bootstrap/bootstrap-modal.js";
$js_bs_dropdown     = APP_JS . "bootstrap/bootstrap-dropdown.js";
$js_bs_scrollspy    = APP_JS . "bootstrap/bootstrap-scrollspy.js";
$js_bs_tab          = APP_JS . "bootstrap/bootstrap-tab.js";
$js_bs_tooltip      = APP_JS . "bootstrap/bootstrap-tooltip.js";
$js_bs_popover      = APP_JS . "bootstrap/bootstrap-popover.js";
$js_bs_button       = APP_JS . "bootstrap/bootstrap-button.js";
$js_bs_collapse     = APP_JS . "bootstrap/bootstrap-collapse.js";
$js_bs_typehead     = APP_JS . "bootstrap/bootstrap-typeahead.js";
$js_bs_affix        = APP_JS . "bootstrap/bootstrap-affix.js";
$js_bs_datepicker   = APP_JS . "bootstrap/bootstrap-datepicker.js";
$js_bs_tablesorter  = APP_JS . "jquery/jquery-tablesorter.js";
$js_bs_chosen       = APP_JS . "jquery/jquery-chosen.js";
$js_bs_table        = APP_JS . "jquery/table.min.js";
$js_filter_tabel    = APP_JS . "jquery.table-filter.min.js";
$js_editable        = APP_JS . "editable.js";
$js_ckeditor        = APP_ASSETS . "ckeditor/ckeditor.js";
$js_blink           = APP_JS . "blink.js";
$css_plg            = APP_PLUGINS . "plugins.css"; 

$js_sms_gateaway    = "gateaway/cek_sms.js";

# Add JS

//addJs($js_jquery_plugin);
//addJs($js_dialog_box);
addJs($js_bs_transition); 
//addJs($js_bs_alert);
//addJs($js_bs_modal);
addJs($js_bs_min);
addJs($js_blink);
addJs($js_bs_table);
addJs($js_filter_tabel);
addJs($js_bs_dropdown);
//addJs($js_bs_popover);
addJs($js_bs_datepicker);
addJs($js_bs_collapse);
addJs($js_bs_chosen);
addJs($js_bs_button);
addJs($js_bs_tablesorter);
addJs($js_bs_typehead); 
addJs($js_bs_tab);
//addJs($js_bs_affix);
addJs($js_bs_tooltip);
addJs($js_ckeditor);
//addJs($js_sms_gateaway);
addJs($js_editable);
echo "<script type='text/javascript'>"
. "$('#tabel_sorter').tablesorter();"
. "$('#datepicker').datepicker();"
. "$('.chosen').chosen();"
. "$(\"#filter_tabel\").addTableFilter(); "
. "CKEDITOR.replace('teks_editor');"
. "</script>";
echo "<script type='text/javascript'>"
. "function back() { self.history.back(); }"
. "function conDelete() { return confirm(\"Yakin ingin menghapus data ini ? \"); }"
. "function form_change_password() { open('application/admin/pages/change_password.php','form','menubar=no,width=400,height=600'); }"
. "function form_checking_sms() { open('application/admin/pages/checking_sms.php','form','menubar=no,width=400,height=600'); }"
. "function open_app_konversi() { open('application/admin/pages/change_password.php'); }"
. "function conDelete() { return confirm(\"Yakin ingin menghapus data ini ? \"); }"
. "</script>";
echo "<script type='text/javascript'>"
. "$(function() {
    $('.focus-on').focus();
    $(window).on(\"load\",function(){
    $('#loadingMask').fadeIn().delay(1000).fadeOut();
    });
    $('.hide-left').hide();
    $('.close-sidebar-left').click(function() {
    $('#sidebar-left').removeClass(\"body-nav body-nav-vertical body-nav-fixed\");
    $('#con-sid-left').hide();
    });
    $('.open-sidebar-left').click(function() {
    $('.hide-left').slideToggle();
    });
    $(window).bind('scroll', function(){
        if($(this).scrollTop() > 160) {
        $(\"#scrolltab\").fadeIn('3000');
        $(\".menu-bottom\").show(500);
        }
        if($(this).scrollTop() < 159){
            $(\"#scrolltab\").fadeOut('3000');
            $(\".menu-bottom\").hide(500);
        }
    });
    $('#scrolltab').live('click', function(){
        $(\"html, body\").animate({scrollTop:0}, 700);
    });
    $('.pertamina').click(function(){
        alert('PT. PERTAMINA \\n \\nRefinery Unit VI Balongan \\nCopyright © IBeESNay');
    });
    $(\"[data-toggle=popover]\")
    .popover()"
. "});";
echo "</script>";
?>
<div id="scrolltab"></div>
</body>
</html>