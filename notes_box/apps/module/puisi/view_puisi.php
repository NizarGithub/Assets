<?php

/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */
 
$id   = $_GET['id'];
$data = $query->getone_puisi($id);
$query->log_aktifitas($_SESSION[id_user],'Membaca puisi',date('Y-m-d'),date('H:i:s'));
?>


                <div class="">
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-file-powerpoint-o"></i>&nbsp;
                                        Puisi<small><?php echo "($data[nama_k_puisi])"; ?></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                    
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="col-md-8 col-lg-8 col-sm-7">
                                        <!-- blockquote -->

                                        <blockquote class="blockquote">
                                     <h2><p class="text-center"><?php echo $data[judul]; ?></p></h2>
                                         <p><?php echo $data[puisi]; ?> </p>
                                         <br>
                                         
                                            <footer>
                                                <cite title="Penulis">
                                                    <?php echo $data[pencipta]; ?><br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    (<?php echo tgl_indo($data[tgl_ditulis]); ?>)
                                                </cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                     
                                    
                                    
                    <div class="col-md-4 col-lg-4 col-sm-5 pull-right">
                        <div class="pricing ui-ribbon-container">
                                        <div class="ui-ribbon-wrapper">
                                            <div class="ui-ribbon">
                                                INFO
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3>PUISI</h3>          
                                        </div>
                                        <div class="x_content">
                        
                                                <div class="pricing_features">
                                                    <ul class="list-unstyled text-left">
                                                        <li><i class="fa fa-tumblr"></i>&nbsp;&nbsp;&nbsp;
                                                            Judul
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?php echo $data[judul]; ?></li>
                                                        <li><i class="fa fa-tag"></i>&nbsp;&nbsp; 
                                                            Kategori
                                                            &nbsp;:&nbsp;&nbsp; <?php echo $data[nama_k_puisi]; ?></li>
                                                        <li><i class="fa fa-user"></i>&nbsp;&nbsp; 
                                                            Penulis 
                                                            &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; <?php echo $data[pencipta]; ?></li>
                                                        <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; 
                                                            Tanggal 
                                                            &nbsp;:&nbsp;&nbsp; <?php echo tgl_indo($data[tgl_ditulis]); ?></li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                                      

