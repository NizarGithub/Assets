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
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font tablesorter table-hover table-striped">
                       <thead>
                           <tr style="background: #f3a5a3; border-bottom: 3px solid #e78d8b">
                             <th style='border-radius: 5px 0px 0px 0px;' width="4%">#</th>
                             <th width="30%" width data-priority="1">Description</th>
                             <th width="30%" data-priority="1">Keterangan</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='8%' data-priority='3'>Tindakan</th>";
                             }else{
                            echo"<th style='border-radius: 0px 10px 0px 0px;' width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                          </tr>
                       </thead>
                       <tbody>
                          <?php 
                                    $no = 1;
                                    $aSkpiList = $ARSql->getAll('form_ndt');
                                    while ( $rSkpiList = $ARSql->mf_object($aSkpiList)) {
                                        if(LEVEL_USER=='1'){
                                        echo "<tr>
                                                <td>$no.</td>
                                                <td><a class='line_edit' data-rel='description' data-type='textarea' title='Edit Deskripsi' id='".$rSkpiList->id_form."'>".html_entity_decode($rSkpiList->description)."</a></td>
                                                <td><a class='line_edit' data-rel='ket' data-type='textarea' title='Edit Keterangan' id='".$rSkpiList->id_form."'>".html_entity_decode($rSkpiList->ket)."</a></td>
                                                    
                                <td class='td-actions'>
                                <a href='download.php?dir=form_ndt&fname=$rSkpiList->filename' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=ndt&media_app=form_ndt&action=edit_form&id=".$rSkpiList->id_form."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=ndt&media_app=form_ndt&action=hapus_form&id=".$rSkpiList->id_form."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp
                            </td>
                                        </tr>";
                                        }else{
                                  echo "<tr>
                                                <td>$no.</td>
                                                <td>".html_entity_decode($rSkpiList->description)."</td>
                                                <td>".html_entity_decode($rSkpiList->ket)."</td>
                                                    
                                <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=form_ndt&fname=$rSkpiList->filename' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_NDT ."apps/form_ndt/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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