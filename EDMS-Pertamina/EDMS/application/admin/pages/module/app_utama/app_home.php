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
?>
<link rel="stylesheet" href="<?php echo APP_CSS;?>swipebox.css">
<link rel="stylesheet" href="<?php echo APP_CSS;?>style.css">
<script src="<?php echo APP_JS;?>jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
            $(".swipebox").swipebox();
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').animate({scrollTop:70}, 1000);
	});
});
</script>
<div class="row">
    <div class="span12">
          <div class="blockoff-left">
                <?php
                $tujuh_hari = gmdate("Y-m-d", time()+(60*60*7) + (24*60*60*7));
                $sekarang   = date("Y-m-d");
                ?>
                    <h3 class="text-info">JADWAL PETUGAS <i>ON CALL</i></h3>
                    <p>Daftar petugas On Call Minggu ini. Hari <?php echo date_now($sekarang);?> sampai tanggal <?php echo tanggal($tujuh_hari);?>.
                         <a href="system/function/download/media_konten.php?type=excel&mod_app=app_oncall&periode=this_week" class="btn btn-small btn-success">Download</a></p>



                <?php
                $query      = $ARSql->query("SELECT * FROM jadwal_oncall WHERE tanggal BETWEEN '$sekarang' AND '$tujuh_hari' ORDER BY tanggal ASC");
                $jumlah     = $ARSql->numRows($query);
                if($jumlah > 0 ) { ?>
                <ul id="slideoncall">
                    <?php
                    while ($rowOC = $ARSql->mf_object($query)) {
                    $petugas = $ARSql->getOne('petugas_oncall','id_petugas',$rowOC->id_petugas);
                    ?>
                    <li><a href="<?php echo APP_FOTO_OC.$petugas->foto;?>" class="b-link-stripe b-animate-go swipebox" title="<?php echo ucwords($petugas->nama);?> - Untuk tanggal <?php echo tanggal($rowOC->tanggal);?>"><img style="height:200px; border-radius: 10px; border: 5px solid #e5e5e5" class="img-responsive women" src="<?php echo APP_FOTO_OC.'medium_'.$petugas->foto;?>" alt=""></a>
                    <div class="hide-in" style="text-align: center">
                    <p ><?php echo $petugas->nama;?></p>
                    <span>Tanggal <?php echo tanggal($rowOC->tanggal);?></span>
                    </div></li>
                    <?php } ?>
                </ul>
                <?php
                } else {
                    echo "<h2>Belum ada jadwal</h2>";
                }
                ?>
            <script type="text/javascript">
    $(window).load(function() {
            $("#slideoncall").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 5000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                    portrait: {
                            changePoint:480,
                            visibleItems: 1
                    },
                    landscape: {
                            changePoint:640,
                            visibleItems: 2
                    },
                    tablet: {
                            changePoint:768,
                            visibleItems: 3
                    }
            }
        });

    });
</script>
	<script type="text/javascript" src="<?php echo APP_JS;?>jquery.flexisel.js"></script>
		</div>
    </div>
    <div class="span4 wow fadeInLeft" data-wow-delay="1.2s">
        <div class="blockoff-right">
            <legend class="lead">
                Download
            </legend>
            <ul id="person-list" class="nav nav-list" style="border-radius: 10px;">
                <?php
                //Menampilkan Bulan 1 - 12
                $tahun = date("Y");
                $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                for ($i=1; $i<=12; $i++) {
                    $bl = ($i<10) ? "$i" : $i;
                    $blv = ($i<10) ? "0$i" : $i;
                    $bs = date("m");
                    if($bl==$bs) { $s= 'style="font-weight: bold"'; } else { $s='';}
                    echo "<li $s><a href='system/function/download/media_konten.php?type=excel&mod_app=app_oncall&periode=this_month&bulan=$blv&tahun=$tahun'><i class='icon-calendar'></i> Bulan $bulan[$bl] &nbsp;- &nbsp;".$tahun."</a></li>";
                }
                ?>
            </ul>
            </div>
    </div>
</div>
<br>
<div class="row">
    <div class="span8">
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
            <br>
            <a href="admin.php?mod_apps=info&media_app=agenda_rapat" class="btn btn-sm btn-info"><i class="icon-download-alt"></i> &nbsp;Download agenda</a>&nbsp;&nbsp;
            <a href="admin.php?mod_apps=info&media_app=agenda_rapat" class="btn btn-sm btn-default"><i class="icon-calendar"></i> &nbsp;Semua agenda</a>&nbsp;&nbsp;

        </div>
    </div>
    <div class="span8">
        <div class="box wow zoomInRight" data-wow-delay="0.9s">
        <div class="box-header">
            <i class="icon-globe"></i>
            <h5>Link Web Favorit</h5>
            <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-coll">
                <i class="icon-reorder"></i>
             </button>
        </div>
            <div class="box-coll">
        <div class="box-content bg-info">
            <ul id="person-list" class="nav nav-list" style="border-radius: 10px;">
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.pertamina.com (Web resmi pertamina pusat)<span class="pull-right"><i class="icon-external-link"></i></span></a></li>
                <li class="divider"></li>
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.perpustakaan.com (Web Perpustakaan pertamina) <span class="pull-right"><i class="icon-external-link"></i></span></a></li>
                <li class="divider"></li>
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.e-correspondence.com (Web E-correspondence) <span class="pull-right"><i class="icon-external-link"></i></span></a></li>
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.pms-online.com (Web PMS Online) <span class="pull-right"><i class="icon-external-link"></i></span></a></li>
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.intranet.com (Web intranet RU VI) <span class="pull-right"><i class="icon-external-link"></i></span></a></li>
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.gratifikasi.com (Web Gratifikasi) <span class="pull-right"><i class="icon-external-link"></i></span></a></li>
                <li><a hre=""><i class="icon-globe"></i> &nbsp;www.rrd.com (Web RRD) <span class="pull-right"><i class="icon-external-link"></i></span></a></li>

            </ul>
        </div>
            </div>
    </div>
    </div>
</div>
<br>