<?php
// Mendapatkan id kamut (en)
$data = $query->getone_kamut_en($_GET['id']);
?>
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-edit"></i> &nbsp;Edit Kata Mutiara (english)</h2>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kata Mutiara (en)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="hidden" name="id" value="<?php echo $data[id_kamut_en]; ?>">
                                                <textarea type="text" name="kamut" required class="ckeditor form-control"><?php echo $data[kamut_en]; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Arti (indo)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea type="text" name="arti" required class="ckeditor form-control"><?php echo $data[arti]; ?></textarea>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Kata Mutiara</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="kategori" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Kategori Kata Mutiara</option>
                                       <?php
                                         // Menampilkan pilihan kategori
                                         $kategori = $query->show_kategori_kamut();
                                         foreach($kategori as $row) {
                                         echo "<option value='".$row['id_k_kamut']."'";
                                         echo  $row['id_k_kamut']==$data['id_k_kamut'] ? 'selected' : '';
                                         echo ">$row[nama_k_kamut]";
                                         echo "</option>";
                                         }
                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengutip</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="pengutip" value="<?php echo $data[pengutip]; ?>" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                               

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
// Proses Edit Data
$id = $_POST['id'];
$kamut    = $_POST['kamut'];
$arti     = $_POST['arti'];
$kategori = $_POST['kategori'];
$pengutip = $_POST['pengutip'];

if(isset($_POST['save'])){
    if($b=='0'){
        echo "<script>alert ('Pilih Kategori Account !');</script>";
    }else{
        $query->edit_kamut_en($id,$kategori,$kamut,$arti,$pengutip);
        $query->log_aktifitas($_SESSION[id_user],'Mengubah data kata mutiara (english)',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=kamut_english';</script>";
    }
}