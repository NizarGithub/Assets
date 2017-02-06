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
                    SEIG <?php pertamina();?>
                </h5>
                </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="30%" data-priority="1">Deskripsi</th>
                            <th data-priority="1">File Download</th>
                            <?php
                             if(LEVEL_USER=='1'){
                                echo"<th  width='8%' data-priority='3'>Tindakan</th>";
                             }else{
                                echo"<th  width='8%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('seig','id_seig','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-type='textarea' data-rel='description' title='Edit Description' id='".$rows->id_seig."'>".html_entity_decode($rows->description)."</a></td>"
                                . "<td>Download &nbsp;<a href='download.php?dir=SEIG&fname=".$rows->filename."'><i class='icon-download'></i>&nbsp;&nbsp;&nbsp;".$rows->filename."</a>
                                    <p><small>Ukuran file : ".format_size(filesize("uploaded/SEIG/$rows->filename"))."</small></p></td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=engine-docs&media_app=seig&action=edit_seig&id=".$rows->id_seig."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=engine-docs&media_app=seig&action=hapus_seig&id_seig=".$rows->id_seig."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                            }else{
                        echo "<tr>
                            <td>$no.</td>
                            <td>".html_entity_decode($rows->description)."</td>"
                                . "<td>Download &nbsp;<a href='download.php?dir=SEIG&fname=".$rows->filename."'><i class='icon-download'></i>&nbsp;&nbsp;&nbsp;".$rows->filename."</a>
                                    <p class='text-info'><small>Ukuran file : ".format_size(filesize("uploaded/SEIG/$rows->filename"))."</small></p></td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=SEIG&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;

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
       $('.area_edit').editable();
       $(document).on('click','.editable-submit',function(){
            var f = $(this).closest('td').children('a').attr('data-rel');
            var x = $(this).closest('td').children('a').attr('id');
            var y = $('.input-sm').val();
            var z = $(this).closest('td').children('a');
            $.ajax({
               url: "<?php echo APP_ENGDOC ."apps/seig/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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