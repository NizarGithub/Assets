<?php

/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */
  
    $row = $query->profil($_GET['id']); 
?>


<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-edit"></i> &nbsp;Edit Biodata</h2>
                 <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
            <div class="clearfix"></div>
        </div>
        
                        <div class="x_content">
                         <br />
                         <form method="POST" action="" class="form-horizontal form-label-left col-md-8">

                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $row[id_user]; ?>">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <textarea type="text" name="alamat" rows="3" required class="form-control" placeholder="Eneter text here..."><?php echo $row[alamat]; ?></textarea>
                                            </div>
                                        </div>
                             
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <input type="text" name="tgl_lahir" id="single_cal1" value="<?php echo $row[tgl_lahir]; ?>" required class="form-control has-feedback-left" placeholder="Tanggal Lahir">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                    </div>
                             
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <input type="text" name="tempat_lahir" value="<?php echo $row[tempat_lahir]; ?>" required class="form-control" placeholder="Tempat Lahir">
                                            </div>
                                    </div>
                                 <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tinggal</label>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <input type="text" name="tempat_tinggal" value="<?php echo $row[tempat_tinggal]; ?>" required class="form-control" placeholder="Tempat Tinggal">
                                            </div>
                                    </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <select name="agama" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Agama</option>
                                                    <option value='Islam' <?php if($row[agama]=='Islam'){ echo"selected";} ?>>Islam</option>
                                                    <option value='Kristen' <?php if($row[agama]=='Kristen'){ echo"selected";} ?>>Kristen</option>
                                                    <option value='Hindu'<?php if($row[agama]=='Hindu'){ echo"selected";} ?>>Hindu</option>
                                                    <option value='Budha'<?php if($row[agama]=='Budha'){ echo"selected";} ?>>Budha</option>
                                                    <option value='Katolik'<?php if($row[agama]=='Katolik'){ echo"selected";} ?>>Katolik</option>
                                                    <option value='Konghucu' <?php if($row[agama]=='Konghucu'){ echo"selected";} ?>>Konghucu</option>
                                                    <option value='Lainnya' <?php if($row[agama]=='Lainnya'){ echo"selected";} ?>>Lainnya</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <input type="text" name="pekerjaan" value="<?php echo $row[pekerjaan]; ?>" required class="form-control" placeholder="Pekerjaan">
                                            </div>
                                    </div><br>
                                    
                                   <div class="form-group">
                                   <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label> &nbsp; &nbsp;         
                                   <label>
                                       <input type="radio" class="flat" name="jk" id="genderM" value="L" <?php if($row[jenis_kelamin]=='L'){ echo"checked";} ?>/> Laki-laki
                                   </label> &nbsp; &nbsp;
                                    <label>
                                           <input type="radio" class="flat" name="jk" id="genderF" value="P" <?php if($row[jenis_kelamin]=='P'){ echo"checked";} ?> />  Perempuan 
                                    </label>
                                    </div><br>
                                    
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan</label>
                                            <div class="col-md-2 col-sm-9 col-xs-12">
                                                <input type="number" name="tinggi_badan" value="<?php echo $row[tinggi_badan]; ?>" required class="form-control">
                                            </div>
                                    </div>
                                   <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan</label>
                                            <div class="col-md-2 col-sm-9 col-xs-12">
                                                <input type="number" name="berat_badan" value="<?php echo $row[berat_badan]; ?>" required class="form-control">
                                            </div>
                                    </div>
                                   <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah</label>
                                            <div class="col-md-2 col-sm-9 col-xs-12">
                                                <input type="text" name="golongan_darah" value="<?php echo $row[golongan_darah]; ?>" required class="form-control">
                                            </div>
                                    </div>
                                     <br>
                              

                                        <br><br><br><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button name="save" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                                                <button name="cancel" class="btn btn-sm btn-danger"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
                                            </div>
                                        </div>

                                    </form>
                         
                         
                         
                        
  </div>
  </div>
  </div>



 

<?php   
// Proses Input Data

$id_user        = $_POST['id'];
$alamat         = $_POST['alamat'];
$tgl_lahir      = $_POST['tgl_lahir'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$jk             = $_POST['jk'];
$agama          = $_POST['agama'];
$pekerjaan      = $_POST['pekerjaan'];
$tinggi_badan   = $_POST['tinggi_badan'];
$berat_badan    = $_POST['berat_badan'];
$golongan_darah = $_POST['golongan_darah'];


if(isset($_POST['save'])){
    // Validasi jika tidak memilih agama 
    if($agama=='0'){
       echo "<script type='text/javascript'>
        var permanotice, tooltip, _alert;
        $(function () {
            new PNotify({
                title: 'INFORMASI',
                type: 'info',
                text: 'Anda belum memilih Agama <br> Silahkan pilih salah satu !',
                nonblock: {
                    nonblock: true
                },
            });

        });
    </script>";
    }else{
        
        // Query edit
      $query->edit_profil($id_user,$alamat,$tgl_lahir,$tempat_lahir,$tempat_tinggal,$jk,$agama,$pekerjaan,$tinggi_badan,$berat_badan,$golongan_darah);
      $query->log_aktifitas($_SESSION[id_user],'Mengubah biodata diri sendiri',date('Y-m-d'),date('H:i:s'));
       echo "<script>window.location='admin.php?module=user_profil';</script>";
    }
}