<?php
$id_essay = $_GET['id'];
$id_topik = $_GET['id_topik'];
$qessay = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz='$id_essay'");
$dessay = mysql_fetch_object($qessay);
?>
<script src="assets/files/js/files.upload.min.js"></script>
<form enctype="multipart/form-data" method="post" action="">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Edit soal isian</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="uhere"><i class="icon-ok"></i> Simpan</button>				
				<button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="uout"><i class="icon-ok-sign"></i> Simpan dan keluar</button>	
				<a class="btn btn-default" href="?app=soal&act=add_soal_essay&id_topik=<?php echo $_GET['id_topik'] ;?>" title="Batal"><i class="icon-reply"></i> Lihat Soal</a>
			</div>
		</div>			 
	</div>
    <script> 
    $(document).ready(function(){	
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
	});	
		
	// username checker
	
});
</script>
<div class="col-md-7">
	<div class="box">								
		<header class="dark">
			<h5>Pertanyaan</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td>
                                        
                                        <input type="hidden" name="id_quiz" value="<?php echo $_GET['id'];?>">
                                        <input type="hidden" name="id_tq" value="<?php echo $_GET['id_topik'];?>">
                                        
                                        <textarea id="editor" name="pertanyaan" style="width: 100%" required ><?php echo $dessay->pertanyaan;?></textarea></td>
				</tr>
			</table>			
		</div>  
	</div>
</div>
<div class="col-md-5">
	<div class="box">								
		<header class="dark">
			<h5>Pertanyaan Lengkap</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Unggah gambar untuk pertanyaan">Gambar Pertanyaan</td>
                                    <td>
                                        <div class='control-group'>
                <div class='controls'><br>
        
        <div class='fileinput fileinput-new' data-provides='fileinput'>
                    <div class='fileinput-new thumbnail' style='width: 250px; height: 250px;'>
                        <?php if($dessay->gambar=='') { ?>
                        <img src='assets/Images/contoh.png' alt='...'>
                        <?php } else { ?>
                        <img src='../Foto/soal_essay/<?php echo $dessay->gambar;?>' alt='...'>
                        <?php } ?>
                        
                 </div><div class='fileinput-preview fileinput-exists thumbnail' style='max-width: 250px; max-height: 250px;'></div>
                <div>
                <span class='btn btn-default btn-file'><span class='fileinput-new'>Pilih foto</span> <span class='fileinput-exists'>Pilih foto</span> 
                    <input type='file' name='fupload' style="cursor: pointer" class="form-control">
                </span> 
                <a href='#' class='btn btn-default fileinput-exists' data-dismiss='fileinput'>Hapus</a> 
                </div>
                </div>
                </div>
        </div>
                                    </td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Pilih Status</td>
					<td style="padding: 5px 10px;">
                                            <?php if($dessay->aktif=='Y') { ?>
                                            <p class="switch">
                                                    <input id="radio1" value="Y" name="aktif" type="radio" checked class="invisible">
                                                    <input id="radio2" value="N " name="aktif" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak </span></label>
                                                </p>
                                            <?php } else { ?>
                                            <p class="switch">
                                                    <input id="radio1" value="Y" name="aktif" type="radio"  class="invisible">
                                                    <input id="radio2" value="N " name="aktif" type="radio" checked class="invisible">
                                                    <label for="radio1" class="cb-enable "><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable selected"><span>Tidak </span></label>
                                                </p> 
                                            <?php } ?>
					</td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>
<script type="text/javascript">
$(function() {
    CKEDITOR.replace('editor');
});
</script>
<?php
if(isset($_POST['uhere'])) {
    $id_tq = $_POST['id_tq'];
    $id_quiz = $_POST['id_quiz'];
    $data = $_POST['pertanyaan'];
    $data = stripslashes($data);
    $pertanyaan = htmlspecialchars($data,ENT_QUOTES);
    $status = $_POST['aktif'];
    $lokasi_file    = $_FILES['fupload']['tmp_name'];
    $tipe_file      = $_FILES['fupload']['type'];
    $nama_file      = $_FILES['fupload']['name'];
    $acak           =  rand(000000,999999);
    $nama_file 	  = "esay_".$acak.'_'.str_replace(" ","_",$nama_file);
    $direktori_file = "../Foto/soal_essay/$nama_file";
    $tgl = date("Y-m-d");
    if(!empty($lokasi_file)) {
        $cek = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz='$id_quiz'");
        $cek1 = mysql_fetch_array($cek);
        if($cek1['gambar']!='') {
            unlink("../Foto/soal_essay/$cek1[gambar]");
        }
        move_uploaded_file($lokasi_file, $direktori_file);
        mysql_query("UPDATE quiz_esay SET pertanyaan='$pertanyaan', gambar='$nama_file', aktif='$status' WHERE id_quiz='$id_quiz'");
    }
    else {
        mysql_query("UPDATE quiz_esay SET pertanyaan='$pertanyaan', aktif='$status' WHERE id_quiz='$id_quiz'");
    }
    
    header('location:index.php?app=soal&act=edit_essay&id='.$id_quiz.'&id_topik='.$id_tq);
}
else if(isset($_POST['uout'])) {
    $id_tq = $_POST['id_tq'];
    $id_quiz = $_POST['id_quiz'];
    $data = $_POST['pertanyaan'];
    $data = stripslashes($data);
    $pertanyaan = htmlspecialchars($data,ENT_QUOTES);
    $status = $_POST['aktif'];
    $lokasi_file    = $_FILES['fupload']['tmp_name'];
    $tipe_file      = $_FILES['fupload']['type'];
    $nama_file      = $_FILES['fupload']['name'];
    $acak           =  rand(000000,999999);
    $nama_file 	  = "esay_".$acak.'_'.str_replace(" ","_",$nama_file);
    $direktori_file = "../Foto/soal_essay/$nama_file";
    $tgl = date("Y-m-d");
    if(!empty($lokasi_file)) {
        $cek = mysql_query("SELECT * FROM quiz_esay WHERE id_quiz='$id_quiz'");
        $cek1 = mysql_fetch_array($cek);
        if($cek1['gambar']!='') {
            unlink("../Foto/soal_essay/$cek1[gambar]");
        }
        move_uploaded_file($lokasi_file, $direktori_file);
        mysql_query("UPDATE quiz_esay SET pertanyaan='$pertanyaan', gambar='$nama_file', aktif='$status' WHERE id_quiz='$id_quiz'");
    }
    else {
        mysql_query("UPDATE quiz_esay SET pertanyaan='$pertanyaan', aktif='$status' WHERE id_quiz='$id_quiz'");
    }
    
    header('location:index.php?app=soal&act=add_soal_essay&id_topik='.$id_tq);
}
?>