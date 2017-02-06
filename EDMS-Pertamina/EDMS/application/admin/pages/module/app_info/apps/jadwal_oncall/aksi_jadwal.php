<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$submit_add     = $_POST['submit_add'];
$submit_edit    = $_POST['submit_edit'];
if(isset($submit_add)) {
    $tanggal   = validasi($_POST['tanggal'], 'xss');
    # 1996-09-13
    $tgl        = substr($tanggal, 8, 2);
    $bln        = substr($tanggal, 5, 2);
    $tahun      = substr($tanggal, 0, 4);
    $id_petugas = validasi($_POST['id_petugas'], 'sql');
    $keterangan = validasi($_POST['ket'], 'xss');
    $data    = array(
        'id_petugas' => $id_petugas,
        'tgl' => $tgl,
        'bulan' => $bln,
        'tahun' => $tahun,
        'tanggal' => $tanggal,
        'keterangan' => $keterangan
    );
    $insert = $ARSql->insert('jadwal_oncall', $data);
    header('location: admin.php?mod_apps=info&media_app=jadwal_oncall');
}
else if(isset($submit_edit)) {
    $id_jadwal  = validasi($_POST['id_jadwal'], 'xss');
    $tanggal    = validasi($_POST['tanggal'], 'xss');
    # 1996-09-13
    $tgl        = substr($tanggal, 8, 2);
    $bln        = substr($tanggal, 5, 2);
    $tahun      = substr($tanggal, 0, 4);
    $id_petugas = validasi($_POST['id_petugas'], 'sql');
    $keterangan = validasi($_POST['ket'], 'xss');
    $data    = array(
        'id_petugas' => $id_petugas,
        'tgl' => $tgl,
        'bulan' => $bln,
        'tahun' => $tahun,
        'tanggal' => $tanggal,
        'keterangan' => $keterangan
    );
    $update = $ARSql->update('jadwal_oncall', 'id_jadwal',$id_jadwal, $data);
    header('location: admin.php?mod_apps=info&media_app=jadwal_oncall');
}

