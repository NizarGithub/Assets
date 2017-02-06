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
		$('html, body').delay(3000).animate({scrollTop:535}, 1500);
	});
});
</script>
<div class="row">
    <div class="span16">
          <div class="blockoff-left">
                <?php
                $tujuh_hari = gmdate("Y-m-d", time()+(60*60*7) + (24*60*60*7));
                $sekarang   = date("Y-m-d");
                ?>
                    <h2 class="text-info">Daftar Petugas On Call :</h2>
                    

                <?php
                $query      = $ARSql->query("SELECT * FROM petugas_oncall ORDER BY nama ASC");
                $jumlah     = $ARSql->numRows($query);
                if($jumlah > 0 ) { ?>
                <ul id="slideoncall">
                    <?php
                    while ($rowOC = $ARSql->mf_object($query)) {
                    $petugas = $rowOC;
                    ?>
                    <li><a href="<?php echo APP_FOTO_OC.$petugas->foto;?>" class="b-link-stripe b-animate-go swipebox" title="<?php echo ucwords($petugas->nama);?> - Untuk tanggal <?php echo tanggal($rowOC->tanggal);?>"><img style="height:200px; border-radius: 10px; border: 5px solid #e5e5e5" class="img-responsive women" src="<?php echo APP_FOTO_OC.'medium_'.$petugas->foto;?>" alt=""></a>
                    <div class="hide-in" style="text-align: center">
                    <p ><?php echo $petugas->nama;?></p>
                    <span><?php echo $petugas->email;?></span>
                    </div></li>
                    <?php } ?>
                </ul>
                <?php
                } else {
                    echo "<h2>Belum ada petugas</h2>";
                }
                ?>
            <script type="text/javascript">
    $(window).load(function() {
            $("#slideoncall").flexisel({
                    visibleItems: 4,
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
</div>
<div class="row">
    <div class="span16">
                <div class="table-responsive" data-pattern="priority-columns">
                <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-hover tablesorter">
                    <thead>
                        <tr style="background: #a1e1a6; border-bottom: 3px solid #89ce8f">
                            <th style='border-radius: 5px 0px 0px 0px;' width="5%">#</th>
                            <th data-priority="1">Nama Petugas</th>
                            <th data-priority="1">Tanggal</th>
                            <th width="20%" data-priority="1">Keterangan</th>
                             <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;'  width='10%' data-priority='3'>Action</th>";
                             }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel = $ARSql->getAll('jadwal_oncall','id_jadwal','DESC');
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($qLevel)) {
                            if($no%2=='1') {
                                $bgrows = "style='background: #fff'";
                            } else {
                                $bgrows = "style='background: #d6fad9'";
                            }
                            $datenow  = date("Y-m-d");
                            $dateline = $rows->tanggal;
                            $selisih  = dateLine($datenow, $dateline);
                            if($selisih=='0') {
                                $tdtabel = "style='background: #6bafee; color: #fff'";
                                $stat_tanggal = "<strong>".tanggal($rows->tanggal)."</strong> <span class='pull-right'><small>Sekarang / hari ini</small></span>";
                            } else if($selisih > 0) {
                                $tdtabel = "style='background: #84f7a7;'";
                                $stat_tanggal = "".tanggal($rows->tanggal)."<span class='pull-right'><small>".$selisih." hari mendatang</small></span>";
                            } else {
                                $tdtabel = "style='background: #f98d94;'";
                                $stat_tanggal = "<strike>".tanggal($rows->tanggal)."</strike> <span style='background: #ee1919' class='pull-right badge badge-important blink'> !</span>";
                            }
                            $petugas = $ARSql->getOne('petugas_oncall','id_petugas',$rows->id_petugas);
                            if(LEVEL_USER=='1'){
                        echo "<tr $bgrows>
                            <td style='background: #fff'>$no.</td>
                            <td>".$petugas->nama."</td>"
                            . "<td $tdtabel>".$stat_tanggal."</td>
                            <td><a class='line_edit' data-rel='keterangan' data-type='textarea' title='Edit Keterangan' id='".$rows->id_jadwal."'>$rows->keterangan</a></td>
                            <td class='td-actions'>
                                <a href='admin.php?mod_apps=info&media_app=jadwal_oncall&action=edit_jadwal&id=".$rows->id_jadwal."'>
                                    <img src='".APP_IKON."b_edit.png'>
                                </a>&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=info&media_app=jadwal_oncall&action=hapus_jadwal&id_jadwal=".$rows->id_jadwal."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                            }else{
                                echo "<tr $bgrows>
                            <td>$no.</td>
                            <td>".$petugas->nama."</td>"
                            . "<td>".tanggal($rows->tanggal)."</td>
                            <td>$rows->keterangan</td>
                        </tr>"; 
                            }
                        $no++;   
                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
       $.fn.editable.defaults.mode = 'popup';
       $('.line_edit').editable();
       $(document).on('click','.editable-submit',function(){
            var f = $(this).closest('td').children('a').attr('data-rel');
            var x = $(this).closest('td').children('a').attr('id');
            var y = $('.input-sm').val();
            var z = $(this).closest('td').children('a');
           $.ajax({
               url: "<?php echo APP_INFO ."apps/jadwal_oncall/";?>editable.php?field="+f+"&id="+x+"&data="+y,
               type: "GET",
               success: function(s) {
                   if(s=='status') {
                       $(z).html(y);
                   }
                   if(s=='error') {
                       alert('Galat...pada saat proses penyimpanan.');
                   }
               },
                error: function(e) {
                    alert('Galat...pada saat proses penyimpanan.');
                }                
           });
       });
    });
</script>