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
                    Artikel Pekerja <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-striped table-hover tablesorter">
                    <thead>
                        <tr style="background: #b9a7e6; border-top: none; border-bottom: 3px solid #9d89cd">
                            <th style='border-radius: 5px 0px 0px 0px;' width="3%">#</th>
                            <th width="20%" data-priority="1">Judul</th>
                            <th width="10%" data-priority="1" width="10%">Tahun</th>
                            <th width="20%" data-priority="1">Pengarang</th>
                            <th data-priority="1">Keterangan</th>
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
                        $qLevel = $ARSql->getAll('artikel_pekerja','id_art','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.<p></p></td>
                            <td><a class='line_edit' data-rel='judul' data=pk='1' title='Edit Judul' id='".$rows->id_art."'>".$rows->judul."</a></td>
                            <td><a class='line_edit' data-rel='tahun' data=pk='1' title='Edit Tahun' id='".$rows->id_art."'>".$rows->tahun."</a></td>
                            <td><a class='line_edit' data-rel='pengarang' data=pk='1' title='Edit Pengarang' id='".$rows->id_art."'>".$rows->pengarang."</a></td>
                            <td><a class='line_edit' data-rel='ket' data=pk='1' data-type='textarea' title='Edit Keterangan' id='".$rows->id_art."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=artikel_pekerja&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=artikel_pekerja&action=edit_artikel_pekerja&id=".$rows->id_art."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=artikel_pekerja&action=hapus_artikel_pekerja&id=".$rows->id_art."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                        echo "<tr>
                            <td>$no.</td>
                            <td>".$rows->judul."</td>
                            <td>".$rows->tahun."</td>
                            <td>".$rows->pengarang."</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'  style='text-align: center'>
                                <a href='download.php?dir=artikel_pekerja&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_EBOOK ."apps/artikel_pekerja/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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