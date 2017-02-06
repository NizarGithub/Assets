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
<link rel="stylesheet" href="../../../assets/css/style_admin.css"/>
<script type="text/javascript" src="../../../assets/JS/jquery-1.11.0.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="span16">
        <div class="alert alert-info">
            <h2><i class="icon-envelope"></i> &nbsp;5 Permintaan Masuk Hari Ini</h2>
            Pesan masuk dari member yang terdaftar dalam permintaan informasi dengan menggunakan SMS.
        </div>
    </div>
</div>
        </div>
    <div class="container">
<div class="row">
    <div class="span16">
   <table cellspacing="0" id="tech-companies-1" class="table table-striped">
      <thead>
         <tr>
            <th width="5%">#</th>
            <th width="35%" data-priority="1">Nama Lengkap</th>
            <th data-priority="1">Waktu</th>
         </tr>
      </thead>
      <tbody>
            <?php
            $qinbox = $ARSql->query("SELECT * FROM inbox ORDER BY ID DESC LIMIT 5");
            $no = 1;
            while($inbox = $ARSql->mf_object($qinbox)) {
            $dmember = $ARSql->getOne('member_sms','no_telp',$inbox->SenderNumber);
            echo "<tr>
                <td>$no.</td>
               <th>".$dmember->nama."</th>
               <td>".$inbox->ReceivingDateTime."</td>
            </tr>";
            $no++;
            }
            ?>
      </tbody>
   </table>
            </div>
        </div>
        </div>
</body>
</html>
<?php
$js_bs_min          = APP_JS . "bootstrap.min.js";
$js_bs_table        = '../../../'.APP_JS . "jquery/table.min.js";
addJs($js_bs_table);
$css_admin          = '../../../'.APP_CSS .$themes;
$css_table          = '../../../'.APP_CSS .'table.min.css';
//addCss($css_main,'screen, projection');
//addCss($css_bs_min,'screen, projection');
addCss($css_table,'screen, projection');
addJs($js_bs_min);
//$js_bs_min          = APP_JS . "bootstrap.min.js";
//$js_plg             = APP_JS . "plugins.js";
//$js_dialog_box      = APP_JS . "jquery.dialogBox.js";
//$js_bs_transition   = APP_JS . "bootstrap/bootstrap-transition.js";
//$js_bs_alert        = APP_JS . "bootstrap/bootstrap-alert.js";
//$js_bs_modal        = APP_JS . "bootstrap/bootstrap-modal.js";
//$js_bs_dropdown     = APP_JS . "bootstrap/bootstrap-dropdown.js";
//$js_bs_scrollspy    = APP_JS . "bootstrap/bootstrap-scrollspy.js";
//$js_bs_tab          = APP_JS . "bootstrap/bootstrap-tab.js";
//$js_bs_tooltip      = APP_JS . "bootstrap/bootstrap-tooltip.js";
//$js_bs_popover      = APP_JS . "bootstrap/bootstrap-popover.js";
//$js_bs_button       = APP_JS . "bootstrap/bootstrap-button.js";
//$js_bs_collapse     = APP_JS . "bootstrap/bootstrap-collapse.js";
//$js_bs_typehead     = APP_JS . "bootstrap/bootstrap-typeahead.js";
//$js_bs_affix        = APP_JS . "bootstrap/bootstrap-affix.js";
//$js_bs_datepicker   = APP_JS . "bootstrap/bootstrap-datepicker.js";
//$js_bs_tablesorter  = APP_JS . "jquery/jquery-tablesorter.js";
//$js_bs_chosen       = APP_JS . "jquery/jquery-chosen.js";
//$js_bs_table        = APP_JS . "jquery/table.min.js";
//$js_filter_tabel    = APP_JS . "jquery.table-filter.min.js";
//$js_editable        = APP_JS . "editable.js";
//$js_ckeditor        = APP_ASSETS . "ckeditor/ckeditor.js";
//$css_plg            = APP_PLUGINS . "plugins.css";
//$js_sms_gateaway    = "gateaway/cek_sms.js";