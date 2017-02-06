<?php
$qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_kelas LIKE '%$dsiswa->id_kelas%'");
?>
<div class="container">
<div class="info-grid-main">
                <?php
                while($dmapel = mysql_fetch_object($qmapel)) {
                $qguru = mysql_query("SELECT * FROM pengajar where id_pengajar='$dmapel->id_pengajar'");
                $dguru = mysql_fetch_array($qguru);
                ?>



                <div class="col-md-4 info-grids-cr wow bounceIn" data-wow-delay="0.4s">
                    <div class="info-top" style="background: #008FD5; color: #f8f8f8">
                            <h3 style="text-transform: uppercase; color: #fff"><?php echo $dmapel->nama ;?><span class="gd-clr"></span> </h3>
                    </div>
                    <div class="info-bott">
                        <img src="Foto/pengajar/<?php echo $dguru['foto'];?>" style="width: 100%; max-height: 200px;">
                        <p>Nama pengajar : <b><?php echo $dguru['nama_lengkap'];?></b><br>
                        Alamat lengkap : <b><?php echo $dguru['alamat'];?></b><br>
                        Alamat website : <b><?php echo $dguru['website'];?></b>

                        </p>
                        
                    </div>
                    <div class="infogrid-bwn">
                            <a class="btn btn-md- btn-info"href="?app=ujian&act=view_ujian&id_mapel=<?php echo $dmapel->id_matapelajaran;?>">LIHAT UJIAN</a>
                    </div>
            </div>
                <?php } ?>
	</div>
	</div>
<br>
