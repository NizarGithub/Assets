<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id_skpi = validasi($_GET['id'], 'xss');
$delete = $ARSql->delOne('skpi','id_skpi',$id_skpi);
if($delete) {
    header('location: admin.php?mod_apps=regulasi&media_app=app_skpi');
}
                                   

