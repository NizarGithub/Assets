<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
session_start();
session_unset('id_user');
session_destroy();
header('location: admin.php?log_out=success');
?>
