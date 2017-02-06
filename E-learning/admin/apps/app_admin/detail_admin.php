<?php
$id = $_GET['id'];
$a = mysql_query("SELECT * FROM admin WHERE id_admin='$id'");
$b = mysql_fetch_object($a);
?>
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Rincian informasi admin</div>
			<div class="app_link">
			<button onclick="window.location='?app=admin&act=edit&id=<?php echo $id;?>';" class="btn btn-success" title="Simpan dan keluar" value="Next"><i class="icon-pencil"></i>  Edit data</button>	
				<a class="danger btn btn-default" href="?app=admin" title="Batal"><i class="icon-remove-sign"></i> Kembali</a>
			</div>
		</div>			 
	</div>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data Informasi Admin</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama guru">Nama Lengkap</td>
                                    <td>
                                        <?php echo $b->nama_lengkap;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Nama guru">Alamat Lengkap</td>
                                    <td>
                                        <?php echo $b->alamat;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Tempat lahir">Tempat Lahir</td>
                                    <td>
                                        <?php echo $b->tempat_lahir;?></td>
				</tr>
                               <tr>
                                    <td class="row-title"><span class="tips" title="Tempat Tgl Lahir">Tempat Tgl Lahir</td>
                                    <td>
                                        <?php echo $b->tempat_lahir.",". tgl_indo($b->tgl_lahir);?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Jenis kelamin">Jenis kelamin</td>
                                    <td>
                                        <?php 
                                        if($b->jenis_kelamin=='L') { ?>
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
                                            <?php echo $b->no_telp;?></td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Agama">Agama</td>
                                        <td>
                                            <?php echo $b->agama;?>
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
			<h5>Data Akun Admin</h5>
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
            if($b->foto=='') {
                echo "<img src='assets/Images/contoh.png' alt='...'>";
            }
            else {
               echo "<img src='../Foto/admin/$b->foto' alt='...'>"; 
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
                                        <?php echo $b->email;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Website, blog atau link media sosial">Website</td>
                                    <td>
                                        <?php echo $b->website;?></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <?php 
                                                    if($b->blokir=='N') { ?>
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