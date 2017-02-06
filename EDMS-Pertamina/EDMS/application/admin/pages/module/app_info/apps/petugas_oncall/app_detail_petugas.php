<?php
$data   = $ARSql->getOne('petugas_oncall','id_petugas',$_GET['id']);
?>
<div class="row">
<div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Petugas On Call</h5>
                        <a class="btn btn-info btn-small btn-box-right" href="admin.php?mod_apps=info&media_app=petugas_oncall">
                            <i class="icon-circle-arrow-left"></i> &nbsp;Kembali
                        </a>
                    </div>
                    <div class="box-hide-me box-content out">
                        <div class="row">
                            
                         <!--informasi petugas--->
                        <div id="acct-password-row" class="span8">
                        <legend class="lead">
                            Informasi Petugas
                        </legend>
                        
                        <p><small style="color: #0080FF"><em>Nama Petugas :</em></small><br> 
			<?php echo $data->nama; ?>
                        </p><br>
                        
                        <p><small style="color: #0080FF"><em>Alamat:</em></small><br> 
			<?php echo $data->alamat; ?>
                        </p><br>
                        
                        <p><small style="color: #0080FF"><em>Kantor :</em></small><br> 
			<?php echo $data->kantor; ?>
                        </p><br>
                                                
                        <p><small style="color: #0080FF"><em>Group :</em></small><br> 
			<?php $group   = $ARSql->getOne('group_pegawai','id_group',$data->id_group); 
                          echo $group->nama; 
                          ?>
                        </p><br>
                        
                        
                        </div>
                         
                         
                         

                        
                         <!---informasi kontak pegawai--->
                         <div id="acct-verify-row" class="span7">
                         <legend class="lead">
                            Informasi Kontak Pegawai
                         </legend>
                        <p><small style="color: #0080FF"><em>Nomor Telepon :</em></small><br> 
			<?php echo $data->no_telp; ?>
                        </p><br>
                        
                        <p><small style="color: #0080FF"><em>Email :</em></small><br> 
			<?php echo $data->email; ?>
                        </p><br>

                        
                        <?php 
                        if($data->foto==''){
                           echo"<p><small style='color: #0080FF'><em>Foto :</em></small><br> </p>
                            <img src='assets/upload.png'  width='180' height='180'>
                        <br>"; 
                        }else{
                        echo"<p><small style='color: #0080FF'><em>Foto :</em></small><br> </p>
                            <img src='uploaded/foto_petugas_oncall/$data->foto'  width='180' height='180'>
                        <br>";
                        }
                        ?>
                        </div>
                        
                        
                        
                       
                        </div></div><br>
                    <div class="box-footer">
                        <?php
                        if(LEVEL_USER=='1'){
                       echo"<a href='admin.php?mod_apps=info&media_app=petugas_oncall&action=edit_petugas&id=<?php echo $data->id_petugas ?>' class='btn btn btn-primary'>
                          Edit Info Petugas <i class='btn-icon-only icon-arrow-right'></i>";
                        }else{
                            
                        }
                        ?>
                       </a>
                       </a>
                    </div>
                </div>
            </div>
</div>