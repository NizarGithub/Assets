<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(500).animate({scrollTop:130}, 700);
	});
});
</script>
<div class="row">
    <div class="span16">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover  tablesorter">
                    <thead>
                        <tr style="background: #92e8b8; border-bottom: 3px solid #81d1a5">
                            <th style='border-radius: 5px 0px 0px 0px;' width="5%">#</th>
                            <th data-priority="1">Topik Agenda</th>
                            <th width="15%" data-priority="1">Tanggal</th>
                            <th width="30%" data-priority="1">Keterangan</th>
                            <th width="10%" data-priority="1">Aktif</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style=\"border-radius: 0px 10px 0px 0px;\"  width='8%' data-priority='3'>Tindakan</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('agenda','id_agenda','DESC');
                        $no = 1;
                        $tgl_now = date("Y-m-d");
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if($rows->aktif=='Y') {
                                $aktif = "<span class='badge badge-success'>Yes</span>";
                            } else {
                                $aktif = "<span class='badge badge-important'>No</span>";
                            }
                            if($no%2=='1') {
                                $bgrows = "style='background: #fff'";
                            } else {
                                $bgrows = "style='background: #ecfbf3'";
                            }

                            $datenow  = date("Y-m-d");
                            $dateline = $rows->tanggal;
                            $selisih  = dateLine($datenow, $dateline);
                            if($selisih=='0') {
                                $tdtabel = "style='background: #6bafee; color: #fff'";
                                $stat_tanggal = "<strong>".tanggal($rows->tanggal)."</strong> <br><small>Sekarang / hari ini</small>";
                            } else if($selisih > 0) {
                                $tdtabel = "style='background: #84f7a7;'";
                                $stat_tanggal = "".tanggal($rows->tanggal)."<br><small>".$selisih." hari mendatang</small>";
                            } else {
                                $tdtabel = "style='background: #f98d94;'";
                                $stat_tanggal = "<strike>".tanggal($rows->tanggal)."</strike> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                            }



                            if(LEVEL_USER=='1'){
                        echo "<tr $bgrows>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='topik' title='Edit Edisi' id='".$rows->id_agenda."'>".$rows->topik."</a></td>"
                            . "<td $tdtabel>".$stat_tanggal."</td>
                            <td><a class='line_edit' data-rel='keterangan' data-type='textarea' title='Edit Keterangan' id='".$rows->id_agenda."'>".html_entity_decode($rows->keterangan)."</a></td>
                            <td>".$aktif."</td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=info&media_app=agenda_rapat&action=edit_agenda&id=".$rows->id_agenda."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=info&media_app=agenda_rapat&action=hapus_agenda&id_agenda=".$rows->id_agenda."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                              echo "<tr $bgrows>
                            <td>$no.</td>
                            <td>$rows->topik</td>"
                            . "<td>".$stat_tanggal."</td>
                            <td>".html_entity_decode($rows->keterangan)."</td>
                            <td>".$aktif."</td>
                           
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
               url: "<?php echo APP_INFO ."apps/agenda_rapat/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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