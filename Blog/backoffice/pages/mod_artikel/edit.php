<?php
$id = $_GET['id'];
$artikel = $query->get_artikel($id);

$module = 'Artikel';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[edit] == 'Y') {
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
                                    <input type="hidden" name="id" value="<?php echo $artikel[id_artikel] ?>">
                                    <input type="text" name="judul" value="<?php echo $artikel[judul]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label span2">Headline :</label>
                                <div class="span10">
                                    <div class="span6">
                                        <div class="dashboard-stats small">
                                            <ul class="inline">
                                                <li class="glyph"><input type="radio" value="Y" <?php if ($artikel[headline] == 'Y') {
        echo "checked";
    } ?> name="headline"></li>
                                                <li>Ya</li>
                                                <li class="glyph"><input type="radio" value="N" <?php if ($artikel[headline] == 'N') {
        echo "checked";
    } ?> name="headline"></li>
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
                                                echo "<option value='" . $row['id_kategori'] . "'";
                                                echo $row['id_kategori'] == $artikel['id_kategori'] ? 'selected' : '';
                                                echo ">$row[nama_kategori]";
                                                echo "</option>";
                                            }
                                            ?>
                                        </select>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span2">Isi Artikel :</label>
                                    <div class="span10">
                                        <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="artikel" style='width: 600px; height: 350px;'><?php echo "$artikel[isi_artikel]"; ?></textarea>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label span2">Tags :</label>
                                    <div class="span10">
                                        <select multiple="multiple" name="tags[]" placholder="Pilih Tags" class="select2-container select2-container-multi chzn-select" tabindex="-1">
                                            <?php
                                            $option = GetSelected('tags', 'nama_tag', $artikel[tags], 'nama_tag');
                                            echo "$option";
                                            ?>    
                                        </select>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label span2">Sumber :</label>
                                        <div class="span10">
                                            <input type="text" name="sumber" value="<?php echo "$artikel[sumber]"; ?>"   data-prompt-position="topLeft">
                                            <span class="help-block note"><i class="icon-required"></i></span><br>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label class="control-label span2">Publish :</label>
                                    <div class="span10">
                                        <div class="span6">
                                            <div class="dashboard-stats small">
                                                <ul class="inline">
                                                    <li class="glyph"><input type="radio" value="Y" <?php if ($artikel[publish] == 'Y') {
                                                echo "checked";
                                            } ?> name="publish"></li>
                                                    <li>Ya</li>
                                                    <li class="glyph"><input type="radio" value="N" <?php if ($artikel[publish] == 'N') {
                                                echo "checked";
                                            } ?> name="publish"></li>
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
                                            <?php
                                            if ($artikel['gambar'] != '') {
                                                echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                        <img src='../picture/artikel/$artikel[gambar]' alt='' />
                                                      </a>                        
                                                        <span class='help-block note'><br>Gambar : $artikel[gambar].</span><br>";
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
                                                <input type="hidden" name="id" value="<?php echo $artikel[id_artikel] ?>">
                                                <input type="text" name="judul" value="<?php echo $artikel[judul]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label span2">Headline :</label>
                                            <div class="span10">
                                                <div class="span6">
                                                    <div class="dashboard-stats small">
                                                        <ul class="inline">
                                                            <li class="glyph"><input type="radio" value="Y" <?php if ($artikel[headline] == 'Y') {
        echo "checked";
    } ?> name="headline"></li>
                                                            <li>Ya</li>
                                                            <li class="glyph"><input type="radio" value="N" <?php if ($artikel[headline] == 'N') {
        echo "checked";
    } ?> name="headline"></li>
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
        echo "<option value='" . $row['id_kategori'] . "'";
        echo $row['id_kategori'] == $artikel['id_kategori'] ? 'selected' : '';
        echo ">$row[nama_kategori]";
        echo "</option>";
    }
    ?>
                                                    </select>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Isi Artikel :</label>
                                                <div class="span10">
                                                    <textarea placeholder="This is a textarea" id="tiny_editor" rows="6" name="artikel" style='width: 600px; height: 350px;'><?php echo "$artikel[isi_artikel]"; ?></textarea>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Tags :</label>
                                                <div class="span10">
                                                    <select multiple="multiple" name="tags[]" placholder="Pilih Tags" class="select2-container select2-container-multi chzn-select" tabindex="-1">
    <?php
    $option = GetSelected('tags', 'nama_tag', $artikel[tags], 'nama_tag');
    echo "$option";
    ?>    
                                                    </select>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label span2">Sumber :</label>
                                                <div class="span10">
                                                    <input type="text" name="sumber" value="<?php echo "$artikel[sumber]"; ?>"   data-prompt-position="topLeft">
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Publish :</label>
                                                <div class="span10">
                                                    <div class="span6">
                                                        <div class="dashboard-stats small">
                                                            <ul class="inline">
                                                                <li class="glyph"><input type="radio" value="Y" <?php if ($artikel[publish] == 'Y') {
        echo "checked";
    } ?> name="publish"></li>
                                                                <li>Ya</li>
                                                                <li class="glyph"><input type="radio" value="N" <?php if ($artikel[publish] == 'N') {
        echo "checked";
    } ?> name="publish"></li>
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
                                                        <?php
                                                        if ($artikel['gambar'] != '') {
                                                            echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                                    <img src='../picture/artikel/$artikel[gambar]' alt='' />
                                                                  </a>                       
                                                                <span class='help-block note'><br>Gambar : $artikel[gambar].</span><br>";
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
                        $id_artikel = $_POST['id'];
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
                                $query->edit_artikel2($id_artikel, $kategori, $judul, $judul_seo, $headline, $artikel, $tag, $publish, $sumber);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Mengubah sebuah artikel',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=artikel';</script>";
                            } else {

                                $thumb = $query->get_artikel($_GET['id']);
                                if ($thumb['gambar'] != '') {
                                    unlink("../picture/artikel/$thumb[gambar]");
                                }

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->edit_artikel($id_artikel, $kategori, $judul, $judul_seo, $headline, $artikel, $filename, $tag, $publish, $sumber);
                                     // Log Aktifitas
                                $query->log($_SESSION[id_user],'Mengubah sebuah artikel',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=artikel';</script>";
                                }
                            }
                        }

                               