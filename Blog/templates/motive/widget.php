  <!--//advertisement-->
                        <div class="top-inner">
                            <div class="top-text">
                                <?php
                                $advertisement = $query->advertisement();
                                foreach ($advertisement as $ads) {
                              echo "<a href='$ads[url]'>
                                    <img src='picture/advertisement/$ads[gambar]' class='img-responsive' alt=''/>
                                    </a>";
                                }
                                ?>
                            </div>
                        </div>
                        <!--//end-advertisement-->

                        <!--//popular-->
                        <div class="popular">
                            <h4 class="tittle tittle-bg">Banyak Dibaca <a class="more" href="artikel-populer.html">More  +</a></h4> 
                            <div class="edit-pics">
                            <?php
                            $artikel_hits = $query->artikel_hits();
                            foreach ($artikel_hits as $hits) {
                                echo "<div class='spiring'>
                                        <div class='col-md-3 item-pic'>
                                            <img src='picture/artikel/$hits[gambar]' class='img-responsive' alt=''/>
                                        </div>
                                        <div class='col-md-9 item-details'>
                                            <h5 class='inner two'><a href='artikel-$hits[id_artikel]-$hits[judul_seo].html'>$hits[judul]</a></h5>
                                            <h6><a class='kategori' href='kategori-$hits[id_kategori]-$hits[kategori_seo].html'>$hits[nama_kategori]</a></h6>
                                        </div>
                                        <div class='clearfix'></div>
                                    </div>";
                            }
                            ?>
                            </div>
                        </div>
                        <!--//end-popular-->

                        <!--/top-news-->
                        <div class="top-news">
                            <h4 class="tittle tittle-bg">Hari ini</h4>
                            <div class="top-inner">
                            <?php
                            $event     = $query->get_event();
                            $tanggal   = date("Y-m-d");
                            $tgl_event = tgl_indo($tanggal);
                            echo "<div class='top-text'>
                                   <img src='picture/event/$event[gambar]' class='img-responsive' alt='$event[judul]'>
                                   <h6><div class='kategori'><i class='glyphicon glyphicon-calendar'></i> $event[judul]</div><br>
                                    <div class='kategori'><i class='glyphicon glyphicon-time'></i> $tgl_event</div></h6>
                                </div>";
                            ?>
                            </div>
                        </div>
                        <!--//top-news-->