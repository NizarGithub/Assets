<div class="container-fluid padded">
    <div class="row-fluid">
        <div class="box">
            <div class="box-header">
                <div class="title">Kategori Artikel</div>
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
                        $data = $query->get_kategori($_GET['id']);
                        ?>

                        <div class="span6 separate-sections">
                            <form class="form-horizontal" method="POST" action="?page=aksi_kategori">

                                <div class="form-group">
                                    <label class="control-label span3">Nama Kategori :</label>
                                    <div class="span9">
                                        <input type="hidden" name="id" value="<?php echo $data[id_kategori]; ?>"> 
                                        <input type="text" name="nama_kategori" value="<?php echo $data[nama_kategori]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span3">Aktif :</label>
                                    <div class="span9">
                                        <div class="span4">
                                            <div class="dashboard-stats small">
                                                <ul class="inline">
                                                    <li class="glyph"><input type="radio" value="Y" name="aktif" <?php if ($data[aktif] == 'Y') {
                        echo checked;
                    } ?>></li>
                                                    <li>Ya</li>
                                                    <li class="glyph"><input type="radio" value="N" name="aktif" <?php if ($data[aktif] == 'N') {
                        echo checked;
                    } ?>></li>
                                                    <li>Tidak</li>
                                                </ul>
                                            </div>  
                                        </div>
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
                            <form class="form-horizontal" method="POST" action="?page=aksi_kategori">
                                <div class="form-group">
                                    <label class="control-label span3">Nama Kategori :</label>
                                    <div class="span9">
                                        <input type="text" name="nama_kategori" class="validate[required]" data-prompt-position="topLeft">
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span3">Aktif :</label>
                                    <div class="span9">
                                        <div class="span4">
                                            <div class="dashboard-stats small">
                                                <ul class="inline">
                                                    <li class="glyph"><input type="radio" name="aktif" value="Y"></li>
                                                    <li>Ya</li>
                                                    <li class="glyph"><input type="radio" name="aktif" value="N"></li>
                                                    <li>Tidak</li>
                                                </ul>
                                            </div>  
                                        </div>
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
                                                <td style="width: 62%">Nama Kategori</td>
                                                <td style="width: 10%">Aktif</td>
                                                <td style="width: 20%; text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $data = $query->view_kategori();
                                            foreach ($data as $row) {

                                                echo"<tr class='status-pending'>
                              <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                               <td class=' '>$row[nama_kategori]</td>";

                                                if ($row[aktif] == 'Y') {
                                                    echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                                } else {
                                                    echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                                }

                                                echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=kategori&act=edit&id=$row[id_kategori]' class='btn btn-xs btn-green'><i class='icon-pencil'></i></a>
                                    <a href='?page=kategori&act=hapus&id=$row[id_kategori]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus kategori $row[nama_kategori] ?')\"></i></a>
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
    $query->hapus_kategori($id);
     // Log Aktifitas
     $query->log($_SESSION[id_user],'Menghapus kategori artikel',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='?page=kategori';</script>";
}