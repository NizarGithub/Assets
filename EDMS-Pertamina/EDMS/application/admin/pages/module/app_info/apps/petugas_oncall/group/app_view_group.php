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
        <div class="box pattern pattern-sandstone">
            <div class="box-header">
                <i class="icon-table"></i>
                <h5>
                    Level Pengguna
                </h5>
            </div>
            <div class="box-content box-table">
                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Level</th>
                            <th class="td-actions">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('user_level','id_level','ASC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                        echo "<tr>
                            <td>$no.</td>
                            <td>".$rows->level."</td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=user&media_app=user_level&action=edit_level&id=".$rows->id_level."' class='btn btn-small btn-info'>
                                    <i class='btn-icon-only icon-ok'></i>
                                </a>&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=user&media_app=user_level&action=hapus_level&id=".$rows->id_level."' class='btn btn-small btn-danger'>
                                    <i class='btn-icon-only icon-remove'></i>
                                </a>
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
    if($_GET['action']=='edit_level') {
    $id_level = validasi($_GET['id'], 'xss');
    $data     = $ARSql->getOne('user_level','id_level',$id_level);
    ?>
    <div class="span6">
        <div class="box">
            <div class="box-header">
                <i class="icon-book"></i>
                <h5>Edit Level</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=user&media_app=user_level&action=aksi_level">
                    <p>Edit Level Pengguna</p>
                    <div class="input-prepend">
                        <input type="hidden" name="id_level" value="<?php echo $id_level;?>">
                        <span class="add-on"><i class="icon-list-ol"></i></span>
                        <input value="<?php echo $data->level;?>" name="nama_level" required class="span4" type="text" placeholder="Nama level">
                    </div>
                    <br><br>
                    <div class="control-group">
                        <button type="submit" class="btn btn-success" name="submit_edit"><i class="icon-ok"></i> Simpan</button>
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
                <h5>Form Level</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=user&media_app=user_level&action=aksi_level">
                    <p>Tambah Level Pengguna</p>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-list-ol"></i></span>
                        <input name="nama_level" required class="span4" type="text" placeholder="Nama level">
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