<?php
if (isset($_GET['id_artikel'])){
    $judul = $query->detail_artikel($_GET[id_artikel]);
    if ($judul) {
        echo "$judul[judul]";
    } else{
      $setting = $query->get_setting();
		  echo "$setting[judul_web]";
  }
}
else{
      $setting2 = $query->get_setting();
		  echo "$setting2[judul_web]";
}
?>
