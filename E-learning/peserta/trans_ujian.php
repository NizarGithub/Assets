<?php
session_start();
//error_reporting(0);
if (empty($_SESSION['id_siswa']) AND empty($_SESSION['akses'])){
    header('location: login.php?error=no_akses');
}
else{
    include "../config.php";
    $dbnew = new Connection();
    $soal = mysql_query("SELECT * FROM quiz_pilganda where id_tq='$_POST[id_topik]'");
    $pilganda = mysql_num_rows($soal);
    $soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$_POST[id_topik]'");
    $esay = mysql_num_rows($soal_esay);
    //jika ada pilihan ganda dan ada esay
    if (!empty($pilganda) AND !empty($esay)){
        //jika ada inputan soal pilganda
        if(!empty($_POST['jawaban_pilganda'])){
            $benar = 0;
            $salah = 0;
            foreach($_POST['jawaban_pilganda'] as $key => $value){
                $qjawaban = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_jawaban='$value'");
                $djawaban = mysql_fetch_object($qjawaban);
                if($djawaban->status=='B'){
                    $benar++;
                }
                else {
                    $salah++;
                }
            }

            $jumlah = $_POST['jumlah_pilganda'];
            $tidakjawab = $jumlah - $benar - $salah;
            $persen = $benar / $jumlah;
            $hasil = $persen * 100;

            mysql_query("INSERT INTO nilai (id_tq, id_siswa, benar, salah, tidak_dikerjakan,persentase)
            VALUES ('$_POST[id_topik]','$_SESSION[id_siswa]','$benar','$salah','$tidakjawab','$hasil')");

            header('location:../murid.php?app=selesai');
        }

        //jika ada inputan soal esay
        if(!empty($_POST['soal_esay'])){
            foreach($_POST['soal_esay'] as $key2 => $value){
            $jawaban = $value;
            $cek = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz='$key2'");
            while($data = mysql_fetch_array($cek)){
                mysql_query("INSERT INTO jawaban(id_tq,id_quiz,id_siswa,jawaban)
                                         VALUES('$_POST[id_topik]','$data[id_quiz]','$_SESSION[id_siswa]','$jawaban')");

            }

            }

        }
    }

    if (empty($pilganda) AND !empty($esay)){
        //jika ada inputan soal esay
        /*if(!empty($_POST['soal_esay'])){*/
            foreach($_POST['soal_esay'] as $key2 => $value){
                $jawaban = $value;
                $cek = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz='$key2'");
                while($data = mysql_fetch_array($cek)){
                    mysql_query("INSERT INTO jawaban(id_tq,id_quiz,id_siswa,jawaban)
                                             VALUES('$_POST[id_topik]','$data[id_quiz]','$_SESSION[id_siswa]','$jawaban')");

                }
            }

        //}
    header('location:../murid.php?app=selesai');
    }

    //jika soal hanya pilihan ganda
if (!empty($pilganda) AND empty($esay)){
            //jika ada inputan soal pilganda
            if(!empty($_POST['jawaban_pilganda'])){
            $benar = 0;
            $salah = 0;
            foreach($_POST['jawaban_pilganda'] as $key => $value){
                $qjawaban = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_jawaban='$value'");
                $djawaban = mysql_fetch_object($qjawaban);
                if($djawaban->status=='B'){
                    $benar++;
                }
                else {
                    $salah++;
                }
            }

            $jumlah = $_POST['jumlah_pilganda'];
            $tidakjawab = $jumlah - $benar - $salah;
            $persen = $benar / $jumlah;
            $hasil = $persen * 100;

            mysql_query("INSERT INTO nilai (id_tq, id_siswa, benar, salah, tidak_dikerjakan,persentase)
            VALUES ('$_POST[id_topik]','$_SESSION[id_siswa]','$benar','$salah','$tidakjawab','$hasil')");

            header('location:../murid.php?app=selesai');
        }
        header('location:../murid.php?app=selesai');
    }
}
?>
