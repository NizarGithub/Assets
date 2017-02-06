<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
    <div class="span16">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-striped table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="25%" data-priority="1">Deskripsi</th>
                            <th width="10%" data-priority="1">Perihal</th>
                            <th width="7%" data-priority="1">Tahun</th>
                            <th width="25%" data-priority="1">Keterangan</th>
                            <th width="18%" data-priority="1">Pengupload</th>
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
                        $qLevel = $ARSql->getAll('uu','id_uu','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            $pengupload = $ARSql->getOne('users','id_user',$rows->uploader);
                            if(LEVEL_USER=='1' OR LEVEL_USER=='2'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='description' data-type='textarea' data=pk='1' title='Edit Description' id='".$rows->id_uu."'>".html_entity_decode($rows->description)."</a></td>
                            <td><a class='line_edit' data-rel='perihal' title='Edit Perihal' id='".$rows->id_uu."'>".$rows->perihal."</a></td>
                            <td><a class='line_edit' data-rel='tahun' title='Edit Tahun' id='".$rows->id_uu."'>".$rows->tahun."</a></td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' data=pk='1' title='Edit Keterangan' id='".$rows->id_uu."'>".html_entity_decode($rows->ket)."</a></td>
                            <td><i class='icon-user'></i> $pengupload->nama_lengkap</td>
                            <td class='td-actions'>
                                <a href='download.php?dir=uu_pp&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=uu_pp&action=edit_uu_pp&id=".$rows->id_uu."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=uu_pp&action=hapus_uu_pp&id_uu=".$rows->id_uu."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                          echo "<tr>
                            <td>$no.</td>
                            <td>".html_entity_decode($rows->description)."</td>
                            <td>$rows->perihal</td>
                            <td>$rows->tahun</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td><i class='icon-user'></i> $pengupload->nama_lengkap</td>
                            <td class='td-actions'  style='text-align: center'>
                                <a href='download.php?dir=uu_pp&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                               
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
       $('.area_edit').editable();
       $(document).on('click','.editable-submit',function(){
            var f = $(this).closest('td').children('a').attr('data-rel');
            var x = $(this).closest('td').children('a').attr('id');
            var y = $('.input-sm').val();
            var z = $(this).closest('td').children('a');
            $.ajax({
               url: "<?php echo APP_EBOOK ."apps/uu_pp/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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