<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
include '../Apps__Config.php';
include '../System/class/Active_record_class.php';
$conn  = New ConnectDB();
$ARSql = New Active_record();
$sms_id = $_POST['sms_id'];
$query  = $ARSql->query("SELECT * FROM inbox WHERE ID='$sms_id'");
$data   = $ARSql->mf_array($query);
?>
<link rel="stylesheet">
<form class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="nama">Nomor ID</label>
		<div class="controls">
                    <input type="hidden" id="no_id" value="<?php echo $data['ID']; ?>">
                    <input type="text" id="no_hp" class="form-control" name="no_id" value="<?php echo $data['SenderNumber']; ?>">
                </div>
	</div>
        <div class="control-group">
		<label class="control-label" for="nama">Pesan Teks</label>
		<div class="controls">
                    <textarea class="form-control" id="pesan" name="pesan"></textarea>
                </div>
	</div>
</form>