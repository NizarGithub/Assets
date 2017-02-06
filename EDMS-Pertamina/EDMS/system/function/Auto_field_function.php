<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
function auto_field($tabel, $kolom, $lebar=0, $awalan='') {
    $hasil          = mysql_query($query);
    $jumlahrecord   = mysql_num_rows($hasil);
    if($jumlahrecord == 0) {
        $nomor = 1;
    }
    else {
        $row    = mysql_fetch_array($hasil);
        $nomor  = intval(substr($row[0],strlen($awalan)))+1;
    }
    if($lebar>0) {
        $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
    }
    else {
        $angka = $awalan.$nomor;
    }

    return  $angka;
}