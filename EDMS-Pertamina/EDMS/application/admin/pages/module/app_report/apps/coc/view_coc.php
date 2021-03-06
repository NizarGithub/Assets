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
                    COC <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="10%"data-priority="1">Unit</th>
                            <th width="30%"data-priority="1">Description</th>
                            <th width="10%" data-priority="1">Tahun</th>
                            <th data-priority="1">Keterangan</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='13%' data-priority='3'>Tindakan</th>";
                             }else{
                             echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('read_coc','id_rcoc','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='unit' title='Edit Unit' id='".$rows->id_rcoc."'>".$rows->unit."</a> </td>
                            <td><a class='line_edit' data-rel='readness' title='Edit Readness' id='".$rows->id_rcoc."'>".html_entity_decode($rows->readness)."</a> </td>
                            <td><a class='line_edit' data-rel='tahun' title='Edit Tahun' id='".$rows->id_rcoc."'>".$rows->tahun."</a></td>
                              <td><a class='line_edit' data-type='textarea' data-rel='ket' title='Edit Keterangan' id='".$rows->id_rcoc."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=coc&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=report&media_app=coc&action=edit_coc&id=".$rows->id_rcoc."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=coc&action=hapus_coc&id=".$rows->id_rcoc."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                            }else{
                          echo "<tr>
                            <td>$no.</td>
                            <td>$rows->unit</td>
                            <td>".html_entity_decode($rows->readness)."</td>
                            <td>$rows->tahun</td>
                              <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=coc&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_REPORT ."apps/coc/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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