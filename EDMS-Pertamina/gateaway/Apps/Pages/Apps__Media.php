<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$app_mod    = @$_GET['app_mod'];
define('Module_APP', $app_mod);
if(Module_APP=='home' || Module_APP=='') {
    require_once ('inbox.php');
}
else if(Module_APP=='editor') {
    require_once ('editor.php');
}
else if(Module_APP=='create') {
    require_once ('create.php');
}
else if(Module_APP=='inbox') {
    require_once ('inbox.php');
}
else if(Module_APP=='Hapus_inbox') {
    require_once ('Hapus_inbox.php');
}
else if(Module_APP=='update') {
    require_once ('update.php');
}
else if(Module_APP=='GammuSMS') {
    require_once ('GammuSMS.php');
}
else {
    require_once ('404.php');
}
?>
