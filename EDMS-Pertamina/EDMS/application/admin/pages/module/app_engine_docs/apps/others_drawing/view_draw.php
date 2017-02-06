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
                    Others Drawing <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="20%" data-priority="1">Unit Drawing</th>
                            <th width="40" data-priority="1">Description</th>
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
                        $qLevel = $ARSql->getAll('drawing','id_draw','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='unit_draw' title='Edit Unit Drawing' id='".$rows->id_draw."'>".$rows->unit_draw." </a></td>
                            <td><a class='line_edit' data-rel='description' data-type='textarea' title='Edit Description' id='".$rows->id_draw."'>".$rows->description."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=others_drawing&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=engine-docs&media_app=others_drawing&action=edit_draw&id=".$rows->id_draw."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=engine-docs&media_app=others_drawing&action=hapus_draw&id=".$rows->id_draw."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                          echo "<tr>
                            <td>$no.</td>
                            <td>$rows->unit_draw</td>
                            <td>$rows->description</td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=others_drawing&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
               url: "<?php echo APP_ENGDOC ."apps/others_drawing/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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