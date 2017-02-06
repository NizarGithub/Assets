<?php
/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
$id_petugas = validasi($_GET['id'], 'xss');
$update1    = $ARSql->query("UPDATE petugas_oncall SET aktif='N' where aktif='Y'");
$update     = $ARSql->query("UPDATE petugas_oncall SET aktif='Y' WHERE id_petugas='$id_petugas'");
header('location: admin.php?mod_apps=info&media_app=petugas_oncall');