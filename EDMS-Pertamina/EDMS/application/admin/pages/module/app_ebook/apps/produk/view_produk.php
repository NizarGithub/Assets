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
                <div class="box">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    Produk <?php pertamina();?>
                </h5>
                <a href="system/function/download/media_konten.php?type=excel&mod_app=app_produk" class="btn btn-small btn-success btn-box-right"><i class="icon-download-alt"></i> Ms. Excel</a>
                <a href="system/function/download/media_konten.php?type=word&mod_app=app_produk" class="btn btn-small btn-info btn-box-right"><i class="icon-download-alt"></i> Ms. Word</a>
                      
            </div>
            <div class="box-content box-table"  style="padding: 5px">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-striped table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th data-priority="1">Merk</th>
                            <th data-priority="1">Fungsi</th>
                            <th width="15%" data-priority="1">Negara Asal</th>
                            <th width="14%" data-priority="1">Perushaan / Agent</th>
                            <th width="12%" data-priority="3">Contact Person</th>
                            <th width="20%" data-priority="3">Keterangan</th>
                           <?php
                             if(LEVEL_USER=='1'){
                             echo"<th  width='13%' data-priority='3'>Action</th>";
                             }else{
                              echo"<th  width='5%' data-priority='3'>Download</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('produk','id_prod','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if(LEVEL_USER=='1'){
                        echo "<tr>
                            <td>$no.</td>
                            <td><a class='line_edit' data-rel='merk' data=pk='1' title='Edit Merk' data-pk='1' id='".$rows->id_prod."'>".$rows->merk."</a></td>
                            <td><a class='line_edit' data-rel='fungsi'  data=pk='1' title='Edit Fungsi' data-pk='1' id='".$rows->id_prod."'>".$rows->fungsi."</a></td>
                            <td><a class='line_edit' data-rel='asal'  data=pk='1' title='Edit Asal Negara' data-pk='1' id='".$rows->id_prod."'>".$rows->asal."</a></td>
                            <td><a class='line_edit' data-rel='agent'  data=pk='1' title='Edit Perusahaan / Agent' data-pk='1' id='".$rows->id_prod."'>".$rows->agent."</a></td>
                            <td><a class='line_edit' data-rel='kontak'  data=pk='1' title='Edit Contact Person' data-pk='1' id='".$rows->id_prod."'>".$rows->kontak."</a></td>
                            <td><a class='line_edit' data-rel='ket' data-type='textarea' data=pk='1' title='Edit Keterangan' data-pk='1' id='".$rows->id_prod."'>".html_entity_decode($rows->ket)."</a></td>
                            <td class='td-actions'>
                                <a href='download.php?dir=produk&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;&nbsp;
                                <a href='admin.php?mod_apps=e-book&media_app=produk&action=edit_produk&id=".$rows->id_prod."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=produk&action=hapus_produk&id_prod=".$rows->id_prod."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                          echo "<tr>
                            <td>$no.</td>
                            <td>$rows->merk</td>
                            <td>$rows->fungsi</td>
                            <td>$rows->asal</td>
                            <td>$rows->agent</td>
                            <td>$rows->kontak</td>
                            <td>".html_entity_decode($rows->ket)."</td>
                            <td class='td-actions'  style='text-align: center'>
                                <a href='download.php?dir=produk&fname=".$rows->filename."' class='btn btn-small btn-success'><i class='icon-only icon-download-alt'></i></a>&nbsp;
                                
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
               url: "<?php echo APP_EBOOK ."apps/produk/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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