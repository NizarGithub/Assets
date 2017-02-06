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
                    Laporan NDT <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_laporan" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_laporan" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
                      
            </div>
            <div class="box-content box-table"  style="padding: 5px">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-bordered table-hover table-striped">
                       <thead>
                           <tr class="success">
                             <th style='border-radius: 5px 0px 0px 0px;' width="4%">#</th>
                             <th width="10%" width data-priority="1">Tag Number</th>
                             <th width="20%" data-priority="1">Requestor</th>
                             <th width="10%" width data-priority="1">Jenis</th>
                             <th width="20%" data-priority="1">Permintaan</th>
                             <th width="10%" width data-priority="1">Tanggal</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='10%' data-priority='3'>Tindakan</th>";
                             }else{
                            echo"<th style='border-radius: 0px 10px 0px 0px;' width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('laporan_ndt');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                    $jenis = $ARSql->getOne('jenis_ndt','id_jenis',$rSkpiList->id_jenis);
                                        if(LEVEL_USER=='1'){
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td><a class='line_edit' data-rel='tag_no' title='Edit Tag No' id='".$rSkpiList->id_ndt."'>$rSkpiList->tag_no</a></td>
                                                <td><a class='line_edit' data-rel='requestor' title='Edit Requestor' id='".$rSkpiList->id_ndt."'>$rSkpiList->requestor</a></td>
                                                    <td>$jenis->nama</td>
                                                <td><a class='line_edit' data-rel='permintaan' data-type='textarea' title='Edit Permintaan' id='".$rSkpiList->id_ndt."'>".html_entity_decode($rSkpiList->permintaan)."</a></td>
                                                    <td>".tanggal($rSkpiList->tgl)."</td>
                                              
                                                    
                                <td class='td-actions'>
                                <a href='download.php?dir=laporan_ndt&fname=$rSkpiList->filename' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=ndt&media_app=laporan_ndt&action=edit_laporan&id=".$rSkpiList->id_ndt."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=ndt&media_app=laporan_ndt&action=hapus_laporan&id=".$rSkpiList->id_ndt."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                        }else{
                                  echo "<tr>
                                                <td>$no.</td>
                                                <td>$rSkpiList->tag_no.</td>
                                                <td>$rSkpiList->requestor.</td>
                                                 <td>$jenis->jenis.</td>
                                                <td>".html_entity_decode($rSkpiList->permintaan)."</td>
                                                <td>".tanggal($rSkpiList->tgl)."</td>
                                                    
                                <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=laporan_ndt&fname=$rSkpiList->filename' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_NDT ."apps/laporan_ndt/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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