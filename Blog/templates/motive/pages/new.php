                <div class="col-md-8 mag-innert-left top-inner">
                 <h3 class="tittle tittle-bg"></i>Artikel Terbaru</h3>
                <div class="post">
                <?php
                $p = new pageNavi_HotNews;
                $batas = $setting[paging_home];
                $posisi = $p->cariPosisi($batas);
                $news = $query->all_hotnews($posisi,$batas);
                foreach ($news as $row) {
                                    // Tampilkan hanya sebagian isi berita
                                      $isi_artikel = htmlentities(strip_tags($row['isi_artikel'])); // membuat paragraf pada isi berita dan mengabaikan tag html
                                      $isi = substr($isi_artikel,0,150); // ambil sebanyak 150 karakter
                                      $isi = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat
                    echo "<div class='post-grids'>
                                <div class='col-md-4 post-left'>
                                    <a href='artikel-$row[id_artikel]-$row[judul_seo].html'><img class='img-responsive thumb-img' src='picture/artikel/$row[gambar]' alt=''></a>
                                </div>
                                <div class='col-md-8 post-left'>
                                    <h4><a href='artikel-$row[id_artikel]-$row[judul_seo].html' class='title-c'>$row[judul]</a></h4>
                                    <p class='comments'><a href='kategori-$row[id_kategori]-$row[kategori_seo].html'>$row[nama_kategori]</a> - ".tgl($row[tanggal])." - oleh $row[nama_lengkap]</p>
                                    <p class='text'>$isi.</p>
                                </div>
                                <div class='clearfix'> </div>
                            </div>";
                }
                ?>
                        <?php 
                           $jmldata = $query->total_hotnews();
                           $jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
                           $linkHalaman = $p->navHalaman($_GET['artikel-terbaru'], $jmlhalaman);
                        ?>
                        <div class="col-md-8">
                            <!-- Page Navigation -->
                            <div class="light">
                                <div class="pageNavi">
                                    <?php echo $linkHalaman ?>
                                </div>
                            </div>      
                            </div>
                          
                          
                
                             <div class="clearfix"> </div>
                        </div>
                        </div>