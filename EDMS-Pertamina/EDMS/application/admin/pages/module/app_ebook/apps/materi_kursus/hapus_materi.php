<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$id_kurs = $_GET['id_kurs'];
$data  = $ARSql->getOne('kursus','id_kurs',$id_kurs);
if($data->filename!='') {
    unlink("uploaded/materi_kursus/$data->filename");
    $delete = $ARSql->delOne('kursus','id_kurs',$id_kurs);
} else {
    $delete = $ARSql->delOne('kursus','id_kurs',$id_kurs);
}
header('location: admin.php?mod_apps=e-book&media_app=materi_kursus');

