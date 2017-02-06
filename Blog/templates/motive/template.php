
<?php require_once("$folder/header.php"); ?>
        <div class="main-content">
            <div class="container">
                <div class="mag-inner">
                     <?php require_once("$folder/content.php"); ?> 
                    <div class="col-md-4 mag-inner-right">
                    <?php require_once("$folder/widget.php"); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                 <?php require_once("$folder/bottom.php"); ?>
            </div>
        </div>
        <!--//end-main-->
        <?php require_once("$folder/footer.php"); ?>

        <!--start-smoth-scrolling-->
        <script type="text/javascript">
                                $(document).ready(function() {
                                    /*
                                     var defaults = {
                                     containerID: 'toTop', // fading element id
                                     containerHoverID: 'toTopHover', // fading element hover id
                                     scrollSpeed: 1200,
                                     easingType: 'linear' 
                                     };
                                     */

                                    $().UItoTop({easingType: 'easeOutQuart'});

                                });
        </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>