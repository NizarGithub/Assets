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
                    TANKI ALL <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_tangki" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_tangki" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th width="4%">No.</th>
                             <th data-priority="1">TagNumber</th>
                             <th data-priority="3">TestDate</th>
                             <th data-priority="1">Type</th>
                             <th data-priority="3">Diameter</th>
                             <th data-priority="3">High</th>
                             <th data-priority="6">Capacity</th>
                             <th data-priority="3">Izin Kalibrasi</th>
                             <th data-priority="6">Kalibrasi Habis</th>
                             <th data-priority="3">Dibuat</th>
                             <th data-priority="6">Penggunaan Kal</th>
                             <th data-priority="3">Penggunaan Habis</th>
                             <th data-priority="6">Izin SKPP</th>
                             <th data-priority="6">SKPP Habis</th>
                             <th data-priority="6">User</th>
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
                                    $aSkpiList = $ARSql->getAll('tanki');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        $datenow  = date("Y-m-d");
                                        $dateline = $rSkpiList->kalibrasi_habis;
                                        $dateline1 = $rSkpiList->penggunaan_habis;
                                        $dateline2 = $rSkpiList->skkp_habis;
                                        $selisih  = dateLine($datenow, $dateline);
                                        $selisih1  = dateLine($datenow, $dateline1);
                                        $selisih2  = dateLine($datenow, $dateline2);

                                        if($selisih=='0') {
                                            $tdtabel = "style='background: #6bafee; color: #fff'";
                                            $stat_tanggal = "<strong>".tanggal($rSkpiList->kalibrasi_habis)."</strong>";
                                        } else if($selisih > 0) {
                                            $tdtabel = "style='background: #84f7a7;'";
                                            $stat_tanggal = "".tanggal($rSkpiList->kalibrasi_habis)."";
                                        } else {
                                            $tdtabel = "style='background: #f98d94;'";
                                            $stat_tanggal = "<i>".tanggal($rSkpiList->kalibrasi_habis)."</i> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                                        }

                                        if($selisih1=='0') {
                                            $tdtabel1 = "style='background: #6bafee; color: #fff'";
                                            $stat_tanggal1 = "<strong>".tanggal($rSkpiList->penggunaan_habis)."</strong>";
                                        } else if($selisih1 > 0) {
                                            $tdtabel1 = "style='background: #84f7a7;'";
                                            $stat_tanggal1 = "".tanggal($rSkpiList->penggunaan_habis)."";
                                        } else {
                                            $tdtabel1 = "style='background: #f98d94;'";
                                            $stat_tanggal1 = "<i>".tanggal($rSkpiList->penggunaan_habis)."</i> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                                        }

                                        if($selisih2=='0') {
                                            $tdtabel2 = "style='background: #6bafee; color: #fff'";
                                            $stat_tanggal2 = "<strong>".tanggal($rSkpiList->skkp_habis)."</strong>";
                                        } else if($selisih2 > 0) {
                                            $tdtabel2 = "style='background: #84f7a7;'";
                                            $stat_tanggal2 = "".tanggal($rSkpiList->skkp_habis)."";
                                        } else {
                                            $tdtabel2 = "style='background: #f98d94;'";
                                            $stat_tanggal2 = "<i>".tanggal($rSkpiList->skkp_habis)."</i> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                                        }
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->tag_no</td>
                                                <td>".tanggal($rSkpiList->test_date)."</td>
                                                <td>$rSkpiList->type</td>
                                                <td>$rSkpiList->diameter</td>
                                                <td>$rSkpiList->tinggi</td>
                                                <td>$rSkpiList->kapasitas</td>
                                                <td>$rSkpiList->ijin_kalibrasi</td>
                                                <td $tdtabel>".$stat_tanggal."</td>
                                                <td>$rSkpiList->dibuat</td>
                                                <td>$rSkpiList->penggunaan_kal</td>
                                                <td $tdtabel1>".$stat_tanggal1."</td>
                                                <td>$rSkpiList->ijin_skkp</td>
                                                <td $tdtabel2>".$stat_tanggal2."</td>
                                                <td>$rSkpiList->user</td>";
                                     if(LEVEL_USER=='1'){               
                                echo"<td class='td-actions'>
                                <a href='download.php?dir=tangki&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=regulasi&media_app=app_tanki&action=edit_tanki&id=".$rSkpiList->id_tanki."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp
                                <a onclick='conDelete();' href='admin.php?mod_apps=regulasi&media_app=app_tanki&action=hapus_tanki&id=".$rSkpiList->id_tanki."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                     }else{
                                      echo"<td class='td-actions'>
                                <a href='download.php?dir=tangki&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                             
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