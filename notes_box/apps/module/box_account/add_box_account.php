
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-plus-square"></i> &nbsp;Tambah Account</h2>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Account</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="a" required class="form-control" placeholder="Nama Account">
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Account</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="b" class="select2_single form-control" tabindex="-1">
                                                    <option value='0'>Pilih Kategori Account</option>
                                                    <?php
                                                    $data = $query->show_kategori_acount();
                                                    foreach($data as $row){
                                                    echo"<option value='$row[id_k_acount]'>$row[nama_k_acount]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="c" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="d" required class="form-control" placeholder="Password">
                                            </div>
                                    </div><br>
                                   
                                   
                                   <label class="control-label col-md-3">Aktif</label> &nbsp; &nbsp;         
                                   <label>
                                       <input type="radio" class="flat" name="e" id="genderM" value="Y" checked/> Ya
                                   </label> &nbsp; &nbsp;
                                    <label>
                                           <input type="radio" class="flat" name="e" id="genderF" value="N" />  Tidak 
                                    </label>
                                               

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

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];

if(isset($_POST['save'])){
    if($b=='0'){
        echo "<script type='text/javascript'>
        var permanotice, tooltip, _alert;
        $(function () {
            new PNotify({
                title: 'INFORMASI',
                type: 'info',
                text: 'Anda belum memilih kategori account <br> Silahkan pilih salah satu !',
                nonblock: {
                    nonblock: true
                },
            });

        });
    </script>";
    }else{
        $query->add_box_acount($b,$a,$c,$d,$e);
        $query->log_aktifitas($_SESSION[id_user],'Menambah data box account baru',date('Y-m-d'),date('H:i:s'));
        echo "<script>window.location='admin.php?module=box_account';</script>";
    }
}