<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id_alat = validasi($_GET['id'], 'xss');
$delete = $ARSql->delOne('alat_ndt','id_alat',$id_alat);
if($delete) {
    header('location: admin.php?mod_apps=ndt&media_app=alat_ndt');
}
                                   

