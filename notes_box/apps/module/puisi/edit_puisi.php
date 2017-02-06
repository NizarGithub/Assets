<?php
/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */

// Mendapatkan id puisi
$data = $query->getone_puisi($_GET['id']);
?>
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-edit"></i> &nbsp;Edit Puisi</h2>
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
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Judul</label>
                                            <div class="col-md-10 col-sm-9 col-xs-12">
                                                <input type="hidden" name="id" value="<?php echo $data[id_puisi]; ?>">
                                                <input type="text" name="a" value="<?php echo $data[judul]; ?>" required class="form-control" placeholder="Judul">
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Kategori Puisi</label>
                                            <div class="col-md-10 col-sm-9 col-xs-12">
                                                <select name="b" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Kategori Puisi</option>
                                        <?php
                                         // Menampilkan pilihan kategori
                                         $kategori = $query->show_kategori_puisi();
                                         foreach($kategori as $row) {
                                         echo "<option value='".$row['id_k_puisi']."'";
                                         echo  $row['id_k_puisi']==$data['id_k_puisi'] ? 'selected' : '';
                                         echo ">$row[nama_k_puisi]";
                                         echo "</option>";
                                         }
                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Puisi</label>
                                            <div class="col-md-10 col-sm-9 col-xs-12">
                                                <textarea type="text" name="c" rows="3" required class="form-control ckeditor" placeholder="Eneter text here..."><?php echo $data[puisi]; ?></textarea>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Penulis</label>
                                            <div class="col-md-10 col-sm-9 col-xs-12">
                                                <input type="text" name="d" value="<?php echo $data[pencipta]; ?>" required class="form-control" placeholder="Penulis">
                                            </div>
                                    </div>
                                     <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal</label>
                                            <div class="col-md-10 col-sm-9 col-xs-12">
                                                <input type="text" name="e" id="single_cal1" value="<?php echo $data[tgl_ditulis]; ?>" required class="form-control has-feedback-left" placeholder="Tanggal">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                    </div><br>
                                   
                                               

                                        <br><br><br><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-offset-3">
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
$a  = $_POST['a'];
$b  = $_POST['b'];
$c  = $_POST['c'];
$d  = $_POST['d'];
$e  = $_POST['e'];

if(isset($_POST['save'])){
    if($b=='0'){
        echo "<script>alert ('Pilih Kategori Puisi !');</script>";
    }else{
        $query->edit_puisi($id,$b,$a,$c,$d,$e);
        $query->log_aktifitas($_SESSION[id_user],'Mengubah data puisi',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=puisi';</script>";
    }
}