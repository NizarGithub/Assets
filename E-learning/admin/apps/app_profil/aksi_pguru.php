<?php
 if(isset($_POST['update'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "guru_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/pengajar/$nama_file";
  $cek_data = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$_POST[id]'");
  $dcek = mysql_fetch_array($cek_data);
      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
	  $pass = md5($fpass);
	  
	  $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
      if(empty($lokasi_file) && empty($fpass)) {
      //apabila ada foto yang di upload
      mysql_query("UPDATE pengajar SET
                nip  = '$_POST[nip]',
                nama_lengkap   = '$_POST[nama]',
                username_login = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                jabatan        = '$_POST[jabatan]'
                WHERE  id_pengajar     = '$_POST[id]'");
        }
        else if(empty($lokasi_file) && !empty($fpass)) {
        		$pass = md5($fpass);
        		mysql_query("UPDATE pengajar SET
                nip  = '$_POST[nip]',
                nama_lengkap   = '$_POST[nama]',
                username_login = '$_POST[uname]',
                password_login = '$pass',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                jabatan        = '$_POST[jabatan]'
                WHERE  id_pengajar     = '$_POST[id]'");
        }       
         else if(!empty($lokasi_file) && empty($fpass)) {
         	if($dcek['foto']==!'') {
			unlink("../Foto/pengajar/$dcek[foto]");
			}
			move_uploaded_file($lokasi_file, $direktori_file);
	        mysql_query("UPDATE pengajar SET
                nip  = '$_POST[nip]',
                nama_lengkap   = '$_POST[nama]',
                username_login = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                foto = '$nama_file',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                jabatan        = '$_POST[jabatan]'
                WHERE  id_pengajar     = '$_POST[id]'");
        }       
        header('location:index.php?app=guru&act=edit&id='.$_POST[id]);
}
else if(isset($_POST['update_exit'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "guru_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/pengajar/$nama_file";

  $cek_data = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$_POST[id]'");
  $dcek = mysql_fetch_array($cek_data);
  //nip tersedia

      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
        $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
      if(empty($lokasi_file) && empty($fpass)) {
      mysql_query("UPDATE pengajar SET
                nip  = '$_POST[nip]',
                nama_lengkap   = '$_POST[nama]',
                username_login = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                jabatan        = '$_POST[jabatan]'
                WHERE  id_pengajar     = '$_POST[id]'");
        }
        else if(empty($lokasi_file) && !empty($fpass)) {
      			$pass = md5($fpass);
        		mysql_query("UPDATE pengajar SET
                nip  = '$_POST[nip]',
                nama_lengkap   = '$_POST[nama]',
                username_login = '$_POST[uname]',
                password_login = '$pass',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                jabatan        = '$_POST[jabatan]'
                WHERE  id_pengajar     = '$_POST[id]'");
        }       
        else if(!empty($lokasi_file) && empty($fpass)) {
        if($dcek['foto']==!'') {
			unlink("../Foto/pengajar/$dcek[foto]");
		}
			move_uploaded_file($lokasi_file, $direktori_file);
        	mysql_query("UPDATE pengajar SET
                nip  = '$_POST[nip]',
                nama_lengkap   = '$_POST[nama]',
                username_login = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                foto = '$nama_file',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                jabatan        = '$_POST[jabatan]'
                WHERE  id_pengajar     = '$_POST[id]'");
        }       
        header('location:index.php?app=profil');
}