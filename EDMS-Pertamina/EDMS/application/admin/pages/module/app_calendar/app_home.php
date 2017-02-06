<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<br>
<div class="row">
    <div class="span16">
        <div class="box">
            <div class="box-header">
                <i class="icon-calendar"></i>
                <h5>
                    CALENDAR <?php pertamina();?>
                </h5>
                &nbsp;&nbsp;&nbsp;&nbsp;<a onclick="window.print();" class="no-print btn btn-small btn-default btn-box-right"><i class="icon-print"></i> Cetak kalender</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="pull-right">
                    <span class="label" style="background: #50b7d6">&nbsp;&nbsp;&nbsp;&nbsp; Jadwal petugas on call&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label" style="background: #5cb85c">&nbsp;&nbsp;&nbsp;&nbsp; Jadwal agenda&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <div class="box-content box-table">
                <br><div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
<?php
addCss(APP_PLUGINS."fullcalendar/fullcalendar.css");
addJs(APP_PLUGINS."fullcalendar/fullcalendar.min.js");
require_once ('fullcalendar.php');
?>
<script type="text/javascript">
  $(function() {
    <?php
    if(LEVEL_USER=='1') {
    echo "IBeESNayCalendar();";
    } else {
    echo "IBeESNayCalendar();";
    }
    ?>
  });
</script>
<style>
@media print{
    .no-print {
        display: none !important;
    }
}
</style>
