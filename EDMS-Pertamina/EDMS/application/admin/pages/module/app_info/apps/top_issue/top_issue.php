<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(500).animate({scrollTop:180}, 700);
	});
});
</script>
<div class="row">
    <div class="span16">
        <div class="box">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    Top Issue <?php pertamina();?>
                </h5><a href="system/function/download/media_konten.php?type=excel&mod_app=app_issue" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_issue" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a></div>
                 
            <div id="#scroll" class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table border="0" id="filter_tabel" cellpadding="0" cellspacing="0" id="tech-companies-1" class="table table-small-font table-hover table-striped tablesorter">
                    <thead>
                        <tr style="background: #e78394; border-bottom: 3px solid #d56074; border-top: none">
                            <th style='border-radius: 5px 0px 0px 0px;' width="3%">#</th>
                            <th width="10%" data-priority="1">Tag No</th>
                            <th width="15%" data-priority="1">Problems</th>
                            <th width="15%" data-priority="1">Criticality & Consequency</th>
                            <th width="15%" data-priority="1">Rtl & Target</th>
                            <th width="17%" data-priority="1">Status</th>
                            <th width="5%" data-priority="3">Trafic</th>
                             <?php
                             if(LEVEL_USER=='1'){
                                 echo "<th width='5%' data-priority='3'>Pic</th>";
                                 echo"<th style='border-radius: 0px 30px 0px 0px;'  width='8%' data-priority='3'>Action</th>";
                             } else {
                                 echo "<th style='border-radius: 0px 10px 0px 0px;' width='5%' data-priority='3'>Pic</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('top_issue');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                        if($no%2=='1') {
                            $bgrows = "style='background: #f9f9f9'";
                        } else {
                            $bgrows = "style='background: #fce9ec'";
                        }
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='tag_no' title='Edit Tag Number' id='".$rows->id_issue."'> ".$rows->tag_no."</a></td>
                            <td><a class='line_edit' data-rel='problems' data-type='textarea' title='Edit Problems' id='".$rows->id_issue."'>".html_entity_decode($rows->problems)."</a></td>
                            <td><a class='line_edit' data-rel='critic_consq' data-type='textarea' title='Criticality & Consequency' id='".$rows->id_issue."'>".html_entity_decode($rows->critic_consq)."</a></td>
                            <td><a class='line_edit' data-rel='rtl_target' data-type='textarea' title='Edit Rtl & target' id='".$rows->id_issue."'>".$rows->rtl_target."</a></td>
                            <td><a class='line_edit' data-rel='status' data-type='textarea' title='Edit Status' id='".$rows->id_issue."'>".$rows->status."</a></td>";
                        if($rows->trafic=='1') {
                            echo "<td><span class='badge' style='background: blue'>&nbsp;</span></td>";
                        } else if($rows->trafic=='2') {
                            echo "<td><span class='badge' style='background: #00ff00'>&nbsp;</span></td>";
                        } else if($rows->trafic=='3') {
                            echo "<td><span class='badge badge-warning' style='background: yellow'>&nbsp;</span></td>";
                        } else {
                            echo "<td><span class='badge' style='background: red' >&nbsp;</span></td>";
                        }
                            echo "<td>".$rows->pic."</td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=info&media_app=top_issue&action=edit_issue&id=".$rows->id_issue."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=info&media_app=top_issue&action=hapus_issue&id=".$rows->id_issue."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                        echo "<tr>
                            <td>$no.</td>
                            <td>$rows->tag_no</td>
                            <td>".html_entity_decode($rows->problems)."</td>
                            <td>".html_entity_decode($rows->critic_consq)."</td>
                            <td>$rows->rtl_target</td>
                            <td>$rows->status</td>";
                        if($rows->trafic=='1') {
                            echo "<td><span class='badge badge-info'>&nbsp;</span></td>";
                        } else if($rows->trafic=='2') {
                            echo "<td><span class='badge badge-success'>&nbsp;</span></td>";
                        } else if($rows->trafic=='3') {
                            echo "<td><span class='badge badge-warning'>&nbsp;</span></td>";
                        } else {
                            echo "<td><span class='badge badge-important'>&nbsp;</span></td>";
                        }
                            echo "<td>".$rows->pic."</td>
                          
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
               url: "<?php echo APP_INFO ."apps/top_issue/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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