<?php
/* 
 * *****************************************************************************
 * Filename  : login_proses.php
 * Creator   : IBeESNay                                   
 * © Copyright and Powered by IBeESNay                         
 * *****************************************************************************
 * koneksi database
 */

 // menyisipkan dbcontroller ---------------------------------------------------
    require_once ("../../system/dbcontroller.php");
    // menyisipkan functions ---------------------------------------------------
    require_once ("../../system/functions.php");

    // membuat fungsi baru
    $query = new Functions();
    //membuat koneksi
    $db = new Connection();

   
	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax) {
            $id_berita  = $_REQUEST['id_berita'];
            $nama       = $_REQUEST['nama'];
            $email      = $_REQUEST['email'];
            $konten     = $_REQUEST['konten'];
            $tanggal    = date("Y-m-d");
            $waktu      = date("H:i:s");
          
                $send = $query->tambah_komentar($id_berita,$nama,$email,$konten,$tanggal,$waktu);
                if($send==1) {
                // response AJAX
                echo "success";
                }
}



