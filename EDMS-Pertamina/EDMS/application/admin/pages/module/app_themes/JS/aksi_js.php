<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
if(isset($_POST['submit_edit'])){
    $file = validasi($_POST['filename'],'xss');
    $filename = APP_JS.$file;
    if (file_exists("$filename")){
        $data = $_POST['konten_teks'];
        $data = str_replace("teksarea", "textarea", $data);
        $newdata = stripslashes($data);
        if ($newdata != ''){
            $fw = fopen($filename, 'w') or die('Could not open file!');
            $fb = fwrite($fw,$newdata) or die('Could not write to file');
            fclose($fw);
        }
        header('location: admin.php?mod_apps=themes&media_app=JS&file='.$file);
    }
    else {
        echo "<center><h2>File tidak ditemukan</h2></center>";
    }
}
else if(isset($_POST['submit_edit_bs'])){
    $file = validasi($_POST['filename'],'xss');
    $filename = APP_JS.'bootstrap/'.$file;
    if (file_exists("$filename")){
        $data = $_POST['konten_teks'];
        $newdata = stripslashes($data);
        if ($newdata != ''){
            $fw = fopen($filename, 'w') or die('Could not open file!');
            $fb = fwrite($fw,$newdata) or die('Could not write to file');
            fclose($fw);
        }
        header('location: admin.php?mod_apps=themes&media_app=JS&sub_dir=BS&file='.$file);
    }
    else {
        echo "<center><h2>File tidak ditemukan</h2></center>";
    }
}
