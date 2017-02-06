<?php
$module = 'Artikel';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[tambah] == 'Y') {
    ?>

    <div class="container-fluid padded">
        <div class="box">
            <div class="box-header">
                <div class="title">Artikel</div>
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
                        <form class="form-horizontal fill-up validatable" action="" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Judul :</label>
                                <div class="span10">
                                    <input type="text" name="judul" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label span2">Headline :</label>
                                <div class="span10">
                                    <div class="span6">
                                        <div class="dashboard-stats small">
                                            <ul class="inline">
                                                <li class="glyph"><input type="radio" value="Y" name="headline"></li>
                                                <li>Ya</li>
                                                <li class="glyph"><input type="radio" value="N" name="headline"></li>
                                                <li>Tidak</li>
                                            </ul>
                                        </div>
                                        <span class="help-block note"><br><i class="icon-required"></i>Apabila artikel ada gambarnya dan ingin dijadikan headline, pilih Headline = Y.</span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span2">Kategori :</label>
                                    <div class="span10">
                                        <select class="select2-container select2-container-multi chzn-select" name="kategori">
                                            <option value="0">Pilih Kategori</option>
                                            <?php
                                            // pilihan kategori
                                            $kategori = $query->kategori_aktif();
                                            foreach ($kategori as $row) {
                                                echo" <option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                            }
                                            ?>
                                        </select>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span2">Isi Artikel :</label>
                                    <div class="span10">
                                        <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="artikel" style='width: 600px; height: 350px;'></textarea>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span2">Tags :</label>
                                    <div class="span10">
                                        <select multiple="multiple" name="tags[]" placholder="Pilih Tags" class="select2-container select2-container-multi chzn-select" tabindex="-1">
                                            <?php
                                            // Pilihan tags
                                            $tag = $query->view_tag();
                                            foreach ($tag as $row) {
                                                echo" <option value='$row[nama_tag]'>$row[nama_tag]</option>";
                                            }
                                            ?>
                                        </select>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                 <div class="form-group">
                                        <label class="control-label span2">Sumber :</label>
                                        <div class="span10">
                                            <input type="text" name="sumber" data-prompt-position="topLeft">
                                            <span class="help-block note"><i class="icon-required"></i></span><br>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label class="control-label span2">Publish :</label>
                                    <div class="span10">
                                        <div class="span6">
                                            <div class="dashboard-stats small">
                                                <ul class="inline">
                                                    <li class="glyph"><input type="radio" value="Y" name="publish"></li>
                                                    <li>Ya</li>
                                                    <li class="glyph"><input type="radio" value="N" name="publish"></li>
                                                    <li>Tidak</li>
                                                </ul>
                                            </div>
                                            <span class="help-block note"><br><i class="icon-required"></i>Apabila artike ingin dipublikasikan, pilih Publish = Y.
                                            </span><br><br>
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
                                            <button type="submit" class="btn btn-green">Simpan ke Draft</button>
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
                            <div class="title">Artikel</div>
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
                                    <form class="form-horizontal fill-up validatable" action="" enctype="multipart/form-data" method="POST">
                                        <div class="form-group">
                                            <label class="control-label span2">Judul :</label>
                                            <div class="span10">
                                                <input type="text" name="judul" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label span2">Headline :</label>
                                            <div class="span10">
                                                <div class="span6">
                                                    <div class="dashboard-stats small">
                                                        <ul class="inline">
                                                            <li class="glyph"><input type="radio" value="Y" name="headline"></li>
                                                            <li>Ya</li>
                                                            <li class="glyph"><input type="radio" value="N" name="headline"></li>
                                                            <li>Tidak</li>
                                                        </ul>
                                                    </div>
                                                    <span class="help-block note"><br><i class="icon-required"></i>Apabila artikel ada gambarnya dan ingin dijadikan headline, pilih Headline = Y.</span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Kategori :</label>
                                                <div class="span10">
                                                    <select class="select2-container select2-container-multi chzn-select" name="kategori">
                                                        <option value="0">Pilih Kategori</option>
                                                        <?php
                                                        // pilihan kategori
                                                        $kategori = $query->kategori_aktif();
                                                        foreach ($kategori as $row) {
                                                            echo" <option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Isi Artikel :</label>
                                                <div class="span10">
                                                    <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="artikel" style='width: 600px; height: 350px;'></textarea>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Tags :</label>
                                                <div class="span10">
                                                    <select multiple="multiple" name="tags[]" placholder="Pilih Tags" class="select2-container select2-container-multi chzn-select" tabindex="-1">
                                                        <?php
                                                        // Pilihan tags
                                                        $tag = $query->view_tag();
                                                        foreach ($tag as $row) {
                                                            echo" <option value='$row[nama_tag]'>$row[nama_tag]</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                    <label class="control-label span2">Sumber :</label>
                                                    <div class="span10">
                                                        <input type="text" name="sumber" data-prompt-position="topLeft">
                                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Publish :</label>
                                                <div class="span10">
                                                    <div class="span6">
                                                        <div class="dashboard-stats small">
                                                            <ul class="inline">
                                                                <li class="glyph"><input type="radio" value="Y" name="publish"></li>
                                                                <li>Ya</li>
                                                                <li class="glyph"><input type="radio" value="N" name="publish"></li>
                                                                <li>Tidak</li>
                                                            </ul>
                                                        </div>
                                                        <span class="help-block note"><br><i class="icon-required"></i>Apabila artike ingin dipublikasikan, pilih Publish = Y.
                                                        </span><br><br>
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
                                                        <button type="submit" class="btn btn-green">Simpan ke Draft</button>
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
                        ?>

                        <?php
                        $id_user = $_SESSION['id_user'];
                        $kategori = $_POST['kategori'];
                        $judul = $_POST['judul'];
                        $judul_seo = seo_title($judul);
                        $headline = $_POST['headline'];
                        $artikel = $_POST['artikel'];
                        $tags = $_POST['tags'];
                        $tag = implode(',', $tags);
                        $publish = $_POST['publish'];
                        $sumber= $_POST['sumber'];


                        $file = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir = "../picture/artikel/";
                        $path = $dir . $filename;

                        if (isset($_POST['save'])) {

                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->tambah_artikel($kategori, $id_user, $judul, $judul_seo, $headline, $artikel, $hari_ini, $tgl_sekarang, $jam_sekarang, $file, $tag, $publish, $sumber);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Menulis sebuah artikel',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=artikel';</script>";
                            } else {

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->tambah_artikel($kategori, $id_user, $judul, $judul_seo, $headline, $artikel, $hari_ini, $tgl_sekarang, $jam_sekarang, $filename, $tag, $publish, $sumber);
                                    // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Menulis sebuah artikel',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=artikel';</script>";
                                }
                            }
                        }