<?php
// Mendapatkan id persatuan
$data = $query->getone_persatuan($_GET['id']);
?>
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-edit"></i> &nbsp;Edit Persatuan</h2>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="hidden" name="id" value="<?php echo $data[id_persatuan]; ?>">
                                                <input type="text" name="a" value="<?php echo $data[nama_persatuan]; ?>" required class="form-control" placeholder="Nama">
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Persatuan</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="b" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Kategori Persatuan</option>
                                                    <?php
                                                    if($data[kategori_persatuan]=='Pernikahan'){
                                                        echo"<option value='Pernikahan' selected>Pernikahan</option>
                                                             <option value='Sunatan'>Sunatan</option>
                                                             <option value='Lainnya'>Lainnya</option>";
                                                    }else if($data[kategori_persatuan]=='Sunatan'){
                                                      echo"<option value='Pernikahan'>Pernikahan</option>
                                                           <option value='Sunatan' selected>Sunatan</option>
                                                           <option value='Lainnya'>Lainnya</option>";  
                                                    }else{
                                                       echo"<option value='Pernikahan'>Pernikahan</option>
                                                            <option value='Sunatan'>Sunatan</option>
                                                           <option value='Lainnya' selected>Lainnya</option>";  
                                                    }
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah (Rp)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="c" value="<?php echo $data[jumlah]; ?>" required class="form-control" placeholder="Jumlah (Rp)">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="d" value="<?php echo $data[tgl_persatuan]; ?>" id="single_cal1" required class="form-control has-feedback-left" placeholder="Tanggal">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                    </div>
                                    
                                     <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea type="text" name="e" required class="form-control" placeholder="Alamat"><?php echo $data[alamat_persatuan]; ?></textarea>
                                            </div>
                                    </div>
                             
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kembali (Rp)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" value="<?php echo $data[kembali]; ?>" name="f" required class="form-control" placeholder="Kembali">
                                            </div>
                                    </div><br>
                                   
                                   
                                               

                                        <br><br><br><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button name="save" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                                                <button name="cancel" class="btn btn-sm btn-danger"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
                                            </div>
                                        </div>

                                    </form>
                         
                         
                    <div class="col-md-4 pull-right">  
                      <div class="pricing ui-ribbon-container">
                                        <div class="ui-ribbon-wrapper">
                                            <div class="ui-ribbon">
                                                INFO
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3>DATE TIME </h3> 
                                        </div>
                                        <div class="x_content">
                        
                        <div class="pricing_features">
                            <div class="col-sm-13"> 
                                 <div class="weather-icon pull-left">
                                  <span>
                                    <canvas height="84" width="84" id="partly-cloudy-day"></canvas><br>
                                   <canvas height="32" width="32" id="snow"></canvas>
                                   <canvas height="32" width="32" id="sleet"></canvas>
                                  </span>
                                 </div><br>
                                 <div class="weather-text pull-right">
                                     <h4><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo tgl_indo(date("Y-m-d")); ?></h4>
                                  <h3><i class="fa fa-clock-o"></i>&nbsp;<span id="jam"></span> <small>WIB</small></h3>
                              </div>
                              </div>
                        </div>
          </div>
          </div>
          </div>
                         
                        
  </div>
  </div>
  </div>


<?php   
// Proses Input Data
$id = $_POST['id'];
$a  = $_POST['a'];
$b  = $_POST['b'];
$c  = $_POST['c'];
$d  = $_POST['d'];
$e  = $_POST['e'];
$f  = $_POST['f'];

if(isset($_POST['save'])){
    if($b=='0'){
        echo "<script>alert ('Pilih Kategori Account !');</script>";
    }else{
        $query->edit_persatuan($id,$b,$a,$c,$d,$e,$f);
        $query->log_aktifitas($_SESSION[id_user],'Mengubah data persatuan',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=persatuan';</script>";
    }
}