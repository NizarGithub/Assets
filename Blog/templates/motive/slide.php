
    <!-- Owl Carousel Assets -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.caption.css" rel="stylesheet">
     
      <div id="demo">
              <div id="owl-demo" class="owl-carousel">
              <?php
              $hd = $query->headline();
              foreach ($hd as $h) {
               echo "<div class='item'><a href='artikel-$h[id_artikel]-$h[judul_seo].html'>
                    <img src='picture/artikel/$h[gambar]' alt='>$h[judul]'>
                    <div class='carousel-caption'>
                          <h4>$h[judul]</h4>
                        </div>
                        </a>
                    </div>";
              }
              ?>
                
                
        </div>
    </div>


   <script src="<?php echo $folder ?>/assets/js/jquery.min.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>


    <!-- Demo -->

    <style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      autoPlay: 3000, //Set AutoPlay to 3 seconds
      navigation : false,
      slideSpeed : 100,
      paginationSpeed : 400,
      singleItem : true

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
    </script>
