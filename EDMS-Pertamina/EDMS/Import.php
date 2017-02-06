<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
require_once ('definer.php');
require_once (APP_PATH . 'config.php');
require_once (APP_SYSTEM_CLASS . 'Active_record_class.php');
require_once (APP_SYSTEM_FUNCTION . 'General_function.php');
// Plugins Reader Excel File
require_once (APP_SYSTEM_PLUGINS . 'fexcel.php');
// New Object From Classes
$DBCon  = New ConnectDB();
$ARSql  = New Active_record();
$OLERead  = New OLERead();

// Submit button
$submit_Member_sms  = $_POST['submit_import_member_sms'];
$submit_Bejana      = $_POST['submit_import_bejana'];
$submit_Alat_NDT    = $_POST['submit_import_alat_ndt'];
$submit_CSS         = $_POST['submit_import_css'];
$submit_Agenda      = $_POST['submit_import_agenda'];
$submit_ATK         = $_POST['submit_import_ATK'];
$submit_Clean_Tanki = $_POST['submit_import_cleaning_tanki'];
$submit_Termo       = $_POST['submit_import_termo'];

// Memulai set pada setiap form

// Set untuk member sms
if(isset($submit_Member_sms)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status 
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        $data_tiga  =   $data->val($row,3);
        // Data array
        $data_insert    = array(
            'nama'      => $data_satu,
            'no_telp'   => $data_dua,
            'aktif'     => $data_tiga
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('member_sms', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }
    
    // Redirect halaman
    header('location: admin.php?mod_apps=sms_gateaway');
}

// Set untuk bejana
elseif (isset($submit_Bejana)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status 
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        $data_tiga  =   $data->val($row,3);
        $data_empat =   $data->val($row,4);
        $data_lima  =   $data->val($row,5);
        
        // Data array
        $data_insert    = array(
            'sn'        => $data_satu,
            'no_ijin'   => $data_dua,
            'ijin_habis'=> $data_tiga,
            'merk'      => $data_empat,
            'kapasitas' => $data_lima
            
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('bejana', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }
    
    // Redirect halaman
    header('location: admin.php?mod_apps=regulasi&media_app=app_bejana');
}

// Set untuk alat NDT
elseif (isset($submit_Alat_NDT)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status 
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        $data_tiga  =   $data->val($row,3);
        $data_empat =   $data->val($row,4);
        $data_lima  =   $data->val($row,5);
        $data_enam  =   $data->val($row,6);
        
        // Data array
        $data_insert    = array(
            'description'   => $data_satu,
            'merk'          => $data_dua,
            'serial'        => $data_tiga,
            'jumlah'        => $data_empat,
            'ket'           => $data_lima,
            'peminjam'      => $data_enam
            
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('alat_ndt', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }
    
    // Redirect halaman
    header('location: admin.php?mod_apps=ndt&media_app=alat_ndt');
}

// Set untuk CSS
elseif(isset($submit_CSS)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status 
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        // Data array
        $data_insert    = array(
            'edisi'     => $data_satu,
            'tahun'     => $data_dua
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('css', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }
    
    // Redirect halaman
    header('location: admin.php?mod_apps=engine-docs&media_app=css');
}

elseif(isset($submit_Agenda)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        # 1996-09-13
        $tgl        = substr($data_dua, 8, 2);
        $bln        = substr($data_dua, 5, 2);
        $tahun      = substr($data_dua, 0, 4);
        
        $data_tiga  =  $data->val($row,3);
        $data_empat =  $data->val($row,4);

        // Data array
        $data_insert    = array(
            'topik'     => $data_satu,
            'tgl'       => $tgl,
            'bln'       => $bln,
            'thn'       => $tahun,
            'tanggal'   => $data_dua,
            'keterangan'=> $data_tiga,
            'aktif'     => $data_empat
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('agenda', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }

    // Redirect halaman
    header('location: admin.php?mod_apps=info&media_app=agenda_rapat');
}

elseif(isset($submit_ATK)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        $data_tiga  =   $data->val($row,3);

        // Data array
        $data_insert    = array(
            'nama'      => $data_satu,
            'jumlah'    => $data_dua,
            'keterangan'=> $data_tiga
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('atk', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }

    // Redirect halaman
    header('location: admin.php?mod_apps=report&media_app=atk');
}

elseif(isset($submit_Clean_Tanki)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        $data_tiga  =   $data->val($row,3);

        // Data array
        $data_insert    = array(
            'tagno'     => $data_satu,
            'schedule'  => $data_dua,
            'ket'       => $data_tiga
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('cleaning', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }

    // Redirect halaman
    header('location: admin.php?mod_apps=report&media_app=cleaning_tangki');
}

// Set untuk termo
elseif (isset($submit_Termo)) {
    // Object baru untuk membaca data dari file excel
    $data   = New Spreadsheet_Excel_Reader($_FILES['fexcel']['tmp_name']);
    // Menghitung jumlah baris dan kolom
    $jumlah_baris   = $data->rowcount($sheet_index=0);
    $jumlah_kolom   = $data->colcount($sheet_index=0);
    // Memberi status
    $stat_sukses    = 0;
    $stat_gagal     = 0;
    // Looping berdasarkan jumlah baris pada data di excel
    for($row=2;$row<=$jumlah_baris;$row++) {
        // Membaca nilai setiap baris
        $data_satu  =   $data->val($row,1);
        $data_dua   =   $data->val($row,2);
        $data_tiga  =   $data->val($row,3);
        $data_empat =   $data->val($row,4);
        $data_lima  =   $data->val($row,5);


        // Data array
        $data_insert    = array(
            'judul'     => $data_satu,
            'area'      => $data_dua,
            'tag_no'    => $data_tiga,
            'tgl'       => $data_empat,
            'user'      => $data_lima
         );
        // Insert ke database
        $sql_insert     = $ARSql->insert('termo_trend', $data_insert);
        // Mengecek saat mengeksekusi insert ke database
        if($sql_insert) {
            $stat_sukses++;
        }
        else {
            $stat_gagal++;
            $error = mysql_error()."<br>";
        }
    }

    // Redirect halaman
    header('location: admin.php?mod_apps=regulasi&media_app=app_termo');
}