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
                    Quality Plan <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-striped tablesorter">
                    <thead>
                        <tr style="background: #9fd6cc; border-top: none; border-bottom: 3px solid #8bcbbf">
                            <th style='border-radius: 5px 0px 0px 0px;' width="3%">#</th>
                            <th width="15%" data-priority="1">Unit</th>
                            <th data-priority="1">Equipment</th>
                            <th width="25%" data-priority="1">Keterangan</th>
                            <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='13%' data-priority='3'>Action</th>";
                             }else{
                              echo"<th style='border-radius: 0px 10px 0px 0px;' width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('quality_plan','id_qp','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='unit' data=pk='1' title='Edit Unit' id='".$rows->id_qp."'>".$rows->unit."</a></td>
                            <td><a class='line_edit' data-rel='equipment' data-type='textarea' data=pk='1' title='Edit Equipment' id='".$rows->id_qp."'>".$rows->equipment."</a></td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' data=pk='1' title='Edit Keterangan' id='".$rows->id_qp."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=quality_plan&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=quality_plan&action=edit_quality_plan&id=".$rows->id_qp."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp; &nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=quality_plan&action=hapus_quality_plan&id=".$rows->id_qp."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                         echo "<tr>
                            <td>$no.</td>
                            <td>".$rows->unit."</td>
                            <td>".$rows->equipment."</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'  style='text-align: center'>
                                <a href='download.php?dir=quality_plan&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                              
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
               url: "<?php echo APP_EBOOK ."apps/quality_plan/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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