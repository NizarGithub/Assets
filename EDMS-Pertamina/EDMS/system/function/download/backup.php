<?php
require '../../config.php';
require '../system/backupdb.php';

$db = New Connection();

do_backupdb();