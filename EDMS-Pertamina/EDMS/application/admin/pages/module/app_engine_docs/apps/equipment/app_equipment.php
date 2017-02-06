<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
    <div class="span16">
        <div class="box">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    Equipment List <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_equipment" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_equipment" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
                      
            </div>
            <div class="box-content box-table"  style="padding: 5px">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th width="4%">No.</th>
                             <th data-priority="1">Tag Number</th>
                             <th data-priority="6">Description</th>
                             <th data-priority="6">Material</th>
                             <th data-priority="1">Temp Design</th>
                             <th data-priority="3">Temp Operasi</th>
                             <th data-priority="3">Pre Design</th>
                             <th data-priority="3">Pre Operasi</th>
                             <th data-priority="3">Fluida Service</th>
                             <th data-priority="6">Corrosion</th>
                             <th data-priority="3">Dimension</th>
                             <th data-priority="3">Jumlah Tube</th>
                             <th data-priority="3">Thickness Design</th>
                             <th data-priority="3">Thickness Actual</th>
                             <th data-priority="3">Tahun Buat</th>
                              <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='8%' data-priority='1'>Action</th>";
                             }else{
                                 
                             }
                              ?>


                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('equipment');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->tag_no</td>
                                                <td>$rSkpiList->description</td>
                                                <td>$rSkpiList->material</td>
                                                <td>$rSkpiList->temp_design</td>
                                                <td>$rSkpiList->temp_operasi</td>
                                                <td>$rSkpiList->pre_design</td>
                                                <td>$rSkpiList->pre_operasi</td>
                                                <td>$rSkpiList->fluida_service</td>
                                                <td>$rSkpiList->corrosion</td>
                                                <td>$rSkpiList->dimension</td>
                                                <td>$rSkpiList->jumlah_tube</td>
                                                <td>$rSkpiList->thickness_design</td>
                                                <td>$rSkpiList->thickness_actual</td>
                                                <td>$rSkpiList->thn_buat</td>"
                                                ;
                                if(LEVEL_USER=='1'){                    
                               echo" <td class='td-actions'>
                                <a href='admin.php?mod_apps=engine-docs&media_app=equipment&action=edit_equipment&id=".$rSkpiList->id_equipment."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=engine-docs&media_app=equipment&action=hapus_equipment&id=".$rSkpiList->id_equipment."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
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
    </div>
</div>