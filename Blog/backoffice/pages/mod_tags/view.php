<div class="container-fluid padded">
    <div class="row-fluid">
        <div class="box">
            <div class="box-header">
                <div class="title">Tags Artikel</div>
                <ul class="box-toolbar">
                    <li class="toolbar-link">
                        <a href="#" data-toggle="dropdown"><i class="icon-cog"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-plus-sign"></i> Add</a></li>
                            <li><a href="#"><i class="icon-remove-sign"></i> Remove</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="box-content padded">
                <div class="row-fluid">

                    <?php
                    if ($_GET['act'] == 'edit') {
                        $data = $query->get_tag($_GET['id']);
                        ?>

                        <div class="span6 separate-sections">
                            <form class="form-horizontal" method="POST" action="?page=aksi_tags">
                                <div class="form-group">
                                    <label class="control-label span3">Nama Tag :</label>
                                    <div class="span9">
                                        <input type="hidden" name="id" value="<?php echo $data[id_tag]; ?>"> 
                                        <input type="text" name="nama_tag" value="<?php echo $data[nama_tag]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="span4 separate-sections" style="margin-top: 100px;">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-blue" name="edit">Simpan</button>
                                        <button type="button" class="btn btn-default">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php } else { ?>

                        <div class="span6 separate-sections">
                            <form class="form-horizontal" method="POST" action="?page=aksi_tags">
                                <div class="form-group">
                                    <label class="control-label span3">Nama tag :</label>
                                    <div class="span9">
                                        <input type="text" name="nama_tag" class="validate[required]" data-prompt-position="topLeft">
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="span4 separate-sections" style="margin-top: 100px;">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-blue" name="save">Simpan</button>
                                        <button type="button" class="btn btn-default">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php } ?>

                    <div class="span6 separate-sections">
                        <form class="form-horizontal fill-up validatable">
                            <div class="box">
                                <div class="box-content">
                                    <table class="table dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"">
                                        <thead>
                                            <tr>
                                                <td style="width: 8%"><input type="checkbox" id="check-all"></td>
                                                <td style="width: 72%">Nama tag</td>
                                                <td style="width: 20%; text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $data = $query->view_tag();
                                            foreach ($data as $row) {

                                                echo"<tr class='status-pending'>
                              <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                               <td class=' '>$row[nama_tag]</td>";

                                                echo"<td class=' last' style='text-align:center;'>
                                    <a href='?page=tags&act=hapus&id=$row[id_tag]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus tag $row[nama_tag] ?')\"></i></a>
                                    </td>
                                </tr>";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
// Proses Hapus
if ($_GET['act'] == 'hapus') {
    $id = $_GET['id'];
    $query->hapus_tag($id);
     // Log Aktifitas
    $query->log($_SESSION[id_user],'Menghapus daftar tag artikel',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='?page=tags';</script>";
}