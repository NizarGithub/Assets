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
                    Anggaran <?php pertamina();?>
                </h5>
                <a class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
                   </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th width="4%">#</th>
                             <th data-priority="1">Deskripsi Pekerjaan</th>
                             <th data-priority="1">Pelaksana Pekerjaan</th>
                             <th data-priority="3">Tahun</th>
                             <th data-priority="3">Pic</th>
                             <th data-priority="6">Referensi</th>
                              <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='8%' data-priority='3'>Tindakan</th>";
                             }else{

                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('anggaran');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>".html_entity_decode($rSkpiList->description)."</td>
                                                <td>$rSkpiList->anggaran</td>
                                                <td>$rSkpiList->tahun</td>
                                                <td>$rSkpiList->pic</td>
                                                <td>$rSkpiList->status</td>";
                                 if(LEVEL_USER=='1'){
                                echo"<td class='td-actions'>
                                <a href='admin.php?mod_apps=report&media_app=anggaran&action=edit_anggaran&id=".$rSkpiList->id_angg."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=report&media_app=anggaran&action=hapus_anggaran&id=".$rSkpiList->id_angg."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
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