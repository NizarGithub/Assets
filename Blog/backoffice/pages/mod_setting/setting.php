 <?php
 $setting = $query->get_setting();
 ?>
 <div class="container-fluid padded">
                    <div class="box">
                        <div class="box-header">
                            <div class="title">Pengaturan Website</div>
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
                                            <label class="control-label span2">Nama Website :</label>
                                            <div class="span10">
                                                <input type="hidden" name="id" value="<?php echo $setting[id_setting]; ?>">
                                                <input type="text" name="nama" value="<?php echo $setting[nama_web]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label span2">Judul Website :</label>
                                                <div class="span10">
                                                    <textarea placeholder="Judul Website...."  rows="6" name="judul" style='width: 600px; height: 50px;'><?php echo "$setting[judul_web]"; ?></textarea>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label class="control-label span2">Email Website :</label>
                                            <div class="span10">
                                                <input type="email" name="email" value="<?php echo $setting[email_web]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label span2">Domain Website :</label>
                                            <div class="span10">
                                                <input type="text" name="domain" value="<?php echo $setting[domain]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label span2">Call Center :</label>
                                            <div class="span10">
                                                <input type="text" name="call" value="<?php echo $setting[call_center]; ?>" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label span2">Paging Home :</label>
                                            <div class="span10">
                                                <input type="number" name="paging" value="<?php echo $setting[paging_home]; ?>" class="validate[required] span1" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="control-label span2">Meta Deskripsi :</label>
                                                <div class="span10">
                                                    <textarea placeholder="Meta Deskripsi..."  rows="6" name="meta_deskripsi" style='width: 600px; height: 150px;'><?php echo "$setting[meta_deskripsi]"; ?></textarea>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label span2">Meta Keyword :</label>
                                                <div class="span10">
                                                    <textarea placeholder="Meta Keywoard...."  rows="6" name="meta_keyword" style='width: 600px; height: 150px;'><?php echo "$setting[meta_keyword]"; ?></textarea>
                                                    <span class="help-block note"><i class="icon-required"></i></span><br>
                                                </div>
                                            </div>


                                                <div class="form-group">
                                                    <label class="control-label span2">Logo :</label>
                                                    <div class="span4">
                                                        <div class="uploader"><input type="file" name="picture"><span class="filename" style="user-select: none;">No file selected
                                                            </span><span class="action" style="user-select: none;">+</span></div>
                                                        <?php
                                                        if ($setting['logo'] != '') {
                                                            echo "<a href='#' style='margin-top:10px;'' class='thumbnail'>
                                                                    <img src='../assets/img/$setting[logo]' alt='' />
                                                                  </a>                       
                                                                <span class='help-block note'><br>Logo : $setting[logo].</span><br>";
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
                        $nama       = $_POST['nama'];
                        $judul      = $_POST['judul'];
                        $email      = $_POST['email'];
                        $domain     = $_POST['domain'];
                        $call       = $_POST['call'];
                        $paging     = $_POST['paging'];
                        $deskripsi  = $_POST['meta_deskripsi'];
                        $Keyword    = $_POST['meta_keyword'];


                        $file     = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir      = "../assets/img/";
                        $path     = $dir . $filename;

                        if (isset($_POST['save'])) {

                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->setting1($id, $nama, $judul, $email, $call, $deskripsi, $Keyword, $domain, $paging);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Memperbaharui pengaturan website',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=setting';</script>";
                            } else {

                                $thumb = $query->get_setting();
                                if ($thumb['logo'] != '') {
                                    unlink("../assets/img/$thumb[logo]");
                                }

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                    $query->setting($id, $nama, $judul, $email, $call, $deskripsi, $Keyword, $domain, $filename, $paging);
                                     // Log Aktifitas
                                    $query->log($_SESSION[id_user],'Memperbaharui pengaturan website',$tgl_sekarang,$jam_sekarang);
                                    echo "<script>window.location='admin.php?page=setting';</script>";
                                }
                            }
                        }