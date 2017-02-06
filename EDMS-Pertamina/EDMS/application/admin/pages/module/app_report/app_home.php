<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$slide = APP_CSS.'flexisel.css';
addCss($slide);
$tujuh_hari = gmdate("Y-m-d", time()+(60*60*7) + (24*60*60*7));
$sekarang   = date("Y-m-d");
?>
<link rel="stylesheet" href="<?php echo APP_CSS;?>swipebox.css">
<link rel="stylesheet" href="<?php echo APP_CSS;?>style.css">
<script src="<?php echo APP_JS;?>jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
            $(".swipebox").swipebox();
    });
</script>
<div class="row">
    <div class="span16">
        <div class="box bg-modhome">
            <div class="box-coll">
        <div class="box-content bg-info">
            <div class="row">
                <div class="span8 pull-right">
                    <h3 class="text-info">ON CALL MINGGU INI &nbsp;&nbsp;&nbsp;<span style="padding-top: 10px; font-size: 14px; padding-bottom: 10px;" class="badge badge-info"> <?php echo date_now(date("Y-m-d"));?></span></h3>

                    <?php
                    $jadwal_oncall  = $ARSql->query("SELECT * FROM petugas_oncall WHERE aktif='Y' LIMIT 1");
                    $data_oncall    = $ARSql->mf_object($jadwal_oncall);
                    $jabatan        = $ARSql->getOne('group_pegawai','id_group',$data_oncall->id_group);
                    ?>
                    <div class="area-petugas">
                        <div class="foto-area-petugas">
                            <img align="left" src="uploaded/foto_petugas_oncall/medium_<?php echo $data_oncall->foto;?>">
                            <h3><?php echo $data_oncall->nama;?></h3>
                            <?php
                            echo "<p class='info-tugas'>Jabatan : ".$jabatan->nama."</p>";
                            echo "<p class='info-tugas'>Email : $data_oncall->email</p>";
                            echo "<p class='info-tugas'>Handphone : $data_oncall->no_telp</p>";

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    </div>
<!--<div class="box">
        <div class="box-header">
            <i class="icon-bookmark"></i>
            <h5>Shortcuts Apps</h5>
        </div>
        <div class="box-content bg-info">

        </div>
    </div>-->
    </div>
</div>
<div class="row">
    <div class="span9">
        <div class="blockoff-left wow zoomInLeft" data-wow-delay="0.9s">
            <legend class="lead">
                Jadwal Agenda
            </legend>
            <div class="alert alert-info">
                <p>Daftar jadwal agenda untuk minggu ini, Hari <?php echo date_now($sekarang);?> sampai tanggal <?php echo tanggal($tujuh_hari);?>.</p>
            </div>

            <script src="<?php echo APP_JS;?>ticker.js" type="text/javascript"></script>
            <?php
            $tujuh_agenda = gmdate("Y-m-d", time()+(60*60*7) + (24*60*60*7));
            $now_agenda   = date("Y-m-d");
            $agenda = $ARSql->query("SELECT * FROM agenda WHERE aktif='Y' AND tanggal BETWEEN '$now_agenda' AND '$tujuh_agenda' ORDER BY tanggal ASC");
            $jumlah_agenda = $ARSql->numRows($agenda);
            if($jumlah_agenda > 0 ) { ?>
            <ul id="sekilas">
                <?php
                while($dagenda = $ARSql->mf_object($agenda)) { ?>
                <li>
                    <span class="teks">
                        <img class="agenda-img" align="left" src="<?php echo APP_ICON ;?>agenda.png">
                        <h4 class="text-info topik-agenda"><?php echo $dagenda->topik;?></h4>
                        <p class="tgl-agenda">Tanggal <?php echo tanggal($dagenda->tanggal);?></p>
                        <p class="ket-agenda">Keterangan : <small><?php echo html_entity_decode($dagenda->keterangan);?></small></p><br>

                    </span>
                </li>
                <?php } ?>
            </ul>
            <?php } else { ?>
            <h3 class="text-error">Tidak ada data agenda</h3>
            <?php } ?>
            <br><br>
            <a href="admin.php?mod_apps=info&media_app=agenda_rapat" class="btn btn-sm btn-info"><i class="icon-download-alt"></i> &nbsp;Download agenda</a>&nbsp;&nbsp;
            <a href="admin.php?mod_apps=info&media_app=agenda_rapat" class="btn btn-sm btn-default"><i class="icon-calendar"></i> &nbsp;Semua agenda</a>&nbsp;&nbsp;

        </div>
    </div>
    <div class="span7">
        <div class="box wow zoomInRight" data-wow-delay="0.9s">
        <div class="box-header">
            <i class="icon-picture"></i>
            <h5>Cheeersss...</h5>
            <a href="admin.php?mod_apps=foto"><button class="btn btn-box-right">
                <i class="icon-picture"></i> See all
             </button>
            </a>
        </div>
            <div class="box-coll">
        <div class="box-content bg-info">
            <!-- Responsive slider - START -->
<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
  <div class="slides" data-group="slides">
    <ul>
      <?php
      $query_galeri = $ARSql->query("SELECT * FROM foto_ta WHERE aktif='Y'");
      while($data_galeri = $ARSql->mf_object($query_galeri)) { ?>
      <li>
        <div class="slide-body" data-group="slide">
          <img src="uploaded/foto_TA/<?php echo $data_galeri->foto;?>" style="width: 1300px; height: 250px; border-radius:10px;">
          <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
            <h2></h2>
            <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"></div>
          </div>
          <div class="caption img-html5" data-animate="slideAppearLeftToRight" data-delay="200">

          </div>
          <div class="caption img-css3" data-animate="slideAppearLeftToRight">

          </div>
        </div>
      </li>
      <?php } ?>
      <?php
      $query_galeri1 = $ARSql->query("SELECT * FROM foto_rutin WHERE aktif='Y'");
      while($data_galeri1 = $ARSql->mf_object($query_galeri1)) { ?>
      <li>
        <div class="slide-body" data-group="slide">
          <img src="uploaded/foto_rutin/<?php echo $data_galeri1->foto;?>" style="width: 1300px; height: 250px; border-radius:10px;">
          <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
            <h2></h2>
            <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"></div>
          </div>
          <div class="caption img-html5" data-animate="slideAppearLeftToRight" data-delay="200">

          </div>
          <div class="caption img-css3" data-animate="slideAppearLeftToRight">

          </div>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
  <a class="slider-control left" href="#" data-jump="prev"><</a>
  <a class="slider-control right" href="#" data-jump="next">></a>
  <div class="pages">
    <?php
    $no = 1;
    while($rows = $ARSql->mf_object($query_galeri)) {
    ?>
    <a class="page" href="#" data-jump-to="<?php echo $no;?>"><?php echo $no;?></a>
    <?php $no++;
    } ?>
  </div>
</div>
            <link href="assets/css/responsive-slider.css" rel="stylesheet">
            <script src="assets/js/jquery.event.move.js"></script>
    <script src="assets/js/responsive-slider.min.js"></script>
<!-- Responsive slider - END -->
        </div>
            </div>
    </div>
    </div>
</div>