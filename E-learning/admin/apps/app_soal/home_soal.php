<?php
$id_tq = $_GET['id_topik'];
$qtopik = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
$dtopik = mysql_fetch_object($qtopik);
$jml_soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$dtopik->id_tq'");
$jml_soal_esay1 = mysql_num_rows($jml_soal_esay);
$jml_soal_ganda = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$dtopik->id_tq'");
$jml_soal_ganda1 = mysql_num_rows($jml_soal_ganda);
$total_soal = $jml_soal_esay1 + $jml_soal_ganda1;
if($jml_soal_esay1 > 0) {
    $show_total_esay = "<span class='label label-success'>".$jml_soal_esay1."</span>";
}
else {
    $show_total_esay = "<span class='label label-success'>".$jml_soal_esay1."</span>";
}
if($jml_soal_ganda1 > 0) {
    $show_total_ganda = "<span class='label label-success'>".$jml_soal_ganda1."</span>";
}
else {
    $show_total_ganda = "<span class='label label-success'>".$jml_soal_ganda1."</span>";
}

$qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dtopik->id_matapelajaran'");
$dmapel = mysql_fetch_object($qmapel);
?>

<form id="form" method="GET">
    <div id="app_header" style="margin-bottom: 0px;">
	<div class="warp_app_header">		
		<div class="app_title">Soal <?php echo $dtopik->judul.' - '.$dmapel->nama;?></div>
            <div class="app_link">			
                <a class="btn btn-metis-5" href="index.php?app=koreksi&act=koreksi&id_topik=<?php echo $_GET['id_topik'];?>"><i class="icon-user"></i> Peserta dan koreksi</a>
                <a class="btn btn-default" href="index.php?app=tujian&act&id=<?php echo $dtopik->id_matapelajaran.'&token='.md5($_GET['id_topik']);?>"><i class="icon-reply"></i> Kembali</a>
            </div>
        </div>		
</div>

<div id="app-theme">

		<div class='col-theme active' style="width: 50%" data-name='Curva 2.0'>
			<div class='theme-box'>
                            <div class='theme-image' style="background: url(assets/Images/soal_pg.jpg); background-size: 100% 100%">
					<a name='folder' href="index.php?app=soal&act=daftar_soal_ganda&id_topik=<?php echo $dtopik->id_tq.'&token='.md5($id_tq);?>">
					<span class='theme-img' data-img=''></span>
					<div>
                                            <span> 
                                                Jumlah Soal Pilihan Ganda : 
                                                <?php echo $jml_soal_ganda1;?> soal
                                                
                                            </span>
                                        </div>
					</a>	
				</div>
				<div class='theme-title'>			
					SOAL PILIHAN GANDA <?php echo $show_total_ganda;?>							
                                        <a href="index.php?app=soal&act=daftar_soal_ganda&id_topik=<?php echo $dtopik->id_tq.'&token='.md5($id_tq);?>" class="btn btn-metis-3 right" style="margin-top: -5px; border: none; margin-left:10px">Daftar soal</a>
                                        <a href="index.php?app=soal&act=add_soal_ganda&id_topik=<?php echo $dtopik->id_tq.'&token='.md5($id_tq);?>"  class="btn btn-metis-3 right" style="margin-top: -5px; border: none"><i class="icon-plus-sign"></i>Soal baru</a>
				</div>
			</div>
		</div>
    <div class='col-theme' style="width: 50%" data-name='BluesTrap'>
        <div class='theme-box' style="border: 1px solid #31b0d5">
				<div class='theme-image' style="background: url(assets/Images/soal_essay.jpg); background-size: 100% 100%">
                                    <a name='folder' href="index.php?app=soal&act=add_soal_essay&id_topik=<?php echo $dtopik->id_tq.'&token='.md5($id_tq);?>">
					<span class='theme-img' data-img='assets/Images/soal_essay.jpg'></span>
					<div><span> Jumlah Soal Isian / Esay : 
						<?php echo $jml_soal_esay1;?> soal
					</span></div>
					</a>	
				</div>
				<div class='theme-title' style="background: #31b0d5; color: #f9f9f9">			
					SOAL ISIAN ESAY  <?php echo $show_total_esay;?>						
                                        <a href="index.php?app=soal&act=add_soal_essay&id_topik=<?php echo $dtopik->id_tq.'&token='.md5($id_tq);?>" class="btn btn-primary right" style="margin-top: -5px; border: none; margin-left:10px">Daftar soal</a>
                                        <a href="index.php?app=soal&act=form_essay&id_topik=<?php echo $dtopik->id_tq.'&token='.md5($id_tq);?>" class="btn btn-primary right" style="margin-top: -5px; border: none"><i class="icon-plus-sign"></i>Soal baru</a>
				</div>
				<span class='invisible'></span>
			</div>
		</div>
</div>
</form>
<script type="text/javascript">	
$(function() {		
	var hash = $('.theme-img[data-img]').attr('data-img');
	$.ajax({
		url: hash ,
		type : 'GET',
		timeout: 5000, 
		error:function(data){
			$('.theme-img[data-img]').prepend(function(){
				var img = $(this).find("img") ;
				if(img.length > 0) img.remove();
				var hash = $(this).attr('data-img')
				return ''; 
			});	
		},
		success: function(data){
			$('.theme-img[data-img]').prepend(function(){
				var img = $(this).find("img").length ;
				if(img.length > 0) img.remove();
				var hash = $(this).attr('data-img')
				return '<img  alt="" src=" '+ hash + '">';
			});
		}
	});	
        });
        </script>
        
<?php
    $id_tq = $_GET['id_topik'];
    $qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
    $dujian = mysql_fetch_object($qujian);
    $qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dujian->id_matapelajaran'");
    $dmapel = mysql_fetch_object($qmapel);
    $id_kelas = explode(",",$dujian->id_kelas);
    ?>
    <table class="table table-striped table-condensed">
        <thead>
        <tr  class="success" width="20%">
            <td>Nama Mata Pelajaran</td><td>:</td><td><?php echo $dmapel->nama;?></td>
        </tr>
        <tr>
            <td class="row-title">Nama Ujian</td><td>:</td><td><?php echo $dujian->judul;?></td>
        </tr>
        <tr>
            <td>Kelas yang mengikuti ujian</td><td>:</td><td>
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
            <td class="row-title">Durasi ujian</td><td>:</td><td><?php echo $dujian->waktu_pengerjaan / 60; ;?> menit</td>
        </tr>
        <tr >
            <td>Keterangan ujian</td><td>:</td><td><?php echo $dujian->info ;?></td>
        </tr>

        </thead>
    </table>
