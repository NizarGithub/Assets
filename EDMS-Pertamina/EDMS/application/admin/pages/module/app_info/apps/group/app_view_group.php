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
                    Group Pegawai
                </h5>
            </div>
            <div class="box-content box-table">
                <table id="sample-table" class="table table-hover table-bordered table-striped tablesorter">
                    <thead>
                        <tr>
                            <th width="8%">#</th>
                            <th>Nama Group</th>
                            <th width="10%" class="td-actions">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qgroup = $ARSql->getAll('group_pegawai','id_group','ASC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qgroup)) {
                        if($rows->id_group==$_GET['id']) {
                            $statrow = "class='error'";
                        } else {
                            $statrow = "";
                        }
                        echo "<tr $statrow>
                            <td>$no.</td>
                            <td>".$rows->nama."<br>
                                <small class='text-info'>Ket : ".$rows->ket."</small></td>";
                        echo "<td class='td-actions'>";
                            echo "<a href='admin.php?mod_apps=info&media_app=group&action=edit_group&id=".$rows->id_group."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='conDelete();' href='admin.php?mod_apps=info&media_app=group&action=hapus_group&id=".$rows->id_group."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>&nbsp;&nbsp;";
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
    if($_GET['action']=='edit_group') {
    $id_group = validasi($_GET['id'], 'xss');
    $data     = $ARSql->getOne('group_pegawai','id_group',$id_group);
    ?>
    <div class="span6">
        <div class="box" style="position: fixed">
            <div class="box-header">
                <i class="icon-book"></i>
                <h5>Edit Group</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=info&media_app=group&action=aksi_group">
                    <p>Edit Group Pegawai</p>
                    <div class="input-prepend">
                        <input type="hidden" name="id_group" value="<?php echo $id_group;?>">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input value="<?php echo $data->nama;?>" name="nama" required class="span4" type="text" placeholder="Nama Group">
                    </div>
                    <br><br>
                    <p>Keterangan</p>
                    <div class="input-prepend">
                        <textarea name="keterangan" required class="span5" placeholder="Keterangan Group"><?php echo $data->ket;?></textarea>
                    </div>
                    <br><br>
                    <div class="control-group">
                        <button type="submit" class="btn btn-success" name="submit_edit"><i class="icon-ok"></i> Simpan</button> &nbsp;&nbsp;
                        <a class="btn btn-default" href="admin.php?mod_apps=info&media_app=group">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="span6">
        <div class="box" style="position: fixed">
            <div class="box-header">
                <i class="icon-book"></i>
                <h5>Form Group</h5>
            </div>
            <div class="box-content">
                <form class="form-inline" method="post" action="admin.php?mod_apps=info&media_app=group&action=aksi_group">
                    <p>Tambah Group Pegawai</p>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input name="nama" required class="span4" type="text" placeholder="Nama Group">
                    </div>
                    <br><br>
                    <p>Keterangan</p>
                    <div class="input-prepend">
                        <textarea name="keterangan" required class="span5" placeholder="Keterangan Group"></textarea>
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