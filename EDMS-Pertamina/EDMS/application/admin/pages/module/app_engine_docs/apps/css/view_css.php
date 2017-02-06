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
		$('html, body').delay(500).animate({scrollTop:130}, 1000);
	});
});
</script>
<div class="row">
    <div class="span16">
             <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" class="table table-hover table-striped tablesorter">
                    <thead>
                        <tr style="background: #cccce3;  border-top: none; border-bottom: 2px solid #aeaecd">
                            <th style='border-radius: 5px 0px 0px 0px;' width="5%"><i class="icon-check"></i>&nbsp; #</th>
                            <th width="30%"data-priority="1">Edisi</th>
                            <th width="20%"data-priority="1">Tahun</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;' width='10%' data-priority='3'>Tindakan</th>";
                             }else{
                                 echo"<th style='border-radius: 0px 10px 0px 0px;' width='5%' data-priority='3'>Tindakan</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('css','id_css','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if($no%2=='1') {
                            $bgrows = "style='background: #f9f9f9'";
                            } else {
                                $bgrows = "style='background: #e2e2f5'";
                            }
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td><div class='checkbox'>
                                <label>
                                    <input type='checkbox'>&nbsp;$no.
                                </label>
                                </div>
                            </td>
                            <td><a class='line_edit' data-rel='edisi' title='Edit Edisi' id='".$rows->id_css."'>".$rows->edisi."</a></td>"
                            . "<td><a class='line_edit' data-rel='tahun' title='Edit Tahun' id='".$rows->id_css."'>".$rows->tahun."</a></td>
                            <td class='td-actions'>
                             <a href='download.php?dir=css&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
                                <a href='admin.php?mod_apps=engine-docs&media_app=css&action=edit_css&id=".$rows->id_css."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=engine-docs&media_app=css&action=hapus_css&id_css=".$rows->id_css."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                       echo "<tr>
                            <td><div class='checkbox'>
                                <label>
                                    <input type='checkbox'>&nbsp;$no.
                                </label>
                                </div>
                            </td>
                            <td><a class='line_edit' data-rel='edisi' title='Edit Edisi' id='".$rows->id_css."'>".$rows->edisi."</a></td>"
                            . "<td><a class='line_edit' data-rel='tahun' title='Edit Tahun' id='".$rows->id_css."'>".$rows->tahun."</a></td>
                            <td class='td-actions'>
                             <a href='download.php?dir=css&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp; &nbsp;
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
               url: "<?php echo APP_ENGDOC ."apps/css/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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