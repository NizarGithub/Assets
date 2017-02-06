<?php
$act = $_GET['act'];
switch ($act) {
    case 'daftar_soal_ganda':
        require ('ganda/daftar_soal.php');
        break;
    case 'add_soal_ganda':
        require ('ganda/add_soal_ganda.php');
        break;
    case 'hapus_soal_ganda':
        require ('ganda/hapus_soal.php');
        break;
    case 'edit_soal_ganda':
        require ('ganda/edit_soal_ganda.php');
        break;
    case 'update_pilganda':
        require ('ganda/update_pilganda.php');
        break;
    
    case 'aksi_input_pilganda':
        require ('ganda/aksi_soal_ganda.php');
        break;
    case 'add_soal_essay':
        require ('essay/add_soal_essay.php');
        break;
    case 'edit_essay':
        require ('essay/edit_essay.php');
        break;
    case 'hapus_multi_essay':
        require ('hapus_multi_essay.php');
        break;
    
    case 'form_essay':
        require ('essay/form_essay.php');
        break;
    default:
        require ('home_soal.php');
        break;
}
