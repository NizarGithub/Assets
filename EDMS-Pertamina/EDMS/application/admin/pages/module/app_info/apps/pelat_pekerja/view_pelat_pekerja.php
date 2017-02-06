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
                    Pelatihan Pekerja <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th data-priority="1">Keterangan</th>
                            <th data-priority="1">File Download</th>
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
                        $qLevel = $ARSql->getAll('pelat_pekerja');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a data-rel='keterangan' class='line_edit' data-type='textarea' title='Edit Keterangan' id='".$rows->id_pp."'>".html_entity_decode($rows->keterangan)."</td>
                            <td>Download <i class='icon-download-alt'></i> &nbsp;<a href='download.php?dir=pelatihan_pekerja&fname=".$rows->filename."'>".$rows->filename."</a>
                                <p><small>Ukuran file : ".format_size(filesize("uploaded/pelatihan_pekerja/$rows->filename"))."</small></p></td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=info&media_app=pelat_pekerja&action=edit_pelat_pekerja&id=".$rows->id_pp."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=info&media_app=pelat_pekerja&action=hapus_pelat_pekerja&id=".$rows->id_pp."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                              echo "<tr>
                            <td>$no.</td>
                            <td>".html_entity_decode($rows->keterangan)."</td>
                            <td>Download <i class='icon-download-alt'></i> &nbsp; <a href='download.php?dir=pelatihan_pekerja&fname=".$rows->filename."'>".$rows->filename."</a>
                                <p><small>Ukuran file : ".format_size(filesize("uploaded/pelatihan_pekerja/$rows->filename"))."</small></p></td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=pelatihan_pekerja&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                                
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
               url: "<?php echo APP_INFO ."apps/pelat_pekerja/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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