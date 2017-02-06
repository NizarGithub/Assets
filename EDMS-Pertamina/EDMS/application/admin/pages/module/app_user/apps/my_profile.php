<?php
$data   = $ARSql->getOne('users','id_user',$d_userAdmin->id_user);
?>
<div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Profil <?php echo $data->nama_lengkap; ?></h5>
                        <a href='admin.php?mod_apps=user&media_app=app_edit_user&id=<?php echo $data->id_user; ?>' class='btn btn btn-small btn-box-right btn-info'>
                           Edit Profil &nbsp;&nbsp;&nbsp;<i class='icon icon-pencil'></i>
                       </a>
                    </div>
                    <div class="box-hide-me box-content out">
                        <div class="row">

                         <!--informasi siswa--->
                        <div id="acct-password-row" class="span8">
                        <legend class="lead">
                            Informasi User
                        </legend>
                        <div class="box bg-modhome">
            <div class="box-coll">
                <div class="box-content bg-info cover-profil">
                    <?php
                        if($data->userpicture==''){
                           echo"<img src='assets/upload.png' align='left' class='foto-profil'  width='180' height='180'>";
                        }else{
                        echo"<img src='uploaded/foto_user/$data->userpicture' align='left' class='foto-profil'  width='180' height='180'>";
                        }
                        ?>
                </div>
            </div>
                        </div>
                        <h3 style="padding-left: 10px;" class="text-info"><?php echo $data->nama_lengkap; ?></h3>
                        <br>
                        </div>





                         <!---informasi kontak user--->
                         <div id="acct-verify-row" class="span7">
                         <legend class="lead">
                            Informasi Details User
                        </legend>
                        <p><small style="color: #0080FF"><em>Username :</em></small><br>
			<?php echo $data->username; ?>
                        </p>
                        <p><small style="color: #0080FF"><em>Nomor Telepon :</em></small><br>
			<?php echo $data->no_telp; ?>
                        </p>
                        <p><small style="color: #0080FF"><em>Level :</em></small><br>
			<?php $level   = $ARSql->getOne('user_level','id_level',$data->level);
                          echo $level->level;
                          ?>
                        </p>
                        
                        <p><small style="color: #0080FF"><em>Email :</em></small><br>
			<?php echo $data->email; ?>
                        </p><hr>
                         <p><small style="color: #0080FF"><em>Biodata :</em></small><br>
			<?php echo html_entity_decode($data->bio); ?>
                        </p><br>


                        </div>




                        </div></div><br>
                </div>
            </div>