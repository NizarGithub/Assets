<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
    <div class="span16">
        <div class="blockoff-right">
            <legend class="lead">
                <h3 class="text-info"><i class="icon-picture"></i> &nbsp;Gallery : Foto Rutin</h3>
            </legend>
                <?php
                if(LEVEL_USER=='1') {
                    $foto = $ARSql->getAll('foto_rutin','id_fr','DESC');
                } else {
                    $foto = $ARSql->query("SELECT * FROM foto_rutin WHERE aktif='Y' ORDER BY id_fr DESC");
                }
                $no = 1;
                while ($rows = $ARSql->mf_object($foto)) { ?>
                <div class="portfolio mix_all wow zoomInLeft" data-wow-delay="0.<?php echo $no * 2;?>s" style="display: inline-block; opacity: 1; margin-right: 15px;">
                    <div class="portfolio-wrapper">
                         <a href="uploaded/foto_rutin/<?php echo $rows->foto;?>" class="b-link-stripe b-animate-go  swipebox"  title="<?php echo html_entity_decode($rows->ket);?>">
                             <img src="uploaded/foto_rutin/medium_<?php echo $rows->foto;?>" />
                             <div class="b-wrapper"><h2 class="b-animate b-from-left  b-delay03 "></h2></div>
                         </a>
                    </div>
                    <p></p>
                    <a href="admin.php?mod_apps=foto&media_app=foto_rutin&action=edit_foto_rutin&id=<?php echo $rows->id_fr ;?>" class="btn btn-small btn-default"><i class="icon-pencil"></i> edit</a>&nbsp;&nbsp;
                    <a onclick="return conDelete();" href="admin.php?mod_apps=foto&media_app=foto_rutin&action=hapus_foto_rutin&id=<?php echo $rows->id_fr;?>" class="btn btn-small btn-danger"><i class="icon-trash"></i> remove</a>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo APP_CSS;?>swipebox.css">
<link rel="stylesheet" href="<?php echo APP_CSS;?>style.css">
<script src="<?php echo APP_JS;?>jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
            $(".swipebox").swipebox();
    });
</script>
<script type="text/javascript" src="<?php echo APP_JS;?>jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {

    var filterList = {

            init: function () {

                    // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
            });

    },

    hoverEffect: function () {

            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                    function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                    },
                    function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                    }
            );

    }

};

// Run the show!
    filterList.init();

});
</script>