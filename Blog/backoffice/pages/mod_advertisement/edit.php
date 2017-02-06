<?php
$id = $_GET['id'];
$row = $query->get_advertisement($id);

$module = 'advertisement';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[edit] == 'Y') {
    ?>

    <div class="container-fluid padded">
        <div class="box">
            <div class="box-header">
                <div class="title">Advertisement</div>
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
                    <div class="span8 separate-sections">
                        <form class="form-horizontal fill-up validatable" enctype="multipart/form-data" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Judul :</label>
                                <div class="span10">
                                <input type="hidden" name="id" value="<?php echo $row[id_ads]; ?>">
                                    <input type="text" name="judul" value="<?php echo $row[judul];?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label span2">URL :</label>
                                <div class="span10">
                                    <input type="text" name="url" value="<?php echo $row[url];?>" class="validate[required]" data-prompt-position="topLeft">
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
                                                        <img src='../picture/advertisement/$row[gambar]' alt='' />
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
                <div class="title">Advertisement</div>
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
                    <div class="span8 separate-sections">
                        <form class="form-horizontal fill-up validatable" enctype="multipart/form-data" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Judul :</label>
                                <div class="span10">
                                <input type="hidden" name="id" value="<?php echo $row[id_ads]; ?>">
                                    <input type="text" name="judul" value="<?php echo $row[judul];?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label span2">URL :</label>
                                <div class="span10">
                                    <input type="text" name="url" value="<?php echo $row[url];?>" class="validate[required]" data-prompt-position="topLeft">
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
                                                        <img src='../picture/advertisement/$row[gambar]' alt='' />
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
                        $judul= $_POST['judul'];
                        $url  = $_POST['url'];

                        $file = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir = "../picture/advertisement/";
                        $path = $dir . $filename;

                         if (isset($_POST['save'])) {
                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->edit_advertisement2($id, $judul, $url);
                                // Log Aktifitas
                                $query->log($_SESSION[id_user],'Mengubah data advertisement',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=advertisement';</script>";
                            } else {

                                $thumb = $query->get_advertisement($_GET['id']);
                                if ($thumb['gambar'] != '') {
                                    unlink("../picture/advertisement/$thumb[gambar]");
                                }

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->edit_advertisement($id, $judul, $url, $filename);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Mengubah data advertisement',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=advertisement';</script>";
                                }
                            }
                        }