<?php
/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */



session_start();
session_unset('id_user');
session_destroy();
header('location: login.php?log_out=success');
?>
