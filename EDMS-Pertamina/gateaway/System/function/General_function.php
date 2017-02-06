<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
function validasi($str, $tipe){
    switch($tipe){
        default:
        case'sql':
            $d = array('-','/','\\',',','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','%','$','^','&','*','=','?','+');
            $str = str_replace($d, '', $str);
            $str = stripcslashes($str);	
            $str = htmlspecialchars($str);				
            $str = preg_replace('/[^A-Za-z0-9]/','',$str);				
            return intval($str);
        break;
        case'xss':
            $d = array ('\\','#',';','\'','"','[',']','{','}',')','(','|','`','~','!','%','$','^','*','=','?','+');
            $str = str_replace($d, '', $str);
            $str = stripcslashes($str);	
            $str = htmlspecialchars($str);
            return $str;
        break;
    }
}

//memanggil file JavaScript
function addJs($link) {	
    echo "<script type=\"text/javascript\" src=\"$link\"></script>";
}	

//memanggil file CSS
function addCss($link,$media = null) {
    if(empty($media)) $media = 'all';
    echo  "<link href=\"$link\" rel=\"stylesheet\" type=\"text/css\" media=\"$media\"/>\n";
}

//menghapus direktori dan semua isinya
function delete_directory($dirname) {
   if(is_dir($dirname))
      $dir_handle = opendir($dirname);
   if(!isset($dir_handle))
      return false;
   while($file = readdir($dir_handle)) {
      if ($file != "." && $file != "..") {
         if (!is_dir($dirname."/".$file))
            unlink($dirname."/".$file);
         else
            delete_directory($dirname.'/'.$file);       
      }
   }
   closedir($dir_handle);
   rmdir($dirname);
   return true;
}

//menghitung ukuran folder
function folder_size($path) {
    $total_size = 0;
    $files = scandir($path);
    $cleanPath = rtrim($path, '/'). '/';

    foreach($files as $t) {
        if ($t<>"." && $t<>"..") {
            $currentFile = $cleanPath . $t;
            if (is_dir($currentFile)) {
                $size = folder_size($currentFile);
                $total_size += $size;
            }
            else {
                $size = filesize($currentFile);
                $total_size += $size;
            }
        }   
    }

    return $total_size;
}

//format ukuran file
function format_size($size) {
	$units = explode(' ', 'B KB MB GB TB PB');
    $mod = 1024;
    for ($i = 0; $size > $mod; $i++) {
        $size /= $mod;
    }
    $endIndex = strpos($size, ".")+3;
    return substr( $size, 0, $endIndex).' '.$units[$i];
}

//format byte
function format_byte($from) {
    if(strpos($from,"M") AND !strpos($from,"MB"))
    $from = str_replace("M","MB",$from);
    if(strpos($from,"G") AND !strpos($from,"GB"))
    $from = str_replace("G","GB",$from);
    $number=substr($from,0,-2);
    switch(strtoupper(substr($from,-2))){
        case "KB":
            return $number*1024;
        case "MB":
            return $number*pow(1024,2);
        case "GB":
            return $number*pow(1024,3);
        case "TB":
            return $number*pow(1024,4);
        case "PB":
            return $number*pow(1024,5);
        default:
            return $from;
    }
}

//fungsi multiple select yang telah terpilih
function multipleSelected($x, $y) {
    $p = explode(",",$x);
    foreach($p as $page){
        if($y==$page)
        return 'selected';	
    }
}

//fungsi multiple select yang baru akan dipilih
function multipleSelect($x) {
    if($x) {
        $no = 1; $text = null;
        foreach ($x as $t){
            if($no==1)
                    $t = "$t";
            else
                    $t = ",$t";
            $text .= $t;
            $no++;
        }
        return $text;
    }
}

function seo_title($s){
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
    $s = str_replace($d, '', $s);
    $s = strtolower(str_replace($c, '-', $s));
    return $s;
}

function UploadImage($fupload_tmp,$fupload_name, $direktori){
    $vdir_upload = $direktori;
    $vfile_upload = $vdir_upload . $fupload_name;

    move_uploaded_file($fupload_tmp, $vfile_upload);
    if($_FILES['fupload']['type']=='image/jpeg' || $_FILES['fupload']['type']=='image/jpg') {
        $im_src = imagecreatefromjpeg($vfile_upload);
    } else if($_FILES['fupload']['type']=='image/png') {
        $im_src = imagecreatefrompng($vfile_upload);
    } else if($_FILES['fupload']['type']=='image/gif') {
        $im_src = imagecreatefromgif($vfile_upload);
    } else {
        $im_src = imagecreatefromwbmp($vfile_upload);
    }
    $src_width = imageSX($im_src);
    $src_height = imageSY($im_src);

    $dst_width = 150;
    $dst_height = ($dst_width/$src_width)*$src_height;
    $im = imagecreatetruecolor($dst_width,$dst_height);
    imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
    if($_FILES['fupload']['type']=='image/jpeg' || $_FILES['fupload']['type']=='image/jpg') {
        imagejpeg($im,$vdir_upload . "medium_" . $fupload_name);
    } else if($_FILES['fupload']['type']=='image/png') {
        imagepng($im,$vdir_upload . "medium_" . $fupload_name);
    } else if($_FILES['fupload']['type']=='image/gif') {
        imagegif($im,$vdir_upload . "medium_" . $fupload_name);
    } else {
        imagepng($im,$vdir_upload . "medium_" . $fupload_name);
    }
    

    imagedestroy($im_src);
    imagedestroy($im);
}

function uploadFile($file_tmp, $file_name, $folder) {
    $up_dir = $folder;
    $fname  = $file_name;
    $destination = $up_dir.$fname;
    move_uploaded_file($file_tmp, $destination);
}