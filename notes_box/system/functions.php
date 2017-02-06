<?php
/*
 *****************************************
 * functions
 *****************************************
 */
date_default_timezone_set('Asia/jakarta');
error_reporting(0); //Menghilangkan laporan error
require_once ("../connection.php");  // koneksi ke database
require_once ("fungsi_indotgl.php"); // fungsi tanggal (format indonesia)
class Functions {









    /*
     * ************************************
     * Manajemen tabel box acount
     * ************************************
    */


    public function show_box_acount(){
        $query   = "SELECT b.*, k.* FROM box_acount AS b, kategori_acount AS k WHERE k.id_k_acount = b.id_k_acount "
                . "ORDER BY b.nama_acount";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_box_acount ($id_kategori,$nama_acount,$username_acount,$password_acount,$aktif){
        $query  = "INSERT INTO box_acount VALUES ('','$id_kategori','$nama_acount','$username_acount','$password_acount','$aktif')";
        mysql_query ($query);
    }

    public function edit_box_acount ($id_acount,$id_kategori,$nama_acount,$username_acount,$password_acount,$aktif){
        $query  = "UPDATE box_acount SET id_k_acount='$id_kategori', nama_acount='$nama_acount', username_acount='$username_acount', password_acount='$password_acount', aktif='$aktif'
        WHERE " ."id_acount='$id_acount'";
        mysql_query ($query);
    }


    public function delete_box_acount ($id_acount){
        $query  = "DELETE FROM box_acount WHERE id_acount='$id_acount'";
        mysql_query ($query);
    }


    public function getone_box_acount ($id_acount){
        $query  = "SELECT * FROM box_acount WHERE id_acount='$id_acount'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }


    
    
    
   /*
     * ************************************
     * Manajemen tabel kategori acount
     * ************************************
    */


    public function show_kategori_acount(){
        $query   = "SELECT * FROM kategori_acount ORDER BY nama_k_acount";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_kategori_acount ($nama_kategori_acount,$keterangan_kategori){
        $query  = "INSERT INTO kategori_acount VALUES ('','$nama_kategori_acount','$keterangan_kategori')";
        mysql_query ($query);
    }

    public function edit_kategori_acount ($id_kategori_acount,$nama_kategori_acount,$keterangan_kategori){
        $query  = "UPDATE kategori_acount SET nama_k_acount='$nama_kategori_acount', keterangan_k_acount='$keterangan_kategori'
        WHERE " ."id_k_acount='$id_kategori_acount'";
        mysql_query ($query);
    }


    public function delete_kategori_acount ($id_kategori_acount){
        $query  = "DELETE FROM kategori_acount WHERE id_k_acount='$id_kategori_acount'";
        mysql_query ($query);
    }


    public function getone_kategori_acount ($id_kategori_acount){
        $query  = "SELECT * FROM kategori_acount WHERE id_k_acount='$id_kategori_acount'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }

    
    
    
    /*
     * ************************************
     * Manajemen tabel puisi
     * ************************************
    */


    public function show_puisi(){
        $query   = "SELECT p.*, k.* FROM puisi AS p, kategori_puisi AS k WHERE k.id_k_puisi = p.id_k_puisi "
                . "ORDER BY p.judul";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_puisi ($id_kategori,$judul,$puisi,$pencipta,$tanggal){
        $query  = "INSERT INTO puisi VALUES ('','$id_kategori','$judul','$puisi','$pencipta','$tanggal')";
        mysql_query ($query);
    }

    public function edit_puisi ($id_puisi,$id_kategori,$judul,$puisi,$pencipta,$tanggal){
        $query  = "UPDATE puisi SET id_k_puisi='$id_kategori', judul='$judul', puisi='$puisi', pencipta='$pencipta', tgl_ditulis='$tanggal'
        WHERE " ."id_puisi='$id_puisi'";
        mysql_query ($query);
    }


    public function delete_puisi ($id_puisi){
        $query  = "DELETE FROM puisi WHERE id_puisi='$id_puisi'";
        mysql_query ($query);
    }


    public function getone_puisi ($id_puisi){
        $query  = "SELECT p.*, k.* FROM puisi AS p, kategori_puisi AS k WHERE k.id_k_puisi = p.id_k_puisi AND id_puisi='$id_puisi'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }


    
    
    
   /*
     * ************************************
     * Manajemen tabel kategori puisi
     * ************************************
    */


    public function show_kategori_puisi(){
        $query   = "SELECT * FROM kategori_puisi ORDER BY nama_k_puisi";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_kategori_puisi ($nama_kategori_puisi,$keterangan_kategori){
        $query  = "INSERT INTO kategori_puisi VALUES ('','$nama_kategori_puisi','$keterangan_kategori')";
        mysql_query ($query);
    }

    public function edit_kategori_puisi ($id_kategori_puisi,$nama_kategori_puisi,$keterangan_kategori){
        $query  = "UPDATE kategori_puisi SET nama_k_puisi='$nama_kategori_puisi', ket_k_puisi='$keterangan_kategori'
        WHERE " ."id_k_puisi='$id_kategori_puisi'";
        mysql_query ($query);
    }


    public function delete_kategori_puisi ($id_kategori_puisi){
        $query  = "DELETE FROM kategori_puisi WHERE id_k_puisi='$id_kategori_puisi'";
        mysql_query ($query);
    }


    public function getone_kategori_puisi ($id_kategori_puisi){
        $query  = "SELECT * FROM kategori_puisi WHERE id_k_puisi='$id_kategori_puisi'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }
    
    
    
    /*
     * ************************************
     * Manajemen tabel kata mutiara
     * ************************************
    */


    public function show_kamut(){
        $query   = "SELECT k.*, kt.* FROM kata_mutiara AS k, kategori_kamut AS kt WHERE kt.id_k_kamut = k.id_k_kamut "
                . "ORDER BY k.id_kamut DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_kamut ($id_kategori,$kamut,$pengutip){
        $query  = "INSERT INTO kata_mutiara VALUES ('','$id_kategori','$kamut','$pengutip')";
        mysql_query ($query);
    }

    public function edit_kamut ($id_kamut,$id_kategori,$kamut,$pengutip){
        $query  = "UPDATE kata_mutiara SET id_k_kamut='$id_kategori', kamut='$kamut', pengutip='$pengutip'
        WHERE " ."id_kamut='$id_kamut'";
        mysql_query ($query);
    }


    public function delete_kamut ($id_kamut){
        $query  = "DELETE FROM kata_mutiara WHERE id_kamut='$id_kamut'";
        mysql_query ($query);
    }


    public function getone_kamut ($id_kamut){
        $query  = "SELECT k.*, kt.* FROM kata_mutiara AS k, kategori_kamut AS kt WHERE kt.id_k_kamut = k.id_k_kamut AND id_kamut='$id_kamut'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }


    
    
    /*
     * ************************************
     * Manajemen tabel kata mutiara (english)
     * ************************************
    */


    public function show_kamut_en(){
        $query   = "SELECT m.*, k.* FROM mutiara_en AS m, kategori_kamut AS k WHERE k.id_k_kamut = m.id_k_kamut "
                . "ORDER BY m.id_kamut_en DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_kamut_en ($id_kategori,$kamut,$arti,$pengutip){
        $query  = "INSERT INTO mutiara_en VALUES ('','$id_kategori','$kamut','$arti','$pengutip')";
        mysql_query ($query);
    }

    public function edit_kamut_en ($id_kamut,$id_kategori,$kamut,$arti,$pengutip){
        $query  = "UPDATE mutiara_en SET id_k_kamut='$id_kategori', kamut_en='$kamut', arti='$arti', pengutip='$pengutip'
        WHERE " ."id_kamut_en='$id_kamut'";
        mysql_query ($query);
    }


    public function delete_kamut_en ($id_kamut){
        $query  = "DELETE FROM mutiara_en WHERE id_kamut_en='$id_kamut'";
        mysql_query ($query);
    }


    public function getone_kamut_en ($id_kamut){
        $query  = "SELECT m.*, k.* FROM mutiara_en AS m, kategori_kamut AS k WHERE k.id_k_kamut = m.id_k_kamut AND id_kamut_en='$id_kamut'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }

    
    
    /*
     * ************************************
     * Manajemen tabel kategori kamut
     * ************************************
    */


    public function show_kategori_kamut(){
        $query   = "SELECT * FROM kategori_kamut ORDER BY nama_k_kamut";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_kategori_kamut ($nama_kategori,$keterangan_kategori){
        $query  = "INSERT INTO kategori_kamut VALUES ('','$nama_kategori','$keterangan_kategori')";
        mysql_query ($query);
    }

    public function edit_kategori_kamut ($id_kategori,$nama_kategori,$keterangan_kategori){
        $query  = "UPDATE kategori_kamut SET nama_k_kamut='$nama_kategori', ket_k_kamut='$keterangan_kategori'
        WHERE " ."id_k_kamut='$id_kategori'";
        mysql_query ($query);
    }


    public function delete_kategori_kamut ($id_kategori){
        $query  = "DELETE FROM kategori_kamut WHERE id_k_kamut='$id_kategori'";
        mysql_query ($query);
    }


    public function getone_kategori_kamut ($id_kategori){
        $query  = "SELECT * FROM kategori_kamut WHERE id_k_kamut='$id_kategori'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }
    
    
    
    /*
     * ************************************
     * Manajemen tabel persatuan
     * ************************************
    */


    public function show_persatuan(){
        $query   = "SELECT * FROM persatuan ORDER BY nama_persatuan ASC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }




    public function add_persatuan ($kategori,$nama,$jumlah,$tanggal,$alamat,$kembali){
        $query  = "INSERT INTO persatuan VALUES ('','$kategori','$nama','$jumlah','$tanggal','$alamat','$kembali')";
        mysql_query ($query);
    }

    public function edit_persatuan ($id_persatuan,$kategori,$nama,$jumlah,$tanggal,$alamat,$kembali){
        $query  = "UPDATE persatuan SET kategori_persatuan='$kategori', nama_persatuan='$nama', jumlah='$jumlah', tgl_persatuan='$tanggal', alamat_persatuan='$alamat', kembali='$kembali'
        WHERE " ."id_persatuan='$id_persatuan'";
        mysql_query ($query);
    }


    public function delete_persatuan ($id_persatuan){
        $query  = "DELETE FROM persatuan WHERE id_persatuan='$id_persatuan'";
        mysql_query ($query);
    }


    public function getone_persatuan ($id_persatuan){
        $query  = "SELECT * FROM persatuan WHERE id_persatuan='$id_persatuan'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }
    
    
    
     /*
     * ************************************
     * Manajemen tabel profil
     * ************************************
    */


    public function add_profil ($id_user,$alamat,$tgl_lahir,$tempat_lahir,$tempat_tinggal,$jk,$agama,$pekerjaan,$tinggi,$berat,$golongan_darah,$foto){
        $query  = "INSERT INTO profil VALUES ('','$id_user','$alamat','$tgl_lahir','$tempat_lahir','$tempat_tinggal','$jk','$agama','$pekerjaan','$tinggi','$berat','$golongan_darah','$foto')";
        mysql_query ($query);
    }

    public function edit_profil ($id_user,$alamat,$tgl_lahir,$tempat_lahir,$tempat_tinggal,$jk,$agama,$pekerjaan,$tinggi,$berat,$golongan_darah){
        $query  = "UPDATE profil SET alamat='$alamat', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', tempat_tinggal='$tempat_tinggal', jenis_kelamin='$jk', agama='$agama', pekerjaan='$pekerjaan', tinggi_badan='$tinggi', berat_badan='$berat', golongan_darah='$golongan_darah'
        WHERE " ."id_user='$id_user'";
        mysql_query ($query);
    }


    public function delete_profil ($id_profil){
        $query  = "DELETE FROM profil WHERE id_profil='$id_profil'";
        mysql_query ($query);
    }


    public function profil ($id_user){
        $query  = "SELECT * FROM profil WHERE id_user='$id_user'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    }
    
     public function edit_foto ($id_user,$foto){
        $query  = "UPDATE profil SET foto='$foto' WHERE id_user='$id_user'";
        mysql_query ($query);
    }
    
    
    
    
     /*
     * ************************************
     * session login user
     * ************************************
    */
    
    public function cek_username($username) {
        $query = "SELECT * FROM users WHERE username='$username' AND blokir='N'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);
        
        return $hasil;
        
    }
    
     public function login($username,$password) {
        $query = "SELECT * FROM users WHERE username='$username' && password='$password' AND blokir='N'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
        
    }
    
  public function count_user($username,$password) {
        $query = "SELECT * FROM users WHERE username='$username' && password='$password' AND blokir='N'";
        $data    = mysql_query($query);
        $hasil   = mysql_num_rows($data);

        return $hasil;
        
    }
    
    public function detail_user($id_user) {
        $query = "SELECT * FROM users WHERE id_user='$id_user'";
        $data    = mysql_query($query);
        $hasil   = mysql_fetch_array($data);

        return $hasil;
        
    }
    
  public function regenerate_session($id_session,$id_user,$datetime){
      $query  = "UPDATE users SET id_session='$id_session', last_login='$datetime'
        WHERE " ."id_user='$id_user'";
        mysql_query ($query);
  }

    
    public function getone_user ($id_user){
        $query  = "SELECT * FROM users WHERE id_user='$id_user'";
        $data   = mysql_query($query);
        $hasil  = mysql_fetch_array($data);

        return $hasil;
    } 
   

    public function ganti_password ($id_user,$password,$locktype){
        $query  = "UPDATE users SET password='$password', locktype='$locktype'
        WHERE " ."id_user='$id_user'";
        mysql_query ($query);
    }
    
   
    
    /*
     * ************************************
     * log aktifitas
     * ************************************
    */
    
    
    public function log_aktifitas ($id_user,$aktifitas,$tanggal,$waktu){
        $query = "INSERT INTO log_aktifitas VALUES ('','$id_user','$aktifitas','$tanggal','$waktu')";
        mysql_query($query);
        
    }
    
    public function log_today ($id_user,$date){
        $query   = "SELECT * FROM log_aktifitas WHERE id_user='$id_user' AND tanggal='$date' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    
     public function log_yesterday ($id_user,$yesterday){
        $query   = "SELECT * FROM log_aktifitas WHERE id_user='$id_user' AND tanggal='$yesterday' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
     public function log_week ($id_user){
        $query   = "SELECT * FROM log_aktifitas WHERE YEARWEEK(tanggal)=YEARWEEK (NOW()) AND id_user='$id_user' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    public function log_month ($id_user){
        $query   = "SELECT * FROM log_aktifitas WHERE DATE_FORMAT(tanggal,'%Y %m')=DATE_FORMAT(NOW(),'%Y %m') AND id_user='$id_user' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    public function log_year ($id_user){
        $query   = "SELECT * FROM log_aktifitas WHERE YEAR(tanggal) = YEAR(now()) AND id_user='$id_user' ORDER BY id_log DESC";
        $data    = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil [] = $row;
        }

        return $hasil;
    }
    
    
    
} /*
 * ****************************************
 * akhiri fungsi (functions)
 * ****************************************
 */



?>
