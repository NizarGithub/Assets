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
    <div class="span16"><hr>
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-striped table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="15%" data-priority="1">Standard</th>
                            <th width="15%" data-priority="1">Description</th>
                            <th width="5%" data-priority="1">Edisi</th>
                            <th width="20%" data-priority="1">Keterangan</th>
                            <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='8%' data-priority='3'>Action</th>";
                             }else{
                              echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('standard','id_std','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='standard' data=pk='1' title='Edit Standard' data-pk='1' id='".$rows->id_std."'>".$rows->standard."</a></td>
                            <td><a class='line_edit' data-rel='description' data-type='textarea' data=pk='1' title='Edit Description' data-pk='1' id='".$rows->id_std."'>".html_entity_decode($rows->description)."</a></td>
                            <td><a class='line_edit' data-rel='tahun' data=pk='1' title='Edit Tahun' data-pk='1' id='".$rows->id_std."'>".$rows->tahun."</td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' data=pk='1' title='Edit Keterangan' data-pk='1' id='".$rows->id_std."'>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'>
                                <a href='download.php?dir=standard&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=standard&action=edit_standard&id=".$rows->id_std."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=standard&action=hapus_standard&id_std=".$rows->id_std."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                        echo "<tr>
                            <td>$no.</td>
                            <td>.$rows->standard</td>
                            <td>".html_entity_decode($rows->description)."</td>
                            <td>$rows->tahun</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'  style='text-align: center'>
                                <a href='download.php?dir=standard&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
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
               url: "<?php echo APP_EBOOK ."apps/standard/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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