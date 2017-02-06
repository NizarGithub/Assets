<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$Type_Inbox = $_GET['Type'];
$ID_Inbox   = $_GET['ID'];
if($Type_Inbox=='Inbox_true') {
    $ARSql->query("DELETE FROM inbox WHERE Processed='true'");
    header('location: inbox.php5');
}
else if($Type_Inbox=='Inbox_false') {
    $ARSql->query("DELETE FROM inbox WHERE Processed='false'");
    header('location: inbox.php5');
}
else if($Type_Inbox=='Inbox_all') {
    $ARSql->query("DELETE FROM inbox");
    header('location: inbox.php5');
}
else if($Type_Inbox=='Inbox_one') {
    $ARSql->query("DELETE FROM inbox WHERE ID='$ID_Inbox'");
    header('location: inbox.php5');
}
?>
