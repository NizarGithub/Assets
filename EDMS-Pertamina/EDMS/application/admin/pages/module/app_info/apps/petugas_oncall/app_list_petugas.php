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
<script src="<?php echo APP_JS;?>jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
            $(".swipebox").swipebox();
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(1000).animate({scrollTop:130}, 700);
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
        <div class="row">
            <div class="span16">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font  table-striped">
                                <thead>
                                   <tr style="background: #faf798; border-bottom: 3px solid #e5e173">
                                      <th style='border-radius: 5px 0px 0px 0px;' width="4%">#</th>
                                      <th width="15%" data-priority="1">Foto</th>
                                      <th width="25%" data-priority="1">Info Petugas</th>
                                      <th width="18%" data-priority="3">Email</th>
                                      <th data-priority="3">No. HP</th>
                                      <th width="20%"data-priority="3">Jabatan</th>
                                       <?php
                             if(LEVEL_USER=='1'){
                             echo"<th style='border-radius: 0px 10px 0px 0px;'  width='10%' data-priority='3'>Tindakan</th>";
                             }else{
                             echo"<th style='border-radius: px 10px 0px 0px;'  width='5%' data-priority='3'>View</th>";
                             }
                              ?>
                                   </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    $qUserList = $ARSql->getAll('petugas_oncall','nama','ASC');
                                    while ( $dUserList = $ARSql->mf_object($qUserList)) {
                                        $dLevel = $ARSql->getOne('group_pegawai','id_group',$dUserList->id_group);
                                        if($dUserList->aktif=='Y') {
                                            $blokir = "<span class='badge badge-success '>Aktif</span>";
                                        } else {
                                            $blokir = "<span class='badge badge-important '>No aktif</span>";
                                        }
                                        if($no%2=='1') {
                                            $bgrows = "style='background: #f9f9f9'";
                                        } else {
                                            $bgrows = "style='background: #fff'";
                                        }
                                        $level = "$dLevel->nama";
                                        if($dUserList->aktif=='Y') {
                                            $status = "<span class='badge badge-success'>Sedang On Call</span>";
                                        } else {
                                            $status = "<span class='badge badge-important'>Off Call</span> <br><a href='admin.php?mod_apps=info&media_app=petugas_oncall&action=aktif_petugas&id=$dUserList->id_petugas' class='btn btn-small btn-default' style='margin-top: 5px;'>Aktifkan on call</a>";
                                        }
                                        
                                        if(LEVEL_USER=='1'){
                                        echo "<tr $bgrows>
                                                <td>$no.</td>
                                                <td><a class='b-link-stripe b-animate-go  swipebox' title='".$dUserList->nama."' href='uploaded/foto_petugas_oncall/".$dUserList->foto."'><img class='foto' src='uploaded/foto_petugas_oncall/medium_".$dUserList->foto."'>
                                                </td>
                                                <td>Nama lengkap : ".$dUserList->nama."<br>
                                                <p>Kantor : ".$dUserList->kantor."</p><br>
                                                <p>Status : ".$status."</p><br>

                                                </td>
                                                <td><a class='line_edit' data-rel='email'  title='Edit E-mail' id='".$dUserList->id_petugas."'>$dUserList->email</a></td>
                                                <td><a class='line_edit' data-rel='no_telp'  title='Edit No. Telpon' id='".$dUserList->id_petugas."'>$dUserList->no_telp</td>
                                                <td>$level</td>
                                                <td class='td-actions'>
                                                    <a href='admin.php?mod_apps=info&media_app=petugas_oncall&action=detail_petugas&id=".$dUserList->id_petugas."'>
                                                        <img src='".APP_IKON."eye.png'>
                                                    </a>&nbsp;&nbsp;
                                                    <a href='admin.php?mod_apps=info&media_app=petugas_oncall&action=edit_petugas&id=".$dUserList->id_petugas."'>
                                                        <img src='".APP_IKON."b_edit.png'>
                                                    </a>&nbsp;&nbsp;
                                                    <a onclick='return conDelete();' href='admin.php?mod_apps=info&media_app=petugas_oncall&action=hapus_petugas&id=".$dUserList->id_petugas."'>
                                                        <img src='".APP_IKON."b_drop.png'>
                                                    </a>

                                                </td>
                                        </tr>";
                                        }else{
                                                echo "<tr>
                                                <td>$no.</td>
                                                <td><img class='foto' src='uploaded/foto_petugas_oncall/medium_".$dUserList->foto."'>
                                                </td>
                                                <td>Nama lengkap : ".$dUserList->nama."<br>
                                                <p>Kantor : ".$dUserList->kantor."</p><br>
                                                <td>$dUserList->email</td>
                                                <td>$dUserList->no_telp</td>
                                                <td>$level</td>
                                                <td class='td-actions' style='text-align: center'>
                                                    <a href='admin.php?mod_apps=info&media_app=petugas_oncall&action=detail_petugas&id=".$dUserList->id_petugas."'>
                                                        <img src='".APP_IKON."eye.png'>
                                                    </a>&nbsp;
                                                </td>
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
               url: "<?php echo APP_INFO ."apps/petugas_oncall/";?>editable.php?field="+f+"&id="+x+"&data="+y,
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