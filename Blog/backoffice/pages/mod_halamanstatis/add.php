<?php
$module = 'halamanstatis';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[tambah] == 'Y') {
    ?>

    <div class="container-fluid padded">
        <div class="box">
            <div class="box-header">
                <div class="title">Halaman Statis</div>
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
                    <div class="span12 separate-sections">
                        <form class="form-horizontal fill-up validatable" enctype="multipart/form-data" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Nama Halaman :</label>
                                <div class="span10">
                                    <input type="text" name="nama" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label span2">Isi Halaman :</label>
                                    <div class="span10">
                                        <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="isi" style='width: 600px; height: 350px;'></textarea>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label span2">Gambar :</label>
                                        <div class="span4">
                                            <div class="uploader"><input type="file" name="picture"><span class="filename" style="user-select: none;">No file selected
                                                </span><span class="action" style="user-select: none;">+</span></div>
                                            <span class="help-block note"><br><i class="icon-required"></i>Format gambar (*.jpg, *.png).</span><br>
                                        </div>
                                    </div>
                            
                                    <div class="span10 separate-sections pull-right" style="margin-top: 100px;">
                                        <div class="form-group">
                                            <button type="submit" name="save" class="btn btn-blue">Simpan</button>
                                            <button type="button" class="btn btn-default">Batal</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

                <?php
            } elseif ($_SESSION[level_user] == 'admin') {
                ?>
           <div class="container-fluid padded">
        <div class="box">
            <div class="box-header">
                <div class="title">Halaman Statis</div>
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
                    <div class="span12 separate-sections">
                        <form class="form-horizontal fill-up validatable" enctype="multipart/form-data" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Nama Halaman :</label>
                                <div class="span10">
                                    <input type="text" name="nama" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label span2">Isi Halaman :</label>
                                    <div class="span10">
                                        <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="isi" style='width: 600px; height: 350px;'></textarea>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label span2">Gambar :</label>
                                        <div class="span4">
                                            <div class="uploader"><input type="file" name="picture"><span class="filename" style="user-select: none;">No file selected
                                                </span><span class="action" style="user-select: none;">+</span></div>
                                            <span class="help-block note"><br><i class="icon-required"></i>Format gambar (*.jpg, *.png).</span><br>
                                        </div>
                                    </div>
                            
                                    <div class="span10 separate-sections pull-right" style="margin-top: 100px;">
                                        <div class="form-group">
                                            <button type="submit" name="save" class="btn btn-blue">Simpan</button>
                                            <button type="button" class="btn btn-default">Batal</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

                            
                            <?php
                        } else {
                            echo "error";
                        }
                                                
                        $nama = $_POST['nama'];
                        $isi  = $_POST['isi'];

                        $file = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir = "../picture/halamanstatis/";
                        $path = $dir . $filename;

                        if (isset($_POST['save'])) {

                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->tambah_halamanstatis($nama, $isi, $tgl_sekarang, $file);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Menambahkan suatu halaman statis',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=halamanstatis';</script>";
                            } else {

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->tambah_halamanstatis($nama, $isi, $tgl_sekarang, $filename);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Menambahkan suatu halaman statis',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=halamanstatis';</script>";
                                }
                            }
                        }