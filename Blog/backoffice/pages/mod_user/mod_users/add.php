<script type="text/javascript">
    function cek_user(user){
        $('#pesanuser').html("sedang mengecek..."); 
        var cek  = user; 
            if(cek=='') {
                $("#pesanuser").html("<span class='text-red'><i class='fa fa-times-circle'></i> Jangan kosong...</span>");  
            } else {
                    $.ajax({
                     type:"POST",
                     url:"pages/mod_user/controller/checking.php",    
                     data: "user=" + cek,
                     success: function(response){                 
                            if(response==1){
                                    $('#user').val("").focus();
                                    $("#pesanuser").html("<span class='text-red'><i class='fa fa-times-circle'></i> username  <b>"+cek+"</b> sudah ada. Coba yang lain !</span>");    
                            } 
                            else {
                                    $("#pesanuser").html("<span class='text-blue'><i class='fa fa-check'></i> "+cek+" Ok </span>");   
                       }
                    }
                    });                 
            }
        }
    
</script>
 <div class="container-fluid padded">
                    <div class="box">
                        <div class="box-header">
                            <div class="title">Tambah User</div>
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
                                            <label class="control-label span2">Nama Lengkap :</label>
                                            <div class="span10">
                                                <input type="text" name="nama" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label span2">Username :</label>
                                            <div class="span10">
                                                <input type="text" name="user" id="user" onchange="cek_user(this.value);" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note" id="pesanuser"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label span2">Password :</label>
                                            <div class="span10">
                                                <input type="password" name="password" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label span2">Jenis Kelamin :</label>
                                        <div class="span10">
                                            <div class="span6">
                                                <div class="dashboard-stats small">
                                                    <ul class="inline">
                                                        <li class="glyph"><input type="radio" value="L" name="jk"></li>
                                                        <li>Laki-laki</li>
                                                        <li class="glyph"><input type="radio" value="P" name="jk"></li>
                                                        <li>Perempuan</li>
                                                    </ul>
                                                </div>
                                                <span class="help-block note"><br><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>
                                        </div>
                                       

                                        <div class="form-group">
                                            <label class="control-label span2">E-mail :</label>
                                            <div class="span10">
                                                <input type="email" name="email" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label span2">Telepon :</label>
                                            <div class="span10">
                                                <input type="text" name="telepon" class="validate[required]" data-prompt-position="topLeft">
                                                <span class="help-block note"><i class="icon-required"></i></span><br>
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <label class="control-label span2">Foto :</label>
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
                       
                        $nama       = $_POST['nama'];
                        $username   = $_POST['user'];
                        $password   = md5($_POST['password']);
                        $jk         = $_POST['jk'];
                        $email      = $_POST['email'];
                        $telepon    = $_POST['telepon'];

                        $file     = $_FILES['picture']['tmp_name'];
                        $filename = $_FILES['picture']['name'];
                        $dir      = "../picture/users/";
                        $path     = $dir . $filename;

                        if (isset($_POST['save'])) {

                            // Query tanpa upload gamabar
                            if (empty($file)) {
                                $query->tambah_user($nama,$username,$password,$jk,$email,$telepon,$file);
                                 // Log Aktifitas
                                $query->log($_SESSION[id_user],'Menambahkan pengguna baru',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=list_user';</script>";
                            } else {

                                // Query dengan melakukan upload gambar
                                if (move_uploaded_file($file, $path)) {
                                   $query->tambah_user($nama,$username,$password,$jk,$email,$telepon,$filename);
                                    // Log Aktifitas
                                $query->log($_SESSION[id_user],'Menambhakan pengguna baru',$tgl_sekarang,$jam_sekarang);
                                echo "<script>window.location='admin.php?page=list_user';</script>";
                                }
                            }
                        }