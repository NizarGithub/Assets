<?php
if(isset($_POST['sbaru'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "admin_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/admin/$nama_file";


      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
      if($fpass==$cpass) {
      $pass=md5($_POST[fpass]);
      //apabila ada foto yang di upload
        if (!empty($lokasi_file)){
                if(move_uploaded_file($lokasi_file, $direktori_file)) {
                $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];

                mysql_query("INSERT INTO admin(
                                 nama_lengkap,
                                 username,
                                 password,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 no_telp,
                                 email,
                                 website,
                                 foto,
                                 blokir,
                                 id_session)
	                       VALUES(
                                '$_POST[nama]',
                                '$_POST[uname]',
                                '$pass',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[no_telp]',
                                '$_POST[email]',
                                '$_POST[website]',
                                '$nama_file',
                                '$_POST[blokir]',
                                'admin')");
                    }
                    else {
                        echo "<script>window.alert('File tidak bisa di upload.');self.history.back();</script>";

                    }
                }
        else {
        $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
        mysql_query("INSERT INTO admin(
                                 nama_lengkap,
                                 username,
                                 password,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 no_telp,
                                 email,
                                 website,
                                 blokir,
                                 id_session)
	                       VALUES('$_POST[nip]',
                                '$_POST[nama]',
                                '$_POST[uname]',
                                '$pass',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[no_telp]',
                                '$_POST[email]',
                                '$_POST[website]',
                                '$_POST[jabatan]',
                                'admin')");
        }
        header('location:index.php?app=admin&act=add');
      }
      else {
          echo "<script>window.alert('Password tidak sama, silahkan ulangi lagi.');
                self.history.back();</script>";
      }

}
else if(isset($_POST['skeluar'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "guru_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/admin/$nama_file";
  

      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
      if($fpass==$cpass) {
      $pass=md5($_POST[fpass]);
      //apabila ada foto yang di upload
        if (!empty($lokasi_file)){
                if(move_uploaded_file($lokasi_file, $direktori_file)) {
                $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];

                mysql_query("INSERT INTO admin(
                                 nama_lengkap,
                                 username,
                                 password,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 no_telp,
                                 email,
                                 website,
                                 foto,
                                 blokir,
                                 id_session)
	                       VALUES(
                                '$_POST[nama]',
                                '$_POST[uname]',
                                '$pass',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[no_telp]',
                                '$_POST[email]',
                                '$_POST[website]',
                                '$nama_file',
                                '$_POST[jabatan]',
                                'admin')");
                    }
                    else {
                        echo "<script>window.alert('File tidak bisa di upload.');self.history.back();</script>";

                    }
                }
        else {
        $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
        mysql_query("INSERT INTO admin(
                                 nama_lengkap,
                                 username,
                                 password,
                                 alamat,
                                 tempat_lahir,
                                 tgl_lahir,
                                 jenis_kelamin,
                                 agama,
                                 no_telp,
                                 email,
                                 website,
                                 blokir,
                                 id_session)
	                       VALUES(
                                '$_POST[nama]',
                                '$_POST[uname]',
                                '$pass',
                                '$_POST[alamat]',
                                '$_POST[tlahir]',
                                '$tgl_lahir',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[no_telp]',
                                '$_POST[email]',
                                '$_POST[website]',
                                '$_POST[blokir]',
                                'admin')");
        }
        header('location:index.php?app=admin');
      }
      else {
          echo "<script>window.alert('Password tidak sama, silahkan ulangi lagi.');
                self.history.back();</script>";
      }
 
}


else if(isset($_POST['update'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "guru_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/admin/$nama_file";
  $cek_data = mysql_query("SELECT * FROM admin WHERE id_pengajar='$_POST[id]'");
  $dcek = mysql_fetch_array($cek_data);
      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
	  $pass = md5($fpass);
	  
	  $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
      if(empty($lokasi_file) && empty($fpass)) {
      //apabila ada foto yang di upload
      mysql_query("UPDATE admin SET
                nama_lengkap   = '$_POST[nama]',
                username       = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                blokir         = '$_POST[blokir]'
                WHERE  id_admin     = '$_POST[id]'");
        }
        else if(empty($lokasi_file) && !empty($fpass)) {
        		$pass = md5($fpass);
        		mysql_query("UPDATE admin SET
                nama_lengkap   = '$_POST[nama]',
                username       = '$_POST[uname]',
                password_login = '$pass',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                blokir         = '$_POST[blokir]'
                WHERE  id_admin     = '$_POST[id]'");
        }       
         else if(!empty($lokasi_file) && empty($fpass)) {
         	if($dcek['foto']==!'') {
			unlink("../Foto/admin/$dcek[foto]");
			}
			move_uploaded_file($lokasi_file, $direktori_file);
	        mysql_query("UPDATE admin SET
                nama_lengkap   = '$_POST[nama]',
                username = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                foto = '$nama_file',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                blokir         = '$_POST[blokir]'
                WHERE  id_admin     = '$_POST[id]'");
        }       
        header('location:index.php?app=admin&act=edit&id='.$_POST[id]);
}
else if(isset($_POST['update_exit'])) {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           =  rand(000000,999999);
  $nama_file 	  = "guru_".$acak.'_'.str_replace(" ","_",$nama_file);
  $direktori_file = "../Foto/admin/$nama_file";

  $cek_data = mysql_query("SELECT * FROM admin WHERE id_admin='$_POST[id]'");
  $dcek = mysql_fetch_array($cek_data);
  //nip tersedia

      $fpass = $_POST['fpass'];
      $cpass = $_POST['cpass'];
        $tgl_lahir=$_POST[thn].'-'.$_POST[bln].'-'.$_POST[tgl];
      if(empty($lokasi_file) && empty($fpass)) {
      mysql_query("UPDATE admin SET
                nama_lengkap   = '$_POST[nama]',
                username       = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                blokir         = '$_POST[blokir]'
                WHERE  id_admin     = '$_POST[id]'");
        }
        else if(empty($lokasi_file) && !empty($fpass)) {
      			$pass = md5($fpass);
        		mysql_query("UPDATE admin SET
                nama_lengkap   = '$_POST[nama]',
                username       = '$_POST[uname]',
                password       = '$pass',
                alamat         = '$_POST[alamat]',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                blokir         = '$_POST[blokir]'
                WHERE  id_admin     = '$_POST[id]'");
        }       
        else if(!empty($lokasi_file) && empty($fpass)) {
        if($dcek['foto']==!'') {
			unlink("../Foto/admin/$dcek[foto]");
		}
			move_uploaded_file($lokasi_file, $direktori_file);
        	mysql_query("UPDATE admin SET
                nama_lengkap   = '$_POST[nama]',
                username       = '$_POST[uname]',
                alamat         = '$_POST[alamat]',
                foto = '$nama_file',
                tempat_lahir   = '$_POST[tlahir]',
                tgl_lahir      = '$tgl_lahir',
                jenis_kelamin  = '$_POST[jk]',
                agama          = '$_POST[agama]',
                no_telp        = '$_POST[no_telp]',
                email          = '$_POST[email]',
                website        = '$_POST[website]',
                blokir         = '$_POST[blokir]'
                WHERE  id_admin     = '$_POST[id]'");
        }       
        header('location:index.php?app=admin');
}