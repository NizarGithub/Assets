<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id            = validasi($_GET['id'], 'xss');
$delete        = $ARSql->delOne('cleaning','id_cl',$id);
if($delete) {
    header('location: admin.php?mod_apps=report&media_app=cleaning_tangki');
}
                                   

