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
                    Welder <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_welder" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_welder" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
                      
            </div>
            <div class="box-content box-table"  style="padding: 5px">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" width="4%">No.</th>
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" data-priority="1">Nama</th>
                             <th style="text-align: center;" colspan="6" data-priority="1">Certificate</th>
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" data-priority="3">Pengalaman</th>
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" data-priority="1">Project</th>
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" data-priority="3">No.Telepon</th>
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" data-priority="3">Email</th>
                             <th style="text-align: center; padding-bottom: 20px;" rowspan="2" data-priority="6">No. Sertifikat</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='text-align: center; padding-bottom: 20px;' width='8%' rowspan='2' data-priority='3'>Action</th>";
                             }
                               ?>
                           </tr><tr>
                             <th style="text-align: center;" rowspan="2" data-priority="6">Kualifikasi</th>
                             <th style="text-align: center;" rowspan="2" data-priority="3">Posisi</th>
                             <th style="text-align: center;" rowspan="2" data-priority="6">Diameter</th>
                             <th style="text-align: center;" rowspan="2" data-priority="3">Thickness</th>
                             <th style="text-align: center;" rowspan="2" data-priority="6">Material</th>
                             <th style="text-align: center;" rowspan="2" data-priority="6">Berlaku</th>


                           </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('welder');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->nama</td>
                                                <td>$rSkpiList->kualifikasi</td>
                                                <td>$rSkpiList->posisi</td>
                                                <td>$rSkpiList->diameter</td>
                                                <td>$rSkpiList->thickness</td>
                                                <td>$rSkpiList->material</td>
                                                <td>$rSkpiList->berlaku</td>
                                                <td>$rSkpiList->pengalaman</td>
                                                <td>$rSkpiList->project</td>
                                                <td>$rSkpiList->no_hp</td>
                                                <td>$rSkpiList->email</td>
                                                <td>$rSkpiList->no_sertifikat</td>";
                                if(LEVEL_USER=='1'){                    
                               echo" <td class='td-actions'>
                                <a href='admin.php?mod_apps=engine-docs&media_app=welder&action=edit_welder&id=".$rSkpiList->id_welder."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=engine-docs&media_app=welder&action=hapus_welder&id=".$rSkpiList->id_welder."'>
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