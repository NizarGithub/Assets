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
    $topik      = validasi($_POST['topik'], 'xss');
    $tanggal    = validasi($_POST['tanggal'], 'xss');
    # 1996-09-13
    $tgl        = substr($tanggal, 8, 2);
    $bln        = substr($tanggal, 5, 2);
    $tahun      = substr($tanggal, 0, 4);
    $keterangan = validasi($_POST['ket'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $data    = array(
        'topik'     => $topik,
        'tgl'       => $tgl,
        'bln'       => $bln,
        'thn'       => $tahun,
        'tanggal'   => $tanggal,
        'keterangan'=> $keterangan,
        'aktif'     => $aktif
    );
    $insert = $ARSql->insert('agenda', $data);
    header('location: admin.php?mod_apps=info&media_app=agenda_rapat');
}
else if(isset($submit_edit)) {
    $id_agenda  = validasi($_POST['id_agenda'], 'xss');
    $topik      = validasi($_POST['topik'], 'xss');
    $tanggal    = validasi($_POST['tanggal'], 'xss');
    # 1996-09-13
    $tgl        = substr($tanggal, 8, 2);
    $bln        = substr($tanggal, 5, 2);
    $tahun      = substr($tanggal, 0, 4);
    $keterangan = validasi($_POST['ket'], 'xss');
    $aktif      = validasi($_POST['aktif'], 'xss');
    $data    = array(
        'topik' => $topik,
        'tgl' => $tgl,
        'bln' => $bln,
        'thn' => $tahun,
        'tanggal' => $tanggal,
        'keterangan' => $keterangan,
        'aktif'     => $aktif
    );
    $update = $ARSql->update('agenda', 'id_agenda',$id_agenda, $data);
    header('location: admin.php?mod_apps=info&media_app=agenda_rapat');
}

