<?php
session_start();
/*session_unset('akses');
session_unset('level');*/
session_destroy();
header('location: index.php?log_out=sukses')
?>