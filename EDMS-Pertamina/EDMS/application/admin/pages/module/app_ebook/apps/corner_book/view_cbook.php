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
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-striped table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="25%" data-priority="1">Judul</th>
                            <th data-priority="1">Pengarang</th>
                            <th width="8%" data-priority="1">Edisi</th>
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
                        $qLevel = $ARSql->getAll('corner_book','id_eb','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='judul' title='Edit Judul' id='".$rows->id_eb."'>".$rows->judul."</a></td>
                            <td><a class='line_edit' data-rel='pengarang' title='Edit Nama Pengarang' id='".$rows->id_eb."'>".$rows->pengarang."</a></td>
                            <td><a class='line_edit' data-rel='tahun' title='Edit Tahun' id='".$rows->id_eb."'>".$rows->tahun."</a></td>
                            <td><a class='line_edit' data-type='textarea' data-rel='ket' title='Edit Keterangan' id='".$rows->id_eb."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=corner_book&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=corner_book&action=edit_cbook&id=".$rows->id_eb."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=corner_book&action=hapus_cbook&id_eb=".$rows->id_eb."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                         echo "<tr>
                            <td>$no.</td>
                            <td>".$rows->judul."</td>
                            <td>".$rows->pengarang."</td>
                            <td>".$rows->tahun."</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'  style='text-align: center'>
                                <a href='download.php?dir=corner_book&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
                            </td>
                        </tr>";        
                            }
                        $no++;   
                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </div
</div>
<script type="text/javascript">
    $(document).ready(function() {
       $.fn.editable.defaults.mode = 'popup';
       $('.line_edit').editable();
       $('.area_edit').editable();
       
       $(document).on('click','.editable-submit',function(){
            var f = $(this).closest('td').children('a').attr('data-rel');
            var x = $(this).closest('td').children('a').attr('id');
            var y = $('.input-sm').val();
            var z = $(this).closest('td').children('a');
           $.ajax({
               url: "<?php echo APP_EBOOK ."apps/corner_book/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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
