<?php
$id = $_GET['id'];
$qguru = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$id'");
$dguru = mysql_fetch_object($qguru);
?>
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Rincian informasi guru / pengajar</div>
			<div class="app_link">
			<button onclick="window.location='?app=guru&act=edit&id=<?php echo $id;?>';" class="btn btn-success" title="Simpan dan keluar" value="Next"><i class="icon-pencil"></i>  Edit data</button>	
				<a class="danger btn btn-default" href="?app=guru" title="Batal"><i class="icon-remove-sign"></i> Kembali</a>
			</div>
		</div>			 
	</div>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data Informasi Guru</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="NIP" width="40%">NIP</td>
                                    <td>
                                        <?php echo $dguru->nip;?>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama guru">Nama Lengkap</td>
                                    <td>
                                        <?php echo $dguru->nama_lengkap;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Nama guru">Alamat Lengkap</td>
                                    <td>
                                        <?php echo $dguru->alamat;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Tempat lahir">Tempat Lahir</td>
                                    <td>
                                        <?php echo $dguru->tempat_lahir;?></td>
				</tr>
                                <tr>
                                    <td class="row-title">Tanggal Lahir</td>
                                    <td>
                                        
                                        <?php echo tgl_indo($dguru->tgl_lahir);?>
                                    </td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Jenis kelamin">Jenis kelamin</td>
                                    <td>
                                        <?php 
                                        if($dguru->jenis_kelamin=='L') { ?>
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
                                        <td class="row-title"><span class="tips" title="Nomor Telepon">No. Telepon</td>
                                        <td>
                                            <?php echo $dguru->no_telp;?></td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Agama">Agama</td>
                                        <td>
                                            <?php echo $dguru->agama;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Jabatan">Jabatan</td>
                                        <td>
                                            <?php echo $dguru->jabatan;?></td>
                                    </tr>
				</tr>
			</table>			
		</div>  
	</div>
</div>
<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Data Akun Guru</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Unggah foto profil">Foto Profil</td>
                                    <td>
                                        <div class='control-group'>
                <div class='controls'><br>
        
        <div class='fileinput fileinput-new' data-provides='fileinput'>
                    <div class='fileinput-new thumbnail' style='max-width: 250px; max-height: 250px;'>
            <?php
            if($dguru->foto=='') {
                echo "<img src='assets/Images/contoh.png' alt='...'>";
            }
            else {
               echo "<img src='../Foto/pengajar/$dguru->foto' alt='...'>"; 
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
                                        <?php echo $dguru->email;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Website, blog atau link media sosial">Website</td>
                                    <td>
                                        <?php echo $dguru->website;?></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <?php 
                                                    if($dguru->blokir=='N') { ?>
                                                    <label for="radio1" class="cb-enable selected "><span>Aktif</span></label>
                                                    <?php } else { ?>
                                                    <label for="radio2" class="cb-disable selected"><span>Tidak </span></label>
                                                    <?php } ?>
                                        </td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  