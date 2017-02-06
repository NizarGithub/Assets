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
    <div class="span10">
        <div class="box">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    Jenis NDT
                </h5>
            </div>
            <div class="box-content box-table">
                <table id="sample-table" class="table table-hover table-striped table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th width="10%" class="td-actions">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('jenis_ndt','id_jenis','ASC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if($rows->id_jenis==$_GET['id']) {
                                $statrow = "class='error'";
                            } else {
                                $statrow = "";
                            }
                            echo "<tr $statrow>
                            <td>$no.</td>
                            <td>$rows->nama</td>
                            <td>$rows->ket</td>";
                        echo "<td class='td-actions'>";
                       
                            echo "<a href='admin.php?mod_apps=ndt&media_app=jenis_ndt&action=edit_jenis&id=".$rows->id_jenis."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=ndt&media_app=jenis_ndt&action=hapus_jenis&id=".$rows->id_jenis."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>";
                        echo "</td></tr>";
                        $no++;   
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if($_GET['action']=='edit_jenis') {
    $id       = validasi($_GET['id'], 'xss');
    $data     = $ARSql->getOne('jenis_ndt','id_jenis',$id);
    ?>
    <div class="span6">
        <div class="box">
            <div class="box-header">
                <i class="icon-book"></i>
                <h5>Edit Jenis NDT</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=ndt&media_app=jenis_ndt&action=aksi_jenis">
                    <p>Edit Jenis NDT</p>
                    <div class="input-prepend">
                        <input type="hidden" name="id_jenis" value="<?php echo $id;?>">
                        <span class="add-on"><i class="icon-list-ol"></i></span>
                        <input value="<?php echo $data->nama;?>" name="a" required class="span5" type="text" placeholder="Nama">
                    </div>
                     <div class="input-prepend"><br>
                        <span class="add-on"><i class="icon-pencil"></i></span>
                        <textarea name="b" required class="span5" type="text" placeholder="Keterangan"> <?php echo $data->ket;?></textarea>
                    </div>
                    <br><br>
                    <div class="control-group">
                        <button type="submit" class="btn btn-success" name="submit_edit"><i class="icon-ok"></i> Simpan</button> &nbsp;&nbsp;
                        <a class="btn btn-default" href="admin.php?mod_apps=ndt&media_app=jenis_ndt">Batal</a>
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
                <h5>Form Jenis NDT</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=ndt&media_app=jenis_ndt&action=aksi_jenis">
                    <p>Tambah Jenis NDT</p>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-list-ol"></i></span>
                        <input name="a" required class="span5" type="text" placeholder="Nama">
                    </div>
                    <div class="input-prepend"><br>
                        <span class="add-on"><i class="icon-pencil"></i></span>
                        <textarea name="b" required class="span5" type="text" placeholder="Keterangan"></textarea>
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