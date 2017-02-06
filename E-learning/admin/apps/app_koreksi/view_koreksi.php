<?php
    $id_tq = $_GET['id_topik'];
    $qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
    $dujian = mysql_fetch_object($qujian);
    $qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dujian->id_matapelajaran'");
    $dmapel = mysql_fetch_object($qmapel);
    $id_kelas = explode(",",$dujian->id_kelas);
    ?>
<div id="app_header">
            <div class="warp_app_header">		
                <div class="app_title">Informasi Ujian</div>
                                <div class="app_link">			
                <a href="index.php?app=tujian&id=<?php echo $dmapel->id_matapelajaran;?>" class="btn btn-default"><i class="icon-reply"></i> Kemblai</a>
                </div>
            </div>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr  class="success" width="20%">
            <td>Nama Mata Pelajaran</td><td><?php echo $dmapel->nama;?></td>
        </tr>
        <tr>
            <td class="row-title">Nama Ujian</td><td><?php echo $dujian->judul;?></td>
        </tr>
        <tr>
            <td>Kelas yang mengikuti ujian</td><td>
            <?php
            foreach($id_kelas as $dkelas) {
                $nkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$dkelas'");
                $nkelas1 = mysql_fetch_object($nkelas);
                echo "<span class='label label-success'>$nkelas1->nama</span>&nbsp;&nbsp;";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td class="row-title">Durasi ujian</td><td><?php echo $dujian->waktu_pengerjaan / 60; ;?> menit</td>
        </tr>
        <tr >
            <td>Keterangan ujian</td><td><?php echo $dujian->info ;?></td>
        </tr>

        </thead>
    </table>

<div id="app_header">
            <div class="warp_app_header">		
                <div class="app_title">Informasi Peserta Ujian</div>
            </div>
    </div>
 <table class= "data table-bordered">
        <thead>
            <tr>								  	
                <th style="width:15% !important;">Nama Kelas</th>	
                <th style="width:25% !important;">Jumlah Peserta Ujian</th>
                 <th style="width:10% !important;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
         <?php
    $id_tq = $_GET['id_topik'];
    $qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
    $dujian = mysql_fetch_object($qujian);
    $id_kelas = explode(",",$dujian->id_kelas);
    foreach ($id_kelas as $dkelas) {
    ?>
            <tr><td>
             <?php
                $nkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$dkelas'");
                $nkelas1 = mysql_fetch_object($nkelas);
                echo "<span class='label label-success'>$nkelas1->nama</span>&nbsp;
            
          
                </td>
                <td>";
                 
               $siswa=  mysql_query("SELECT * FROM siswa WHERE id_kelas='$dkelas'");
               $jsiswa = mysql_num_rows($siswa);
               if($jsiswa > 0) {
                   echo "Ada <span class='badge badge-info' style='background-color: #3a87ad;'>".$jsiswa."</span> Siswa</td>";
                   echo "<td><a class='openapp class='xedit tips' data-rel='nama' title='Lihat informasi lebih rinci' href='index.php?app=koreksi&act=detail&idq=$id_tq&idk=$dkelas'><i class='icon-external-link-sign'></i> Rincian dan koreksi</a></td>";
               } else {
                   echo "<b class='text-danger'>Belum ada siswa pada kelas ini</b></td>";
                   echo "<td>...</td>";
               }
               echo "</tr>";
                ?>
                    <?php
             } 
             ?>
        </tbody>			
    </table>