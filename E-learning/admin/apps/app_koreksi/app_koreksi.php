<?php
$act = $_GET['act'];
switch ($act) {
    case 'view_koreksi':
        require ('view_koreksi.php');
        break;
    case 'detail':
        require ('detail_koreksi.php');
        break;
    case 'mulai_koreksi':
        require ('mulai_koreksi.php');
        break;
    case 'edit_koreksi':
        require ('edit_koreksi.php');
        break;
    case 'simpan_koreksi':
        require ('simpan_koreksi.php');
        break;
    case 'reset':
        require ('reset_ujian.php');
        break;
    default:
        require ('view_koreksi.php');
        break;
}
