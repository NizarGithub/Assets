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
                  Turn Around <?php pertamina();?>
                </h5>
                 <a href="system/function/download/media_konten.php?type=excel&mod_app=app_around" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_around" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th data-priority="1">No</th>
                            <th width="15%" data-priority="1">Tanggal</th>
                            <th width="" data-priority="1">Kepada</th>
                            <th data-priority="1">Tembusan</th>
                            <th data-priority="1">Perihal</th>
                            <th data-priority="1">Tindak Lanjut</th>
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
                        $qLevel = $ARSql->getAll('around');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                        echo "<tr>
                            <td>$no.</td>
                            <td>".$rows->no."</td>
                            <td>".tanggal($rows->tgl)."</td>
                            <td>".$rows->kepada."</td>
                            <td>".$rows->tembusan."</td>
                            <td>".html_entity_decode($rows->perihal)."</td>
                            <td>".$rows->t_lanjut."</td>";
                        if(LEVEL_USER=='1'){
                            echo"<td class='td-actions'>
                                <a href='admin.php?mod_apps=report&media_app=turn_around&action=edit_around&id=".$rows->id_ar."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=turn_around&action=hapus_around&id=".$rows->id_ar."'>
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