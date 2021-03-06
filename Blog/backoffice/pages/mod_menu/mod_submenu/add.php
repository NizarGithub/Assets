<?php
$module = 'submenu';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[tambah] == 'Y') {
    ?>

    <div class="container-fluid padded">
        <div class="box">
            <div class="box-header">
                <div class="title">Sub Menu</div>
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
                                <label class="control-label span2">Nama Sub Menu :</label>
                                <div class="span10">
                                    <input type="text" name="nama" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label span2">Main Menu :</label>
                                    <div class="span10">
                                        <select class="select2-container select2-container-multi chzn-select" name="main">
                                            <option value="0">Pilih Main Menu</option>
                                            <?php
                                            // pilihan main menu
                                            $mainmenu = $query->mainmenu_aktif();
                                            foreach ($mainmenu as $row) {
                                                echo" <option value='$row[id_main]'>$row[nama_main]</option>";
                                            }
                                            ?>
                                        </select>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label span2">Link / URL :</label>
                                <div class="span10">
                                    <input type="text" name="link" class="validate[required]" data-prompt-position="topLeft">
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
                <div class="title">Main Menu</div>
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
                                <label class="control-label span2">Nama Sub Menu :</label>
                                <div class="span10">
                                    <input type="text" name="nama" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label span2">Main Menu :</label>
                                    <div class="span10">
                                        <select class="select2-container select2-container-multi chzn-select" name="main">
                                            <option value="0">Pilih Main Menu</option>
                                            <?php
                                            // pilihan main menu
                                            $mainmenu = $query->mainmenu_aktif();
                                            foreach ($mainmenu as $row) {
                                                echo" <option value='$row[id_main]'>$row[nama_main]</option>";
                                            }
                                            ?>
                                        </select>
                                        <span class="help-block note"><i class="icon-required"></i></span><br>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label span2">Link / URL :</label>
                                <div class="span10">
                                    <input type="text" name="link" class="validate[required]" data-prompt-position="topLeft">
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
                        $nama = $_POST['nama'];
                        $link = $_POST['link'];
                        $main = $_POST['main'];
                       

                        if (isset($_POST['save'])) {
                          
                                    $query->tambah_submenu($nama,$link,$main);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Menambahkan sub menu',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=submenu';</script>";
                            
                        }
