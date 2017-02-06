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
                   Alat Tulis Kantor <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_atk" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_atk" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
                
            </div>
            <div class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="30%" data-priority="1">Nama</th>
                            <th data-priority="1" width="10%">Jumlah</th>
                            <th data-priority="1">Keterangan</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='8%' data-priority='3'>Tindakan</th>";
                             }else{
                                 
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('atk');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='nama' title='Edit Nama' id='".$rows->id_atk."'>".$rows->nama."</a></td>
                            <td><a class='line_edit' data-rel='jumlah' title='Edit Jumlah' id='".$rows->id_atk."'>".$rows->jumlah."</a></td>
                            <td><a class='line_edit' data-rel='keterangan' data-type='textarea' title='Edit Keterangan' id='".$rows->id_atk."'>".$rows->keterangan."</a></td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=report&media_app=atk&action=edit_atk&id=".$rows->id_atk."'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=report&media_app=atk&action=hapus_atk&id=".$rows->id_atk."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;
                            </td>
                        </tr>";
                            }else{
                         echo "<tr>
                            <td>$no.</td>
                            <td>$rows->nama</td>
                            <td>$rows->jumlah</td>
                            <td>$rows->keterangan</td>
                           
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
               url: "<?php echo APP_REPORT ."apps/atk/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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