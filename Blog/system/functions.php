<?php

/*
 * *****************************************************************************
 * Filename  : functions.php
 * Creator   : Agis Rahma Herdiana
 * © Copyright 2016                         
 * *****************************************************************************
 */

date_default_timezone_set('Asia/jakarta');
error_reporting(0);                     //Menghilangkan laporan error
require_once ("dbcontroller.php");      // fungsi koneksi database
require_once ("datetime.php");          // fungsi tanggal dan waktu
require_once ("time.php");              // fungsi time
require_once ("library.php");           // fungsi library
require_once ("pageNavi.php");          // fungsi pageNavi

class Functions {
    /*
     * 1.  Fungsi manajemen loged in
     * 2.  Fungsi manajemen tabel kategori
     * 3.  Fungsi manajemen tabel tags
     * 4.  Fungsi manajemen tabel artikel
     * 5.  Fungsi manajemen tabel module
     * 6.  Fungsi manajemen tabel sensor kata
     * 7.  Fungsi manajemen tabel halaman statis
     * 8.  Fungsi manajemen tabel templates
     * 9.  Fungsi manajemen tabel mainmenu
     * 10. Fungsi manajemen tabel submenu
     * 11. Fungsi manajemen tabel advertisement 
     * 12. Fungsi manajemen tabel partners
     * 13. Fungsi manajemen tabel setting
     * 14. Fungsi manajemen tabel blog
     * 15. Fungsi manajemen tabel komentar
     * 16. Fungsi manajemen tabel event
     * 17. Fungsi manajemen tabel users
     * 18. Fungsi manajemen tabel log aktifitas
     */

    /* -------------------------------------------------------------------------------------- */


    /*
     * Fungsi loged in
     */

    public function cek_username($username) {
        $query = "SELECT * FROM user WHERE username='$username' AND blokir='N'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function get_user($id) {
        $query = "SELECT * FROM user WHERE id_user='$id'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function login($username, $password) {
        $query = "SELECT * FROM user WHERE username='$username' && password='$password' AND blokir='N'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function count_user($username, $password) {
        $query = "SELECT * FROM user WHERE username='$username' && password='$password' AND blokir='N'";
        $data = mysql_query($query);
        $hasil = mysql_num_rows($data);

        return $hasil;
    }

    public function regenerate_session($id_session, $id_user, $datetime) {
        $query = "UPDATE user SET id_session='$id_session', last_login='$datetime'
        WHERE " . "id_user='$id_user'";
        mysql_query($query);
    }

    public function ganti_password($id_user, $password, $locktype) {
        $query = "UPDATE user SET password='$password', locktype='$locktype'
        WHERE " . "id_user='$id_user'";
        mysql_query($query);
    }

    /*
     * Fungsi manajemen tabel kategori
     */

    public function view_kategori() {
        $query = "SELECT * FROM kategori ORDER BY nama_kategori ASC";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }

    public function kategori_aktif() {
        $query = "SELECT * FROM kategori WHERE aktif='Y' ORDER BY nama_kategori ASC";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }

    public function jumlah_kategori() {
        $query = "SELECT * FROM kategori";
        $data = mysql_query($query);
        $hasil = mysql_num_rows($data);

        return $hasil;
    }

    public function tambah_kategori($nama_kategori, $kategori_seo, $aktif) {
        $query = "INSERT INTO kategori VALUES ('','$nama_kategori', '$kategori_seo','$aktif')";
        mysql_query($query);
    }

    public function edit_kategori($id_kategori, $nama_kategori, $kategori_seo, $aktif) {
        $query = "UPDATE kategori SET nama_kategori =  '$nama_kategori', kategori_seo =  '$kategori_seo', aktif =  '$aktif' WHERE id_kategori =  '$id_kategori'";
        mysql_query($query);
    }

    public function get_kategori($id_kategori) {
        $query = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function hapus_kategori($id_kategori) {
        $query = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
        mysql_query($query);
    }

    /*
     * Fungsi manajemen tabel tags
     */

    public function view_tag() {
        $query = "SELECT * FROM tags ORDER BY nama_tag ASC";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }

    public function jumlah_tag() {
        $query = "SELECT * FROM tags";
        $data = mysql_query($query);
        $hasil = mysql_num_rows($data);

        return $hasil;
    }

    public function tambah_tag($nama_tag, $tag_seo) {
        $query = "INSERT INTO tags VALUES ('','$nama_tag', '$tag_seo','')";
        mysql_query($query);
    }

    public function edit_tag($id_tag, $nama_tag, $tag_seo) {
        $query = "UPDATE tags SET nama_tag =  '$nama_tag', tag_seo =  '$tag_seo' WHERE id_tag =  '$id_tag'";
        mysql_query($query);
    }

    public function get_tag($id_tag) {
        $query = "SELECT * FROM tags WHERE id_tag='$id_tag'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function hapus_tag($id_tag) {
        $query = "DELETE FROM tags WHERE id_tag='$id_tag'";
        mysql_query($query);
    }

    /*
     * Fungsi manajemen tabel artikel
     */

    public function tambah_artikel($id_kategori, $id_user, $judul, $judul_seo, $headline, $isi_artikel, $hari, $tanggal, $jam, $gambar, $tags, $publish, $sumber) {
        $query = "INSERT INTO artikel VALUES ('',  '$id_kategori',  '$id_user',  '$judul',  '$judul_seo',  '$headline',  '$isi_artikel',  '$hari',  '$tanggal',  '$jam',  '$gambar',  '',  '$tags',  '$publish', '$sumber')";
        mysql_query($query);
    }

    public function view_artikel() {
        $query = "SELECT k.*, a.* FROM kategori as k, artikel as a WHERE "
                . "a.id_kategori=k.id_kategori ORDER BY a.id_artikel DESC";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }

    public function view_artikel_user($id_user) {
        $query = "SELECT k.*, a.* FROM kategori as k, artikel as a WHERE "
                . "a.id_kategori=k.id_kategori AND a.id_user='$id_user' ORDER BY a.id_artikel DESC";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }


    public function edit_artikel($id_artikel, $id_kategori, $judul, $judul_seo, $headline, $isi_artikel, $gambar, $tags, $publish, $sumber) {
        $query = "UPDATE artikel SET id_kategori='$id_kategori', judul='$judul', judul_seo='$judul_seo', headline='$headline', isi_artikel='$isi_artikel', gambar='$gambar', tags='$tags', publish='$publish', sumber='$sumber' WHERE id_artikel='$id_artikel'";
        mysql_query($query);
    }

    public function edit_artikel2($id_artikel, $id_kategori, $judul, $judul_seo, $headline, $isi_artikel, $tags, $publish, $sumber) {
        $query = "UPDATE artikel SET id_kategori='$id_kategori', judul='$judul', judul_seo='$judul_seo', headline='$headline', isi_artikel='$isi_artikel', tags='$tags', publish='$publish', sumber='$sumber' WHERE id_artikel='$id_artikel'";
        mysql_query($query);
    }

    public function get_artikel($id_artikel) {
        $query = "SELECT * FROM artikel WHERE id_artikel='$id_artikel'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function hapus_artikel($id_artikel) {
        $query = "DELETE FROM artikel WHERE id_artikel='$id_artikel'";
        mysql_query($query);
    }

    /*
     * Fungsi manajemen tabel module
     */

    public function parent_module() {
        $query = "SELECT * FROM module WHERE parent_id='0' ORDER BY ordering ASC";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }

    public function module() {
        $query = "SELECT * FROM module WHERE parent_id!='0'";
        $data = mysql_query($query);
        while ($row = mysql_fetch_array($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }

    public function tambah_module($parent_id, $nama_module, $icon, $path, $url, $ordering) {
        $query = "INSERT INTO module VALUES ('','$parent_id','$nama_module','$icon','$path','$url','$ordering','','','','')";
        mysql_query($query);
    }

    public function edit_module($id_module, $parent_id, $nama_module, $icon, $path, $url, $ordering) {
        $query = "UPDATE module SET parent_id='$parent_id', nama_module='$nama_module', icon='$icon', dir='$path', url='$url', ordering='$ordering' WHERE id_module='$id_module'";
        mysql_query($query);
    }

    public function edit_parent($id_module, $nama_module, $icon) {
        $query = "UPDATE module SET nama_module='$nama_module', icon='$icon' WHERE id_module='$id_module'";
        mysql_query($query);
    }

    public function get_module($id_module) {
        $query = "SELECT * FROM module WHERE id_module='$id_module'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function hapus_module($id_module) {
        $query = "DELETE FROM module WHERE id_module='$id_module'";
        mysql_query($query);
    }

    public function active_role($id_module, $tambah, $baca, $edit, $hapus) {
        $query = "UPDATE module SET tambah='$tambah', baca='$baca', edit='$edit', hapus='$hapus' WHERE id_module='$id_module'";
        mysql_query($query);
    }

    public function nonactive_role($id){
        $query = "UPDATE module SET tambah='N', baca='N', edit='N', hapus='N' WHERE parent_id='$id'";
        mysql_query($query);
    }

    public function get_role($nama_module) {
        $query = "SELECT * FROM module WHERE url='$nama_module'";
        $data = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }


    /*
     * Fungsi manajemen tabel sensor kata
     */

    public function view_sensor(){
        $query = "SELECT * FROM sensorkata ORDER BY kata ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_sensor($id_kata){
        $query = "DELETE FROM sensorkata WHERE id_kata='$id_kata'";
        mysql_query($query);
    }

    public function edit_sensor($id_kata,$kata,$ganti){
        $query = "UPDATE sensorkata SET kata='$kata', ganti='$ganti' WHERE id_kata='$id_kata'";
        mysql_query($query);
    }

    public function get_sensor($id_kata){
        $query = "SELECT * FROM sensorkata WHERE id_kata='$id_kata'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_sensor($kata,$ganti){
        $query = "INSERT INTO sensorkata VALUES ('','$kata','$ganti')";
        mysql_query($query);
    }

     /*
     * Fungsi manajemen tabel halaman statis
     */

    public function view_halamanstatis(){
        $query = "SELECT * FROM halamanstatis ORDER BY tgl_posting ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_halamanstatis($id_halaman){
        $query = "DELETE FROM halamanstatis WHERE id_halaman='$id_halaman'";
        mysql_query($query);
    }

    public function edit_halamanstatis($id_halaman,$judul,$isi,$gambar){
        $query ="UPDATE halamanstatis SET judul='$judul', isi_halaman='$isi', gambar='$gambar' WHERE id_halaman='$id_halaman'";
        mysql_query($query);
    }

    public function edit_halamanstatis2($id_halaman,$judul,$isi){
        $query = "UPDATE halamanstatis SET judul='$judul', isi_halaman='$isi' WHERE id_halaman='$id_halaman'";
        mysql_query($query);
    }

    public function get_halamanstatis($id_halaman){
        $query = "SELECT * FROM halamanstatis WHERE id_halaman='$id_halaman'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_halamanstatis($judul,$isi,$tgl,$gambar){
        $query = "INSERT INTO halamanstatis VALUES ('','$judul','$isi','$tgl','$gambar')";
        mysql_query($query);
    }


     /*
     * Fungsi manajemen tabel templates
     */

    public function view_templates(){
        $query = "SELECT * FROM templates ORDER BY judul ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function active_templates($id_templates){
        $query = "UPDATE templates SET aktif='Y' WHERE id_templates='$id_templates'";
        mysql_query($query);
    }

    public function nonactive_templates(){
        $query = "UPDATE templates SET aktif='N' WHERE aktif='Y'";
        mysql_query($query);
    }

    public function edit_templates($id_templates,$judul,$pembuat,$path){
        $query = "UPDATE templates SET judul='$judul', pembuat='$pembuat', folder='$path' WHERE id_templates='$id_templates'";
        mysql_query($query);
    }

    public function get_templates($id_templates){
        $query = "SELECT * FROM templates WHERE id_templates='$id_templates'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function templates(){
        $query = "SELECT * FROM templates WHERE aktif='Y'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_templates($judul,$pembuat,$path){
        $query = "INSERT INTO templates VALUES ('','$judul','$pembuat','$path','N')";
        mysql_query($query);
    }


    /*
     * Fungsi manajemen tabel mainmenu
     */

    public function view_mainmenu(){
        $query = "SELECT * FROM mainmenu ORDER BY id_main ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_mainmenu($id_main){
        $query = "DELETE FROM mainmenu WHERE id_main='$id_main'";
        mysql_query($query);
    }

    public function edit_mainmenu($id_main,$nama_main,$link,$aktif){
        $query = "UPDATE mainmenu SET nama_main='$nama_main', link='$link', aktif='$aktif' WHERE id_main='$id_main'";
        mysql_query($query);
    }

    public function get_mainmenu($id_main){
        $query = "SELECT * FROM mainmenu WHERE id_main='$id_main'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_mainmenu($nama_main,$link){
        $query = "INSERT INTO mainmenu VALUES ('','$nama_main','$link','Y')";
        mysql_query($query);
    }

    public function mainmenu_aktif(){
        $query = "SELECT * FROM mainmenu WHERE aktif='Y' ORDER BY nama_main ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_sub($id_main){
        $query = "DELETE FROM submenu WHERE id_main='$id_main'";
        mysql_query($query);
    }



    /*
     * Fungsi manajemen tabel submenu
     */

    public function view_submenu(){
        $query = "SELECT s.*, m.* FROM submenu as s, mainmenu as m WHERE m.id_main=s.id_main ORDER BY nama_sub ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_submenu($id_sub){
        $query = "DELETE FROM submenu WHERE id_sub='$id_sub'";
        mysql_query($query);
    }

    public function edit_submenu($id_sub,$nama_sub,$link,$main,$aktif){
        $query = "UPDATE submenu SET nama_sub='$nama_sub', link_sub='$link', id_main='$main', sub_aktif='$aktif' WHERE id_sub='$id_sub'";
        mysql_query($query);
    }

    public function get_submenu($id_sub){
        $query = "SELECT * FROM submenu WHERE id_sub='$id_sub'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_submenu($nama_sub,$link,$main){
        $query = "INSERT INTO submenu VALUES ('','$nama_sub','$link','$main','Y')";
        mysql_query($query);
    }

     /*
     * Fungsi manajemen tabel advertisement
     */

    public function view_advertisement(){
        $query = "SELECT * FROM advertisement ORDER BY tgl_posting ASC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function advertisement(){
        $query = "SELECT * FROM advertisement ORDER BY id_ads DESC LIMIT 1";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_advertisement($id_ads){
        $query = "DELETE FROM advertisement WHERE id_ads='$id_ads'";
        mysql_query($query);
    }

    public function edit_advertisement($id_ads,$judul,$url,$gambar){
        $query ="UPDATE advertisement SET judul='$judul', url='$url', gambar='$gambar' WHERE id_ads='$id_ads'";
        mysql_query($query);
    }

    public function edit_advertisement2($id_ads,$judul,$url){
        $query = "UPDATE advertisement SET judul='$judul', url='$url' WHERE id_ads='$id_ads'";
        mysql_query($query);
    }

    public function get_advertisement($id_ads){
        $query = "SELECT * FROM advertisement WHERE id_ads='$id_ads'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_advertisement($judul,$url,$gambar,$tgl){
        $query = "INSERT INTO advertisement VALUES ('','$judul','$url','$gambar','$tgl')";
        mysql_query($query);
    }


     /*
     * Fungsi manajemen tabel partners
     */

    public function view_partners(){
        $query = "SELECT * FROM partners ORDER BY id_partner DESC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function hapus_partners($id_partner){
        $query = "DELETE FROM partners WHERE id_partner='$id_partner'";
        mysql_query($query);
    }

    public function edit_partners($id_partner,$judul,$url,$gambar, $aktif){
        $query ="UPDATE partners SET judul='$judul', url='$url', gambar='$gambar', aktif='$aktif' WHERE id_partner='$id_partner'";
        mysql_query($query);
    }

    public function edit_partners2($id_partner,$judul,$url,$aktif){
        $query = "UPDATE partners SET judul='$judul', url='$url', aktif='$aktif' WHERE id_partner='$id_partner'";
        mysql_query($query);
    }

    public function get_partners($id_partner){
        $query = "SELECT * FROM partners WHERE id_partner='$id_partner'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    public function tambah_partners($judul,$url,$gambar,$tgl){
        $query = "INSERT INTO partners VALUES ('','$judul','$url','$gambar','$tgl','Y')";
        mysql_query($query);
    }



    /*
     * Fungsi manajemen tabel setting
     */

    public function get_setting(){
        $query = "SELECT * FROM setting WHERE id_setting='1'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);
        
        return $hasil;
    }

     public function setting($id, $nama, $judul, $email, $call, $deskripsi, $keyword, $domain, $logo, $paging){
        $query = "UPDATE setting SET nama_web='$nama', judul_web='$judul', email_web='$email', call_center='$call', meta_deskripsi='$deskripsi', meta_keyword='$keyword', domain='$domain', logo='$logo', paging_home='$paging' WHERE id_setting='$id'";
        mysql_query($query);
    }

    public function setting1($id, $nama, $judul, $email, $call, $deskripsi, $keyword, $domain, $paging){
        $query = "UPDATE setting SET nama_web='$nama', judul_web='$judul', email_web='$email', call_center='$call', meta_deskripsi='$deskripsi', meta_keyword='$keyword', domain='$domain', paging_home='$paging' WHERE id_setting='$id'";
        mysql_query($query);
    }


    /*
     * Fungsi query blog
     */


    // Artikel Terbaru
    public function all_hotnews($posisi,$batas){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' ORDER BY a.id_artikel DESC LIMIT $posisi,$batas";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    public function total_hotnews() {
        $query = "SELECT * FROM artikel ORDER BY id_artikel DESC";
        $data  = mysql_query($query);
        $hasil = mysql_num_rows($data);
        
        return $hasil;
    }
    public function main_hotnews(){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' ORDER BY a.id_artikel DESC LIMIT 0,1";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    public function sub_hotnews(){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' ORDER BY a.id_artikel DESC LIMIT 2 OFFSET 1";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    // Artikel Menarik
     public function main_interest(){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' ORDER BY a.id_artikel DESC LIMIT 1 OFFSET 3";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    public function sub_interest(){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' ORDER BY a.id_artikel DESC LIMIT 4 OFFSET 4";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    // Kategori Artikel
    public function news_category($category,$posisi,$batas){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' AND a.id_kategori='$category' ORDER BY a.id_artikel DESC LIMIT $posisi,$batas";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    public function total_news_category($id_category) {
        $query = "SELECT * FROM artikel WHERE id_kategori='$id_category'";
        $data  = mysql_query($query);
        $hasil = mysql_num_rows($data);
        
        return $hasil;
    }
    // Detail Artikel
    public function detail_artikel($id){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.id_artikel='$id'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);

        return $hasil;
    }

    // Artikel Populer
    public function artikel_hits(){
        $query = "SELECT a.*, k.* FROM artikel AS a, kategori AS k WHERE k.id_kategori=a.id_kategori ORDER BY a.dibaca DESC LIMIT 0,5";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
    }

    // Semua Populer
    public function all_hits($posisi,$batas){
        $query = "SELECT a.*, k.* FROM artikel AS a, kategori AS k WHERE k.id_kategori=a.id_kategori ORDER BY a.dibaca DESC LIMIT $posisi,$batas";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
    }

     public function total_hits() {
        $query = "SELECT * FROM artikel ORDER BY dibaca DESC";
        $data  = mysql_query($query);
        $hasil = mysql_num_rows($data);
        
        return $hasil;
    }

    // Tambah Hits
    public function hits($dibaca,$id_artikel){
        $query = "UPDATE artikel SET dibaca='$dibaca' WHERE id_artikel='$id_artikel'";
        mysql_query($query);
    }

    // Artikel Sub
     public function artikel_sub($category,$limit){
        $query = "SELECT a.*, u.*, k.* FROM artikel AS a, user AS u, kategori AS k WHERE u.id_user=a.id_user AND k.id_kategori=a.id_kategori AND a.publish='Y' AND a.id_kategori='$category' ORDER BY a.id_artikel DESC LIMIT $limit";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    // Jumlah Artikel
    public function jumlah_artikel() {
        $query = "SELECT * FROM artikel";
        $data  = mysql_query($query);
        $hasil = mysql_num_rows($data);
        
        return $hasil;
    }

    // Headline
    public function headline(){
        $query = "SELECT * FROM artikel WHERE publish='Y' AND headline='Y' AND gambar!='' ORDER BY id_artikel DESC LIMIT 10";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function total_user_artikel($user) {
        $query = "SELECT * FROM artikel WHERE id_user='$user'";
        $data  = mysql_query($query);
        $hasil = mysql_num_rows($data);
        
        return $hasil;
    }
     /*
     * Fungsi query komentar
     */
    public function komentar($id_artikel){
        $query ="SELECT * FROM komentar WHERE id_artikel='$id_artikel' AND aktif='Y'";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function jumlah_komentar($id_artikel) {
        $query = "SELECT * FROM komentar WHERE id_artikel='$id_artikel'";
        $data  = mysql_query($query);
        $hasil = mysql_num_rows($data);
        
        return $hasil;
    }

    public function tambah_komentar($id_artikel,$nama,$email,$konten,$tanggal,$jam){
        $query = "INSERT INTO komentar VALUES('','$id_artikel','$nama','$email','$konten','$tanggal','$jam','Y')";
        mysql_query($query);
    }

    /*
     * Fungsi manajemen tabel event
     */

    public function get_event(){
        $query = "SELECT * FROM event WHERE id_event='1'";
        $data  = mysql_query($query);
        $hasil = mysql_fetch_array($data);
        
        return $hasil;
    }

     public function event($id, $judul, $gambar){
        $query = "UPDATE event SET judul='$judul', gambar='$gambar' WHERE id_event='$id'";
        mysql_query($query);
    }

    public function event1($id, $judul){
         $query = "UPDATE event SET judul='$judul' WHERE id_event='$id'";
        mysql_query($query);
    }


    /*
     * Fungsi manajemen tabel users
     */
    public function view_user(){
       $query = "SELECT * FROM user ORDER BY nama_lengkap";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function tambah_user($nama,$username,$password,$jk,$email,$telepon,$foto){
        $query = "INSERT INTO user VALUES('','$username','$password','$nama','$jk','$email','$telepon','$foto','user','N','','0','')";
        mysql_query($query);
    }

    public function blokir($id){
        $query = "UPDATE user SET blokir='Y' WHERE id_user='$id'";
        mysql_query($query);
    }

    public function hapus_user($id){
        $query = "DELETE FROM user WHERE id_user='$id'";
        mysql_query($query);
    }

     public function unblokir($id){
        $query = "UPDATE user SET blokir='N' WHERE id_user='$id'";
        mysql_query($query);
    }

    public function edit_profile($id, $nama, $jk, $email, $phone, $image){
        $query = "UPDATE user SET nama_lengkap='$nama', jenis_kelamin='$jk', user_email='$email', user_phone='$phone', user_image='$image' WHERE id_user='$id'";
        mysql_query($query);
    }

    public function edit_profile1($id, $nama, $jk, $email, $phone){
        $query = "UPDATE user SET nama_lengkap='$nama', jenis_kelamin='$jk', user_email='$email', user_phone='$phone' WHERE id_user='$id'";
        mysql_query($query);
    }


    /*
     * Fungsi manajemen tabel log aktifitas
     */

    public function view_log($id_user){
       $query = "SELECT * FROM log_aktivitas WHERE id_user='$id_user' ORDER BY id_log DESC";
        $data  = mysql_query($query);
        while($row = mysql_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function log($id_user,$aktivitas,$tanggal,$jam){
        $query = "INSERT INTO log_aktivitas VALUES('','$id_user','$aktivitas','$tanggal','$jam')";
        mysql_query($query);
    }
}

/*
 * ****************************************
 * akhiri fungsi (functions)
 * ****************************************
 */




