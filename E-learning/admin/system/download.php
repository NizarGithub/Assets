<?php
$act = $_GET['act'];
switch ($act) {
    case 'excel':
        require ('download/excel.php');
        break;
    case 'word':
        require ('download/word.php');
        break;
    case 'backup':
        require ('download/backup.php');
        break;

}
