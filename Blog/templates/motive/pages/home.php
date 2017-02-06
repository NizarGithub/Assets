  <!--/start-slide-->
                <div class="col-md-8 mag-innert-left">
                        <div class="top-inner">  
                            <div class="slider">
                              <?php require_once("$folder/slide.php"); ?>
                            </div>	
                            <div class="clearfix"></div>
                        </div>
                        <!--//end-slide-->

                        <!--start-hot-news-->
                        <div class="article">
                            <h3 class="tittle tittle-bg"><i class="fa fa-fire"></i>Masih Hangat  <a class="more" href="artikel-terbaru.html">More  +</a></h3>
                            <div class="top-inner">
                                <div class="article-inner">
                                <?php
                                 $data = $query->main_hotnews();
                                      foreach ($data as $row) {
                                      // Tampilkan hanya sebagian isi berita
                                      $isi_artikel = htmlentities(strip_tags($row['isi_artikel'])); // membuat paragraf pada isi berita dan mengabaikan tag html
                                      $isi = substr($isi_artikel,0,200); // ambil sebanyak 300 karakter
                                      $isi = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat
                                      $time = $row[tanggal].' '.$row[jam];
                                        echo "<div class='col-md-6 article-img'><a href='artikel-$row[id_artikel]-$row[judul_seo].html'><img class='img-responsive' src='picture/artikel/$row[gambar]' alt=''/></a></div>
                                            <div class='col-md-6 article-text'>
                                                <h5><a href='artikel-$row[id_artikel]-$row[judul_seo].html'>$row[judul]</a></h5>
                                                <h6> 
                                                <a class='kategori' href='kategori-$row[id_kategori]-$row[kategori_seo].html'>
                                                <span>".$row['nama_kategori']."</span></a>".timeAgo(strtotime($time))."</h6>
                                                <div class='clearfix'></div>
                                                <p>$isi...</p>
                                            </div>
                                            <div class='clearfix'></div>";
                                  }
                                ?>
                                    <div class="article-bottom-content">
                                    <?php
                                    $sub_hotnews = $query->sub_hotnews();
                                    foreach ($sub_hotnews as $sub) {
                                    $timeSub = $sub[tanggal].' '.$sub[jam];
                                   echo "<div class='col-md-6 article-bottom'>
                                            <div class='col-md-3 bottom-img'>
                                            <a href='artikel-$sub[id_artikel]-$sub[judul_seo].html'><img class='img-responsive' src='picture/artikel/$sub[gambar]' alt=''/></a>
                                            </div>
                                            <div class='col-md-9 article-bottom-text'>
                                                <h5><a href='artikel-$sub[id_artikel]-$sub[judul_seo].html'>$sub[judul]</a></h5> 
                                                <h6><a class='kategori' href='kategori-$sub[id_kategori]-$sub[kategori_seo].html'>
                                                <span>".$sub['nama_kategori']."</span></a>".timeAgo(strtotime($timeSub))."</h6>
                                            </div>
                                        </div>";
                                    }
                                    ?>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//end-hot-news-->

                        <!--/start-interesting-news-->
                        <div class="article">
                            <h3 class="tittle tittle-bg"><i class="glyphicon glyphicon-gift"> </i>Menarik </h3>
                            <div class="top-inner">
                            <?php
                            $main_interest = $query->main_interest();
                            foreach ($main_interest as $main) {
                                    // Tampilkan hanya sebagian isi berita
                                      $content_article = htmlentities(strip_tags($main['isi_artikel'])); // membuat paragraf pada isi berita dan mengabaikan tag html
                                      $content = substr($content_article,0,100); // ambil sebanyak 300 karakter
                                      $content = substr($content_article,0,strrpos($content," ")); // potong per spasi kalimat
                                      $timeAgo = $main[tanggal].' '.$main[jam];
                                echo "<div class='col-md-6 interesting-img'>
                                        <img src='picture/artikel/$main[gambar]' class='img-responsive' alt=''/>
                                        <div class='article-text' style='margin-top:10px;'>
                                            <h5><a href='artikel-$main[id_artikel]-$main[judul_seo].html'>$main[judul]</a></h5>
                                            <p>$content...</p>
                                            <h6><a class='kategori' href='kategori-$main[id_kategori]-$main[kategori_seo].html'>
                                                <span>".$main['nama_kategori']."</span></a>".timeAgo(strtotime($timeAgo))."</h6>
                                        </div>
                                    </div>";
                            }
                            ?>
                                

                                <div class="col-md-6 interesting-text">
                                <?php
                                $sub_interest = $query->sub_interest();
                                foreach ($sub_interest as $spir) {
                                $timeSpir = $spir[tanggal].' '.$spir[jam];
                                    echo "<div class='spiring'>
                                                <div class='col-md-3 item-pic'>
                                                    <img src='picture/artikel/$spir[gambar]' class='img-responsive' alt=''/>
                                                </div>
                                                <div class='col-md-9 item-details'>
                                                    <h5 class='inner two'><a href='artikel-$spir[id_artikel]-$spir[judul_seo].html'>$spir[judul]</a></h5>
                                                    <h6><a class='kategori' href='kategori-$spir[id_kategori]-$spir[kategori_seo].html'>
                                                <span>".$spir['nama_kategori']."</span></a>".timeAgo(strtotime($timeSpir))."</h6>
                                                </div>
                                                <div class='clearfix'></div>
                                            </div>";
                                }
                                ?>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--//end-interesting-news-->


                        <?php
                         $k = 3;
                         $a = $query->get_kategori($k);
                         ?>
                         <!--//comfort-->
                        <div class="latest-articles">
                            <h3 class="tittle tittle-bg"><i class="fa fa-smile-o"></i>
                            <?php
                            echo "$a[nama_kategori] <a class='more' href='kategori-$a[id_kategori]-$a[kategori_seo].html'>More  +</a>";
                            ?>
                            </h3>
                            <div class="top-inner">
                            <?php
                            $lim = 2;
                            $intermezzo = $query->artikel_sub($k,$lim);
                            foreach ($intermezzo as $i) {
                                    // Tampilkan hanya sebagian isi berita
                                      $ca = htmlentities(strip_tags($i['isi_artikel'])); // membuat paragraf pada isi berita dan mengabaikan tag html
                                      $c = substr($ca,0,90); // ambil sebanyak 90 karakter
                                      $c = substr($ca,0,strrpos($c," ")); // potong per spasi kalimat
                                echo "<div class='col-md-6 comfort'>
                                    <a href='artikel-$i[id_artikel]-$i[judul_seo].html'><img class='img-responsive' src='picture/artikel/$i[gambar]' alt=''/></a>
                                    <a href='artikel-$i[id_artikel]-$i[judul_seo].html' class='ma'>$i[judul]</a>
                                    <p>$c...</p>
                                    <h6><a class='kategori' href='kategori-$i[id_kategori]-$i[nama_kategori].html'>$i[nama_kategori]</a></h6>
                                    </div>";
                            }
                            ?>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--//end-comfort-->
                        </div>