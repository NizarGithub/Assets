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
    $(window).bind('scroll', function(){
            if($(this).scrollTop() > 220) {
                $("#sidebar-pb").addClass("sidebar-fixed");
            }
            if($(this).scrollTop() < 219){
                $("#sidebar-pb").removeClass("sidebar-fixed");
            }
    });
	$(window).on('load', function(){
		$('html, body').delay(8000).animate({scrollTop:230}, 1000);
	});
});
</script>

<div class="row">
    <div class="span5">
         <div class="col-md-5">
            <div class="panel panel-primary text-center no-boder bg-color-pink">
                <br>
                <i style="font-size: 29px;" class="icon-large icon-folder-open"></i>
                    <h3><?php echo format_size(folder_size('uploaded/pink_book'));?></h3>
                <div class="panel-footer back-footer-pink">
                   Total ukuran folder pink book
                </div>
            </div>
        </div>
        <br>
                <form id="sidebar-pb" method="post" action="admin.php?mod_apps=user&media_app=user_level&action=aksi_level">
                    <div class="blockoff-right">
                        <ul id="person-list" class="nav nav-list" style="border-radius: 10px;">
                            <li class="nav-header">Pilih Kategori Buku</li>
                            <li class="<?php if(empty($_GET['id_cat'])) echo 'active';?>" >
                                <a  style='border-radius: 10px;' id="view-all" href="admin.php?mod_apps=e-book&media_app=pink_book">
                                    <i class="icon-chevron-right pull-right"></i>
                                    <b>View All</b>
                                </a>
                            </li>
                            <?php
                            $cat_book = $ARSql->getAll('cat_book');
                            while($rows_cat = $ARSql->mf_object($cat_book)) {
                                $qJumlahPB  = $ARSql->query("SELECT * FROM pink_book WHERE id_cat='$rows_cat->id_cat'");
                                $dJumlahPB  = $ARSql->numRows($qJumlahPB);
                                if($dJumlahPB > 0) {
                                    $jumlah = "<strong><span class='pull-right'>$dJumlahPB</span></strong>";
                                }
                                else {
                                    $jumlah = "";
                                }
                                $active = ($_GET['id_cat']==$rows_cat->id_cat ? 'class=active' : '');
                                $folder = ($_GET['id_cat']==$rows_cat->id_cat ? 'class="icon-folder-open"' : 'class="icon-folder-close"');

                                echo "<li $active>
                                      <a style='border-radius: 10px;' href='admin.php?mod_apps=e-book&media_app=pink_book&id_cat=".$rows_cat->id_cat."'>
                                            <i $folder></i>
                                            ".$rows_cat->name."
                                            $jumlah
                                        </a>
                                  </li>";
                            }
                            ?>
                        </ul>
                    </div>
                     <?php
                    if(LEVEL_USER=='1'){
                    echo"<span class='badge badge-important'>Others Action !!</span>&nbsp;Add more book categories :
                    <br><p></p><center><a href='#add-cat' data-toggle='modal' class='btn btn-small'><i class='icon-plus'></i> New category</a></center>";
                    }else{
                    echo "<span class='badge badge-info'>Silahkan filter data buku pink dengan kategori.</span>";
                    }
                    ?>
                </form>
    </div>
    <div class="span11">
        <?php
        if(empty($_GET['id_cat'])) {
            echo "<div class='alert alert-info'><h3>All Category :</h3>
                <p>Daftar pink book dalam semua kategori</p></div>";
        } else {
            $qCPB = $ARSql->getOne('cat_book','id_cat',$_GET[id_cat]);
            echo "<div class='alert alert-info'><h3>Category : $qCPB->name</h3>
                    <p>Daftar pink book dalam kategori $qCPB->name</p></div>";
        }
        if(empty($_GET['id_cat'])) {
            $qPB = $ARSql->getAll('pink_book','id_pb','DESC');
        } else {
            $qPB = $ARSql->query("SELECT * FROM pink_book WHERE id_cat='$_GET[id_cat]'");
        }
        $jumlahPB = $ARSql->numRows($qPB);
        if($jumlahPB > 0 ) {
        ?>
            <div  id="pink-book" class="box-content box-table">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover table-bordered tablesorter">
                    <thead>
                        <tr style='background: #ff99ff'>
                            <th width="5%">#</th>
                            <th style='border-left: none; background: #ff99ff' data-priority="1">File Download</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-left: none;' width='13%' data-priority='3'>Action</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qPB)) {
                        if($no%2=='1') {
                            $bgrows = "#fff";
                        } else {
                            $bgrows = "#fef0fe";
                        }
                        echo "<tr>
                            <td>$no.</td>
                                    <td style='background: $bgrows; border-right: none;'><a href='download.php?dir=pink_book&fname=".$rows->filename."'><i class='icon-file'></i>&nbsp;&nbsp;".hideExt($rows->filename)."</a></td>";
                             if(LEVEL_USER=='1'){
                            echo"<td class='td-actions' style='border-left: none; background: $bgrows'>
                                <a href='admin.php?mod_apps=e-book&media_app=pink_book&action=edit_pbook&id=".$rows->id_pb."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=pink_book&action=hapus_pbook&id_pb=".$rows->id_pb."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                        }else{
                            echo"</tr>";
                        }
                        $no++;   
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } else {
            echo "<div class='alert alert-danger'><h3>Data tidak ditemukan</h3>
                    <p>Tidak ada data pink book yang berhasil dimuat...</p>
                 </div>";
        }
        ?>
    </div>
</div>
<div id="add-cat" class="modal fade" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog">          
        <div>
            <center><h2>Tambah Kategori Buku</h2></center>
            </div>
        <form action="admin.php?mod_apps=e-book&media_app=pink_book&action=aksi_pbook" method="POST"> 
        <div class="modal-content">
                 <div class="modal-body">
                     <div class="alert alert-success">
                         <div class='form-group'><label class='control-label col-lg-4'>Nama Kategori</label>
                             
                             <input required type="text" name="nama" class="form-control">
                         </div>
                         </div>
                         
                     </div> 
                     </div>
            <div class="modal-footer">
                <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                    Tutup
                </button>
                <button type="submit" name="submit_add_cat" class="btn btn-primary btn-sm">
                    Simpan
                </button>
            </div>
            </form>
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
               url: "<?php echo APP_EBOOK ."apps/pink_book/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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