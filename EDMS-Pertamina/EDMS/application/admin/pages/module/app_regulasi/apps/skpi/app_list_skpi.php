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
                    SKPI <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_metering" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_metering" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a></div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th width="4%">#</th>
                             <th data-priority="1">Unit</th>
                             <th data-priority="1">No SKPP</th>
                             <th data-priority="1">Start Date</th>
                             <th data-priority="3">End Date</th>
                             <th data-priority="3">Due days</th>
                             <th data-priority="3">Unit No</th>
                             <th data-priority="3">Start Build</th>
                             <th data-priority="3">Start Operation</th>
                             <th data-priority="3">Remarks</th>
                             <th data-priority="3">Status</th>

                            <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='8%' data-priority='3'>Action</th>";
                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('skpi');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        $datenow  = date("Y-m-d");
                                        $dateline = $rSkpiList->end_date;
                                        $selisih  = dateLine($datenow, $dateline);
                                        if($selisih=='0') {
                                            $tdtabel = "style='background: #6bafee; color: #fff'";
                                        } else if($selisih > 0 AND $selisih < 100) {
                                            $tdtabel = "style='background: yellow;'";
                                            $stat_tanggal = "".tanggal($rSkpiList->expire)."";
                                        } else if($selisih >= 100) {
                                            $tdtabel = "style='background: #84f7a7;'";
                                            $stat_tanggal = "".tanggal($rSkpiList->expire)."";
                                        }
                                        else {
                                            $tdtabel = "style='background: #f98d94;'";
                                            $stat_tanggal = "<i>".tanggal($rSkpiList->expire)."</i> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                                        }
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->unit</td>
                                                <td>$rSkpiList->no_skpp</td>
                                                <td>".tanggal($rSkpiList->start_date)."</td>
                                                <td>".tanggal($rSkpiList->end_date)."</td>
                                                <td $tdtabel>$selisih</td>
                                                <td>$rSkpiList->unit_no</td>
                                                <td>$rSkpiList->start_build</td>
                                                <td>$rSkpiList->start_operation</td>
                                                <td>$rSkpiList->remarks</td>
                                                <td>$rSkpiList->status</td>";
                                  if(LEVEL_USER=='1'){                  
                                echo"<td class='td-actions'>
                                <a href='admin.php?mod_apps=regulasi&media_app=app_skpi&action=edit_skpi&id=".$rSkpiList->id_skpi."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp
                                <a onclick='conDelete();' href='admin.php?mod_apps=regulasi&media_app=app_skpi&action=hapus_skpi&id=".$rSkpiList->id_skpi."'>
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
    </div>
</div>