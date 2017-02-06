<?php
$id = $_GET['id'];
$sensor = $query->get_sensor($id);

$module = 'sensor';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[edit] == 'Y') {
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
                                <label class="control-label span2">Kata Jelek :</label>
                                <div class="span10">
                                    <input type="hidden" name="id" value="<?php echo $sensor[id_kata] ?>">
                                    <input type="text" name="kata" value="<?php echo $sensor[kata]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label span2">Ganti :</label>
                                <div class="span10">
                                    <input type="text" name="ganti" value="<?php echo $sensor[ganti]; ?>" class="validate[required]" data-prompt-position="topLeft">
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
                                <label class="control-label span2">Kata Jelek :</label>
                                <div class="span10">
                                    <input type="hidden" name="id" value="<?php echo $sensor[id_kata] ?>">
                                    <input type="text" name="kata" value="<?php echo $sensor[kata]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label span2">Ganti :</label>
                                <div class="span10">
                                    <input type="text" name="ganti" value="<?php echo $sensor[ganti]; ?>" class="validate[required]" data-prompt-position="topLeft">
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
                        $id_sensor = $_POST['id'];
                        $kata = $_POST['kata'];
                        $ganti = $_POST['ganti'];
                       

                        if (isset($_POST['save'])) {
                          
                                    $query->edit_sensor($id_sensor,$kata,$ganti);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Mengubah daftar sensor kata',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=sensor';</script>";
                            
                        }

                               