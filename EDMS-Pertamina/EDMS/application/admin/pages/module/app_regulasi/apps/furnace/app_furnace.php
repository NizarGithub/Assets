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
                            FURNACE <?php pertamina();?>
                        </h5>
                        <a href="system/function/download/media_konten.php?type=excel&mod_app=app_furnace" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_furnace" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a></div>
                    <div class="box-content box-table">
                        <div class="table-responsive" data-pattern="priority-columns">
           <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
              <thead>
                 <tr>
                    <th>No</th>
                    <th data-priority="3">Tag No</th>
                    <th data-priority="3">SN</th>
                    <th data-priority="1">Size</th>
                    <th data-priority="1">Thickness</th>
                    <th data-priority="1">Material</th>
                    <th data-priority="3">Service</th>
                    <th data-priority="1">Press</th>
                    <th data-priority="3">Temp</th>
                    <th data-priority="3">Date</th>
                    <th data-priority="6">SKPP</th>
                    <th data-priority="6">Expired</th>
                    <th data-priority="6">Area</th>
                    <th data-priority="6">Keterangan</th>
                    <th data-priority="6">Used</th>
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
                                    $aSkpiList = $ARSql->getAll('furnace');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        $datenow  = date("Y-m-d");
                                        $dateline = $rSkpiList->expired;
                                        $selisih  = dateLine($datenow, $dateline);
                                        if($selisih=='0') {
                                            $tdtabel = "style='background: #6bafee; color: #fff'";
                                            $stat_tanggal = "<strong>".tanggal($rSkpiList->expired)."</strong>";
                                        } else if($selisih > 0) {
                                            $tdtabel = "style='background: #84f7a7;'";
                                            $stat_tanggal = "".tanggal($rSkpiList->expired)."";
                                        } else {
                                            $tdtabel = "style='background: #f98d94;'";
                                            $stat_tanggal = "<i>".tanggal($rSkpiList->expired)."</i> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                                        }
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->tag_no</td>
                                                <td>$rSkpiList->sn</td>
                                                <td>$rSkpiList->size</td>
                                                <td>$rSkpiList->thickness</td>
                                                <td>$rSkpiList->material</td>
                                                <td>$rSkpiList->service</td>
                                                <td>$rSkpiList->press</td>
                                                <td>$rSkpiList->temp</td>
                                                <td>$rSkpiList->date</td>
                                                <td>$rSkpiList->skkp</td>
                                                <td $tdtabel>".$stat_tanggal."</td>
                                                <td>$rSkpiList->area</td>
                                                <td>$rSkpiList->keterangan</td>
                                                <td>$rSkpiList->digunakan</td>";
                                                    
                                if(LEVEL_USER=='1'){                 
                                echo"<td class='td-actions'>
                               <a href='download.php?dir=furnace&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=regulasi&media_app=app_furnace&action=edit_furnace&id=".$rSkpiList->id_furnace."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp
                                <a onclick='conDelete();' href='admin.php?mod_apps=regulasi&media_app=app_furnace&action=hapus_furnace&id=".$rSkpiList->id_furnace."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                   }else{
                                 echo"<td class='td-actions'>
                               <a href='download.php?dir=furnace&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
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