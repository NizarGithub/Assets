<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$status = $_GET['status'];
if($status=='start') {
    $ARSql->query("UPDATE pengaturan SET auto_reply='Yes'");
    header('location: inbox.php5');
}
else if($status=='stop') {
    $ARSql->query("UPDATE pengaturan SET auto_reply='No'");
    header('location: inbox.php5');
}

?>
