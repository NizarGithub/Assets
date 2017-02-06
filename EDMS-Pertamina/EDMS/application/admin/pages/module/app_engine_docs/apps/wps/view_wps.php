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
        <div class="box pattern">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    WPS <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="15%" data-priority="1">WPS No.</th>
                            <th width="20%" data-priority="1">From P.No.</th>
                            <th width="20%" data-priority="1">To P.No.</th>
                            <th width="20%" data-priority="1">Keterangan</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='10%' data-priority='3'>Action</th>";
                             }else{
                            echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('wps','id_wps','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='wps_no' title='Edit No WPS' id='".$rows->id_wps."'>".$rows->wps_no." </a></td>
                            <td><a class='line_edit' data-rel='from_p' title='Edit From P.No.' id='".$rows->id_wps."'>".$rows->from_p."</a></td>
                            <td><a class='line_edit' data-rel='to_p' title='Edit To P.No.' id='".$rows->id_wps."'>".$rows->to_p."</a></td>
                            <td><a class='line_edit' data-rel='keterangan' title='Edit Keterangan' id='".$rows->id_wps."'>".html_entity_decode($rows->keterangan)."</a></td>

                            <td class='td-actions'>
                                <a href='download.php?dir=wps&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=engine-docs&media_app=wps&action=edit_wps&id=".$rows->id_wps."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=engine-docs&media_app=wps&action=hapus_wps&id=".$rows->id_wps."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;
                            </td>
                        </tr>";
                            }else{
                         echo "<tr>
                            <td>$no.</td>
                            <td>$rows->wps_no</td>
                            <td>$rows->from_p</td>
                            <td>$rows->to_p</td>
                            <td>".html_entity_decode($rows->keterangan)."</td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=wps&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_ENGDOC ."apps/wps/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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