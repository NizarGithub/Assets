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
        <a href="system/function/download/media_konten.php?type=excel&mod_app=app_pipe" class="btn btn-md btn-info btn-box-right"><i class="icon-download-alt"></i> Export ke Ms. Excel</a>&nbsp;&nbsp;
        <a href="system/function/download/media_konten.php?type=word&mod_app=app_pipe" class="btn btn-md btn-success btn-box-right"><i class="icon-download-alt"></i> Export ke Ms. Word</a>&nbsp;&nbsp;

        <hr>
                <div class="table-responsive" data-pattern="priority-columns">

                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th width="4%">No.</th>
                             <th data-priority="1">Line No</th>
                             <th data-priority="3">Ins</th>
                             <th data-priority="1">NPS Dia</th>
                             <th data-priority="3">NPS sch</th>
                             <th data-priority="3">From</th>
                             <th data-priority="6">Service</th>
                             <th data-priority="3">VL</th>
                             <th data-priority="6">To</th>
                             <th data-priority="3">Press Desg</th>
                             <th data-priority="6">Press Opr</th>
                             <th data-priority="3">Temp Desg</th>
                             <th data-priority="6">Temp Opr</th>
                             <th data-priority="6">Remarks</th>
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
                                    $aSkpiList = $ARSql->getAll('pipe');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->line_no</td>
                                                <td>$rSkpiList->ins</td>
                                                <td>$rSkpiList->nps</td>
                                                <td>$rSkpiList->nps_sch</td>
                                                <td>$rSkpiList->dari</td>
                                                <td>$rSkpiList->service</td>
                                                <td>$rSkpiList->vl</td>
                                                <td>$rSkpiList->untuk</td>
                                                <td>$rSkpiList->press_desg</td>
                                                <td>$rSkpiList->press_opr</td>
                                                <td>$rSkpiList->temp_desg</td>
                                                <td>$rSkpiList->temp_opr</td>
                                                <td>$rSkpiList->remarks</td>";
                                 if(LEVEL_USER=='1'){                   
                                echo"<td class='td-actions'>
                                <a href='download.php?dir=pipe_list&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=engine-docs&media_app=pipe_list&action=edit_pipe&id=".$rSkpiList->id_pipe."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=engine-docs&media_app=pipe_list&action=hapus_pipe&id=".$rSkpiList->id_pipe."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;
                            </td>
                                        </tr>";
                                 }else{
                                  echo"<td class='td-actions'>
                                <a href='download.php?dir=pipe_list&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
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