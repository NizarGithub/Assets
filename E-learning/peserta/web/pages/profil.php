<?php
$qsiswa = mysql_query("SELECT * FROM siswa WHERE id_siswa='".$_SESSION['id_siswa']."'");
$dsiswa = mysql_fetch_object($qsiswa);
?>
<script src="assets/files/js/files.upload.min.js"></script>
<form enctype="multipart/form-data" method="post" action="">
	
<div class="container">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title"></div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" name="update"><i class="icon-ok"></i> Simpan</button>	&nbsp;&nbsp;
                               <!-- <button type="submit" class="btn btn-info" title="Simpan dan keluar"name="update_exit"><i class="icon-ok"></i> Simpan dan keluar</button>&nbsp;&nbsp;	
                                -->
				<a class="danger btn btn-default" onclick="self.history.back();" href="#" title="Batal"><i class="icon-reply"></i> Kembali</a>
			</div>
		</div>			 
	</div>

<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5></h5>
		</header>								
		<div>
			<table class="table">
				<tr>
                    <td class="row-title"><span class="tips" title="NIS" width="40%">NIS</td>
                    <td>
                        <input  type="hidden" name="id" value="<?php echo $id;?>">
                        <input readonly class="form-control" value="<?php echo $dsiswa->nis;?>" type="text" id="nis" name="nis" style="width: 100%" required class='form-control'/>
                    </td>
				</tr>
				<tr>
                    <td class="row-title"><span class="tips" title="Nama siswa">Nama Lengkap</td>
                    <td>
                        <input class="form-control" value="<?php echo $dsiswa->nama_lengkap;?>" type="text" name="nama" style="width: 100%" required></td>
				</tr>           
                <tr>
                    <td class="row-title"><span class="tips" title="Tempat lahir">Username</td>
                    <td>
                        <input class="form-control" type="text" value="<?php echo $dsiswa->username_login;?>" name="username" style="width: 100%"></td>
				</tr>
				<tr>
                    <td class="row-title"><span class="tips" title="Tempat lahir">Password</td>
                    <td>
                        <input class="form-control" type="password" name="password" style="width: 100%">
                        <p><small>Jika tidak ingin mengubah password dikosongkan saja</small></p></td>
				</tr>
			</table>			
		</div>  
	</div>
</div>
</div>  

</form>
<?php
if(isset($_POST['update'])) {
	$nama = $_POST['nama'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	if(!empty($pass)) {
		mysql_query("UPDATE siswa SET nama_lengkap='$nama', username_login='$uname', password_login='".md5($pass)."' WHERE id_siswa='$_SESSION[id_siswa]'");
	} else {
		mysql_query("UPDATE siswa SET nama_lengkap='$nama', username_login='$uname' WHERE id_siswa='$_SESSION[id_siswa]'");
	}
	header('location: ?app=profil');
}
?>