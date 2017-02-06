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
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-bordered table-striped tablesorter">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="29%" data-priority="1">Judul</th>
                            <th width="35%" data-priority="1">File Download</th>
                            <th width="18%" data-priority="1">Pengupload</th>
                            <?php
                             if(LEVEL_USER=='1' OR LEVEL_USER=='2'){
                             echo"<th  width='8%' data-priority='1'>Action</th>";
                             }else{
                             echo"<th  width='8%' data-priority='1'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('kursus','id_kurs','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            $pengupload = $ARSql->getOne('users','id_user',$rows->uploader);
                            if(LEVEL_USER=='1' OR LEVEL_USER=='2'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='materi' data=pk='1' title='Edit Judul' data-pk='1' id='".$rows->id_kurs."'>".$rows->materi."</a></td>"
                                . "<td>Download &nbsp;<i class='icon-download-alt'></i> &nbsp;<a href='download.php?dir=materi_kursus&fname=".$rows->filename."'>&nbsp;".$rows->filename."</a>
                                    <p><small>Ukuran file : ".format_size(filesize("uploaded/materi_kursus/$rows->filename"))."</small></p></td>
                            <td><i class='icon-user'></i> $pengupload->nama_lengkap</td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=e-book&media_app=materi_kursus&action=edit_materi&id=".$rows->id_kurs."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=materi_kursus&action=hapus_materi&id_kurs=".$rows->id_kurs."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                        echo "<tr>
                            <td>$no.</td>
                            <td>$rows->materi</td>"
                                . "<td>Download &nbsp;<i class='icon-download-alt'></i> &nbsp;<a href='download.php?dir=materi_kursus&fname=".$rows->filename."'>&nbsp;".$rows->filename."</a>
                                    <p><small>Ukuran file : ".format_size(filesize("uploaded/materi_kursus/$rows->filename"))."</small></p></td>
                                    <td><i class='icon-user'></i> $pengupload->nama_lengkap</td>

                                <td class='td-actions' style='text-align: center'>
                                <a href='download.php?dir=materi_kursus&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                                
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
               url: "<?php echo APP_EBOOK ."apps/materi_kursus/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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