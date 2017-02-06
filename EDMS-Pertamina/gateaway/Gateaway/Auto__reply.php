<?php
/*  
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 *
 */
error_reporting(E_NOTICE || E_WARNING);
require_once ('../System/class/Active_record_class.php');
require_once ('../System/function/Tanggal_function.php');

$conn_offline = mysql_connect("localhost","27nay","nay27");
$conn_online  = mysql_connect("127.0.0.1","root","");

mysql_select_db("apps_gateaway", $conn_offline);
mysql_select_db("apps_edms", $conn_online);

$ARSql   = New Active_record();
$app_setelan = $ARSql->getOne('apps_gateaway.pengaturan', 'ID', '1135');
if($app_setelan->auto_reply=='Yes') {
    // Menampilkan table STATUS di 'outbox'
    $query_Masuk         = $ARSql->query("SHOW TABLE STATUS LIKE 'outbox'");
    $data_Masuk          = $ARSql->mf_array($query_Masuk);
    // Field Auto_increment pada table status di outbox
    $newID               = $data_Masuk['Auto_increment'];
    $query = "SELECT * FROM apps_gateaway.inbox WHERE Processed='false'";
    $hasil = $ARSql->query($query);
    while ($data = $ARSql->mf_array($hasil)) {
        // membaca ID SMS
        $ID = $data['ID'];
        // membaca no pengirim
        $noPengirim = $data['SenderNumber'];
        // membaca pesan SMS dan mengubahnya menjadi kapital
        $msg = strtoupper($data['TextDecoded']);
        // Cek apakah member atau bukan
        $query      = $ARSql->query("SELECT * FROM apps_edms.member_sms WHERE no_telp='$noPengirim'");
        $dmember    = $ARSql->mf_object($query);
        $jml_member = $ARSql->numRows($query);
        // Jika status adalah member dan aktif
        if($jml_member > 0) {
            # Memastikan apakah status member sedang aktif
            if($dmember->aktif=='Y') {
                // Mengubah ke huruf kapital semua
                $msg    = strtoupper($data['TextDecoded']);
                // Memecah teks pesan sms
                $pecah  = explode(" ", $msg);
                // Cek kata pertama
                if ($pecah[0] == "INFO") {
                    // Cek kata kedua
                    /** $Kode_keyword   = $pecah[1];
                    $Get_kode_key   = explode("-", $Kode_key);
                    $Kode_keytable  = $Get_kode_key[1];
                    if ($Kode_keytable=='F') {
                        $Kata_kunci = "FURNACE";
                    } else if($Kode_keytable=='V') {
                        $Kata_kunci = "VESSEL";
                    } **/

                    if($pecah[1] == "FURNACE") {
                        if($pecah[2]!='') {
                            $KODE = $pecah[2];
                            $data_T = $ARSql->getOne('apps_edms.furnace', 'tag_no', $KODE);
                            $qjumlah = $ARSql->query("SELECT * FROM apps_edms.furnace WHERE tag_no='$KODE'");
                            $jumlah = $ARSql->numRows($qjumlah);
                            if($jumlah > 0) {
                                $reply  = "$data_T->tag_no\n"
                                       . "SN: $data_T->sn\n"
                                       . "Tube Size: $data_T->size\n"
                                       . "Thk.: $data_T->thickness\n"
                                       . "Material: $data_T->material\n"
                                       . "Service: $data_T->service\n"
                                       . "Press: $data_T->press\n"
                                       . "Temp: $data_T->temp\n"
                                       . "SKPP Exp.: ".tanggal($data_T->expired)."\n"
                                       . "Used: $data_T->digunakan";
                            } else {
                                $reply = "Mohon maaf, data tidak ditemukan dengan TagNumber ".$KODE."";
                            }
                        } else {
                            $reply = "Format tidak lengkap, silahkan masukan TagNumber dengan benar. ";
                        }
                    }
                    else if($pecah[1]=='AGENDA') {
                        $tgl_sekarang = date("Y-m-d");
                        $query_agenda = $ARSql->query("SELECT * FROM agenda WHERE tanggal='$tgl_sekarang' AND aktif='Y' ORDER BY id_agenda ASC LIMIT 1");
                        $count_agenda = $ARSql->numRows($query_agenda);
                        if($count_agenda > 0 ) {
                            $data_agenda  = $ARSql->mf_object($query_agenda);
                            $reply    = "Informasi agenda hari ini :\n"
                                        ."Topik: $data_agenda->topik.\n"
                                        ."Keterangan: ".html_entity_decode($data_agenda->keterangan)."\n";
                        } else {
                            $reply    = "Tidak ada data agenda untuk hari ini. Terima kasih";
                        }
                    } else {
                        $reply = "Maaf format atau keyword permintaan salah. Info lebih lanjut hubungi YANTO KARNOSAPUTRA Ext.6352.";
                    }
                } else {
                    $reply = "Maaf format atau keyword permintaan salah. Info lebih lanjut hubungi YANTO KARNOSAPUTRA Ext.6352.";
                }
            } else {
                    $reply = "Maaf, saat ini nomor anda sedang diblokir. Silahkan hubungi YANTO KARNOSAPUTRA Ext.6352";
            }
        } else {
            $reply  = "Mohon maaf, nomor anda saat ini belum terdaftar. Silahkan hubungi YANTO KARNOSAPUTRA Ext.6352.";
            #$reply  = "Mohon maaf, nomor anda saat ini belum terdaftar. Silahkan hubungi YANTO KARNOSAPUTRA Ext.6352. Atau anda bisa mendaftar via SMS ini, cukup dengan ketik DAFTAR#nama#jabatan#alamat#group. Terima kasih";
        }

        /* membuat SMS balasan otomatis
         * Kepada member yang meminta informasi
         */

        # Menghitung jumlah karakter balasan
        $panjang_Karakter   = strlen($reply);
        # Jika kurang dari atau sama dengan 160 karakter
        if($panjang_Karakter <= 160) {
            $data_send_sms = array(
                'DestinationNumber' => $noPengirim,
                'CreatorID'         => 'IBeESNay',
                'TextDecoded'       => $reply
            );
            # Insert outbox
            $ARSql->insert('apps_gateaway.outbox', $data_send_sms);
            /*
             * $data_update_hits = array('hits'=>'hits+1');
             *  $update_hits = $ARSql->update('member_sms', 'id_member', $dmember->id_member, $data_update_hits);
             */
            $ARSql->query("UPDATE apps_edms.member_sms SET hits=hits+1 WHERE id_member='$dmember->id_member' AND aktif='Y'");
            /*
             *  Mengubah value 'processed' menjadi 'true'
             *  untuk setiap SMS yang telah diproses
             */
            $data_update_sms = array(
                'Processed' => 'true'
            );
            // Update Inbox
            $ARSql->update('apps_gateaway.inbox', 'ID', $ID, $data_update_sms);
        }
        else {
            // Membagi pesan balasan menjadi beberapa bagian
            $jumlah_Potongan_SMS = ceil($panjang_Karakter/153);
            // memecah pesan balasan
            $potongan_SMS        = str_split($reply, 153);
            for ($i=1; $i<=$jumlah_Potongan_SMS; $i++) {
                // membuat UDH untuk setiap pecahan, sesuai urutannya
                $UDH    = "050003A7".sprintf("%02s", $jumlah_Potongan_SMS).sprintf("%02s", $i);
                // membaca text setiap pecahan
                $pesan  = $potongan_SMS[$i-1];
                if ($i == 1) {
                    // jika merupakan pecahan pertama, maka masukkan ke tabel OUTBOX
                    $Insert_pesan = "INSERT INTO apps_gateaway.outbox (DestinationNumber, UDH, TextDecoded, MultiPart, CreatorID, Coding)
                    VALUES ('$noPengirim', '$UDH', '$pesan', 'true', 'IBeESNay','Default_No_Compression')";
                } else {
                    // query untuk membaca SMS yang belum diproses
                    $query_ID_outbox = $ARSql->query("SELECT ID FROM apps_gateaway.outbox ORDER BY ID DESC LIMIT 1");
                    $data_ID_outbox  = $ARSql->mf_object($query_ID_outbox);
                    // jika bukan merupakan pecahan pertama, simpan ke tabel OUTBOX_MULTIPART
                    $Insert_pesan = "INSERT INTO apps_gateaway.outbox_multipart(UDH, TextDecoded, ID, SequencePosition)
                    VALUES ('$noPengirim', '$pesan','$data_ID_outbox->ID', '$i')";
                }

                # jalankan query
                $ARSql->query($Insert_pesan);
                /*
                 * $data_update_hits = array('hits'=>'hits+1');
                 *  $update_hits = $ARSql->update('member_sms', 'id_member', $dmember->id_member, $data_update_hits);
                 */
                $ARSql->query("UPDATE apps_edms.member_sms SET hits=hits+1 WHERE id_member='$dmember->id_member' AND aktif='Y'");
                /*
                 *  Mengubah value 'processed' menjadi 'true'
                 *  untuk setiap SMS yang telah diproses
                 */
                $data_update_sms = array(
                    'Processed' => 'true'
                );
                // Update Inbox
                $ARSql->update('apps_gateaway.inbox', 'ID', $ID, $data_update_sms);
            }
        }
    }
}

if($app_setelan->auto_reply=='Yes') {
    echo "<h4><i class='icon-reply'></i> Status auto reply  : <span class='badge badge-info'>
          Service is started . . . </span>  ";
    echo "<a title=\"Click to stop service\" class='tip badge badge-important' data-original-title='Click to start service' data-placement='bottom'
          href='update.php5?status=stop'><i class='icon-off'></i></a></h4>";
} else {
    echo "<h4><i class='icon-reply'></i> Status auto reply  : <span class='badge badge-important'>Service is stoped . . . </span>  ";
    echo "<a title=\"Click to start service\" data-original-title='Click to stop service' data-placement='left' href='update.php5?status=start' class='tip badge badge-info'>
          <i class='icon-play'></i></a></h4>";
}
