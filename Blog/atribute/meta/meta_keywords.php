<?php
if (isset($_GET['id_artikel'])){
	$judul = $query->detail_artikel($_GET[id_artikel]);
		  echo "$judul[tags]";
}
else{
       $meta_keywords = $query->get_setting();
       echo "$meta_keywords[meta_keyword]";
}
?>
