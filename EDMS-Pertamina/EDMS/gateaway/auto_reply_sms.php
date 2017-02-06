<?php
/*  
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
require_once ('../config.php');
require_once ('../system/class/Active_record_class.php');
$conn_db = New ConnectDB();
$ARSql   = New Active_record();
// query untuk membaca SMS yang belum diproses 
$query = "SELECT * FROM inbox WHERE Processed='false'"; 
$hasil = $ARSql->query($query); 
while ($data = $ARSql->mf_array($hasil)) {
    // membaca ID SMS 
    $ID = $data['ID'];
    // membaca no pengirim 
    $noPengirim = $data['SenderNumber'];
    // membaca pesan SMS dan mengubahnya menjadi kapital 
    $msg = strtoupper($data['TextDecoded']);   
    // Cek apakah member atau bukan
    $query      = $ARSql->query("SELECT * FROM member_sms WHERE no_telp='$noPengirim'");
    $dmember    = $ARSql->mf_object($query);
    $jml_member = $ARSql->numRows($query);
    // Jika status adalah member dan aktif
    if($jml_member > 0) {
        # Memastikan apakah status member sedang aktif
        if($dmember->aktif=='Y') {
            // Mengubah ke huruf kapital semua
            $msg = strtoupper($data['TextDecoded']);
            // Memecah teks pesan sms
            $pecah = explode(" ", $msg);   
            // Cek kata pertama
            if ($pecah[0] == "INFO") { 
                // Cek kata kedua
                if($pecah[1] == "PB") {
                    $KODE = $pecah[2];
                    $data_pb = $ARSql->getOne('pink_book', 'id_pb', $KODE);
                    $reply    = "Judul : $data_pb->judul";
                }
                else {
                    $reply = "Maaf format atau keyword permintaan salah.";
                }
                // Cek kata kedua
                if($pecah[1] == "TANKI") {
                    if($pecah[2]!='') {
                        $KODE = $pecah[2];
                        $data_T = $ARSql->getOne('tanki', 'tag_no', $KODE);
                        $qjumlah = $ARSql->getAll('tanki');
                        $jumlah = $ARSql->numRows($qjumlah);
                        if($jumlah > 0) {
                            $reply  = "TD $data_T->test_daten"
                                   . "Type $data_T->typen"
                                   . "Dia $data_T->diametern"
                                   . "High $data_T->tinggin"
                                   . "Cap $data_T->kapasitasn"
                                   . "IK $data_T->ijin_kalibrasin"
                                   . "KH $data_T->kalibrasi_habisn"
                                   . "Dibuat $data_T->dibuatn"
                                   . "PK $data_T->penggunaan_kaln"
                                   . "PH $data_T->penggunaan_habisn"
                                   . "IS $data_T->ijin_skkpn"
                                   . "HS $data_T->skkp_habisn"
                                   . "User $data_T->user";
                        } else {
                            $reply = "Mohon maaf, data tidak ditemukan. ";
                        }
                    } else {
                        $reply = "Format tidak lengkap, silahkan masukan TagNumber. ";
                    }
                } else {
                    $reply = "Maaf format atau keyword permintaan salah.";
                }
            } else {
                $reply = "Maaf format atau keyword permintaan salah.";
            }
        } else {
                $reply = "Saat ini nomor anda sedang diblokir.";
        }
    } else {
        $reply  = "Mohon maaf, nomor anda saat ini belum terdaftar sebagai anggota.
      			   Silahkan Ketik INFO<spasi>DAFTAR";
    }
    
    /* membuat SMS balasan otomatis 
     * Kepada member yang meminta informasi
     */ 
    $data_send_sms = array(
        'DestinationNumber' => $noPengirim,
        'TextDecoded'       => $reply
    );
    // Insert outbox
    $send_sms = $ARSql->insert('outbox', $data_send_sms);
    /* 
     * $data_update_hits = array('hits'=>'hits+1');
     *  $update_hits = $ARSql->update('member_sms', 'id_member', $dmember->id_member, $data_update_hits); 
     */
    $update = $ARSql->query("UPDATE member_sms SET hits=hits+1 WHERE 
  							 id_member='$dmember->id_member' AND aktif='Y'");
    /*
     *  Mengubah value 'processed' menjadi 'true' 
     *  untuk setiap SMS yang telah diproses
     */
    $data_update_sms = array(
        'Processed' => 'true'
    );
    // Update Inbox
    $update_sms = $ARSql->update('inbox', 'ID', $ID, $data_update_sms);
} 