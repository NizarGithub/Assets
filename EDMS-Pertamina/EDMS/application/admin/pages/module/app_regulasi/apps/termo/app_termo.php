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
                    Termo Trending <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_termo" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
        <a href="system/function/download/media_konten.php?type=word&mod_app=app_termo" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a></div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-hover table-striped">
                       <thead>
                           <tr style="background: #ccccff;  border-top: none; border-bottom: 3px solid #b8b8f0">
                             <th style='border-radius: 5px 0px 0px 0px;' width="4%">#</th>
                             <th data-priority="1">Judul</th>
                             <th width="10%" data-priority="3">Area</th>
                             <th data-priority="1">Tag Number</th>
                             <th width="10%" data-priority="1">Tgl</th>
                             <th data-priority="1">User</th>
                              <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='10%' data-priority='3'>Action</th>";
                             }else{
                              echo"<th style='border-radius: 0px 10px 0px 0px;' width='5%' data-priority='3'>Action</th>";    
                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('termo_trend');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                    if(LEVEL_USER=='1'){
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td><a class='line_edit' data-rel='judul' title='Edit Judul' id='".$rSkpiList->id_thermo."'>$rSkpiList->judul</a></td>
                                                <td><a class='line_edit' data-rel='area' title='Edit Area' id='".$rSkpiList->id_thermo."'>$rSkpiList->area</a></td>
                                                <td><a class='line_edit' data-rel='tag_no' title='Edit TagNumber' id='".$rSkpiList->id_thermo."'>$rSkpiList->tag_no</a></td>
                                                <td>".tanggal($rSkpiList->tgl)."</td>
                                                <td><a class='line_edit' data-rel='user' title='Edit User' id='".$rSkpiList->id_thermo."'>$rSkpiList->user</a></td>
                                                    
                                        <td class='td-actions'>
                                         <a href='download.php?dir=termo&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=regulasi&media_app=app_termo&action=edit_termo&id=".$rSkpiList->id_thermo."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp
                                <a onclick='conDelete();' href='admin.php?mod_apps=regulasi&media_app=app_termo&action=hapus_termo&id=".$rSkpiList->id_thermo."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                  }else{
                                      echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->judul</td>
                                                <td>$rSkpiList->area</td>
                                                <td>$rSkpiList->tag_no</td>
                                                <td>".tanggal($rSkpiList->tgl)."</td>
                                                <td>$rSkpiList->user</td>"
                                              . "</tr><td class='td-actions'>
                                         <a href='download.php?dir=SKPI&fname=".$rSkpiList->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                               
                            </td>";
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
<script type="text/javascript">
    $(document).ready(function() {
       $.fn.editable.defaults.mode = 'popup';
       $('.line_edit').editable();
       $(document).on('click','.editable-submit',function(){
            var f = $(this).closest('td').children('a').attr('data-rel');
            var x = $(this).closest('td').children('a').attr('id');
            var y = $('.input-sm').val();
            var z = $(this).closest('td').children('a');
           $.ajax({
               url: "<?php echo APP_REGULASI ."apps/termo/";?>editable.php?field="+f+"&id="+x+"&data="+y,
               type: "GET",
               success: function(s) {
                   if(s=='status') {
                       $(z).html(y);
                   }
                   if(s=='error') {
                       alert('Galat...pada saat proses penyimpanan.');
                   }
               },
                error: function(e) {
                    alert('Galat...pada saat proses penyimpanan.');
                }                
           });
       });
    });
</script>