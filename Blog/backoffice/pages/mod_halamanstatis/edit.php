<?php
$id = $_GET['id'];
$row = $query->get_halamanstatis($id);

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
                                <input type="hidden" name="id" value="<?php echo $row[id_halaman]; ?>">
                                    <input type="text" name="nama" value="<?php echo $row[judul];?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label span2">Isi Halaman :</label>
                                    <div class="span10">
                                        <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="isi" style='width: 600px; height: 350px;'><?php echo $row[isi_halaman] ?></textarea>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                  <div class="form-group">
                                        <label class="control-label span2">Gambar :</label>
                                        <div class="span4">
                                            <div class="uploader"><input type="file" name="picture"><span class="filename" style="user-select: none;">No file selected
                                                </span><span class="action" style="user-select: none;">+</span></div>
                                            <?php
                                            if ($row['gambar'] != '') {
                                                echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                        <img src='../picture/halamanstatis/$row[gambar]' alt='' />
                                                      </a>                        
                                                        <span class='help-block note'><br>Gambar : $row[gambar].</span><br>";
                                            } else {
                                                echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                        <img src='../assets/img/no_image.png' alt='' />
                                                      </a>                        
                                                        <span class='help-block note'><br>Tidak ada gambar.</span><br>";
                                            }
                                            ?>

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
                                <input type="hidden" name="id" value="<?php echo $row[id_halaman]; ?>">
                                    <input type="text" name="nama" value="<?php echo $row[judul];?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label span2">Isi Halaman :</label>
                                    <div class="span10">
                                        <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="isi" style='width: 600px; height: 350px;'><?php echo $row[isi_halaman] ?></textarea>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                  <div class="form-group">
                                        <label class="control-label span2">Gambar :</label>
                                        <div class="span4">
                                            <div class="uploader"><input type="file" name="picture"><span class="filename" style="user-select: none;">No file selected
                                                </span><span class="action" style="user-select: none;">+</span></div>
                                            <?php
                                            if ($row['gambar'] != '') {
                                                echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                        <img src='../picture/halamanstatis/$row[gambar]' alt='' />
                                                      </a>                        
                                                        <span class='help-block note'><br>Gambar : $row[gambar].</span><br>";
                                            } else {
                                                echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                        <img src='../assets/img/no_image.png' alt='' />
                                                      </a>                        
                                                        <span class='help-block note'><br>Tidak ada gambar.</span><br>";
                                            }
                                            ?>

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
                        
                        $id   = $_POST['id'];                    
                        $nama = $_POST['nama'];
                        $isi  = $_POST['isi'];

                        $file = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir = "../picture/halamanstatis/";
                        $path = $dir . $filename;

                         if (isset($_POST['save'])) {
                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->edit_halamanstatis2($id, $nama, $isi);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Mengubah halaman statis',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=halamanstatis';</script>";
                            } else {

                                $thumb = $query->get_halamanstatis($_GET['id']);
                                if ($thumb['gambar'] != '') {
                                    unlink("../picture/halamanstatis/$thumb[gambar]");
                                }

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->edit_halamanstatis($id, $nama, $isi, $filename);
                                     // Log Aktifitas
                                     $query->log($_SESSION[id_user],'Mengubah halaman statis',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=halamanstatis';</script>";
                                }
                            }
                        }