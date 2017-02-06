
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Tambah Kata Mutiara (english)</h2>
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
                                                <textarea type="text" name="kamut" required class="ckeditor form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Arti (indo)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea type="text" name="arti" required class="ckeditor form-control"></textarea>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Kata Mutiara</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="kategori" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Kategori Kata Mutiara</option>
                                                    <?php
                                                    $data = $query->show_kategori_kamut();
                                                    foreach($data as $row){
                                                    echo"<option value='$row[id_k_kamut]'>$row[nama_k_kamut]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengutip</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="pengutip" required class="form-control" placeholder="Pengutip">
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
// Proses Input Data

$kamut    = $_POST['kamut'];
$arti     = $_POST['arti'];
$kategori = $_POST['kategori'];
$pengutip = $_POST['pengutip'];

if(isset($_POST['save'])){
    if($kategori=='0'){
         echo "<script type='text/javascript'>
        var permanotice, tooltip, _alert;
        $(function () {
            new PNotify({
                title: 'INFORMASI',
                type: 'info',
                text: 'Anda belum memilih kategori kata mutiara <br> Silahkan pilih salah satu !',
                nonblock: {
                    nonblock: true
                },
            });

        });
    </script>";
    }else{
        $query->add_kamut_en($kategori,$kamut,$arti,$pengutip);
        $query->log_aktifitas($_SESSION[id_user],'Menambah data kata mutiara (english) baru',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=kamut_english';</script>";
    }
}