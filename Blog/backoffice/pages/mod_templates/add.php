<?php
$module = 'templates';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[tambah] == 'Y') {
    ?>

    <div class="container-fluid padded">
        <div class="box">
            <div class="box-header">
                <div class="title">Templates</div>
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
                        <form class="form-horizontal fill-up validatable" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Judul :</label>
                                <div class="span10">
                                    <input type="text" name="judul" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label span2">Pembuat :</label>
                                <div class="span10">
                                    <input type="text" name="pembuat" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label span2">Path :</label>
                           <label class="control-label span1">templates/</label>
                            <div class="span4">
                                <input type="text" name="path" class="validate[required]" data-prompt-position="topLeft">
                                <span class="help-block note"><i class="icon-required"></i></span><br>
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
                <div class="title">Sensor Kata</div>
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
                        <form class="form-horizontal fill-up validatable" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label span2">Judul :</label>
                                <div class="span10">
                                    <input type="text" name="judul" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label span2">Pembuat :</label>
                                <div class="span10">
                                    <input type="text" name="pembuat" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label span2">Path :</label>
                            <label class="control-label span1">templates/</label>
                            <div class="span4">
                                <input type="text" name="path" class="validate[required]" data-prompt-position="topLeft">
                                <span class="help-block note"><i class="icon-required"></i></span><br>
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
                        ?>
                        <?php
                        $judul   = $_POST['judul'];
                        $pembuat = $_POST['pembuat'];
                        $template= "templates/";
                        $folder  = $_POST['path'];
                        $path    = $template . $folder;
                       

                        if (isset($_POST['save'])) {
                          
                                    $query->tambah_templates($judul,$pembuat,$path);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Membuat template website baru',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=templates';</script>";
                            
                        }
