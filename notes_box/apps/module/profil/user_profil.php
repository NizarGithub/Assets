<?php

/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */
  

// mendapatkan info profil
$row  = $query->profil($_SESSION[id_user]);
$data = $query->detail_user($_SESSION[id_user]);
   ?>

<div class="clearfix"></div>
    <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                      <div class="x_title">
                            <h2>User Profile</h2>
                                   <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

          <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo "../images/foto_users/$row[foto]"; ?>" alt="image" />
                                            <div class="mask">
                                                        <p><?php echo "$_SESSION[nama_user]"; ?></p>
                                                        <div class="tools tools-bottom">
                                                            <a href="#"><i class="fa fa-search-plus"></i></a>
                                                            <a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>                 
                                            </div>
                        
                        
    <h3><?php echo "$_SESSION[nama_user]"; ?></h3>
        <ul class="list-unstyled user_data">
            <li>
            <i class="fa fa-map-marker user-profile-icon"></i> <?php echo "$row[tempat_tinggal]"; ?>
            </li>
            <li>
            <i class="fa fa-briefcase user-profile-icon"></i> <?php echo "$row[pekerjaan]"; ?>
            </li>
            <li class="m-top-xs">
            <i class="fa fa-envelope-o user-profile-icon"></i> <?php echo "$data[email]"; ?>
            </li>
        </ul>

    <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button" aria-expanded="false">
        <i class="fa fa-edit"></i>&nbsp; Edit Profile &nbsp;&nbsp;<span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li class="divider"></li>
                                        <li><a href="?module=edit_profil&id=<?php echo$_SESSION[id_user]; ?>"><i class="fa fa-bold pull-right"></i>Edit Biodata</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-phone pull-right"></i>Edit Kontak</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                        <li class="divider"></li>
                                    </ul>
<br />
</div>
</div>
                                    
 
                                    
                                    
<!-----------------------------------------------------
-------------------------------------------------------
                    sampul
-------------------------------------------------------
------------------------------------------------------->
                                    
                          <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="bs-example" data-example-id="simple-jumbotron">
                                    <div class="jumbotron">
                                        <h1>Hello, world!</h1>
                                        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    </div>
                                </div>
                           </div>
                 
                             
                                    
<!-----------------------------------------------------
-------------------------------------------------------
                    tabs profil
-------------------------------------------------------
------------------------------------------------------->
                                    
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Biodata</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Kontak</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">More</a>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                                    
   
                                                    
<!-----------------------------------------------------
-------------------------------------------------------
                    biodata
-------------------------------------------------------
------------------------------------------------------->
 <div id="acct-password-row" class="span8"><br>
                        <legend class="lead">
                            Biodata
                        </legend>
                            
                            <div class="col-md-6 col-sm-9 col-xs-12">
                            <ul class="list-unstyled timeline">
                               
                                     
                        <li> <div class="block_content">                     
                        <p><small style="color: #0080FF"><em>Nama Lengkap :</em></small><br> 
                        <i class="fa fa-user"></i>&nbsp; <?php echo $_SESSION['nama_user']; ?>
                        </p>
                        </div></li><br>
                        
                           
                           
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Jenis Kelamin :</em></small><br> 
			<?php
                        if($row[jenis_kelamin]=='L'){
                        echo "<i class='fa fa-male'></i>&nbsp; Laki-laki"; 
                        }else{
                         echo "<i class='fa fa-male'></i>&nbsp; Perempuan";    
                        }
                        ?>
                        </p></div></li><br>
                        
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Agama :</em></small><br> 
			<i class="fa fa-university"></i>&nbsp; <?php echo $row['agama']; ?>
                        </p></div></li><br>
                        
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Pekerjaan :</em></small><br> 
			<i class="fa fa-briefcase"></i>&nbsp; <?php echo $row['pekerjaan']; ?>
                        </p></div></li><br>
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Alamat :</em></small><br> 
			<i class="fa fa-globe"></i>&nbsp; <?php echo $row['alamat']; ?>
                        </p></div></li><br>
                         
                        </ul>
                        </div>
                        </div>
                       
                           
                        
                        <div class="col-md-3 col-sm-9 col-xs-12">
                        <ul class="list-unstyled timeline">
                            
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Tempat Tanggal Lahir :</em></small><br> 
                        <?php $tgl = tgl_indo($row[tgl_lahir]); ?>
			<i class="fa fa-map-marker"></i>&nbsp; <?php echo $row['tempat_lahir']. ", $tgl"; ?>
                        </p></div></li><br>
                        
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Tempat Tinggal :</em></small><br> 
			<i class="fa fa-home"></i>&nbsp; <?php echo $row['tempat_tinggal']; ?>
                        </p></div></li><br>
                        
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Tinggi Badan :</em></small><br> 
			<i class="fa fa-sort-numeric-desc"></i>&nbsp; <?php echo $row['tinggi_badan']; ?> Cm
                        </p></div></li><br>
                        
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Berat Badan :</em></small><br> 
			<i class="fa fa-line-chart"></i>&nbsp; <?php echo $row['berat_badan']; ?> Kg
                        </p></div></li><br>
                        
                        
                        <li><div class="block_content">
                        <p><small style="color: #0080FF"><em>Golongan Darah :</em></small><br> 
			<i class="fa fa-stumbleupon"></i>&nbsp; <?php echo $row['golongan_darah']; ?>
                        </p><br></div></li><br>
                        
                        </ul>
                        </div>
                        </div>
                                                
<!-----------------------------------------------------
-------------------------------------------------------
                   contact
-------------------------------------------------------
------------------------------------------------------->
<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
</div>
                   
<!-----------------------------------------------------
-------------------------------------------------------
                    
-------------------------------------------------------
------------------------------------------------------->
<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
</div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
                                      


<!-----------------------------------------------------
-------------------------------------------------------
                    modal edit foto
-------------------------------------------------------
------------------------------------------------------>
                    
 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
     <form accesskey="" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Edit Foto Profil</h4>
                </div>
        <div class="modal-body">
                        
                        <div class="fileinput fileinput-new" style="margin-left:60px; margin-bottom:30px;" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
                            <img src="<?php echo "../images/foto_users/$row[foto]"; ?>" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih gambar</span> <span class="fileinput-exists">Ganti</span> 
                            <input type="file" name="gambar">
                            </span> 
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a> 
                            </div>
                        </div>
                                                
     <div class="modal-footer">
            <button name="cancel" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
            <button name="save" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
    </div>
    </div>
    </div>
    </div>
     </form>
 </div>

 <?php
 // Menyimpan nama dan mengupload foto
    $id_user    = $_SESSION[id_user];
    $file       = $_FILES['gambar']['tmp_name'];
    $filename   = $_FILES['gambar']['name'];
    $dir        = "../images/foto_users/";
    $ok         = $dir.$filename;
    
    if(isset($_POST['save'])){
        if($row[foto]!=''){
            unlink("../images/foto_users/$row[foto]");
        }
        
        // Query upload foto
        if(move_uploaded_file($file, $ok)) {
          $query->edit_foto($id_user,$filename);
          $query->log_aktifitas($id_user,'Mengubah foto Profil',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=user_profil';</script>";   
        }
    }