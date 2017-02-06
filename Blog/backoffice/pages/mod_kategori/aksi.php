<?php

/*
 * *****************************************************************************
 * Filename  : aksi.php
 * Creator   : Agis Rahma Herdiana
 * © Copyright 2016                         
 * *****************************************************************************
 */

$save = $_POST['save'];
$edit = $_POST['edit'];

$nama_kategori = $_POST['nama_kategori'];
$kategori_seo = seo_title($nama_kategori);
$aktif = $_POST['aktif'];
$id_kategori = $_POST['id'];

if (isset($save)) {
    $query->tambah_kategori($nama_kategori, $kategori_seo, $aktif);
     // Log Aktifitas
    $query->log($_SESSION[id_user],'Menambah data kategori artikel',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='admin.php?page=kategori';</script>";
} else if (isset($edit)) {
    $query->edit_kategori($id_kategori, $nama_kategori, $kategori_seo, $aktif);
     // Log Aktifitas
     $query->log($_SESSION[id_user],'Mengubah data kategori artikel',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='admin.php?page=kategori';</script>";
}

