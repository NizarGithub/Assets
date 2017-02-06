<?php

/*                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 */
  
   $save = $_POST['save'];
   $edit = $_POST['edit'];
   
   $a  = $_POST['a'];
   $b  = $_POST['b'];
   $id = $_POST['id'];
   
   if(isset($save)){
     $query->add_kategori_puisi($a,$b); 
     $query->log_aktifitas($_SESSION[id_user],'Menambah data kategori puisi baru',date('Y-m-d'),date('H:i:s'));
     echo "<script>window.location='admin.php?module=kategori_puisi';</script>";
   }else if(isset ($edit)){
       $query->edit_kategori_puisi($id,$a,$b);
       $query->log_aktifitas($_SESSION[id_user],'Mengubah data kategori puisi',date('Y-m-d'),date('H:i:s'));
       echo "<script>window.location='admin.php?module=kategori_puisi';</script>";
   }

