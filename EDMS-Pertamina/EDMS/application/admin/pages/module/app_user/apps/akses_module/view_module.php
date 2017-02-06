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
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th data-priority="1" width="20%">Module</th>
                            <th data-priority="1">Keterangan</th>
                            <th data-priority="1" width="10%">Aktif</th>
                            <th data-priority="1" width="9%" class="td-actions">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('module','module','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                             if($rows->aktif=='Y') {
                                $aktif = "<span class='badge badge-success'>Yes</span>";
                            } else {
                                $aktif = "<span class='badge badge-important'>No</span>";
                            }
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='module' title='Edit Module' id='".$rows->id_module."'>".$rows->module."</a></td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' title='Edit Keterangan' id='".$rows->id_module."'>".html_entity_decode($rows->ket)."</a></td>
                            <td>".$aktif."</td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=user&media_app=app_user_modul&action=edit_module&id=".$rows->id_module."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=user&media_app=app_user_modul&action=hapus_module&id=".$rows->id_module."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
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
               url: "<?php echo APP_USER ."apps/akses_module/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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