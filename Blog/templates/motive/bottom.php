
    <!-- Owl Carousel Assets -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.caption.css" rel="stylesheet">

 <?php
 $kategori = 2;
 $link = $query->get_kategori($kategori);
 ?>
                <div class="mag-bottom">
                    <h3 class='tittle bottom tittle-bg'><i class='fa fa-puzzle-piece'></i>
                    <?php
                    echo "$link[nama_kategori] <a class='more' href='kategori-$link[id_kategori]-$link[kategori_seo].html'>More  +</a>";
                    ?>
                    </h3>
                    <div class='top-inner'>
                        <div class='grid'>
                            <div id="demo">
                                    <div id="owl-bottom" class="owl-carousel">
                                    <?php
                                     $limit = 10;
                                     $tutorial = $query->artikel_sub($kategori,$limit);
                                     foreach ($tutorial as $t) {
                                     echo "<div class='item'>
                                      <a href='artikel-$t[id_artikel]-$t[judul_seo].html'><img class='lazyOwl' data-src='picture/artikel/$t[gambar]'></a>
                                     <a href='artikel-$t[id_artikel]-$t[judul_seo].html' class='ma' style='text-align:left;'>$t[judul]</a>
                                     </div>";
                                    }
                                    ?>
                                      
                                      
                              </div>
                          </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


   <script src="<?php echo $folder ?>/assets/js/jquery.min.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>


    <!-- Demo -->

    <!-- Demo -->

    <style>
    #owl-bottom .item{
        margin: 3px;
    }
    #owl-bottom .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {

      $("#owl-bottom").owlCarousel({
        items : 4,
        lazyLoad : true,
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        navigation : false,
        slideSpeed : 100
      });

    });
    </script>

