<?php 
/* 
 * Informasi tentang file dan lisensi pembuatan :
 * Filename   : terbilang.php
 * Creator    : IBeESNay 
 * Created on : 01 Feb 15, 6:55:35
 * Author     : Admin                                  
 * © Copyright and Powered by IBeESNay.
 */

function Terbilang($nilai) { 
    /** Membuat array untuk nama bilangan */
    $nama_bilangan = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"); 
    if ($nilai < 12) {
       /** Jika nilai yang dimasukan kurang dari 12
       /** Tampilkan nama bilangan dari array  */
       $huruf = " " . $nama_bilangan[$nilai]; 
    }
    elseif ($nilai < 20) { 
       /** Jika nilai yang dimasukan kurang dari 20
       /** Angka di kurangi 10 untuk mendapatkan angka inisial belasan */
       $huruf = Terbilang($nilai - 10) . "belas"; 
    }
    elseif ($nilai < 100) {
        /** Jika nilai yang dimasukan kurang dari 100
        /** Nilai dibagi dengan 10 untuk mendapatkan angka didepan
        /** Kemudian hasil sisa bagi dengan 10 untuk mendapatkan angka belakangnya */
        $huruf = Terbilang($nilai / 10) . " puluh" . Terbilang($nilai % 10); 
    }
    elseif ($nilai == 100) {
        /** Jika nilai yang dimasukan sama dengan 100
        /** Tampilkan nama bilangan seratus */
        $huruf = " seratus" . Terbilang($nilai - 100);
    }
    
    /** Return nilai menjadi huruf */
    return $huruf;
} 