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
                    Laporan Bulanan <?php pertamina();?>
                </h5>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="40%"data-priority="1">Deskripsi</th>
                            <th width="10%" data-priority="1">Bulan</th>
                            <th width="10%" data-priority="1">Tahun</th>
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
                        $qLevel = $ARSql->getAll('laporan_bulanan','id_lap','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='description' data-type='textarea' title='Edit Deskripsi' id='".$rows->id_lap."'>".html_entity_decode($rows->description)."</a></td>
                            <td><a class='line_edit' data-rel='bulan' title='Edit Bulan' id='".$rows->id_lap."'>".$rows->bulan."</a></td>
                            <td><a class='line_edit' data-rel='tahun' title='Edit Tahun' id='".$rows->id_lap."'>".$rows->tahun."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=laporan_bulanan&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=report&media_app=lap_bulanan&action=edit_lap_bulanan&id=".$rows->id_lap."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=lap_bulanan&action=hapus_lap_bulanan&id=".$rows->id_lap."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                            }else{
                          echo "<tr>
                            <td>$no.</td>
                            <td>".html_entity_decode($rows->description)."</td>
                            <td>$rows->bulan</td>
                            <td>$rows->tahun</td>
                            <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=laporan_bulanan&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
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
               url: "<?php echo APP_REPORT ."apps/laporan_bulanan/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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