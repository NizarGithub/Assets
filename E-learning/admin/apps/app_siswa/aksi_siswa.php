<?php
if (isset($_POST['sbaru'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "siswa_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/siswa/$nama_file";
  
  $cek_nis = mysql_query("SELECT * FROM siswa WHERE nis='$_POST[nis]'");
  $ketemu=mysql_num_rows($cek_nis);

  $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
  $pass=md5($_POST[nis]);
  //apabila nis tersedia dan ada foto
  if (!empty($lokasi_file)){
      move_uploaded_file($lokasi_file, $direktori_file);
                mysql_query("INSERT INTO siswa(nis,
                                 nama_lengkap,
                                 username_login,
                                 password_login,
                                 id_kelas,
                                 jabatan,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 nama_ayah,
                                 nama_ibu,
                                 th_masuk,
                                 email,
                                 no_telp,
                                 foto,
                                 blokir,
                                 id_session,
                                 id_session_soal)
	                       VALUES('$_POST[nis]',
                                '$_POST[nama]',
                                '$_POST[nis]',
                                '$pass',
                                '$_POST[kelas]',
                                '$_POST[jabatan]',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[ayah]',
                                '$_POST[ibu]',
                                '$_POST[th_masuk]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$nama_file',
                                '$_POST[blokir]',
                                '$_POST[nis]',
                                '$_POST[nis]')");
            }
            else {
            mysql_query("INSERT INTO siswa(nis,
                                 nama_lengkap,
                                 username_login,
                                 password_login,
                                 id_kelas,
                                 jabatan,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 nama_ayah,
                                 nama_ibu,
                                 th_masuk,
                                 email,
                                 no_telp,
                                 blokir,
                                 id_session,
                                 id_session_soal)
	                       VALUES('$_POST[nis]',
                                '$_POST[nama]',
                                '$_POST[nis]',
                                '$pass',
                                '$_POST[kelas]',
                                '$_POST[jabatan]',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[ayah]',
                                '$_POST[ibu]',
                                '$_POST[th_masuk]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$_POST[blokir]',
                                '$_POST[nis]',
                                '$_POST[nis]')");
    }
    header('location: ?app=siswa&act=add');
}

else if (isset($_POST['skeluar'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "siswa_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/siswa/$nama_file";
  
  $cek_nis = mysql_query("SELECT * FROM siswa WHERE nis='$_POST[nis]'");
  $ketemu=mysql_num_rows($cek_nis);

  $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
  $pass=md5($_POST[nis]);
  //apabila nis tersedia dan ada foto
  if (!empty($lokasi_file)){
      move_uploaded_file($lokasi_file, $direktori_file);
                mysql_query("INSERT INTO siswa(nis,
                                 nama_lengkap,
                                 username_login,
                                 password_login,
                                 id_kelas,
                                 jabatan,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 nama_ayah,
                                 nama_ibu,
                                 th_masuk,
                                 email,
                                 no_telp,
                                 foto,
                                 blokir,
                                 id_session,
                                 id_session_soal)
	                       VALUES('$_POST[nis]',
                                '$_POST[nama]',
                                '$_POST[nis]',
                                '$pass',
                                '$_POST[kelas]',
                                '$_POST[jabatan]',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[ayah]',
                                '$_POST[ibu]',
                                '$_POST[th_masuk]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$nama_file',
                                '$_POST[blokir]',
                                '$_POST[nis]',
                                '$_POST[nis]')");
            }
            else {
            mysql_query("INSERT INTO siswa(nis,
                                 nama_lengkap,
                                 username_login,
                                 password_login,
                                 id_kelas,
                                 jabatan,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 nama_ayah,
                                 nama_ibu,
                                 th_masuk,
                                 email,
                                 no_telp,
                                 blokir,
                                 id_session,
                                 id_session_soal)
	                       VALUES('$_POST[nis]',
                                '$_POST[nama]',
                                '$_POST[nis]',
                                '$pass',
                                '$_POST[kelas]',
                                '$_POST[jabatan]',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[ayah]',
                                '$_POST[ibu]',
                                '$_POST[th_masuk]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$_POST[blokir]',
                                '$_POST[nis]',
                                '$_POST[nis]')");
    }
    header('location: ?app=siswa');
}

else if (isset($_POST['update'])) {
   $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "siswa_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/siswa/$nama_file";
  $cek_data = mysql_query("SELECT * FROM siswa WHERE id_siswa='$_POST[id]'");
  $dcek = mysql_fetch_array($cek_data);
      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
      $pass = md5($fpass);
	  
    $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
      if(empty($lokasi_file) && empty($fpass)) {
    mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      else if(!empty($lokasi_file) && empty($fpass)) {
         	if($dcek['foto']==!'') {
			unlink("../Foto/siswa/$dcek[foto]");
                }
                move_uploaded_file($lokasi_file, $direktori_file);
                mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            foto = '$nama_file',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      else if(empty($lokasi_file) && !empty($fpass)) {
                mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            password_login  = '$pass',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      else if(!empty($lokasi_file) && !empty($fpass)) {
         	if($dcek['foto']==!'') {
			unlink("../Foto/siswa/$dcek[foto]");
                }
                move_uploaded_file($lokasi_file, $direktori_file);
                mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            password_login  = '$pass',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            foto = '$nama_file',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      
      header('location: ?app=siswa&act=edit&id='.$_POST[id]);
                
}

else if (isset($_POST['update_exit'])) {
   $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "siswa_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/siswa/$nama_file";
  $cek_data = mysql_query("SELECT * FROM siswa WHERE id_siswa='$_POST[id]'");
  $dcek = mysql_fetch_array($cek_data);
      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
      $pass = md5($fpass);
	  
    $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
      if(empty($lokasi_file) && empty($fpass)) {
    mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      else if(!empty($lokasi_file) && empty($fpass)) {
         	if($dcek['foto']==!'') {
			unlink("../Foto/siswa/$dcek[foto]");
                }
                move_uploaded_file($lokasi_file, $direktori_file);
                mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            foto = '$nama_file',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      else if(empty($lokasi_file) && !empty($fpass)) {
                mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            password_login  = '$pass',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      else if(!empty($lokasi_file) && !empty($fpass)) {
         	if($dcek['foto']==!'') {
			unlink("../Foto/siswa/$dcek[foto]");
                }
                move_uploaded_file($lokasi_file, $direktori_file);
                mysql_query("UPDATE siswa SET
            nis  = '$_POST[nis]',
            nama_lengkap    = '$_POST[nama]',
            username_login  = '$_POST[uname]',
            password_login  = '$pass',
            id_kelas        = '$_POST[kelas]',
            jabatan         = '$_POST[jabatan]',
            alamat          = '$_POST[alamat]',
            tempat_lahir    = '$_POST[tlahir]',
            tgl_lahir       = '$tgl_lahir',
            foto = '$nama_file',
            jenis_kelamin   = '$_POST[jk]',
            agama           = '$_POST[agama]',
            nama_ayah       = '$_POST[ayah]',
            nama_ibu        = '$_POST[ibu]',
            th_masuk        = '$_POST[th_masuk]',
            email           = '$_POST[email]',
            no_telp         = '$_POST[no_telp]',
            blokir          = '$_POST[blokir]',
            id_session      = '$_POST[nis]',
            id_session_soal = '$_POST[nis]'
            WHERE  id_siswa        = '$_POST[id]'");
      }
      
      header('location: ?app=siswa');
                
}