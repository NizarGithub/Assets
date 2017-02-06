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
                  Cleaning Tangki <?php pertamina();?>
                </h5>
                <a class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="20%" data-priority="1">Tag No</th>
                            <th width="20%" data-priority="1">Schedule</th>
                            <th data-priority="1">Keterangan</th>
                            <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='8%' data-priority='3'>Tindakan</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('cleaning');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            $datenow  = date("Y-m-d");
                            $dateline = $rows->schedule;
                            $selisih  = dateLine($datenow, $dateline);
                            if($selisih=='0') {
                                $tdtabel = "style='background: #6bafee; color: #fff'  ";
                                $stat_tanggal = "<strong>".tanggal($rows->schedule)."</strong>";
                            } else if($selisih > 0) {
                                $tdtabel = "style='background: #84f7a7;'";
                                $stat_tanggal = "".tanggal($rows->schedule)."";
                            } else {
                                $tdtabel = "style='background: #f98d94;'";
                                $stat_tanggal = "<strike>".tanggal($rows->schedule)."</strike> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                            }
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td $tdtabel><a class='line_edit' data-rel='tagno' title='Edit TagNumber' id='".$rows->id_cl."'>".$rows->tagno."</a></td>
                            <td $tdtabel>".$stat_tanggal."</td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' title='Edit Keterangan' id='".$rows->id_cl."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=report&media_app=cleaning_tangki&action=edit_tanki&id=".$rows->id_cl."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=cleaning_tangki&action=hapus_tanki&id=".$rows->id_cl."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                            }else{
                          echo "<tr>
                            <td>$no.</td>
                            <td>$rows->tagno</td>
                            <td>".tanggal($rows->schedule)."</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                           
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
               url: "<?php echo APP_REPORT ."apps/cleaning_tanki/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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