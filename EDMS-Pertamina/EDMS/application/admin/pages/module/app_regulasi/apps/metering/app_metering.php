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
                    Metering <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_metering" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_metering" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th width="4%">No.</th>
                             <th data-priority="1">SN</th>
                             <th data-priority="3">No. Ijin</th>
                             <th data-priority="1" width='10%'>Ijin Habis</th>
                             <th data-priority="3">TagNumber</th>
                             <th data-priority="3">Prover</th>
                             <th data-priority="6">Service</th>
                             <th data-priority="3">Type</th>
                             <th data-priority="6">Size</th>
                             <th data-priority="3">Volume</th>
                             <th data-priority="6">Manufacture</th>
                             <th data-priority="3">Remark</th>
                             <th data-priority="6">Test</th>
                             <th data-priority="6">Link SN</th>
                             <th data-priority="6">Ijin</th>
                             <th data-priority="6">Berita</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='10%' data-priority='3'>Action</th>";
                             }else{
                              echo"<th  width='5%' data-priority='3'>Action</th>";    
                             }
                              ?>

                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('metering');
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
                                                <td>$rSkpiList->tag_no</td>
                                                <td>$rSkpiList->prover</td>
                                                <td>$rSkpiList->service</td>
                                                <td>$rSkpiList->type</td>
                                                <td>$rSkpiList->size</td>
                                                <td>$rSkpiList->volume</td>
                                                <td>$rSkpiList->manufacture</td>
                                                <td>$rSkpiList->remark</td>
                                                <td>".tanggal($rSkpiList->test)."</td>
                                                <td>$rSkpiList->link_sn</td>
                                                <td>$rSkpiList->ijin</td>
                                                <td>$rSkpiList->berita</td>";
                                   if(LEVEL_USER=='1'){                 
                               echo"<td class='td-actions'>
                                <a href='download.php?dir=metering&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=regulasi&media_app=app_metering&action=edit_metering&id=".$rSkpiList->id_met."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp
                                <a onclick='conDelete();' href='admin.php?mod_apps=regulasi&media_app=app_metering&action=hapus_metering&id=".$rSkpiList->id_met."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                   }else{
                                     echo"<td class='td-actions'>
                                <a href='download.php?dir=metering&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                
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