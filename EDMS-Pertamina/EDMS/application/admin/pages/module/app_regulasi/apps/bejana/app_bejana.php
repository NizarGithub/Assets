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
        <div class="box">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    BEJANA <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_bejana" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
        <a href="system/function/download/media_konten.php?type=word&mod_app=app_bejana" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a></div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-hover table-striped">
                       <thead>
                           <tr style="background: #99cccc;  border-top: none; border-bottom: 3px solid #7fb9b9">
                             <th style='border-radius: 5px 0px 0px 0px;' width="4%">#</th>
                             <th width="15%" data-priority="1">SN</th>
                             <th width="20%" data-priority="3">No. Ijin</th>
                             <th width="15%" data-priority="1">Ijin Habis</th>
                             <th width="20%" data-priority="1">Merk</th>
                             <th width="8%" data-priority="1">Kapasitas</th>
                              <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='10%' data-priority='3'>Tindakan</th>";
                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('bejana');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        $datenow  = date("Y-m-d");
                                        $dateline = $rSkpiList->ijin_habis;
                                        $selisih  = dateLine($datenow, $dateline);
                                        if($selisih=='0') {
                                            $tdtabel = "style='background: #6bafee; color: #fff'";
                                            $stat_tanggal = "<strong>".tanggal($rSkpiList->ijin_habis)."</strong>";
                                        } else if($selisih > 0) {
                                            $tdtabel = "style='background: #84f7a7;'";
                                            $stat_tanggal = "".tanggal($rSkpiList->ijin_habis)."";
                                        } else {
                                            $tdtabel = "style='background: #f98d94;'";
                                            $stat_tanggal = "<i>".tanggal($rSkpiList->ijin_habis)."</i> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                                        }
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->sn</td>
                                                <td>$rSkpiList->no_ijin</td>
                                                <td $tdtabel>".$stat_tanggal."</td>
                                                <td>$rSkpiList->merk</td>
                                                <td>$rSkpiList->kapasitas</td>";
                                 if(LEVEL_USER=='1'){                   
                                echo"<td class='td-actions'>
                                <a href='download.php?dir=bejana&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=regulasi&media_app=app_bejana&action=edit_bejana&id=".$rSkpiList->id_bejana."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=regulasi&media_app=app_bejana&action=hapus_bejana&id=".$rSkpiList->id_bejana."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                                        </tr>";
                                 }else{
                                   echo"<td class='td-actions'>
                                <a href='download.php?dir=bejana&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                               
                            </td>
                                        </tr>";
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