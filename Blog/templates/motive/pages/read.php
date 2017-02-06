<?php
$id  = $_GET['id_artikel'];
$row = $query->detail_artikel($id);
$tgl = tgl_indo($row[tanggal]);

// Hits
$baca     = $row[dibaca] + 1;
$add_hits = $query->hits($baca,$id);
?>
 <div class="col-md-8 mag-innert-left top-inner">
                        <div class="banner-bottom-left-grids">
                            <div class="single-left-grid">
                                <h1 class="h-tittle"><?php echo "$row[judul]"; ?></h1>
                                <div class="posted">
                                <?php
                            echo "<a href='kategori-$row[id_kategori]-$row[kategori_seo].html'><span>$row[nama_kategori]</span></a> -  $tgl - oleh <a href='#'>$row[nama_lengkap]</a>";
                                ?>     
                                </div>
                                <img src='<?php echo "picture/artikel/$row[gambar]"; ?>' alt="">
                                <p class="text"><?php echo "$row[isi_artikel]"; ?></p>
                                <?php
                                if($row[sumber]!=''){
                                    echo "<p>( <i>sumber: $row[sumber]</i> )</p>";
                                }
                                ?>
                                <div class="single-bottom">
                                    <ul>
                                        <li class="c5-element-facebook">
                                            <a href="#"><span class="icon"></span></a>
                                            <span class="text">Share</span>
                                        </li>
                                        <li class="c5-element-twitter">
                                            <a href="#"><span class="icon1"></span></a>
                                            <span class="text">Tweet</span>
                                        </li>
                                        <li class="c5-element-gg">
                                            <a href="#"><span class="icon2"></span></a>
                                            <span class="text">Share</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                            
                            <?php 
                            $tags = $row['tags'];         
                            // pisahkan kata per kalimat lalu hitung jumlah kata
                            $pisah_kata  = explode(",",$tags);
                            $jml_katakan = (integer)count($pisah_kata);
                        
                            $jml_kata = $jml_katakan - 1; 
                            $ambil_id = substr(validasi($_GET['id_artikel'],'sql'),0,4);
                        
                            // Looping query sebanyak jml_kata
                            $cari = "SELECT * FROM artikel WHERE (id_artikel<>'$ambil_id') and (id_artikel!='$ambil_id') and (" ;
                            for ($i = 0; $i <= $jml_kata; $i++){
                                $cari .= "tags LIKE '%$pisah_kata[$i]%'";
                                if ($i < $jml_kata ){
                                    $cari .= " OR ";
                                }
                            }
                            $cari .= ") ORDER BY id_artikel DESC LIMIT 2";
                         
                            $hasil  = mysql_query($cari);
                            $ada    = mysql_num_rows($hasil);
                            if($ada>0){
                            echo "<div class='post'>";
                            echo "<h3>Baca Juga</h3><br>";
                                while($h = mysql_fetch_array($hasil)){
                                       echo "<div class='col-md-6'>
                                            <a href='artikel-$h[id_artikel]-$h[judul_seo].html'><img class='img-responsive' src='picture/artikel/$h[gambar]'/></a>
                                            <a href='artikel-$h[id_artikel]-$h[judul_seo].html' class='ma'>$h[judul]</a>
                                            </div>";
                                }
                                echo "<div class='clearfix'></div>";
                                echo "</div>";
                            }
                        ?>

                        <?php require_once("$folder/pages/comment.php"); ?>
                    </div>