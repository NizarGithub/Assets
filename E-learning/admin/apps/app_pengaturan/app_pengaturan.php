<script src="assets/files/js/files.upload.min.js"></script>
<form enctype="multipart/form-data" method="post" action="">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Pengaturan Umum</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="update"><i class="icon-ok"></i> Simpan</button>				
				<a class="btn btn-default" onclick="self.history.back();" href="#" title="Batal"><i class="icon-reply"></i> Kembali</a>
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
			
			<h5>Informasi sekolah</h5>
		</header>								
		<div>
			<table>
                <tr>
                    <td class="row-title">Nama sekolah</td>
                    <td>
                    	<input name="sekolah" type="text" class="form-control" value="<?php echo $apps->nama_sekolah;?>">
                    </td>
                        
				</tr>
				<tr>
                    <td class="row-title">Kepala sekolah</td>
                    <td>
                    	<input type="text" name="kepala" class="form-control" value="<?php echo $apps->kepala_sekolah;?>">
                    </td>
                        
				</tr>
			</table>				
		</div>  
		
	</div>
	<br>
	<a class="btn btn-primary btn-lg"  href="system/download.php?act=backup&token=<?php echo md5("admin");?>" title="Batal"><i class="icon-download"></i> Backup database</a>
			
</div>
<div class="col-md-5">
	<div class="box">								
		<header class="dark">
			<h5>Favicon aplikasi</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Unggah gambar untuk favicon">Gambar Favicon</td>
                                    <td>
                                        <div class='control-group'>
                <div class='controls'><br>
        
        <div class='fileinput fileinput-new' data-provides='fileinput'>
                    <div class='fileinput-new thumbnail' style='max-width: 250px; max-height: 250px;'>
            <?php
            if($apps->favicon=='') {
            echo "<img src='assets/Images/contoh.png' alt='...'>";
            } else {
				echo "<img src='../Foto/favicon/$apps->favicon' alt='...'>";
			}
            
            ?>
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
			</table>	
		</div>  
	</div> 
</div>  
</form>
<?php
if(isset($_POST['update'])) {
    $sekolah = $_POST['sekolah'];
    $kepala = $_POST['kepala'];
    $lokasi_file    = $_FILES['fupload']['tmp_name'];
    $tipe_file      = $_FILES['fupload']['type'];
    $nama_file      = $_FILES['fupload']['name'];
    $acak           =  rand(000000,999999);
    $nama_file 	  = "esay_".$acak.'_'.str_replace(" ","_",$nama_file);
    $direktori_file = "../Foto/favicon/$nama_file";
    if(!empty($lokasi_file)) {
    	unlink("../Foto/favicon/$apps->favicon");
        move_uploaded_file($lokasi_file, $direktori_file);
        mysql_query("UPDATE pengaturan SET nama_sekolah='$sekolah', kepala_sekolah='$kepala', favicon='$nama_file' WHERE id_setelan='1'");
    }
    else {
        mysql_query("UPDATE pengaturan SET nama_sekolah='$sekolah', kepala_sekolah='$kepala' WHERE id_setelan='1'");
    }
    
    header('location:?app=pengaturan');
}
?>