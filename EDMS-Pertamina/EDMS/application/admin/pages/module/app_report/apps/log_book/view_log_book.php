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
                    Log Book <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th data-priority="1">Unit</th>
                            <th data-priority="1">Equipment</th>
                            <th data-priority="1">Fact</th>
                            <th data-priority="1">Rekomendasi</th>
                            <th data-priority="1">Keterangan</th>
                           <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='13%' data-priority='3'>Action</th>";
                             }else{
                             echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('log_book','id_log','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                        echo "<tr>
                            <td>$no.</td>
                            <td>".$rows->unit_log." </td>
                            <td>".$rows->equipment."</td>
                            <td>".$rows->fact."</td>
                            <td>".$rows->rekomendasi."</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions' style='text-align: center'>";
                        if(LEVEL_USER=='1'){
                                echo"<a href='download.php?dir=log_book&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=report&media_app=log_book&action=edit_log_book&id=".$rows->id_log."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=log_book&action=hapus_log_book&id=".$rows->id_log."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                        }else{
                        echo"<a href='download.php?dir=log_book&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                                
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