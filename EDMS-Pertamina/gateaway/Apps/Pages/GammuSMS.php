<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
error_reporting(0);
require_once ('System/class/Gammu_SMS_class.php');
$gammu_bin 		= 'C:/gammu/bin/gammu.exe';
$gammu_config           = 'C:/gammu/bin/gammurc';
$gammu_config_section	= '';
# New Object Class To Gammu SMS
$GammuSMS = New Gammu_SMS($gammu_bin,$gammu_config,$gammu_config_section);
?>
<h2 class="text-success"><i class="icon-cogs"></i> Status :: Gammu SMS</h2>
<div class="row-fluid">
    <hr>
    <div class="alert alert-info">
        <h4>Informasi gammu akan ditampilkan jika service Gammu SMSD tidak keadaan start atau running</h4>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li><a href="#tab1" data-toggle="tab">Gammu Identify</a></li>
                <li class="active"><a href="#tab2" data-toggle="tab">Get SMS from Device</a></li>
                <li><a href="#tab3" data-toggle="tab">Phone Book</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    <p>
<?php
/* Identify Device information */
$GammuSMS->Identify($response);
echo '<div class="alert alert-danger"><h3>';
echo '<pre>';
print_r($response);
echo '</pre>';
echo '</h3></div>';
?>
                    </p>
                </div>
                <div class="tab-pane  active" id="tab2">
                    <p>
<?php
/* Identify Device information */
$response = $GammuSMS->Get();
echo '<div class="alert alert-danger"><h3>';
echo '<pre>';print_r($response); echo '</pre>';
echo '</h3></div>';
?>
                    </p>
                </div>
                <div class="tab-pane" id="tab3">
                    <p>
<?php
/* Identify Device information */
$response = $GammuSMS->phoneBook('ME');
echo '<div class="alert alert-danger"><h3>';
echo '<pre>';print_r($response); echo '</pre>';
echo '</h3></div>';
?>
                    </p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
</div>