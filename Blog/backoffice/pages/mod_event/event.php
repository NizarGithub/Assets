 <?php
 $event = $query->get_event();
 ?>
 <div class="container-fluid padded">
                    <div class="box">
                        <div class="box-header">
                            <div class="title">Event</div>
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
                                <form class="form-horizontal fill-up validatable" action="" enctype="multipart/form-data" method="POST">

                                        <div class="form-group">
                                            <label class="control-label span2">Judul Event :</label>
                                            <div class="span10">
                                                <input type="hidden" name="id" value="<?php echo $event[id_event]; ?>">
                                                <input type="text" name="judul" value="<?php echo $event[judul]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>

                                                <div class="form-group">
                                                    <label class="control-label span2">Gambar :</label>
                                                    <div class="span4">
                                                        <div class="uploader"><input type="file" name="picture"><span class="filename" style="user-select: none;">No file selected
                                                            </span><span class="action" style="user-select: none;">+</span></div>
                                                        <?php
                                                        if ($event['gambar'] != '') {
                                                            echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                                    <img src='../picture/event/$event[gambar]' alt='' />
                                                                  </a>                       
                                                                <span class='help-block note'><br>Gambar : $event[gambar].</span><br>";
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
                        $id         = $_POST['id'];
                        $judul      = $_POST['judul'];

                        $file     = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir      = "../picture/event/";
                        $path     = $dir . $filename;

                        if (isset($_POST['save'])) {

                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->event1($id,$judul);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Memperbaharui suatu event',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=event';</script>";
                            } else {

                                $thumb = $query->get_event();
                                if ($thumb['gambar'] != '') {
                                    unlink("../picture/event/$thumb[gambar]");
                                }

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->event($id, $judul, $filename);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Memperbaharui suatu event',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=event';</script>";
                                }
                            }
                        }