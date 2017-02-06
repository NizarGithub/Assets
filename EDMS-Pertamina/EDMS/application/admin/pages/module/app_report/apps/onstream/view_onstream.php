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
                    Onstream Inspection <?php pertamina();?>
                </h5>
                 <a href="system/function/download/media_konten.php?type=excel&mod_app=app_onstream" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_onstream" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th data-priority="1">Unit Onstream</th>
                            <th width="20%" data-priority="1">Deskripsi</th>
                            <th width="20%" data-priority="1">Fact</th>
                            <th width="15%" data-priority="1">Rekomendasi</th>
                            <th width="20%" data-priority="1">Keterangan</th>
                            <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='10%' data-priority='3'>Tindakan</th>";
                             }else{
                           echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('onstream','id_ons','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='unit_ons' title='Edit Unit' id='".$rows->id_ons."'>$rows->unit_ons</a> </td>
                            <td><a class='line_edit'data-type='textarea' data-rel='description' title='Edit Deskripsi' id='".$rows->id_ons."'>".html_entity_decode($rows->description)."</a> </td>
                            <td><a class='line_edit' data-rel='fact' title='Edit Fact' id='".$rows->id_ons."'>".$rows->fact."</a></td>
                             <td><a class='line_edit' data-rel='rekomendasi' title='Edit Rekomendasi' id='".$rows->id_ons."'>".$rows->rekomendasi."</a></td>
                              <td><a class='line_edit' data-type='textarea' data-rel='ket' title='Edit Keterangan' id='".$rows->id_ons."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=onstream_inspection&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=report&media_app=onstream&action=edit_onstream&id=".$rows->id_ons."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=onstream&action=hapus_onstream&id=".$rows->id_ons."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                            }else{
                        echo "<tr>
                            <td>$no.</td>
                            <td>$rows->unit_ons</td>
                            <td>".html_entity_decode($rows->description)."/td>
                            <td>$rows->fact</td>
                             <td>$rows->rekomendasi</td>
                              <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=onstream_inspection&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_REPORT ."apps/onstream/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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