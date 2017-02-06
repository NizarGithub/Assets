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
    <div class="span10">
        <div class="box pattern">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    Category Books
                </h5>
            </div>
            <div class="box-content box-table">
                <table id="sample-table" class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th width="10%" class="td-actions">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('cat_book','id_cat','ASC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                        if($rows->id_cat==$_GET['id']) {
                            $tr_stat = "class='error'";
                        } else {
                            $tr_stat = "";
                        }

                        echo "<tr $tr_stat>
                            <td>$no.</td>
                            <td>".$rows->name."</td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook&sub_act=edit_cat&id=".$rows->id_cat."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook&sub_act=hapus_cat&id=".$rows->id_cat."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;
                            </td>
                        </tr>";
                        $no++;   
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if($_GET['sub_act']=='edit_cat') {
    $id_level = validasi($_GET['id'], 'xss');
    $data     = $ARSql->getOne('cat_book','id_cat',$id_level);
    ?>
    <div class="span6">
        <div class="box">
            <div class="box-header">
                <i class="icon-book"></i>
                <h5>Edit Kategori</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook&sub_act=aksi_cat">
                    <p style="margin-top: 5px; margin-bottom: 15px;"><span class="badge badge-important">Edit Kategori Buku</span></p>
                    <div class="input-prepend">
                        <input type="hidden" name="id_cat" value="<?php echo $id_level;?>">
                        <span class="add-on"><i class="icon-list-ol"></i></span>
                        <input value="<?php echo $data->name;?>" name="nama_cat" required class="span5" type="text" placeholder="Nama kategori">
                    </div>
                    <br><br>
                    <div class="control-group">
                        <button type="submit" class="btn btn-danger" name="submit_edit"><i class="icon-ok"></i> Simpan</button>&nbsp;&nbsp;
                        <a class="btn btn-default" href="admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="span6">
        <div class="box">
            <div class="box-header">
                <i class="icon-book"></i>
                <h5>Form Kategori</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook&sub_act=aksi_cat">
                    <p style="margin-top: 5px; margin-bottom: 15px;"><span class="badge badge-success">Tambah Kategori Buku</span></p>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-list-ol"></i></span>
                        <input name="nama_cat" required class="span5" type="text" placeholder="Nama Kategori">
                    </div>
                    <br><br>
                    <div class="control-group">
                        <button type="submit" class="btn btn-success" name="submit_add"><i class="icon-ok"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div>