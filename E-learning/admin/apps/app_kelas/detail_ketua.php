<?php
$id = $_GET['id'];
$asiswa = mysql_query("SELECT * FROM siswa WHERE id_siswa='$id'");
$bsiswa = mysql_fetch_object($asiswa);
$as = $bsiswa->id_kelas;
$kelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$as'");
$hs = mysql_fetch_object($kelas);
?>
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Rincian informasi Siswa</div>
			<div class="app_link">
			<a class="danger btn btn-default" href="?app=kelas" title="Batal"><i class="icon-remove-sign"></i> Kembali</a>
			</div>
		</div>			 
	</div>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data Informasi Siswa</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="NIS" width="40%">NIS</td>
                                    <td>
                                        <?php echo $bsiswa->nis;?>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama siswa">Nama Lengkap</td>
                                    <td>
                                        <?php echo $bsiswa->nama_lengkap;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Kelas">Kelas</td>
                                    <td>
                                        <?php echo $hs->nama;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Alamat siswa">Alamat Lengkap</td>
                                    <td>
                                        <?php echo $bsiswa->alamat;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Tempat Tgl Lahir">Tempat Tgl Lahir</td>
                                    <td>
                                        <?php echo $bsiswa->tempat_lahir.",". tgl_indo($bsiswa->tgl_lahir);?></td>
				</tr>
                                
                                <tr>
                                    <td class="row-title"><span class="tips" title="Jenis kelamin">Jenis kelamin</td>
                                    <td>
                                        <?php 
                                        if($bsiswa->jenis_kelamin=='L') { ?>
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" checked class="form-control" value="L"> Laki-laki
                                        </label>
                                        <?php 
                                        } else { ?>
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" checked class="form-control" value="P"> Perempuan
                                        </label>
                                        <?php } ?>
                                    </td>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Agama">Agama</td>
                                        <td>
                                            <?php echo $bsiswa->agama;?>
                                        </td>
                                    </tr>
                           
				</tr>
			</table>			
		</div>  
	</div>
</div>
<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Data Akun Siswa</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Unggah foto profil">Foto Profil</td>
                                    <td>
                                        <div class='control-group'>
                <div class='controls'><br>
        
        <div class='fileinput fileinput-new' data-provides='fileinput'>
                    <div class='fileinput-new thumbnail' style='max-width: 175px; max-height: 175px;'>
            <?php
            if($bsiswa->foto=='') {
                echo "<img src='assets/Images/contoh.png' alt='...'>";
            }
            else {
               echo "<img src='../Foto/siswa/$bsiswa->foto' alt='...'>"; 
            }
            
            ?>
                 
                 </div>
                </div>
                </div>
        </div>
                                    </td>
				</tr>
                                
                               
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Email">Email</td>
                                    <td>
                                        <?php echo $bsiswa->email;?></td>
				</tr>
                                 <tr>
                                        <td class="row-title"><span class="tips" title="Nomor Telepon">No. Telepon</td>
                                        <td>
                                            <?php echo $bsiswa->no_telp;?></td>
                                    </tr>
				
			</table>	
		</div>  
	</div> 
</div>  

<div class="col-lg-6 box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data Informasi Wali Siswa</h5>
		</header>								
		<div>
			<table>
                                      
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Nama Ayah">Nama Ayah</td>
                                    <td>
                                        <?php echo $bsiswa->nama_ayah;?></td>
				</tr>
                                 <tr>
                                        <td class="row-title"><span class="tips" title="Nama Ibu">Nama Ibu</td>
                                        <td>
                                            <?php echo $bsiswa->nama_ibu;?></td>
                                    </tr>
				
			</table>	
		</div>  
	</div> 
</div> 