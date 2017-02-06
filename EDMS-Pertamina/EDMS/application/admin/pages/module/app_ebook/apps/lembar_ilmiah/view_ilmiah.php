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
    <div class="span16"><hr>
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
                             echo"<th width='13%' data-priority='3'>Action</th>";
                             }else{
                              echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('ilmiah','id_ilm','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                        if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='judul' data=pk='1' title='Edit Judul' data-pk='1' id='".$rows->id_ilm."'>".$rows->judul."</td>
                            <td><a class='line_edit' data-rel='pengarang'  data=pk='1' title='Edit Nama Pengarang' data-pk='1' id='".$rows->id_ilm."'>".$rows->pengarang."</td>
                            <td><a class='line_edit' data-rel='tahun' data=pk='1' title='Edit Tahun' data-pk='1' id='".$rows->id_ilm."'>".$rows->tahun."</td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' data=pk='1' title='Edit Keterangan' data-pk='1' id='".$rows->id_ilm."'>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'>
                                <a href='download.php?dir=lembar_ilmiah&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=lembar_ilmiah&action=edit_ilmiah&id=".$rows->id_ilm."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=lembar_ilmiah&action=hapus_ilmiah&id_ilm=".$rows->id_ilm."'>
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
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=lembar_ilmiah&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_EBOOK ."apps/lembar_ilmiah/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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