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
                <h3 class="text-info"><i class="icon-picture"></i> &nbsp;Gallery : Foto TA</h3>
            </legend>
                <?php
                if(LEVEL_USER=='1') {
                    $foto = $ARSql->getAll('foto_ta','id_fta','DESC');
                } else {
                    $foto = $ARSql->query("SELECT * FROM foto_ta WHERE aktif='Y' ORDER BY id_fta DESC");
                }
                $no = 1;
                while ($rows = $ARSql->mf_object($foto)) { ?>
                <div class="portfolio app mix_all wow zoomInLeft" data-wow-delay="0.<?php echo $no * 2;?>s" style="display: inline-block; opacity: 1; margin-right: 15px;">
                    <div class="portfolio-wrapper">
                        <a href="uploaded/foto_TA/<?php echo $rows->foto;?>" class="b-link-stripe b-animate-go  swipebox"  title="<?php echo html_entity_decode($rows->ket);?>">
                             <img src="uploaded/foto_TA/medium_<?php echo $rows->foto;?>" />
                             <div class="b-wrapper"><h2 class="b-animate b-from-left  b-delay03 "></h2></div>
                         </a>
                    </div>
                    <p></p>
                    <a href="admin.php?mod_apps=foto&media_app=foto_ta&action=edit_foto_ta&id=<?php echo $rows->id_fta ;?>" class="btn btn-small btn-default"><i class="icon-pencil"></i> edit</a>&nbsp;&nbsp;
                    <a onclick="return conDelete();" href="admin.php?mod_apps=foto&media_app=foto_ta&action=hapus_foto_ta&id=<?php echo $rows->id_fta;?>" class="btn btn-small btn-danger"><i class="icon-trash"></i> remove</a>

                </div>
                <?php $no++; } ?>
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
