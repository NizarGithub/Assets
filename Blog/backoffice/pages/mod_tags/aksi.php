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

$nama_tag = $_POST['nama_tag'];
$tag_seo = seo_title($nama_tag);
$id_tag = $_POST['id'];

if (isset($save)) {
    $query->tambah_tag($nama_tag, $tag_seo);
     // Log Aktifitas
     $query->log($_SESSION[id_user],'Menambah daftar tag artikel',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='admin.php?page=tags';</script>";
} else if (isset($edit)) {
    $query->edit_tag($id_tag, $nama_tag, $tag_seo);
     // Log Aktifitas
     $query->log($_SESSION[id_user],'Mengubah suatu tag artikel',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='admin.php?page=tags';</script>";
}

