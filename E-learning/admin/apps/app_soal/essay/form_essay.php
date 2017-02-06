<script src="assets/files/js/files.upload.min.js"></script>
<form enctype="multipart/form-data" method="post" action="">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Tambah soal isian baru</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="sbaru"><i class="icon-ok"></i> Simpan</button>				
				<button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="skeluar"><i class="icon-ok-sign"></i> Simpan dan keluar</button>	
				<a class="danger btn btn-default" href="?app=soal&act=add_soal_essay&id_topik=<?php echo $_GET['id_topik'] ;?>" title="Batal"><i class="icon-reply"></i> Lihat Soal</a>
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
			<?php 
			$qna = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$_GET[id_topik]'");
			$jna = mysql_num_rows($qna) + 1;
			?>
			<h5>Pertanyaan Nomor <?php echo $jna;?></h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td>
                                        <input type="hidden" name="id_tq" value="<?php echo $_GET['id_topik'];?>">
                                        <textarea id="editor" name="pertanyaan" style="width: 100%" required ></textarea></td>
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
            <img src='assets/Images/contoh.png' alt='...'>
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
						<p class="switch">
                                                    <input id="radio1" value="Y" name="aktif" type="radio" checked class="invisible">
                                                    <input id="radio2" value="N " name="aktif" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak </span></label>
                                                </p>
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
if(isset($_POST['sbaru'])) {
    $id_tq = $_POST['id_tq'];
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
        move_uploaded_file($lokasi_file, $direktori_file);
        mysql_query("INSERT INTO quiz_esay VALUES('','$id_tq','$pertanyaan','$nama_file','$tgl','esay','$status')");
    }
    else {
        mysql_query("INSERT INTO quiz_esay VALUES('','$id_tq','$pertanyaan','','$tgl','esay','$status')");
    }
    
    header('location:?app=soal&act=form_essay&id_topik='.$id_tq);
}
else if(isset($_POST['skeluar'])) {
    $id_tq = $_POST['id_tq'];
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
        move_uploaded_file($lokasi_file, $direktori_file);
        mysql_query("INSERT INTO quiz_esay VALUES('','$id_tq','$pertanyaan','$nama_file','$tgl','esay','$status')");
    }
    else {
        mysql_query("INSERT INTO quiz_esay VALUES('','$id_tq','$pertanyaan','','$tgl','esay','$status')");
    }
    
    header('location:index.php?app=soal&act=add_soal_essay&id_topik='.$id_tq);
}
?>