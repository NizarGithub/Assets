<?php    
    if (isset($_GET['id_artikel'])){
      $judul = $query->detail_artikel($_GET[id_artikel]);
		  echo "$judul[judul]";
    }
    else{
      $meta_description = $query->get_setting();
      echo "$meta_description[meta_deskripsi]";
    }
?>
