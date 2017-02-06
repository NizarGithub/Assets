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

if(isset($_POST['balas_sms_id'])) {
    $ID_Inbox   = $_POST['balas_sms_id'];
    $noPengirim = $_POST['sender_number'];
    $reply      = $_POST['reply'];

    $kirim_sms = "INSERT INTO outbox(DestinationNumber, TextDecoded) VALUES  ('$noPengirim', '$reply')";
    $data_kirim_sms = $ARSql->query($kirim_sms);
    if($data_kirim_sms) {
        $update = $ARSql->query("UPDATE inbox SET Processed='true' WHERE ID='$ID_Inbox'");
    }
}
?>
