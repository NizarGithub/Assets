<?php

/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
    <div class="span16">
        <a href="system/function/download/media_konten.php?type=excel&mod_app=app_metering" class="btn btn-md btn-primary btn-box-right"><i class="icon-download-alt"></i> Konversi ke Ms. Excel</a>&nbsp;&nbsp;
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_metering" class="btn btn-md btn-default btn-box-right"><i class="icon-download-alt"></i> Konversi ke Ms. Word</a>
                <hr>
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-hover table-striped">
                       <thead>
                           <tr style="background: #fac198; border-bottom: 3px solid #eeab7a">
                             <th style='border-radius: 5px 0px 0px 0px;' width="4%">#</th>
                             <th width="20%"data-priority="1">Description</th>
                             <th data-priority="1">Merek</th>
                             <th data-priority="3">Serial</th>
                             <th width="5%" data-priority="3">Jumlah</th>
                             <th width="20%" data-priority="3">Keterangan</th>
                             <th data-priority="1">Peminjam</th>
                              <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='8%' data-priority='3'>Tindakan</th>";
                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('alat_ndt');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->description</td>
                                                <td>$rSkpiList->merk</td>
                                                <td>$rSkpiList->serial</td>
                                                <td>$rSkpiList->jumlah</td>
                                                <td>$rSkpiList->ket</td>
                                                <td>$rSkpiList->peminjam</td>";
                                if(LEVEL_USER=='1'){                    
                                echo"<td class='td-actions'>
                                <a href='admin.php?mod_apps=ndt&media_app=alat_ndt&action=edit_ndt&id=".$rSkpiList->id_alat."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp
                                <a onclick='conDelete();' href='admin.php?mod_apps=ndt&media_app=alat_ndt&action=hapus_ndt&id=".$rSkpiList->id_alat."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                }else{
                                    echo"</tr>";
                                }
                                        $no++;
                                        }
                                    ?>
                       </tbody>
                    </table>
                </div>
    </div>
</div>